<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/@layout.latte

use Latte\Runtime as LR;

class Template857f8e69c7 extends Latte\Runtime\Template
{
	public $blocks = [
		'head' => 'blockHead',
		'scripts' => 'blockScripts',
	];

	public $blockTypes = [
		'head' => 'html',
		'scripts' => 'html',
	];


	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html lang="cs">
<head>
	<meta charset="utf-8">

	<title><?php
		if (isset($this->blockQueue["title"])) {
			$this->renderBlock('title', $this->params, function ($s, $type) {
				$_fi = new LR\FilterInfo($type);
				return LR\Filters::convertTo($_fi, 'html', $this->filters->filterContent('striphtml', $_fi, $s));
			});
			?> | <?php
		}
?>IBB Creative Library Showcase page</title>

	<meta name="viewport" content="width=device-width, initial-scale=1">
	<meta name="description" content="Internet Billboard Creative Showcase page">
    <meta name="author" content="Zdeněk Vojkůvka">
	<!-- Bootstrap core CSS -->
    <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 16 */ ?>/core-files/bootstrap/css/bootstrap.min.css" rel="stylesheet">
	<!-- Custom fonts for this template -->
    <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 18 */ ?>/core-files/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,700" rel="stylesheet" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Lato:400,700,400italic,700italic" rel="stylesheet" type="text/css">

     <!-- Plugin CSS -->
     <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 23 */ ?>/core-files/magnific-popup/magnific-popup.css" rel="stylesheet" type="text/css">

