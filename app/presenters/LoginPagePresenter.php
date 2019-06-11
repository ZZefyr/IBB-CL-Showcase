<?php
namespace App\Presenters;
use Nette;
use Nette\Application\UI\Form;

class LoginPagePresenter extends BasePresenter
{
	private $login;
	protected function createComponentLoginForm()
	{
		$form = new Form;
		$form->addText('user_email', 'E-mail:')
			->setRequired('Prosím vyplňte e-mail.');
		$form->addPassword('user_pw', 'Heslo:')
			->setRequired('Prosím vyplňte heslo.');
		$form->addSubmit('login', 'Přihlásit');
		$form->onSuccess[] = [$this, 'loginFormSucceeded'];
		return $form;
	}
	// volá se po úspěšném odeslání formuláře
	public function loginFormSucceeded($form, $values)
	{
		try
		{
			$this->getUser()->login($values->user_email, $values->user_pw);
			$this->flashMessage('Úspěšně přihlášen.', 'alert-success alert-dismissible');
			$this->redirect('Admin:');
		}
		catch (Nette\Security\AuthenticationException $e) {
			$this->flashMessage('Uživatelské jméno nebo heslo je nesprávné', 'alert-danger alert-dismissible');
		}
	}
        
        public function actionOut()
       {
        $this->getUser()->logout();
        $this->flashMessage('Odhlášení bylo úspěšné.', 'alert-info alert-dismissible');
        $this->redirect('LoginPage:');
        }
}