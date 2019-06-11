<?php

namespace App\Presenters;
use App\model\UserManager;
use Nette\Security\User;
use Nette\Security\AuthenticationException;
use Nette\Security\IIdentity;

class AdminPresenter extends BasePresenter
{
	  public function beforeRender()
	  {
		  $this->loginCheck();
	  }

	  public function renderDefault()
	  {
	
	  }

	  public function renderFormats()
	  {
		$this->template->formats = $this->database->query('SELECT formatDetail.id, formatDetail.name, formatstype.name AS typename FROM formatDetail JOIN formatstype  ON formatDetail.typeId = formatstype.id');
	  }
	  
}
