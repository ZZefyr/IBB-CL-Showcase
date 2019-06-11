<?php

namespace App\Presenters;
use Nette;
use Nette\Application\UI\Form;
use Nette\Security\Passwords;

class RegisterPresenter extends BasePresenter {
    
    public function renderDefault(){
        $this->loginCheck();
        $this->adminCheck();
      }
    protected function createComponentRegistrationForm()
    {
        $form = new Form;
        $form->addText('user_name', 'Jméno:')
        ->setRequired('Prosím vyplňte jméno a příjmení.');
        $form->addText('user_email', 'E-mail:')
        ->setRequired('Prosím vyplňte e-mail.');
        $form->addPassword('user_pw', 'Heslo:')
        ->setRequired('Prosím vyplňte heslo.');
        $form->addPassword('user_pw_check', 'Heslo:')
        ->setRequired('Prosím vyplňte heslo pro kontrolu.')
        ->addRule(Form::EQUAL, 'Zadaná hesla se neshodují', $form['user_pw']);
        $form->addSubmit('login', 'Registrovat');
        $form->onSuccess[] = [$this, 'registrationFormSucceeded'];
        return $form;
    }
    
    // volá se po úspěšném odeslání formuláře
    public function registrationFormSucceeded($form, $values)
    {   $exists= $this->database->query('SELECT user_email FROM users WHERE user_email = ? LIMIT 1', $values->user_email)->fetch();
        if($exists){
          $this->flashMessage('Uživatel s tímto e-mailem je již zaregistrován.','alert-warning alert-dismissible');
        }
         else {
           $this->database->table('users')->insert([
           'user_name' => $values->user_name,
           'user_email' => $values->user_email,
           'user_pw' => Passwords::hash($values->user_pw),
        ]);
         $this->flashMessage('Registrace uživatele byla úspěšná.','alert-success alert-dismissible');
         $this->redirect('Register:');
      }
   }
}