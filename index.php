<?
require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/header.php");
$APPLICATION->SetTitle("Интернет-магазин \"Одежда\"");
?>

    <div class="content">
        <div class="content_left">
            <img src="<?= SITE_TEMPLATE_PATH ?>/img/i.jpg" alt="Я">
        </div>
        <div class="content_right">
            <h1>Вязанные игрушки ручной работы, купить у мастера.</h1>
            <p>
                Конкретная игрушка может незначительно отличаться- это естественное явление для любого «HandMade»
                изделия,
                ведь все мы немного разные, каждый привносит в работу частичку своей души.
            </p>

            <ul class="content_socials">
                <li>
                    <a href="https://instagram.com/a_kutseva/" rel="nofollow" target="_blank">
                        <svg>
                            <use xlink:href="#instagram"></use>
                        </svg>
                        instagram.com/a_kutseva/
                    </a>
                </li>
                <li>
                    <a href="https://vk.com/club80096689/" rel="nofollow" target="_blank">
                        <svg>
                            <use xlink:href="#vk"></use>
                        </svg>
                        vk.com/club80096689
                    </a>
                </li>
            </ul>
        </div>
    </div>


<? // Элементы раздела
$APPLICATION->IncludeComponent(
	"bitrix:catalog.section", 
	"section", 
	array(
		"IBLOCK_TYPE" => "knit_shop",
		"IBLOCK_ID" => "4",
		"SECTION_ID" => "",
		"SECTION_CODE" => "",
		"SECTION_USER_FIELDS" => array(
			0 => "",
			1 => "",
		),
		"ELEMENT_SORT_FIELD" => "RAND",
		"ELEMENT_SORT_ORDER" => "asc",
		"ELEMENT_SORT_FIELD2" => "id",
		"ELEMENT_SORT_ORDER2" => "desc",
		"FILTER_NAME" => "arrFilter",
		"INCLUDE_SUBSECTIONS" => "Y",
		"SHOW_ALL_WO_SECTION" => "N",
		"HIDE_NOT_AVAILABLE" => "N",
		"PAGE_ELEMENT_COUNT" => "6",
		"LINE_ELEMENT_COUNT" => "3",
		"PROPERTY_CODE" => array(
			0 => "ATT_MATERIAL",
			1 => "ATT_NAPOLNITEL",
			2 => "",
		),
		"OFFERS_LIMIT" => "5",
		"SECTION_URL" => "/catalog/#SECTION_CODE#/",
		"DETAIL_URL" => "/catalog/#SECTION_CODE#/#ELEMENT_CODE#/",
		"SECTION_ID_VARIABLE" => "SECTION_CODE",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "Y",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"CACHE_TYPE" => "A",
		"CACHE_TIME" => "36000000",
		"CACHE_NOTES" => "",
		"CACHE_GROUPS" => "Y",
		"SET_TITLE" => "N",
		"SET_BROWSER_TITLE" => "N",
		"BROWSER_TITLE" => "-",
		"SET_META_KEYWORDS" => "N",
		"META_KEYWORDS" => "-",
		"SET_META_DESCRIPTION" => "N",
		"META_DESCRIPTION" => "-",
		"ADD_SECTIONS_CHAIN" => "N",
		"SET_STATUS_404" => "Y",
		"CACHE_FILTER" => "N",
		"ACTION_VARIABLE" => "action",
		"PRODUCT_ID_VARIABLE" => "id",
		"PRICE_CODE" => array(
			0 => "BASE",
		),
		"USE_PRICE_COUNT" => "N",
		"SHOW_PRICE_COUNT" => "1",
		"PRICE_VAT_INCLUDE" => "Y",
		"CONVERT_CURRENCY" => "N",
		"BASKET_URL" => "/personal/cart/",
		"USE_PRODUCT_QUANTITY" => "N",
		"PRODUCT_QUANTITY_VARIABLE" => "quantity",
		"ADD_PROPERTIES_TO_BASKET" => "Y",
		"PRODUCT_PROPS_VARIABLE" => "prop",
		"PARTIAL_PRODUCT_PROPERTIES" => "N",
		"PRODUCT_PROPERTIES" => array(
		),
		"DISPLAY_COMPARE" => "N",
		"PAGER_TEMPLATE" => ".default",
		"DISPLAY_TOP_PAGER" => "N",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"PAGER_TITLE" => "Товары",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"COMPONENT_TEMPLATE" => "section",
		"CUSTOM_FILTER" => "{\"CLASS_ID\":\"CondGroup\",\"DATA\":{\"All\":\"AND\",\"True\":\"True\"},\"CHILDREN\":[]}",
		"HIDE_NOT_AVAILABLE_OFFERS" => "N",
		"PROPERTY_CODE_MOBILE" => "",
		"BACKGROUND_IMAGE" => "-",
		"TEMPLATE_THEME" => "blue",
		"PRODUCT_ROW_VARIANTS" => "[{'VARIANT':'2','BIG_DATA':false},{'VARIANT':'2','BIG_DATA':false}]",
		"ENLARGE_PRODUCT" => "STRICT",
		"PRODUCT_BLOCKS_ORDER" => "price,props,sku,quantityLimit,quantity,buttons",
		"SHOW_SLIDER" => "N",
		"ADD_PICT_PROP" => "-",
		"LABEL_PROP" => "",
		"PRODUCT_SUBSCRIPTION" => "N",
		"SHOW_DISCOUNT_PERCENT" => "N",
		"SHOW_OLD_PRICE" => "N",
		"SHOW_MAX_QUANTITY" => "N",
		"SHOW_CLOSE_POPUP" => "N",
		"MESS_BTN_BUY" => "Купить",
		"MESS_BTN_ADD_TO_BASKET" => "В корзину",
		"MESS_BTN_SUBSCRIBE" => "Подписаться",
		"MESS_BTN_DETAIL" => "Подробнее",
		"MESS_NOT_AVAILABLE" => "Нет в наличии",
		"RCM_TYPE" => "personal",
		"RCM_PROD_ID" => $_REQUEST["PRODUCT_ID"],
		"SHOW_FROM_SECTION" => "N",
		"SEF_MODE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"USE_MAIN_ELEMENT_SECTION" => "N",
		"ADD_TO_BASKET_ACTION" => "ADD",
		"USE_ENHANCED_ECOMMERCE" => "N",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"LAZY_LOAD" => "Y",
		"BY_LINK" => "Y",
		"MESS_BTN_LAZY_LOAD" => "Показать ещё",
		"LOAD_ON_SCROLL" => "N",
		"SHOW_404" => "N",
		"MESSAGE_404" => "",
		"COMPATIBLE_MODE" => "N",
		"DISABLE_INIT_JS_IN_COMPONENT" => "N"
	),
	false
); ?>

    <!-- КАТАЛОГ -->


    <div class="content_main_page">
        <h2>Вязанные игрушки ручной работы из безопасных материалов</h2>


        <p>Игрушка, сувенир, любая вещь созданная вручную - это замечательный, наполненный положительной энергией
            подарок для друзей и близких. Каждое изделие содержит часть душевного тепла и искренней заботы.
        </p>

        <blockquote>
            Уникальные вязанные вещи помогут Вам выделиться среди массы фабричных однотипных изделий. Игрушки и сувениры
            связанные или сшитые вручную всегда несут с собой массу положительных эмоций.
        </blockquote>
        <p>

            Приобретая изделия сделанные вручную можно быть уверенным в качестве материалов, из которых они созданы, что
            особенно актуально при заказе для малышей.
            Каждый не раз сталкивался с проблемой выбора интересного необычного подарка.
        </p>
    </div>


<? require($_SERVER["DOCUMENT_ROOT"] . "/bitrix/footer.php"); ?>