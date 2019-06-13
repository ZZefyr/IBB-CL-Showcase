<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Admin/clScriptVersions.latte

use Latte\Runtime as LR;

class Template5491ad1676 extends Latte\Runtime\Template
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
		if (isset($this->params['clVersion'])) trigger_error('Variable $clVersion overwritten in foreach on line 28');
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
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->name) /* line 30 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->version) /* line 31 */ ?></td>
                    <td><?php echo LR\Filters::escapeHtmlText($clVersion->filename) /* line 32 */ ?></td>
                    <td><a class="btn btn-primary btn-sm" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:formatEdit", [$clVersion->id])) ?>">Upravit záznam</a></td>
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
