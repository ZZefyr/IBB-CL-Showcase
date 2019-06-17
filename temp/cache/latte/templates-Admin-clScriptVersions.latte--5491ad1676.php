<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/clScriptVersions.latte

use Latte\Runtime as LR;

class Template5491ad1676 extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'_editClVersionForm' => 'blockEditClVersionForm',
	];

	public $blockTypes = [
		'content' => 'html',
		'_editClVersionForm' => 'html',
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
		if (isset($this->params['clVersion'])) trigger_error('Variable $clVersion overwritten in foreach on line 40');
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
            <a>Správa CL</a>
          </li>
           <li class="breadcrumb-item active">
            <a>Aktuální verze scriptů</a>
          </li>
        </ol>
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Aktuální verze scriptů CL</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Název</th>
                    <th>Verze scriptu</th>
                    <th>Název souboru</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Název</th>
                   <th>Verze scriptu</th>
                   <th>Název souboru</th>
                   <th></th>
                  </tr>
                </tfoot>
                <tbody>
<?php
		$iterations = 0;
		foreach ($clVersions as $clVersion) {
?>
                  <tr>
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->name) /* line 42 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->version) /* line 43 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->filename) /* line 44 */ ?></td>
                    <td><a class="ajax btn btn-primary btn-sm" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("getFormatData!", [$clVersion->id])) ?>">Upravit záznam</a></td>
                  </tr>
<?php
			$iterations++;
		}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
<div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('editClVersionForm')) ?>"><?php
		$this->renderBlock('_editClVersionForm', $this->params) ?></div><?php
		
	}


	function blockEditClVersionForm($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("editClVersionForm", "static");
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["editClVersionForm"];
		?><form id="editClVersionForm"<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		'id' => NULL,
		), false) ?>>
  <div class="form-group">
    <label for="format_id"><strong>Název formátu</strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->id) /* line 57 */;
		}
		?>" type="hidden" class="form-control" id="format_id"<?php
		$_input = end($this->global->formsStack)["format_id"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->name) /* line 58 */;
		}
		?>" type="text" class="form-control" id="format_name"<?php
		$_input = end($this->global->formsStack)["format_name"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
  <div class="form-group">
    <label for="format_version"><strong>Verze formátu: </strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->version) /* line 62 */;
		}
		?>" type="text" class="form-control" id="format_version"<?php
		$_input = end($this->global->formsStack)["format_version"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
   <div class="form-group">
    <label for="format_filename"><strong>Název souboru: </strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->filename) /* line 66 */;
		}
		?>" type="text" class="form-control" id="format_filename"<?php
		$_input = end($this->global->formsStack)["format_filename"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
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
  <button onclick="hideWebDialog('editClVersionForm')" type="button" class="btn btn-secondary">Storno</button>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false);
?></form>
<?php
		if (isset($formatValue)) {
?>
<script>showWebDialog('editClVersionForm');</script>
<?php
		}
		$this->global->snippetDriver->leave();
		
	}

}
