<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();
use \Bitrix\Main;
$this->setFrameMode(true);
?>

<a class="catalog_item_element" href="<?=$arResult['ITEM']['DETAIL_PAGE_URL']?>" title="<?=$imgTitle?>" data-entity="image-wrapper">
    <img src="<?=$arResult['ITEM']['PREVIEW_PICTURE']['SRC']?>" alt="">
    <strong><?=$arResult['ITEM']['NAME']?></strong>
    <span>
    <?
    foreach ($arResult['ITEM']['ITEM_PRICES'] as $ITEM_PRICE) {
        echo $ITEM_PRICE['PRINT_PRICE'];
    }
    ?>
        </span>
    <ul>
        <? foreach ($arResult['ITEM']['DISPLAY_PROPERTIES'] as $PROPERTY) { ?>
            <li>
                <i><?= $PROPERTY['NAME'] ?>:</i>
                <? if (is_array($PROPERTY['VALUE'])) { ?>
                    <? echo implode(', ', TruncateText($PROPERTY['VALUE'], 11)) ?>
                    <?
                } else { ?>
                    <? echo TruncateText($PROPERTY['VALUE'], 11); ?>
                    <?
                } ?>
            </li>
            <?
        } ?>
    </ul>
</a>