     <!-- Custom styles for this template -->
     <link href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 26 */ ?>/css/freelancer.min.css" rel="stylesheet">
	<?php
		if ($this->getParentName()) return get_defined_vars();
		$this->renderBlock('head', get_defined_vars());
?>
</head>

<body>
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?>	<div<?php if ($_tmp = array_filter(['flash', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 31 */ ?></div>
<?php
			$iterations++;
		}
?>
     <!-- Navigation -->
  <nav class="navbar navbar-expand-lg bg-secondary fixed-top text-uppercase" id="mainNav">
    <div class="container">
      <a class="navbar-brand" href="/">Creative library showcase</a>
      <button class="navbar-toggler navbar-toggler-right text-uppercase bg-primary text-white rounded" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        Menu
        <i class="fas fa-bars"></i>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-target="#portfolio" href="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($relativePath)) /* line 43 */ ?>#portfolio"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.formats")) ?></a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-target="#about" href="<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($relativePath)) /* line 46 */ ?>#about"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.basicInfo")) ?></a>
          </li>
          <li class="nav-item mx-0 mx-lg-1">
            <a class="nav-link py-3 px-0 px-lg-3 rounded js-scroll-trigger" data-target="#contact" href="#contact"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.clState")) ?></a>
          </li>
        </ul>
      </div>
    </div>
  </nav>
<?php
		$this->renderBlock('content', $this->params, 'html');
?>
    <!-- Contact Section -->
  <section class="bg-secondary" id="contact">
    <div class="container">
      <h2 class="text-center text-uppercase text-white mb-0"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.clState")) ?></h2>
      <hr class="star-light mb-5">
          <ul class="nav nav-tabs" id="cLTab" role="tablist">
            <li class="nav-item">
              <a class="nav-link active" id="general-tab" data-toggle="tab" href="#general" role="tab" aria-controls="home" aria-selected="true"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.general")) ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="versions-tab" data-toggle="tab" href="#versions" role="tab" aria-controls="profile" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.currentVersion")) ?></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" id="changelog-tab" data-toggle="tab" href="#changelog" role="tab" aria-controls="usage" aria-selected="false">Changelog</a>
            </li>
          </ul>
          <div class="tab-content" id="cLTabContent">
          <div class="tab-pane fade show active text-white" id="general" role="tabpanel" aria-labelledby="general-tab">
            <p><strong><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.currentVersionLegacy")) ?>:</strong> <span style="color:red; font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText($clVersion->oldBranchVersion) /* line 74 */ ?></span> <br>
            <strong><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.file")) ?>:</strong> creative-lib-<?php
		echo LR\Filters::escapeHtmlText($clVersion->oldBranchVersion) /* line 75 */ ?>.min.js</p>
            <p><strong><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.currentVersionNewLib")) ?>:</strong> <span style="color:red; font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText($clVersion->newBranchVersion) /* line 76 */ ?></span> <br>
            <strong><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.file")) ?>:</strong> creative-lib-<?php
		echo LR\Filters::escapeHtmlText($clVersion->newBranchVersion) /* line 77 */ ?>.js
            </p>
           </div>
           <div class="tab-pane fade text-white" id="versions" role="tabpanel" aria-labelledby="versions-tab">
            <table class="table table-striped text-white">
              <thead><tr><th style="font-weight:bold"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.formatName")) ?></th><th style="font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.scriptVersion")) ?></th><th style="font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.fileName")) ?></th></tr> </thead>
              <tbody>
<?php
		$iterations = 0;
		foreach ($clFormats as $clFormat) {
			?>              <tr><td><?php echo LR\Filters::escapeHtmlText($clFormat->name) /* line 85 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($clFormat->version) /* line 85 */ ?></td><td><?php echo LR\Filters::escapeHtmlText($clFormat->filename) /* line 85 */ ?></td></tr>
<?php
			$iterations++;
		}
?>
              </tbody>                
            </table>
           </div>
           <div class="tab-pane fade text-white" id="changelog" role="tabpanel" aria-labelledby="changelog-tab">
            <table class="table table-striped text-white">
              <thead><tr><th style="font-weight:bold"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.date")) ?></th><th style="font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.type")) ?></th><th style="font-weight:bold"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.notes")) ?></th></tr> </thead>
            <tbody>  
<?php
		$iterations = 0;
		foreach ($clChangelogs as $clChangelog) {
			?>              <tr><td><?php echo LR\Filters::escapeHtmlText($clChangelog->date) /* line 95 */ ?></td><td><?php
			echo LR\Filters::escapeHtmlText($clChangelog->type) /* line 95 */ ?></td><td><?php echo LR\Filters::escapeHtmlText($clChangelog->notes) /* line 95 */ ?></td></tr>        
<?php
			$iterations++;
		}
?>
            </tbody>  
        </table>
           </div>
          </div>
    </div>
  </section>

<footer>
  <div class="copyright py-4 text-center text-white">
    <div class="container">
      <small>Copyright &copy; Internet Billboard 2019</small>
    </div>
  </div>
</footer>
  <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
  <div class="scroll-to-top d-lg-none position-fixed ">
    <a class="js-scroll-trigger d-block text-center text-white rounded" href="#page-top">
      <i class="fa fa-chevron-up"></i>
    </a>
  </div>
<?php
		$this->renderBlock('scripts', get_defined_vars());
?>
</body>
</html>
<?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 31');
		if (isset($this->params['clFormat'])) trigger_error('Variable $clFormat overwritten in foreach on line 84');
		if (isset($this->params['clChangelog'])) trigger_error('Variable $clChangelog overwritten in foreach on line 94');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockHead($_args)
	{
		
	}


	function blockScripts($_args)
	{
		extract($_args);
?>
  <!-- Bootstrap core JavaScript -->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 119 */ ?>/core-files/jquery/jquery.min.js"></script>
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 120 */ ?>/core-files/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Plugin JavaScript -->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 123 */ ?>/core-files/jquery-easing/jquery.easing.min.js"></script>
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 124 */ ?>/core-files/magnific-popup/jquery.magnific-popup.min.js"></script>

  <!-- Contact Form JavaScript -->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 127 */ ?>/js/jqBootstrapValidation.js"></script>
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 128 */ ?>/js/contact_me.js"></script>

  <!-- Custom scripts for this template -->
  <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 131 */ ?>/js/freelancer.min.js"></script>
	<script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
<?php
	}

}
