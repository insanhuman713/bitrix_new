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
<?if(isset($arResult['ITEMS'])){?>
	<div class="col-lg-6 col-md-6">
					<div class="our-skill">
						<h2 class="title-1">Skills</h2>
						<div class="progress-list">
							<?
								foreach($arResult['ITEMS'] as $arItem){?>
									<div class="progress">
										<div class="lead"><?=$arItem['NAME'] ?? ''?></div>
										<div class="progress-bar" role="progressbar" aria-valuenow="60" aria-valuemin="0" aria-valuemax="100" 
										style="width: <?=$arItem['PREVIEW_TEXT'] ?? ''?>%;">
											<span><?=$arItem['PREVIEW_TEXT'] ?? ''?>%</span>
										</div>
									</div>
								<?}?>
							
							
						</div>
					</div>
				</div>
<?}?>
  