<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/formats.latte

use Latte\Runtime as LR;

class Templatebd4fa08e7c extends Latte\Runtime\Template
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
		if (isset($this->params['format'])) trigger_error('Variable $format overwritten in foreach on line 26');
		$this->parentName = "../@layoutAdmin.latte";
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<!-- DataTables Example -->
        <div class="card mb-3">
          <div class="card-header">
            <i class="fas fa-table"></i>
            Formáty creative lib</div>
          <div class="card-body">
            <div class="table-responsive">
              <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                <thead>
                  <tr>
                    <th>Název</th>
                    <th>Typ formátu</th>
                    <th></th>
                  </tr>
                </thead>
                <tfoot>
                  <tr>
                   <th>Název</th>
                   <th>Typ formátu</th>
                   <th></th>
                  </tr>
                </tfoot>
                <tbody>
<?php
		$iterations = 0;
		foreach ($formats as $format) {
?>
                  <tr>
                    <td><?php echo LR\Filters::escapeHtmlText($format->name) /* line 28 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($format->typename) /* line 29 */ ?></td>
                    <td><a class="btn btn-primary btn-sm" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:formatEdit", [$format->id])) ?>">Upravit</a></td>
                  </tr>
<?php
			$iterations++;
		}
?>
                </tbody>
              </table>
            </div>
          </div>
        </div><?php
	}

}
