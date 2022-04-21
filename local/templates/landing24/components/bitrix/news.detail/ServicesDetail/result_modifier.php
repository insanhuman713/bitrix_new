<?
    if(isset($arResult['PROPERTIES']['detail_photo'])){
        $arr = CFile::GetFileArray($arResult['PROPERTIES']['detail_photo']['VALUE']);
        $arResult['PROPERTIES']['detail_photo']['SRC'] = $arr['SRC'];
      
    }
?>
