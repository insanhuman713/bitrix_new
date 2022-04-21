<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>
<div class="news-list">
<?if($arParams["DISPLAY_TOP_PAGER"]):?>
	<?=$arResult["NAV_STRING"]?><br /><!-- навигатор-->
<?endif;?>
<!-- Инфографика -->
<section class="project-count-area brand-bg pad-90">
    <div class="container">
        <div class="row">
			<?foreach ($arResult['ITEMS'] as $item ) { ?>
				<div class="col-md-3 col-sm-3">
					<div class="single-count white-text text-center">
						<? if (isset($item['DETAIL_TEXT'])) echo $item['DETAIL_TEXT']?>
						<h2 class="counter"><? if (isset($item['PREVIEW_TEXT'])) echo $item['PREVIEW_TEXT']?></h2>
						<p><? if (isset($item['NAME'])) echo $item['NAME']?></p>
					</div>
				</div>
				
			<?}?>
            
        </div>
    </div>
</section>
