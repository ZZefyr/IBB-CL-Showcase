<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/formatEdit.latte

use Latte\Runtime as LR;

class Template132a65cfe9 extends Latte\Runtime\Template
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
<?php
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["editForm"];
		?><form<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		), false) ?>>
<div class="form-group">
    <label for="name"><strong>Název formátu</strong></label>
    <input type="hidden" class="form-control" id="format_id" aria-describedby="emailHelp"<?php
		$_input = end($this->global->formsStack)["format_id"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		'aria-describedby' => NULL,
		))->attributes() ?>>
    <input type="text" class="form-control" id="name" aria-describedby="emailHelp"<?php
		$_input = end($this->global->formsStack)["format_name"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		'aria-describedby' => NULL,
		))->attributes() ?>>
  </div>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="home-tab" data-toggle="tab" href="#cz_specification" role="tab" aria-controls="home" aria-selected="true">Specifikace CZ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="profile-tab" data-toggle="tab" href="#en_specification" role="tab" aria-controls="profile" aria-selected="false">Specifikace EN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#cz_application" role="tab" aria-controls="contact" aria-selected="false">Použití CZ</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="contact-tab" data-toggle="tab" href="#en_application" role="tab" aria-controls="contact" aria-selected="false">Použití EN</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="cz_specification" role="tabpanel" aria-labelledby="home-tab">
  <div class="form-group">
    <div style="position:absolute" class="loader"></div>
    <textarea class="form-control" id="czSpecification" rows="10"<?php
		$_input = end($this->global->formsStack)["cz_specification"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_specification" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-group">
    <textarea class="form-control" id="enSpecification" rows="10"<?php
		$_input = end($this->global->formsStack)["en_specification"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
</div>
  <div class="tab-pane fade" id="cz_application" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea class="form-control" id="czApplication" rows="10"<?php
		$_input = end($this->global->formsStack)["cz_application"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_application" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea  class="form-control" id="enAplication" rows="10"<?php
		$_input = end($this->global->formsStack)["en_application"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
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

<script>
tinymce.init({
    selector:'textarea',
    height: 500,
    plugins: "advcode",
    toolbar: "code",
    verify_html : false,
    verify_css_classes : true,
    cleanup : false,
    cleanup_on_startup : false,
    });
</script>

<?php
	}

}
