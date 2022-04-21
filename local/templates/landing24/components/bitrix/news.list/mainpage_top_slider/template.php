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

<?if(!empty($arResult)){ ?>
	<!-- Слайдер -->
		<section class="slider-area">
			<div class="slider-active">
				<?foreach($arResult['ITEMS'] as $item){ ?>
					
					<div class="single-slider">
						<?if(!empty($item['PREVIEW_PICTURE']['SRC'])){ ?>
								<div class="slider-img parallax-bg bg-opacity-black-60" alt="<?= $item['PREVIEW_PICTURE']['ALT']?>"
									style="background:url(<?= $item['PREVIEW_PICTURE']['SRC']?>)">
								</div>
						<?}?>
						<div class="slider-content slider-style-2 slider-style-4 text-center z-index-5">
							<span>
								<?if(isset($item['NAME']))  echo $item['NAME']  ?>
							</span>
							<h2><?if(isset($item['PREVIEW_TEXT']))  echo $item['PREVIEW_TEXT']?></h2>
							<?if(!empty($item['PROPERTIES']['LINK']['VALUE'])){?>
									<a class="my-button" href="<?=$item['PROPERTIES']['LINK']['VALUE']?>"><?=$item['DETAIL_TEXT']?></a>
							<?}?>
						</div>
					</div>
				<?}?>
				
				
			</div>
		</section>

<?}?>

