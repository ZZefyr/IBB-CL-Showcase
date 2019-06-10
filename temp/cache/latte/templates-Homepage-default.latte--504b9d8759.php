<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Homepage/default.latte

use Latte\Runtime as LR;

class Template504b9d8759 extends Latte\Runtime\Template
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
		if (isset($this->params['format'])) trigger_error('Variable $format overwritten in foreach on line 18');
		Nette\Bridges\ApplicationLatte\UIRuntime::initialize($this, $this->parentName, $this->blocks);
		
	}


	function blockContent($_args)
	{
		extract($_args);
?>
<!-- Header -->
  <header class="masthead text-black text-center">
    <div class="container">
      <img class="img-fluid mb-5 d-block mx-auto" src="<?php echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($basePath)) /* line 5 */ ?>/img/strooer_labs_logo_rgb.svg" alt="">
      <h1 class="text-uppercase mb-0">Creative library showcase</h1>
      <hr class="star-light">
      <!--<h2 class="font-weight-light mb-0">Web Developer - Graphic Artist - User Experience Designer</h2>-->
    </div>
  </header>

  <!-- Portfolio Grid Section -->
  <section class="portfolio bg-secondary" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-white mb-0"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.formats")) ?></h2>
      <hr class="star-light mb-5">
      <div class="row">
<?php
		$iterations = 0;
		foreach ($formats as $format) {
?>
        <div class="col-md-6 col-lg-4">
          <a class="portfolio-item d-block mx-auto" target="_top" href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Formats:show", [$format->id])) ?>">
            <div class="portfolio-item-caption d-flex position-absolute h-100 w-100">
              <div class="portfolio-item-caption-content my-auto w-100 text-center text-white">
<?php
			if ($localization ==='en') {
				?>                <p><?php echo LR\Filters::escapeHtmlText($format->en_name) /* line 24 */ ?></p>
<?php
			}
			else {
				?>                <p><?php echo LR\Filters::escapeHtmlText($format->name) /* line 26 */ ?></p>
<?php
			}
?>

              </div>
            </div>
            <img class="img-fluid" src="<?php
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

  <!-- About Section -->
  <section class="bg-white text-dark mb-0" id="about">
    <div class="container">
      <h2 class="text-center text-uppercase text-secondary"><?php echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.basicInfo")) ?></h2>
      <hr class="star-dark mb-5">
      <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
          <a class="nav-link active" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.general")) ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.principles")) ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.usage")) ?></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" id="external-codes-tab" data-toggle="tab" href="#external-codes" role="tab" aria-controls="external-codes" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.externalCodes")) ?></a>
        </li>
      </ul>
      <div class="tab-content" id="myTabContent">
        <div class="tab-pane fade show active" id="home" role="tabpanel" aria-labelledby="home-tab">
<?php
		if ($localization ==='en') {
			?>          <?php echo $basicInfo->en_general /* line 61 */ ?>

<?php
		}
		else {
			?>           <?php echo $basicInfo->general /* line 63 */ ?>

<?php
		}
?>
        </div>
        <div class="tab-pane fade" id="profile" role="tabpanel" aria-labelledby="profile-tab">
<?php
		if ($localization ==='en') {
			?>          <?php echo $basicInfo->en_principles /* line 68 */ ?>

<?php
		}
		else {
			?>          <?php echo $basicInfo->principles /* line 70 */ ?>

<?php
		}
?>
        </div>
        <div class="tab-pane fade" id="usage" role="tabpanel" aria-labelledby="usage-tab">
<?php
		if ($localization ==='en') {
			?>          <?php echo $basicInfo->en_application /* line 75 */ ?>

<?php
		}
		else {
			?>           <?php echo $basicInfo->externalcodes /* line 77 */ ?>

<?php
		}
?>
        </div>
        <div class="tab-pane fade" id="external-codes" role="tabpanel" aria-labelledby="excternal-codes-tab">
<?php
		if ($localization ==='en') {
			?>          <?php echo $basicInfo->en_externalcodes /* line 82 */ ?>

<?php
		}
		else {
			?>           <?php echo $basicInfo->externalcodes /* line 84 */ ?>

<?php
		}
?>
        </div>
        </div>
      </div>
    </div>
  </section>
<?php
	}

}
