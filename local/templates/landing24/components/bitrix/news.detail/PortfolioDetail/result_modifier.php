<?
    if(!empty($arResult['PROPERTIES']['gallery']['VALUE'])){
     
        foreach($arResult['PROPERTIES']['gallery']['VALUE'] as $idKey => $idFile){
            $arrGallery = CFile::GetFileArray($idFile);
                 
            $arResult['PROPERTIES']['photos'][$idKey] = $arrGallery['SRC'];
        }
       
    }
?>
