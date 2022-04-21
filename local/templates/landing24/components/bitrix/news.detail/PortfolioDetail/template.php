<!-- шаблон вывода детальной страницы portfolio, на этот шаблон ссылается detail.php-->
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
$APPLICATION->SetPageProperty('Title', $arResult['PROPERTIES']['detail_title']['VALUE']);
?>

	<!-- Контент для детальной страниыцы портфолио -->
<div class="single-portfolio-area pt-90 pb-60">
    <div class="container">
        <div class="row">
            <div class="col-md-7">
                <div class="portfolio-details">
                    <h3><?= $arResult['PROPERTIES']['detail_title']['VALUE']?></h3>
					<?
						foreach($arResult['PROPERTIES']['description']['VALUE'] as $key=>$val){?>
							<span class="text-colort-blue">
								<?= $arResult['PROPERTIES']['description']['DESCRIPTION'][$key]?>
							</span>
							<p>
								<?= $val['TEXT']?>
							</p>
						<?}?>
                   
                  
                </div>
            </div>
			
               
						<?if(isset($arResult['PROPERTIES']['add_info']) && !empty($arResult['PROPERTIES']['add_info']['VALUE']) ){?>
							<!-- Правый блок, где  заказчик, сделано и технологии -->
							<div class="col-md-5">
							<div class="portfolio-meta">
                   				 <ul>
								<?foreach($arResult['PROPERTIES']['add_info']['VALUE'] as $key_index=>$val_index){?>
										<li><span><b><?=$arResult['PROPERTIES']['add_info']['VALUE'][$key_index] ?? ''; ?></b> </span> <?=$arResult['PROPERTIES']['add_info']['DESCRIPTION'][$key_index] ?? ''; ?></li>
								<?}?>



								<?if(isset($arResult['PROPERTIES']['link']) && !empty($arResult['PROPERTIES']['add_info']['VALUE']) ){?>
									<a href="<?=$arResult['PROPERTIES']['link']['VALUE'] ?? ''; ?>" class="btn mt-30"><?=$arResult['PROPERTIES']['link']['DESCRIPTION'] ?? ''; ?></a>
								<?}?>	 

									 </ul>
					
               				</div>
							</div>
                       		<?}	?>
					   
                   
            
        </div>
    </div>
</div>
<!-- Фотогалерея -->
<?if(isset($arResult['PROPERTIES']['photos'])){?>
	<div class="img-gallery-area pt-30 pb-60">
    <div class="container">
        <div class="row">
			<?foreach($arResult['PROPERTIES']['photos'] as $photoSrc){?>
								<div class="col-md-6 col-sm-4">
									<div class="img-gallery hover-bg-opacity mb-30">
										<a class="image-link" href="<?= $photoSrc  ?? ''; ?>">
											<img src="<?= $photoSrc  ?? '';?> " alt="" /></a>
									</div>
								</div>				
			<?}?>
	    </div>
    </div>
</div>
<?}?>

