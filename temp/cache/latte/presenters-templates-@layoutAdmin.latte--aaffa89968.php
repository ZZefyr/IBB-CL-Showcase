<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters\templates\@layoutAdmin.latte

use Latte\Runtime as LR;

class Templateaaffa89968 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="en">

<head>

  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>Stroeer Labs Creative Showcase administration</title>

  <!-- Custom fonts for this template-->
  <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 15 */ ?>/admin-files/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">

  <!-- Page level plugin CSS-->
  <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/admin-files/datatables/dataTables.bootstrap4.css" rel="stylesheet">

  <!-- Custom styles for this template-->
  <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 21 */ ?>/css/sb-admin.css" rel="stylesheet">

   <script src="https://cdn.tiny.cloud/1/l78addg8xhqi1yi1w4b9cunofr9gdlxnxoahz5fpfz1gvtg5/tinymce/5/tinymce.min.js"></script>
     <!-- Custom scripts for all pages-->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 25 */ ?>/js/sb-admin-form.js"></script>

</head>

<body id="page-top">
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?><div<?php if ($_tmp = array_filter(['alert', 'flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 30 */ ?></div>
<?php
			$iterations++;
		}
?>

  <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

    <a class="navbar-brand mr-1" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:")) ?>"><img style="width:200px" src="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 34 */ ?>/img/stroeerlabs_white.svg" id="header-image"></a>

    <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
      <i class="fas fa-bars"></i>
    </button>


    <!-- Navbar -->
    <ul style="margin-left: auto!important" class="navbar-nav ml-auto ml-md-0">
      <li class="nav-item dropdown no-arrow">
        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          <i class="fas fa-user-circle fa-fw"></i> <?php echo LR\Filters::escapeHtmlText($user->getIdentity()->user_email) /* line 45 */ ?>

        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
          <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">Odhlásit se</a>
        </div>
      </li>
    </ul>

  </nav>

  <div id="wrapper">

    <!-- Sidebar -->
    <ul class="sidebar navbar-nav">
      <li id="dashboard" class="nav-item">
        <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:")) ?>">
          <i class="fas fa-fw fa-tachometer-alt"></i>
          <span>Dashboard</span>
        </a>
      </li>
      <li id="basic-info"  class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:BasicInfo")) ?>">
          <i class="fas fa-fw fa-info"></i>
          <span>Základní informace</span>
        </a>
      </li>
      <li id="formats"  class="nav-item">
        <a class="nav-link" role="button" aria-haspopup="true" aria-expanded="false" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:Formats")) ?>">
          <i class="fas fa-fw fa-folder"></i>
          <span>Formáty CL</span>
        </a>
      </li>
      <li id="cl" class="nav-item dropdown">
        <a class="nav-link dropdown-toggle" href="#" id="pagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" href="charts.html">
          <i class="fas fa-fw fa-wrench"></i>
          <span>Správa CL</span></a>
    <div class="dropdown-menu" aria-labelledby="pagesDropdown">
          <a class="dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:cl")) ?>">Obecné</a>
          <a class="dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:clScriptVersions")) ?>">Aktuální verze scriptů</a>
          <a class="dropdown-item" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Admin:clChangeLog")) ?>">Changelog</a>
        </div>
      </li>
      <li id="register" class="nav-item">
        <a class="nav-link" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Register:")) ?>">
          <i class="fas fa-fw fa-user"></i>
          <span>Registrace</span></a>
      </li>
    </ul>

    <div id="content-wrapper">

      <div class="container-fluid">
<?php
		$this->renderBlock('content', $this->params, 'html');
?>

      </div>
      <!-- /.container-fluid -->

      <!-- Sticky Footer -->
      <footer class="sticky-footer">
        <div class="container my-auto">
          <div class="copyright text-center my-auto">
            <span>Copyright © Zdeněk Vojkůvka 2019</span>
          </div>
        </div>
      </footer>

    </div>
    <!-- /.content-wrapper -->

  </div>
  <!-- /#wrapper -->

  <!-- Scroll to Top Button-->
  <a class="scroll-to-top rounded" href="#page-top">
    <i class="fas fa-angle-up"></i>
  </a>

  <!-- Logout Modal-->
  <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
      <div class="modal-content">
        <div class="modal-header">
          <h5 class="modal-title" id="exampleModalLabel">Opravdu se chcete odhlásit?</h5>
          <button class="close" type="button" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">×</span>
          </button>
        </div>
        <div class="modal-body">Kliknutím na tlačítko Odhlásit níže, se odhlásíte z administrace</div>
        <div class="modal-footer">
          <a class="btn btn-primary" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("LoginPage:out")) ?>">Odhlásit</a>
          <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
        </div>
      </div>
    </div>
  </div>

  <!-- Bootstrap core JavaScript-->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 142 */ ?>/admin-files/jquery/jquery.min.js"></script>
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 143 */ ?>/admin-files/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 146 */ ?>/admin-files/jquery-easing/jquery.easing.min.js"></script>

  <!-- Page level plugin JavaScript-->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 149 */ ?>/admin-files/datatables/jquery.dataTables.js"></script>
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 150 */ ?>/admin-files/datatables/dataTables.bootstrap4.js"></script>

  <!-- Custom scripts for all pages-->
  <script defer src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 153 */ ?>/admin-files/nette/nette.ajax.js"></script>
  <script defer src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 154 */ ?>/js/sb-admin.js"></script>


  <!-- Demo scripts for this page-->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 158 */ ?>/js/demo/datatables-demo.js"></script>

</body>

</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 30');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
