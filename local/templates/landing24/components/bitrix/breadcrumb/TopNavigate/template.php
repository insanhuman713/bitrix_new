<?php
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();

/**
 * @global CMain $APPLICATION
 */

global $APPLICATION;

//delayed function must return a string
if(empty($arResult))
	return "";

$strReturn = '';
//we can't use $APPLICATION->SetAdditionalCSS() here because we are inside the buffered function GetNavChain()
$css = $APPLICATION->GetCSSArray();
if(!is_array($css) || !in_array("/bitrix/css/main/font-awesome.css", $css))
{
	$strReturn .= '<link href="'.CUtil::GetAdditionalFileURL("/bitrix/css/main/font-awesome.css").'" type="text/css" rel="stylesheet" />'."\n";
}

foreach($arResult as $key=>$arTitle){//Хардкорно удаляю из хлебных крошек раздел инфобока который не должен там появляться в пункте "Услуги"
	if ($arTitle['TITLE'] == 'Основные направления')	unset($arResult[$key]);
}

$strReturn .= '<div class="col-md-5 col-sm-6">
					<div class="breadcrumb-menu">
						<ol class="breadcrumb text-right">';

$itemSize = count($arResult);
for($index = 0; $index < $itemSize; $index++)
{
	if ($index == $itemSize - 1) $link = '#';
	else $link = $arResult[$index]['LINK'];
	$strReturn.='
					<li>
						<a href="'.$link.'">'.$arResult[$index]['TITLE'].'</a>
					</li>
				';
}

		$strReturn .= '</ol>
					</div>
				</div>';

return $strReturn;


                       
                        