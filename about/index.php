<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty('Title', 'О нас | We Coders');
$APPLICATION->SetPageProperty('description', 'Какое-то описание страницы "О нас" ');
$APPLICATION->SetPageProperty('keywords', 'КЛЮЧЕВЫЕ СЛОВА СТРАНИЦЫ "О нас"');
$APPLICATION->SetPageProperty('robots', 'index, follow');
?>
<!-- О нас -->
<section class="who-area-are pad-90" id="about_us">
    <div class="container">
        <h2 class="title-1">
            <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_title",
                   
                )
            );?>
        </h2>
        <div class="row">
            <div class="col-md-7">
                <div class="who-we">
                <?$APPLICATION->IncludeComponent(
                "bitrix:main.include",
                "",
                Array(
                    "AREA_FILE_SHOW" => "page",
                    "AREA_FILE_SUFFIX" => "about_descr",
                   
                )
            );?>                    
                </div>
            </div>
            <div class="col-md-5">
                <div class="about-bg">
                    <?$APPLICATION->IncludeComponent(
                    "bitrix:main.include",
                    "",
                    Array(
                        "AREA_FILE_SHOW" => "page",
                        "AREA_FILE_SUFFIX" => "about_img",
                    
                    )
                );?>
                </div>
            </div>
        </div>
    </div>
</section>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>