
	<? 
	global $APPLICATION;

	$arr = $APPLICATION->IncludeComponent(
        "bitrix:menu.sections",
        "",
        array(
            "CACHE_TIME" => "36000000",
            "CACHE_TYPE" => "A",
            "DEPTH_LEVEL" => "1",
            "DETAIL_PAGE_URL" => "#SECTION_ID#/#ELEMENT_ID#",
            "IBLOCK_ID" => "20",
            "IBLOCK_TYPE" => "all",
            "ID" => $_REQUEST["ID"],
            "IS_SEF" => "Y",
            "SECTION_PAGE_URL" => "#SECTION_CODE#/",
            "SECTION_URL" => "",
            "SEF_BASE_URL" => "/portfolio/"
        )
    );
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
	die();
    ?>
