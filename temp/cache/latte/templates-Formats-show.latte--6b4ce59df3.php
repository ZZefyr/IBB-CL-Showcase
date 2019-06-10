<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Formats/show.latte

use Latte\Runtime as LR;

class Template6b4ce59df3 extends Latte\Runtime\Template
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
		if (isset($this->params['format'])) trigger_error('Variable $format overwritten in foreach on line 23');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<div class="container">
  <nav aria-label="breadcrumb">
    <ol class="breadcrumb mt-5">
      <li class="breadcrumb-item"><a href="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($relativePath)) /* line 5 */ ?>#portfolio"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.formats")) ?></a></li>
<?php
		if ($localization ==='en') {
			?>          <li class="breadcrumb-item active" aria-current="page"><?php echo LR\Filters::escapeHtmlText($formatGroupName->en_name) /* line 7 */ ?></li>
<?php
		}
		else {
			?>         <li class="breadcrumb-item active" aria-current="page"><?php echo LR\Filters::escapeHtmlText($formatGroupName->name) /* line 9 */ ?></li>
<?php
		}
?>
    </ol>
  </nav>
</div>
<section class="portfolio bg-white" id="portfolio">
    <div class="container">
<?php
		if ($localization ==='en') {
			?>      <h2 class="text-center text-uppercase text-dark mb-0 mt-1"><?php echo LR\Filters::escapeHtmlText($formatGroupName->en_name) /* line 17 */ ?></h2>
<?php
		}
		else {
			?>        <h2 class="text-center text-uppercase text-dark mb-0 mt-1"><?php echo LR\Filters::escapeHtmlText($formatGroupName->name) /* line 19 */ ?></h2>
<?php
		}
?>
      <hr class="star-dark mb-5">
      <div class="row">
<?php
		$iterations = 0;
		foreach ($formats as $format) {
?>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Formats:detail", [$format->name, $format->typeId])) ?>">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
                <p><?php echo LR\Filters::escapeHtmlText($format->name) /* line 28 */ ?></p>
              </div>
            </div>
            <img class="img-fluid img-formats" src="<?php
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 31 */;
			echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($format->image)) /* line 31 */ ?>" alt="<?php echo LR\Filters::escapeHtmlAttr($format->name) /* line 31 */ ?>">
          </a>
        </div>
<?php
			$iterations++;
		}
?>
      </div>
    </div>
  </section>

<?php
	}

}
