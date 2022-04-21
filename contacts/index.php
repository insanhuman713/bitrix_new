<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetPageProperty('Title', 'О нас | We Coders');
$APPLICATION->SetPageProperty('description', 'Какое-то описание страницы "Контакты" ');
$APPLICATION->SetPageProperty('keywords', 'КЛЮЧЕВЫЕ СЛОВА СТРАНИЦЫ "Контакты"');
$APPLICATION->SetPageProperty('robots', 'index, follow');
$APPLICATION->SetPageProperty('title', 'Наши Контакты');
?>
<?$APPLICATION->IncludeComponent(
	"bitrix:main.feedback",
	"",
	Array(
		"EMAIL_TO" => "www@gmail.com",
		"EVENT_MESSAGE_ID" => array(),
		"OK_TEXT" => "Спасибо, ваше сообщение принято.",
		"REQUIRED_FIELDS" => array("NAME","EMAIL","PHONE"),//какие поля должны быть обезательными
		"USE_CAPTCHA" => "N",
        "AJAX_MODE" => "Y",// включаем AJAX 
	)
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>