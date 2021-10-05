<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use \Bitrix\Main;
$this->setFrameMode(true);
?>

<a href="<?=$arResult['ITEM']['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>" data-entity="image-wrapper">
    <img src="<?=$arResult['ITEM']['PREVIEW_PICTURE']['SRC']?>" alt="">

    <?=$arResult['ITEM']['NAME']?>

    <?
    foreach ($arResult['ITEM']['ITEM_PRICES'] as $ITEM_PRICE) {
        echo $ITEM_PRICE['PRINT_PRICE'];
    }
    ?>
    <ul>
        <? foreach ($arResult['ITEM']['DISPLAY_PROPERTIES'] as $PROPERTY) { ?>
            <li>
                <?= $PROPERTY['NAME'] ?>:
                <? if (is_array($PROPERTY['VALUE'])) { ?>
                    <? echo implode(', ', $PROPERTY['VALUE']) ?>
                    <?
                } else { ?>
                    <?= $PROPERTY['VALUE'] ?>
                    <?
                } ?>
            </li>
            <?
        } ?>
    </ul>
</a>