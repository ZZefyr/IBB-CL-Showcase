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
}
