<?php

namespace App\Presenters;
use App\model\UserManager;
use Nette\Security\User;
use Nette\Security\AuthenticationException;
use Nette\Security\IIdentity;
use App\Model\FormatsManager;
use App\Model\ClManager;
use Nette\Application\UI\Form;

class AdminPresenter extends BasePresenter
{
	  private $formatManager;
	  private $clManager;
	  private $formatValue;
	  
	  public function __construct(FormatsManager $formatManager, ClManager $clManager){
		$this->formatManager = $formatManager;
		$this->clManager = $clManager;
	  }
	  
	  public function beforeRender()
	  {
		  $this->loginCheck();
	  }

	  public function renderDefault()
	  {
	
	  }

	  public function renderFormats()
	  {
		$this->template->formats = $this->formatManager->getFormatsList();
	  }

	  public function renderFormatEdit($formatId)
	  {
	  } 

	  public function renderClScriptVersions()
	  {
		$this->template->clVersions = $this->clManager->getScriptVersionList();
	  }

	  public function renderClChangeLog()
	  {
		$this->template->clChangeLogs = $this->clManager->getScriptChangeLog();
	  }
	  

	  protected function createComponentEditForm(){
		$this->formatValue = $this->formatManager->getFormatDetail($this->getParameter('formatId'));
		$form = new Form;
		$form->addHidden('format_id', 'id')->setDefaultValue($this->formatValue->id);
        $form->addText('format_name', 'name')->setDefaultValue($this->formatValue->name);
        $form->addTextArea('cz_specification', 'specifikace')->setDefaultValue($this->formatValue->specification);
        $form->addTextArea('en_specification', 'en-specifikace')->setDefaultValue($this->formatValue->en_specification);
        $form->addTextArea('cz_application', 'použití')->setDefaultValue($this->formatValue->application);
        $form->addTextArea('en_application', 'en-použití')->setDefaultValue($this->formatValue->en_application);
        $form->addSubmit('save', 'Uložit');
        $form->onSuccess[] = [$this, 'sendForm'];
        return $form;
		}
		
		public function sendForm($form, $values){
			$this->formatManager->editFormatDetails($form, $values);
			$this->flashMessage('Formát byl upraven.','alert-success alert-dismissible');
		 }	


	   protected function createComponentEditCLGeneralForm(){
		$this->formatValue = $this->clManager->getGeneralVersionInfo();
		$form = new Form;
		$form->addText('old_version', 'old')->setDefaultValue($this->formatValue->oldBranchVersion);
		$form->addText('new_version', 'new')->setDefaultValue($this->formatValue->newBranchVersion);
		$form->addSubmit('save', 'Uložit');
		$form->onSuccess[] = [$this, 'sendEditClGeneralForm'];
		return $form;
		}
			
		public function sendEditClGeneralForm($form, $values){
		$this->clManager->editGeneralVersion($form, $values);
		$this->flashMessage('Formát byl upraven.','alert-success alert-dismissible');
		}	
		 

		
	  
}
