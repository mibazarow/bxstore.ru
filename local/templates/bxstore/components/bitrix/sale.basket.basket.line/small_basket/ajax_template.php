<?if (!defined('B_PROLOG_INCLUDED') || B_PROLOG_INCLUDED!==true) die();

$this->IncludeLangFile('template.php');

$cartId = $arParams['cartId'];

require(realpath(dirname(__FILE__)).'/top_template.php');

if ($arParams["SHOW_PRODUCTS"] == "Y" && ($arResult['NUM_PRODUCTS'] > 0 || !empty($arResult['CATEGORIES']['DELAY'])))
{
?>
	<div data-role="basket-item-list">
		<div id="<?=$cartId?>products" >
			<?foreach ($arResult["CATEGORIES"] as $category => $items):
				if (empty($items))
					continue;
				?>
				<?foreach ($items as $v):?>
					<div>
                        <a href="<?=$v["DETAIL_PAGE_URL"]?>">
                            <img src="<?=$v["PICTURE_SRC"]?>" alt="<?=$v["NAME"]?>">
                            <?=$v["NAME"]?>
                            <?=$v["QUANTITY"]?> <?=$v["MEASURE_NAME"]?> на <?=$v["SUM"]?>
                        </a>
				<?endforeach?>
			<?endforeach?>
		</div>
	</div>

	<script>
		BX.ready(function(){
			<?=$cartId?>.fixCart();
		});
	</script>
<?
}