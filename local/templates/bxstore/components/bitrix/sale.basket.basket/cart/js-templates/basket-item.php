<? if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED !== true) die();

use Bitrix\Main\Localization\Loc;

/**
 * @var array $mobileColumns
 * @var array $arParams
 * @var string $templateFolder
 */

$usePriceInAdditionalColumn = in_array('PRICE', $arParams['COLUMNS_LIST']) && $arParams['PRICE_DISPLAY_MODE'] === 'Y';
$useSumColumn = in_array('SUM', $arParams['COLUMNS_LIST']);
$useActionColumn = in_array('DELETE', $arParams['COLUMNS_LIST']);

$restoreColSpan = 2 + $usePriceInAdditionalColumn + $useSumColumn + $useActionColumn;

$positionClassMap = array(
    'left' => 'basket-item-label-left',
    'center' => 'basket-item-label-center',
    'right' => 'basket-item-label-right',
    'bottom' => 'basket-item-label-bottom',
    'middle' => 'basket-item-label-middle',
    'top' => 'basket-item-label-top'
);

$discountPositionClass = '';
if ($arParams['SHOW_DISCOUNT_PERCENT'] === 'Y' && !empty($arParams['DISCOUNT_PERCENT_POSITION'])) {
    foreach (explode('-', $arParams['DISCOUNT_PERCENT_POSITION']) as $pos) {
        $discountPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}

$labelPositionClass = '';
if (!empty($arParams['LABEL_PROP_POSITION'])) {
    foreach (explode('-', $arParams['LABEL_PROP_POSITION']) as $pos) {
        $labelPositionClass .= isset($positionClassMap[$pos]) ? ' ' . $positionClassMap[$pos] : '';
    }
}
?>
<script id="basket-item-template" type="text/html">
    <div class="items_table_item" id="basket-item-{{ID}}" data-entity="basket-item" data-id="{{ID}}">
        {{#SHOW_RESTORE}}
        <div class="d_n" colspan="<?= $restoreColSpan ?>">
            <div class="basket-items-list-item-notification-inner basket-items-list-item-notification-removed"
                 id="basket-item-height-aligner-{{ID}}">
                {{#SHOW_LOADING}}
                <div class="basket-items-list-item-overlay"></div>
                {{/SHOW_LOADING}}
                <div class="basket-items-list-item-removed-container">
                    <div>
                        <?= Loc::getMessage('SBB_GOOD_CAP') ?>
                        <strong>{{NAME}}</strong> <?= Loc::getMessage('SBB_BASKET_ITEM_DELETED') ?>.
                    </div>
                    <div class="basket-items-list-item-removed-block">
                        <a href="javascript:void(0)" data-entity="basket-item-restore-button">
                            <?= Loc::getMessage('SBB_BASKET_ITEM_RESTORE') ?>
                        </a>
                        <span class="basket-items-list-item-clear-btn"
                              data-entity="basket-item-close-restore-button"></span>
                    </div>
                </div>
            </div>
        </div>
        {{/SHOW_RESTORE}}
        {{^SHOW_RESTORE}}
        <div class="cart_item" id="basket-item-height-aligner-{{ID}}">
            <?
            if (in_array('PREVIEW_PICTURE', $arParams['COLUMNS_LIST'])) {
                ?>
                <div class="cart_item_image">
                    <img alt="{{NAME}}"
                         src="{{{IMAGE_URL}}}{{^IMAGE_URL}}<?= $templateFolder ?>/images/no_photo.png{{/IMAGE_URL}}">
                </div>

                <?
            }

            if ($usePriceInAdditionalColumn) {
                ?>
                <div class="cart_item_txt" id="basket-item-price-{{ID}}">
                    <strong>{{NAME}}</strong>
                    <i>{{{PRICE_FORMATED}}}</i>
                    <span class="cart_item_txt_del" data-entity="basket-item-delete"><i>x</i> Удалить</span>


                    <div class="cart_item_txt_q" data-entity="basket-item-quantity-block">
                        <span data-entity="basket-item-quantity-minus">-</span>
                        <input type="text" value="{{QUANTITY}}" data-value="{{QUANTITY}}"
                               data-entity="basket-item-quantity-field" id="basket-item-quantity-{{ID}}">
                        <span data-entity="basket-item-quantity-plus">+</span>
                    </div>

                </div>

                <?
            }
            ?>
        </div>
        {{/SHOW_RESTORE}}
    </div>
</script>