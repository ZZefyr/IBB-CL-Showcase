<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/register.latte

use Latte\Runtime as LR;

class Template33e895c7f1 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
	];

	public $blockTypes = [
		'content' => 'html',
	];


	function main()
	{
		extract($this->params);
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('content', get_defined_vars());
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>

<?php
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["registrationForm"];
		?><form<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		), false) ?>>
  <fieldset>
    <h2>Registrace uživatele</h2>
    <div class="form-group">
      <label for="user_name" <?php
		$_input = end($this->global->formsStack)["user_name"];
		echo $_input->getLabelPart()->addAttributes(array (
		'for' => NULL,
		))->attributes() ?>>Jméno a příjmení</label>
      <input type="text" class="form-control" id="user_name"<?php
		$_input = end($this->global->formsStack)["user_name"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
      </div>
    <div class="form-group">
      <label for="user_email"<?php
		$_input = end($this->global->formsStack)["user_email"];
		echo $_input->getLabelPart()->addAttributes(array (
		'for' => NULL,
		))->attributes() ?>>E-mail</label>
      <input type="email" class="form-control" id="user_email"<?php
		$_input = end($this->global->formsStack)["user_email"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
    </div>
    <div class="form-group">
      <label for="user_pw"<?php
		$_input = end($this->global->formsStack)["user_pw"];
		echo $_input->getLabelPart()->addAttributes(array (
		'for' => NULL,
		))->attributes() ?>>Heslo</label>
      <input type="password" class="form-control" id="user_pw"<?php
		$_input = end($this->global->formsStack)["user_pw"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
    </div>
    <div class="form-group">
      <label for="user_pw_check"<?php
		$_input = end($this->global->formsStack)["user_pw_check"];
		echo $_input->getLabelPart()->addAttributes(array (
		'for' => NULL,
		))->attributes() ?>>Opakujte heslo</label>
      <input type="password" class="form-control" id="user_pw_check"<?php
		$_input = end($this->global->formsStack)["user_pw_check"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
    </div>
    </fieldset>
    <button type="submit" class="btn btn-primary"<?php
		$_input = end($this->global->formsStack)["login"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		))->attributes() ?>>Registrovat</button>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false);
		?></form><?php
	}

}
