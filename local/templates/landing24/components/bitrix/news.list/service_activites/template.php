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

<!-- направления -->
<section class="service-area pt-90 pb-60 bg-color">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Направления</h2>
                <p>Всё что нужно для производства сайта любой сложности</p>
            </div>
        </div>
        <div class="row">
			<?foreach($arResult['ITEMS'] as $item){?>
				<div class="col-lg-4 col-md-4 col-sm-6">
								<div class="single-service brand-hover radius-4 mb-30 text-center">
									<div class="service-icon">
										<?if (isset($item['DETAIL_TEXT'])) {
											echo $item['DETAIL_TEXT'];
										} ?>
									</div>
									<div class="service-text">
										<h3>
										<?if (isset($item['NAME'])) {
											echo $item['NAME'];
										} ?>
										</h3>
										<p>
										<?if (isset($item['PREVIEW_TEXT'])) {
											echo $item['PREVIEW_TEXT'];
										} ?>
										</p>
									</div>
							</div>
				</div>
			<?}?>
          
         </div>
    </div>
</section>