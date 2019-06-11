<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/LoginPage/default.latte

use Latte\Runtime as LR;

class Template2e60e3d4d7 extends Latte\Runtime\Template
{

	function main()
	{
		extract($this->params);
?>
<!DOCTYPE html>
<html>
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
?>Creative showcase admin</title>

    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 10 */ ?>/core-files/bootstrap/css/bootstrap.min.css">
    <script src="https://code.jquery.com/jquery-3.1.1.min.js"></script>
    <script src="https://nette.github.io/resources/js/netteForms.min.js"></script>
    <script src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 13 */ ?>/js/freelancer.min.js"></script>
    <style>
    .login-form {
      width: 300px;
      margin-left: auto;
      position: absolute;
      margin-right: auto;
      left: 0;
      right: 0;
      top: 20%;
      bottom: 0;
      box-shadow: 0 1px 3px 0 rgba(0,0,0,.15);
      height: 380px;
      padding: 1rem;
      box-sizing: content-box;
      background-color: white;
      }

      .btn-primary {
          background-color: #ff5a10;
          border-color: #ff5a10;
        }

     .btn-primary:hover {
          background-color: #08204a;
        }
    </style>
</head>
<body style="background-color:#e9e9e9">
<?php
		$iterations = 0;
		foreach ($flashes as $flash) {
			?><div<?php if ($_tmp = array_filter(['alert', $flash->type])) echo ' class="', LR\Filters::escapeHtmlAttr(implode(" ", array_unique($_tmp))), '"' ?>><?php
			echo LR\Filters::escapeHtmlText($flash->message) /* line 42 */ ?></div>
<?php
			$iterations++;
		}
		$form = $_form = $this->global->formsStack[] = $this->global->uiControl["loginForm"];
		?><form class="login-form"<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormBegin(end($this->global->formsStack), array (
		'class' => NULL,
		), false) ?>>
    <img style="width:300px" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 44 */ ?>/img/strooer_labs_logo_rgb.svg" id="header-image">
    <p style="border-bottom: 1px solid #e2e2e2;padding-bottom: 12px;font-size: 25px;">Creative showcase admin</p>
    <fieldset>
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
    </fieldset>
    <button type="submit" class="btn btn-primary"<?php
		$_input = end($this->global->formsStack)["login"];
		echo $_input->getControlPart()->addAttributes(array (
		'type' => NULL,
		'class' => NULL,
		))->attributes() ?>>Přihlásit</button>
<?php
		echo Nette\Bridges\FormsLatte\Runtime::renderFormEnd(array_pop($this->global->formsStack), false);
?></form>

</body>
</html><?php
		return get_defined_vars();
	}


	function prepare()
	{
		extract($this->params);
		if (isset($this->params['flash'])) trigger_error('Variable $flash overwritten in foreach on line 42');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}

}
