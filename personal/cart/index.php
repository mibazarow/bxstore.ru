<?
require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$APPLICATION->SetTitle("Корзина");
?><?$APPLICATION->IncludeComponent(
	"bitrix:sale.basket.basket",
	"bootstrap_v4",
	Array(
		"ACTION_VARIABLE" => "basketAction",
		"ADDITIONAL_PICT_PROP_4" => "-",
		"AUTO_CALCULATION" => "Y",
		"BASKET_IMAGES_SCALING" => "adaptive",
		"COLUMNS_LIST_EXT" => array("PREVIEW_PICTURE","PREVIEW_TEXT","DISCOUNT","DELETE"),
		"COLUMNS_LIST_MOBILE" => array("PREVIEW_PICTURE","DISCOUNT","DELETE"),
		"COMPATIBLE_MODE" => "Y",
		"CORRECT_RATIO" => "Y",
		"DEFERRED_REFRESH" => "N",
		"DISCOUNT_PERCENT_POSITION" => "bottom-right",
		"DISPLAY_MODE" => "extended",
		"EMPTY_BASKET_HINT_PATH" => "/catalog/",
		"GIFTS_BLOCK_TITLE" => "Выберите один из подарков",
		"GIFTS_CONVERT_CURRENCY" => "N",
		"GIFTS_HIDE_BLOCK_TITLE" => "N",
		"GIFTS_HIDE_NOT_AVAILABLE" => "N",
		"GIFTS_MESS_BTN_BUY" => "Выбрать",
		"GIFTS_MESS_BTN_DETAIL" => "Подробнее",
		"GIFTS_PAGE_ELEMENT_COUNT" => "4",
		"GIFTS_PLACE" => "BOTTOM",
		"GIFTS_PRODUCT_PROPS_VARIABLE" => "prop",
		"GIFTS_PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"GIFTS_SHOW_DISCOUNT_PERCENT" => "Y",
		"GIFTS_SHOW_OLD_PRICE" => "N",
		"GIFTS_TEXT_LABEL_GIFT" => "Подарок",
		"HIDE_COUPON" => "Y",
		"LABEL_PROP" => array(),
		"PATH_TO_ORDER" => "/personal/order_make/",
		"PRICE_DISPLAY_MODE" => "Y",
		"PRICE_VAT_SHOW_VALUE" => "N",
		"PRODUCT_BLOCKS_ORDER" => "props,sku,columns",
		"QUANTITY_FLOAT" => "Y",
		"SET_TITLE" => "Y",
		"SHOW_DISCOUNT_PERCENT" => "Y",
		"SHOW_FILTER" => "Y",
		"SHOW_RESTORE" => "Y",
		"TEMPLATE_THEME" => "",
		"TOTAL_BLOCK_DISPLAY" => array("bottom"),
		"USE_DYNAMIC_SCROLL" => "Y",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"USE_GIFTS" => "N",
		"USE_PREPAYMENT" => "N",
		"USE_PRICE_ANIMATION" => "Y"
	)
);?>

