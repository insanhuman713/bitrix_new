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
<!-- Услуги -->
<section id="pricing" class="pricing-area bg-color pt-60 pb-60">
    <div class="container">
        <div class="row">
            <div class="section-heading text-center mb-70">
                <h2>Разработка сайта</h2>
                <p>Какой сайт вам нужен? Выбирайте, оставляйте заявку в форме ниже и мы свяжемся с вами!</p>
            </div>
        </div>
        <div class="row">
			<!-- Виды сайтов: лендинг, сайт визитка и т.д. -->
			<?foreach($arResult['ITEMS'] as $arKey => $arItem){?>
				<div class="col-lg-3 col-md-3 col-sm-6">
					<div class="single-pricing text-center mb-30">
						<div class="pricing-head">
							<h2 class="pricing-title text-uppercase">
								<?=$arItem['FIELDS']['NAME'] ?? ''?>
							</h2>
							<span>
								<?
									if($arItem['FIELDS']['NAME'] == 'ЛЕНДИНГ'){ echo 'Одностраничный сайт';}
									else if($arItem['FIELDS']['NAME'] == 'КОРП. САЙТ'){echo 'Любой сложности';}
										else {echo'';}
								?>
							</span> 
						</div>
						<div class="pricing-plan-price <?
															switch ($arKey) {
																case '0':
																	echo 'basic-bg';
																	break;
																case '1':
																	echo 'standard-bg';
																	break;
																case '2':
																	echo 'premium-bg';
																	break;
																case '3':
																	echo 'unlimited-bg"';
																	break;
																default:
																	echo 'basic-bg';
																	break;
															}
														?>">
							<span><span>от </span><?= $arItem['FIELDS']['DETAIL_TEXT'] ?? '' ?> <span>₽</span></span>
						</div>
						<div class="pricing-plan-list">
							<?=$arItem['PREVIEW_TEXT'] ?? ''?>
							
						</div>
						<div class="get-started">
							<a href="<?=$arItem['DETAIL_PAGE_URL'] ?? ''?>" class="btn">Узнать больше</a>
						</div>
					</div>
				</div>
			<?}?>
            
           
        </div>
    </div>
</section>
