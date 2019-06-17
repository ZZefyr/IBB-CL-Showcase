<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/clChangeLog.latte

use Latte\Runtime as LR;

class Template44de590d1b extends Latte\Runtime\Template
{
	public $blocks = [
		'content' => 'blockContent',
		'_editChangeLogForm' => 'blockEditChangeLogForm',
	];

	public $blockTypes = [
		'content' => 'html',
		'_editChangeLogForm' => 'html',
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
		if (isset($this->params['clChangeLog'])) trigger_error('Variable $clChangeLog overwritten in foreach on line 40');
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
            <a>Changelog</a>
          </li>
        </ol>
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Changelog</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Datum</th>
                    <th>Typ</th>
                    <th>Popis</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Datum</th>
                   <th>Typ</th>
                   <th>Popis</th>
                   <th></th>
                  </tr>
                </tfoot>
                <tbody>
<?php
		$iterations = 0;
		foreach ($clChangeLogs as $clChangeLog) {
?>
                  <tr>
                    <td><?php echo LR\Filters::escapeHtmlText($clChangeLog->date) /* line 42 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clChangeLog->type) /* line 43 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clChangeLog->notes) /* line 44 */ ?></td>
                    <td><a class="ajax btn btn-primary btn-sm" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("getChangelogData!", [$clChangeLog->id])) ?>">Upravit záznam</a></td>
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
<div id="<?php echo htmlSpecialChars($this->global->snippetDriver->getHtmlId('editChangeLogForm')) ?>"><?php
		$this->renderBlock('_editChangeLogForm', $this->params) ?></div> <?php
	}


	function blockEditChangeLogForm($_args)
	{
		extract($_args);
		$this->global->snippetDriver->enter("editChangeLogForm", "static");
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["editChangeLogForm"];
		?><form id="editClVersionForm"<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		'id' => NULL,
		), false) ?>>
  <div class="form-group">
    <label for="date"><strong>Datum:</strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->id) /* line 57 */;
		}
		?>" type="hidden" class="form-control" id="format_id"<?php
		$_input = end($this->global->formsStack)["id"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->date) /* line 58 */;
		}
		?>" type="text" class="form-control" id="date"<?php
		$_input = end($this->global->formsStack)["date"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
  <div class="form-group">
    <label for="type"><strong>Typ: </strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->type) /* line 62 */;
		}
		?>" type="text" class="form-control" id="type"<?php
		$_input = end($this->global->formsStack)["type"];
		echo $_input->getControlPart()->addAttributes(array (
		'value' => NULL,
		'type' => NULL,
		'class' => NULL,
		'id' => NULL,
		))->attributes() ?>>
  </div>
   <div class="form-group">
    <label for="notes"><strong>Popis: </strong></label>
    <input value="<?php
		if (isset($formatValue)) {
			echo LR\Filters::escapeHtmlAttr($formatValue->notes) /* line 66 */;
		}
		?>" type="text" class="form-control" id="notes"<?php
		$_input = end($this->global->formsStack)["notes"];
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
