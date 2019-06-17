<?php

namespace App\Presenters;
use App\model\UserManager;
use Nette\Security\User;
use Nette\Security\AuthenticationException;
use Nette\Security\IIdentity;
use App\Model\FormatsManager;
use App\Model\ClManager;
use App\Model\BaseManager;
use Nette\Application\UI\Form;

class AdminPresenter extends BasePresenter
{
	  private $formatManager;
	  private $clManager;
	  private $baseManager;
	  private $formatValue;
	  
	  public function __construct(FormatsManager $formatManager, ClManager $clManager, BaseManager $baseManager){
		$this->formatManager = $formatManager;
		$this->clManager = $clManager;
		$this->baseManager = $baseManager;
	  }
	  
	  public function beforeRender(){
		  $this->loginCheck();
	  }

	  public function renderDefault(){
		$this->template->clVersions = $this->clManager->getGeneralVersionInfo();
		$this->template->numberOfFormats = $this->formatManager->getNumberOfFormats();
	  }

	  public function renderFormats(){ 
		$this->template->formats = $this->formatManager->getFormatsList();
	  }

	  public function renderFormatEdit($formatId){
		$this->template->formatValue = $this->formatManager->getFormatDetail($this->getParameter('formatId'));
	  } 

	  public function renderClScriptVersions(){
		$this->template->clVersions = $this->clManager->getScriptVersionList();
	  }

	  public function renderClChangeLog(){
		$this->template->clChangeLogs = $this->clManager->getScriptChangeLogs();  
	  }

	       //AJAX forms redraw      
      public function handleGetFormatData($id){
	   $this->template->formatValue = $this->clManager->getSpecificScriptVersion($id);
	   $this->redrawControl('editClVersionForm');
	  }

	   public function handleGetChangelogData($id){
		$this->template->formatValue = $this->clManager->getSpecificChangeLog($id);
		$this->redrawControl('editChangeLogForm');
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

		protected function createComponentEditClVersionForm(){
		$form = new Form();
		$form->addHidden('format_id', 'id');
		$form->addText('format_name', 'Název formátu');
		$form->addText('format_version', 'Verze formátu');
		$form->addText('format_filename', 'Název souboru');
		$form->addSubmit('save', 'Uložit');
		$form->onSuccess[] = [$this, 'sendEditClVersionForm'];
		return $form;
		}
				
	    public function sendEditClVersionForm($form, $values){
		$this->clManager->editScriptVersion($form, $values);
		$this->flashMessage('Formát byl upraven.','alert-success alert-dismissible');
		}	

		protected function createComponentEditChangeLogForm(){
		 $form = new Form;
		 $form->addText('id', 'id');
		 $form->addText('date', 'date');
		 $form->addText('type', 'type');
		 $form->addText('notes', 'notes');
		 $form->addSubmit('save', 'Uložit');
		 $form->onSuccess[] = [$this, 'sendEditChangeLogForm'];
		  return $form;
		 }
					
		public function sendEditChangeLogForm($form, $values){
		 $this->clManager->editChangelog($form, $values);
		 $this->flashMessage('Záznam byl upraven.','alert-success alert-dismissible');
		}	

		protected function createComponentEditBasicInfoForm(){
			$this->formatValue = $this->baseManager->getBasicInfo();
			$form = new Form;
			$form->addTextArea('general', 'Obecné')->setDefaultValue($this->formatValue->general);
			$form->addTextArea('en_general', 'Obecné EN')->setDefaultValue($this->formatValue->en_general);
			$form->addTextArea('principles', 'Zásady')->setDefaultValue($this->formatValue->principles);
			$form->addTextArea('en_principles', 'Zásady EN')->setDefaultValue($this->formatValue->en_principles);
			$form->addTextArea('application', 'Použití')->setDefaultValue($this->formatValue->application);
			$form->addTextArea('en_application', 'Použití EN')->setDefaultValue($this->formatValue->en_application);
			$form->addTextArea('externalcodes', 'Externí kódy')->setDefaultValue($this->formatValue->externalcodes);
			$form->addTextArea('en_externalcodes', 'Externí kódy EN')->setDefaultValue($this->formatValue->en_externalcodes);

			$form->addSubmit('save', 'Uložit');
			$form->onSuccess[] = [$this, 'sendEditBasicInfoForm'];
			 return $form;
			}
					   
		   public function sendEditBasicInfoForm($form, $values){
			$this->baseManager->editBasicInfo($form, $values);
			$this->flashMessage('Záznam byl upraven.','alert-success alert-dismissible');
		   }	
}
