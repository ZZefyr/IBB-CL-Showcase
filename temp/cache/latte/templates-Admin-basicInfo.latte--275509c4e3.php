<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/basicInfo.latte

use Latte\Runtime as LR;

class Template275509c4e3 extends Latte\Runtime\Template
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
<!-- Breadcrumbs-->
        <ol class="breadcrumb">
          <li class="breadcrumb-item">
            <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:")) ?>">Dashboard</a>
          </li>
          <li class="breadcrumb-item active">
            <a>Základní informace</a>
          </li>
        </ol>
<?php
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["editBasicInfoForm"];
		?><form<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		), false) ?>>
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" data-toggle="tab" href="#cz_general" role="tab" aria-controls="home" aria-selected="true">Obecné</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#en_general" role="tab" aria-controls="profile" aria-selected="false">Obecné EN</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" data-toggle="tab" href="#cz_principles" role="tab" aria-controls="contact" aria-selected="false">Zásady</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#en_principles" role="tab" aria-controls="contact" aria-selected="false">Zásady EN</a>
  </li>
   <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#cz_usage" role="tab" aria-controls="contact" aria-selected="false">Použití</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#en_usage" role="tab" aria-controls="contact" aria-selected="false">Použití EN</a>
  </li>
   <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#cz_externalCodes" role="tab" aria-controls="contact" aria-selected="false">Externí kódy</a>
  </li>
  <li class="nav-item">
    <a class="nav-link"  data-toggle="tab" href="#en_externalCodes" role="tab" aria-controls="contact" aria-selected="false">Externí kódy EN</a>
  </li>
</ul>
<div class="tab-content" id="myTabContent">
  <div class="tab-pane fade show active" id="cz_general" role="tabpanel" aria-labelledby="home-tab">
  <div class="form-group">
    <div style="position:absolute" class="loader"></div>
    <textarea class="form-control" id="czGeneral" rows="10"<?php
		$_input = end($this->global->formsStack)["general"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_general" role="tabpanel" aria-labelledby="profile-tab">
  <div class="form-group">
    <textarea  class="form-control" id="enGeneral" rows="10"<?php
		$_input = end($this->global->formsStack)["en_general"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
</div>
  <div class="tab-pane fade" id="cz_principles" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea class="form-control" id="czPrinciples" rows="10"<?php
		$_input = end($this->global->formsStack)["principles"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_principles" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea  class="form-control" id="enPrinciples" rows="10"<?php
		$_input = end($this->global->formsStack)["en_principles"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="cz_usage" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea  class="form-control" id="czUsage" rows="10"<?php
		$_input = end($this->global->formsStack)["application"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_usage" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea  class="form-control" id="enUsage" rows="10"<?php
		$_input = end($this->global->formsStack)["en_application"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="cz_externalCodes" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea class="form-control" id="czExternalCodes" rows="10"<?php
		$_input = end($this->global->formsStack)["externalcodes"];
		echo $_input->getControlPart()->addAttributes(array (
		'class' => NULL,
		'id' => NULL,
		'rows' => NULL,
		))->attributes() ?>><?php echo $_input->getControl()->getHtml() ?></textarea>
  </div>
  </div>
  <div class="tab-pane fade" id="en_externalCodes" role="tabpanel" aria-labelledby="contact-tab">
  <div class="form-group">
    <textarea class="form-control" id="enExternalCodes" rows="10"<?php
		$_input = end($this->global->formsStack)["en_externalcodes"];
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
 drawTinyEditor();
</script>
<?php
	}

}
