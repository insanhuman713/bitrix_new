<!-- шаблон вывода основной страницы portfolio, на этот шаблон ссылается news.php-->
<?
use function PHPSTORM_META\type;

if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
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

<!-- Портфолио -->
	<div class="row">
        	<?if(!empty($arResult)){?>
				<div id="Container">
								<?foreach ($arResult['ITEMS'] as $item) { ?>
									
																
									<div class="col-md-4 col-sm-6 col-xs-12 mb-30 mix <?= isset($item['SECTIONS_CODES']) ? $item['SECTIONS_CODES'] : ''; ?>">
										<div class="portfolio-wrapper portfolio-title">
											<div class="portfolio-img">
												<!-- маленькая картинка -->
												<img src="<?if(!empty($item['PREVIEW_PICTURE']['SRC'])) echo $item['PREVIEW_PICTURE']['SRC']?>" alt="<?if(!empty($item['PREVIEW_PICTURE']['SRC'])) echo $item['PREVIEW_PICTURE']['SRC']?>"/>
												<div class="work-text brand-bg">
													<!-- большая картинка -->
													<div class="inner-text">
														<a class="view-portfolio image-link" href="<?if(!empty($item['PREVIEW_PICTURE']['SRC'])) echo $item['PREVIEW_PICTURE']['SRC']?>">
															<span class="plus"></span>
														</a>
													</div>
												</div>
											</div>
											<div class="portfolio-heading pd-15">
												<h4 class="mb-10">
													<a href="<?if(!empty($item['DETAIL_PAGE_URL'])) echo $item['DETAIL_PAGE_URL']?>"><?if(!empty($item['NAME'])) echo $item['NAME']?></a>
												</h4>
												<h5 class="m-0"><?if(!empty($item['PREVIEW_TEXT'])) echo $item['PREVIEW_TEXT']?></h5>
											</div>
										</div>
									</div>
								<?}?>
						</div>
					<?}?>
			<!-- Список Элементов -->
           


        </div>
    </div>
</section>
