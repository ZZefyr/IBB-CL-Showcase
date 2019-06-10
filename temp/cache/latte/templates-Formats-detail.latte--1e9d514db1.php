<?php
// source: C:\xampp2\htdocs\ibbCreativeLibraryVol2\app\presenters/templates/Formats/detail.latte

use Latte\Runtime as LR;

class Template1e9d514db1 extends Latte\Runtime\Template
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
      <li class="breadcrumb-item" aria-current="page">
<?php
		if ($localization ==='en') {
			?>      <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Formats:show", [$formatGroupId])) ?>"><?php
			echo LR\Filters::escapeHtmlText($formatGroupName->en_name) /* line 8 */ ?></a>
<?php
		}
		else {
			?>      <a href="<?php echo LR\Filters::escapeHtmlAttr($this->global->uiControl->link("Formats:show", [$formatGroupId])) ?>"><?php
			echo LR\Filters::escapeHtmlText($formatGroupName->name) /* line 10 */ ?></a>
<?php
		}
?>
      </li>
      <li class="breadcrumb-item active" aria-current="page"><?php echo LR\Filters::escapeHtmlText($formatDetail->name) /* line 13 */ ?></li>
    </ol>
  </nav>
</div>

  <section class="portfolio bg-white" id="portfolio">
    <div class="container">
      <h2 class="text-center text-uppercase text-dark mb-0 mt-1"><?php echo LR\Filters::escapeHtmlText($formatDetail->name) /* line 20 */ ?></h2>
      <hr class="star-dark mb-5">
      
          <ul class="nav nav-tabs" id="myTab" role="tablist">
              <li class="nav-item">
                <a class="nav-link active" id="show-tab" data-toggle="tab" href="#show" role="tab" aria-controls="show" aria-selected="true"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.preview")) ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="profile-tab" data-toggle="tab" href="#profile" role="tab" aria-controls="profile" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.specification")) ?></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" id="usage-tab" data-toggle="tab" href="#usage" role="tab" aria-controls="usage" aria-selected="false"><?php
		echo LR\Filters::escapeHtmlText(call_user_func($this->filters->translate, "ui.usage")) ?></a>
              </li>
            </ul>
            <div class="tab-content" id="myTabContent">
                <div class="tab-pane fade show active" id="show" role="tabpanel" aria-labelledby="show-tab" style="padding-bottom:80%; overflow:hidden;">
                    <iframe frameborder="0" style="position:absolute;width: 100%;  height: 100%; left:0; right:0" src="http://creatives.ibillboard.com/samples/<?php
		echo LR\Filters::escapeHtmlAttr(LR\Filters::safeUrl($formatDetail->sample)) /* line 36 */ ?>.php">
                    </iframe> 
          
                </div>
                <div class="tab-pane fade in" id="profile">
                    <div style="max-width:95%; margin:1.5em auto; text-align:justify" class="specification">
<?php
		if ($localization ==='en') {
			?>                   <?php echo $formatDetail->en_specification /* line 43 */ ?>

<?php
		}
		else {
			?>                   <?php echo $formatDetail->specification /* line 45 */ ?>

<?php
		}
?>
        
                </div>        
                </div>

        <div class="tab-pane fade in" id="usage">
            <div style="max-width:95%; margin:1.5em auto; text-align:justify" class="usage">
<?php
		if ($localization ==='en') {
			?>                    <?php echo $formatDetail->en_application /* line 54 */ ?>

<?php
		}
		else {
			?>                    <?php echo $formatDetail->application /* line 56 */ ?>

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
