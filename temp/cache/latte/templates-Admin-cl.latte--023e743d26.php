<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/cl.latte

use Latte\Runtime as LR;

class Template023e743d26 extends Latte\Runtime\Template
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
		$this->parentName = "../@layoutAdmin.latte";
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
 <style>
   .loader {
  border: 3px solid hsla(185, 100%, 62%, 0.2);
  border-top-color: #3cefff;
  border-radius: 50%;
  width: 3em;
  height: 3em;
  animation: spin 1s linear infinite;
}

@keyframes spin {
  to {
    transform: rotate(360deg);
  }
}
   </style>
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:")) ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">
            <a>Správa CL</a>
          </li>
           <li class="breadcrumb-item active">
            <a>Obecné</a>
          </li>
        </ol>
<?php
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["editCLGeneralForm"];
		?><form<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		), false) ?>>
  <div class="form-group">
    <label for="old_version"><strong>Aktuální verze původní větve Creative lib</strong></label>
    <input type="text" class="form-control" id="old_version"<?php
		$_input = end($this->global->formsStack)["old_version"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
  <div class="form-group">
    <label for="new_version"><strong>Aktuální verze nové větve Creative lib: </strong></label>
    <input type="text" class="form-control" id="new_version"<?php
		$_input = end($this->global->formsStack)["new_version"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
 <button type="submit" class="btn btn-primary"<?php
		$_input = end($this->global->formsStack)["save"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		))->attributes() ?>>Upravit</button>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false);
?></form>

<?php
	}

}
