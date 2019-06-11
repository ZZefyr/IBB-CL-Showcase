<?php

namespace App\Presenters;

use Nette;


/**
 * Base presenter for all application presenters.
 */
abstract class BasePresenter extends Nette\Application\UI\Presenter
{
    protected $database;
    /** @persistent */
    public $locale;
    public $relativePath;

    /** @var \Kdyby\Translation\Translator @inject */
    public $translator;
    
     public function __construct(Nette\Database\Context $database)
    {
        $this->database = $database;
    }

    public function beforeRender()
	{
        $this->template->clFormats = $this->database->table('clversions');	
        $this->template->clChangelogs = $this->database->table('clchangelog')->order('id DESC');
        $this->template->relativePath ='../';  
        $this->template->localization = $this->locale; 
        
    }

    protected function loginCheck()
	{
		 if (!$this->getUser()->isLoggedIn()) {
			$this->redirect('LoginPage:default');
		 }
      }
      
      protected function adminCheck()
      {
           if ($this->getUser()->getIdentity()->user_role !=='admin') {
               $this->flashMessage('Nemáte oprávnění vidět tuto stránku');
               $this->redirect('Homepage:');
               
           }
        }
        
        protected function getUserId(){
          if ($this->getUser()->isLoggedIn()) {
              return $this->getUser()->getIdentity()->getId();
           }       
        
        }
}
