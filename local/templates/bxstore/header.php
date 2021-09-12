<? if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die();
$CurDir = $APPLICATION->GetCurDir();
$CurUri = $APPLICATION->GetCurUri();
?>
<!doctype html>
<html lang="ru">
<head>
    <?

    use Bitrix\Main\Page\Asset;

    // Пример подключения JS
    Asset::getInstance()->addJs(SITE_TEMPLATE_PATH . '/js/jquery-3.6.0.min.js');
    // Пример подключения CSS
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/vars.min.css');
    Asset::getInstance()->addCss(SITE_TEMPLATE_PATH . '/css/bootstrap-grid.min.css');
    $APPLICATION->ShowHead();
    ?>
    <meta name='viewport' content='width=device-width, initial-scale=1'>
    <title><? $APPLICATION->ShowTitle() ?></title>
</head>
<body>

<?
$APPLICATION->ShowPanel();
?>


<div class="container">
    <div class="header">
        <div class="header_logo">
            <a href="/">
                <img src="<?= SITE_TEMPLATE_PATH ?>/img/logo.png" alt="Магазин вязанных игрушек">
            </a>
        </div>
        <div class="header_content">
            <div class="header_content_row">
                <span>Вязанные игрушки: <i>ручной работы</i></span>
            </div>
            <div class="header_content_row">
                <? // Поиск по заголовкам - http://dev.1c-bitrix.ru/user_help/settings/search/components_2/search_title.php
                $APPLICATION->IncludeComponent("bitrix:search.title", "main_search", array(
                    "NUM_CATEGORIES" => "1",    // Количество категорий поиска
                    "TOP_COUNT" => "5",    // Количество результатов в каждой категории
                    "ORDER" => "date",    // Сортировка результатов
                    "USE_LANGUAGE_GUESS" => "Y",    // Включить автоопределение раскладки клавиатуры
                    "CHECK_DATES" => "N",    // Искать только в активных по дате документах
                    "SHOW_OTHERS" => "N",    // Показывать категорию "прочее"
                    "PAGE" => "#SITE_DIR#search/index.php",    // Страница выдачи результатов поиска (доступен макрос #SITE_DIR#)
                    "CATEGORY_0_TITLE" => "",    // Название категории
                    "CATEGORY_0" => array(    // Ограничение области поиска
                        0 => "all",
                    )
                ),
                    false
                ); ?>
            </div>
            <div class="header_content_row">
                <? $APPLICATION->IncludeComponent("bitrix:menu", "main_menu", array(
                    "ALLOW_MULTI_SELECT" => "N",    // Разрешить несколько активных пунктов одновременно
                    "CHILD_MENU_TYPE" => "left",    // Тип меню для остальных уровней
                    "DELAY" => "N",    // Откладывать выполнение шаблона меню
                    "MAX_LEVEL" => "1",    // Уровень вложенности меню
                    "MENU_CACHE_GET_VARS" => array(    // Значимые переменные запроса
                        0 => "",
                    ),
                    "MENU_CACHE_TIME" => "3600",    // Время кеширования (сек.)
                    "MENU_CACHE_TYPE" => "A",    // Тип кеширования
                    "MENU_CACHE_USE_GROUPS" => "Y",    // Учитывать права доступа
                    "ROOT_MENU_TYPE" => "top",    // Тип меню для первого уровня
                    "USE_EXT" => "N",    // Подключать файлы с именами вида .тип_меню.menu_ext.php
                ),
                    false
                ); ?>
            </div>
        </div>
        <div class="header_cart">
            <a href="/">Выйти</a>
            <? // Ссылка на корзину
            $APPLICATION->IncludeComponent("bitrix:sale.basket.basket.line", "small_basket", array(),
                false
            ); ?>
        </div>
    </div>
</div>