<?$APPLICATION->IncludeComponent("bitrix:sale.order.ajax", "order", Array(
    "ACTION_VARIABLE" => "soa-action",	// Название переменной, в которой передается действие
    "ADDITIONAL_PICT_PROP_4" => "-",	// Дополнительная картинка [Каталог игрушек]
    "ALLOW_APPEND_ORDER" => "Y",	// Разрешить оформлять заказ на существующего пользователя
    "ALLOW_AUTO_REGISTER" => "Y",	// Оформлять заказ с автоматической регистрацией пользователя
    "ALLOW_NEW_PROFILE" => "N",	// Разрешить множество профилей покупателей
    "ALLOW_USER_PROFILES" => "N",	// Разрешить использование профилей покупателей
    "BASKET_IMAGES_SCALING" => "adaptive",	// Режим отображения изображений товаров
    "BASKET_POSITION" => "before",	// Расположение списка товаров
    "COMPATIBLE_MODE" => "Y",	// Режим совместимости для предыдущего шаблона
    "DELIVERIES_PER_PAGE" => "9",	// Количество доставок на странице
    "DELIVERY_FADE_EXTRA_SERVICES" => "N",	// Дополнительные услуги, которые будут показаны в пройденном (свернутом) блоке
    "DELIVERY_NO_AJAX" => "N",	// Когда рассчитывать доставки с внешними системами расчета
    "DELIVERY_NO_SESSION" => "Y",	// Проверять сессию при оформлении заказа
    "DELIVERY_TO_PAYSYSTEM" => "d2p",	// Последовательность оформления
    "DISABLE_BASKET_REDIRECT" => "N",	// Оставаться на странице оформления заказа, если список товаров пуст
    "EMPTY_BASKET_HINT_PATH" => "/",	// Путь к странице для продолжения покупок
    "HIDE_ORDER_DESCRIPTION" => "N",	// Скрыть поле комментариев к заказу
    "ONLY_FULL_PAY_FROM_ACCOUNT" => "N",	// Разрешить оплату с внутреннего счета только в полном объеме
    "PATH_TO_AUTH" => "/personal/auth/",	// Путь к странице авторизации
    "PATH_TO_BASKET" => "/personal/cart/",	// Путь к странице корзины
    "PATH_TO_PAYMENT" => "",	// Страница подключения платежной системы
    "PATH_TO_PERSONAL" => "/personal/order_history",	// Путь к странице персонального раздела
    "PAY_FROM_ACCOUNT" => "N",	// Разрешить оплату с внутреннего счета
    "PAY_SYSTEMS_PER_PAGE" => "9",	// Количество платежных систем на странице
    "PICKUPS_PER_PAGE" => "5",	// Количество пунктов самовывоза на странице
    "PICKUP_MAP_TYPE" => "yandex",	// Тип используемых карт
    "PRODUCT_COLUMNS_HIDDEN" => "",	// Свойства товаров отображаемые в свернутом виде в списке товаров
    "PRODUCT_COLUMNS_VISIBLE" => array(	// Выбранные колонки таблицы списка товаров
        0 => "PREVIEW_PICTURE",
        1 => "PROPS",
    ),
    "PROPS_FADE_LIST_1" => "",	// Свойства заказа, которые будут показаны в пройденном (свернутом) блоке (Физическое лицо)[s1]
    "PROPS_FADE_LIST_2" => "",	// Свойства заказа, которые будут показаны в пройденном (свернутом) блоке (Юридическое лицо)[s1]
    "SEND_NEW_USER_NOTIFY" => "Y",	// Отправлять пользователю письмо, что он зарегистрирован на сайте
    "SERVICES_IMAGES_SCALING" => "adaptive",	// Режим отображения вспомагательных изображений
    "SET_TITLE" => "Y",	// Устанавливать заголовок страницы
    "SHOW_BASKET_HEADERS" => "N",	// Показывать заголовки колонок списка товаров
    "SHOW_COUPONS" => "N",	// Отображать поля ввода купонов
    "SHOW_COUPONS_BASKET" => "Y",
    "SHOW_COUPONS_DELIVERY" => "Y",
    "SHOW_COUPONS_PAY_SYSTEM" => "Y",
    "SHOW_DELIVERY_INFO_NAME" => "Y",	// Отображать название в блоке информации по доставке
    "SHOW_DELIVERY_LIST_NAMES" => "Y",	// Отображать названия в списке доставок
    "SHOW_DELIVERY_PARENT_NAMES" => "Y",	// Показывать название родительской доставки
    "SHOW_MAP_IN_PROPS" => "N",	// Показывать карту в блоке свойств заказа
    "SHOW_NEAREST_PICKUP" => "N",	// Показывать ближайшие пункты самовывоза
    "SHOW_NOT_CALCULATED_DELIVERIES" => "L",	// Отображение доставок с ошибками расчета
    "SHOW_ORDER_BUTTON" => "final_step",	// Отображать кнопку оформления заказа (для неавторизованных пользователей)
    "SHOW_PAY_SYSTEM_INFO_NAME" => "Y",	// Отображать название в блоке информации по платежной системе
    "SHOW_PAY_SYSTEM_LIST_NAMES" => "Y",	// Отображать названия в списке платежных систем
    "SHOW_PICKUP_MAP" => "N",	// Показывать карту для доставок с самовывозом
    "SHOW_STORES_IMAGES" => "Y",	// Показывать изображения складов в окне выбора пункта выдачи
    "SHOW_TOTAL_ORDER_BUTTON" => "N",	// Отображать дополнительную кнопку оформления заказа
    "SHOW_VAT_PRICE" => "Y",	// Отображать значение НДС
    "SKIP_USELESS_BLOCK" => "Y",	// Пропускать шаги, в которых один элемент для выбора
    "SPOT_LOCATION_BY_GEOIP" => "Y",	// Определять местоположение покупателя по IP-адресу
    "TEMPLATE_LOCATION" => "popup",	// Визуальный вид контрола выбора местоположений
    "TEMPLATE_THEME" => "blue",	// Цветовая тема
    "USER_CONSENT" => "N",	// Запрашивать согласие
    "USER_CONSENT_ID" => "0",	// Соглашение
    "USER_CONSENT_IS_CHECKED" => "N",	// Галка по умолчанию проставлена
    "USER_CONSENT_IS_LOADED" => "N",	// Загружать текст сразу
    "USE_CUSTOM_ADDITIONAL_MESSAGES" => "N",	// Заменить стандартные фразы на свои
    "USE_CUSTOM_ERROR_MESSAGES" => "N",	// Заменить стандартные фразы на свои
    "USE_CUSTOM_MAIN_MESSAGES" => "N",	// Заменить стандартные фразы на свои
    "USE_ENHANCED_ECOMMERCE" => "N",	// Отправлять данные электронной торговли в Google и Яндекс
    "USE_PHONE_NORMALIZATION" => "Y",	// Использовать нормализацию номера телефона
    "USE_PRELOAD" => "Y",	// Автозаполнение оплаты и доставки по предыдущему заказу
    "USE_PREPAYMENT" => "N",	// Использовать предавторизацию для оформления заказа (PayPal Express Checkout)
    "USE_YM_GOALS" => "N",	// Использовать цели счетчика Яндекс.Метрики
    "COMPONENT_TEMPLATE" => "bootstrap_v4"
),
    false
);?>

<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>