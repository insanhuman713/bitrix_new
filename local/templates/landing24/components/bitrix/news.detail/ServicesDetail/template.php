<!-- шаблон вывода детальной страницы Services, на этот шаблон ссылается detail.php-->
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

<!-- ДЛЯ СТРАНИЦЫ УСЛУГИ -->
<!-- Описание + картинка -->
<?if(isset($arResult['PROPERTIES'])){?>
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1"><?= $arResult['PROPERTIES']['detail_title']['VALUE'] ?? ''?></h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                   	<?if(isset($arResult['PROPERTIES']['detail_descr']['VALUE'])){
							foreach($arResult['PROPERTIES']['detail_descr']['VALUE']  as $arItem){?>
										<p>
											<?= htmlspecialchars_decode($arItem['TEXT']) ?? ''?>
										</p>
								
							<?} 
						}?>
					
                   
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <img src="<?=$arResult['PROPERTIES']['detail_photo']['SRC']?>" alt="" />
                </div>
            </div>
        </div>
    </div>
</section>

<!-- Доп. контент об услуге -->
<div class="pb-60">
    <div class="container">
    <?if(!empty($arResult['PROPERTIES']['detail_stages']['VALUE'])){?>
        <div class="row">
            <div class="col-md-6">
                <h3 class="mb-30">Вопросы и ответы</h3>
                <div class="brand-accordion">
                    <div class="panel-group icon angle-icon" id="accordion" role="tablist" aria-multiselectable="false">
                        <!-- Вопросы и ответы -->
                        <?foreach($arResult['PROPERTIES']['detail_ask']['DESCRIPTION'] as $index => $ask){?>
                            <div class="panel panel-default">
                                <div class="panel-heading" role="tab" id="heading<?=1+$index?>">
                                    <h4 class="panel-title">
                                        <a role="button" data-toggle="collapse" data-parent="#accordion" 
                                           href="#collapse<?=1+$index?>"
                                           aria-expanded="false" 
                                           aria-controls="collapse<?=1+$index?>">
                                               <?=htmlspecialchars_decode($ask) ?? ''?>
                                        </a>
                                    </h4>
                                </div>
                                <div id="collapse<?=1+$index?>" class="panel-collapse collapse" 
                                    role="tabpanel" aria-labelledby="heading<?=1+$index?>">
                                    <div class="panel-body">
                                         <?=htmlspecialchars_decode($arResult['PROPERTIES']['detail_ask']['VALUE'][$index]['TEXT']) ?? '' ?>
                                    </div>
                                </div>
                            </div>
                        <?}?>
                        
                       
                    </div>
                </div>
            </div>
            
                    <!-- Этапы разработки -->
                                <div class="col-lg-6 col-md-6">
                                    <h3 class="mb-30">Этапы разработки</h3>
                                    <div class="my-tab">
                                        <!-- Nav tabs -->
                                        <ul class="custom-tab mb-15" role="tablist">
                                            <?foreach($arResult['PROPERTIES']['detail_stages']['DESCRIPTION'] as $index => $stage){?>
                                                <li role="presentation" class="<?=$index == 0 ? 'active': '' ?>">
                                                    <a href="#<?=$srtTransl = CUtil::translit($stage,'ru')?>" 
                                                    aria-controls="<?=$srtTransl?>" role="tab" data-toggle="tab">
                                                        <?=$stage ?? ''?>
                                                    </a>
                                                </li>
                                            <?}?>
                                            
                                            
                                        </ul>

                                        <!-- Tab panes -->
                                        <div class="tab-content">
                                        <?foreach($arResult['PROPERTIES']['detail_stages']['VALUE'] as $index => $value){?>
                                            <div role="tabpanel" 
                                            class="tab-pane fade <?= $index == 0 ? 'in active' : '' ?>" 
                                            id="<?= CUtil::translit($arResult['PROPERTIES']['detail_stages']['DESCRIPTION'][$index],'ru')?>">
                                                <p>
                                                    <?= $value['TEXT'] ?? '' ?>
                                                </p>
                                            </div>
                                        <?}?>    
                                            
                                        
                                        </div>
                                    </div>
                                </div>
             
        </div>
    <?}?>
    </div>
</div>
<?}?>

