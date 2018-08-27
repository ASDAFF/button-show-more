<?
if ($_REQUEST['is_ajax_nav']){
    $APPLICATION->RestartBuffer();
}

foreach ($arResult["ITEMS"] as $arItem){
    //ЕЛЕМЕНТ ИНФОБЛОКА
}

if ($_REQUEST['is_ajax_nav']){
    die();
}

//САМА КНОПКА
if (($arResult['ELEMENT_COUNT'] - ($arResult['PAGE_NUMBER'] * $arParams['NEWS_COUNT'])) > 0)
{
    ?><div class="promo-article__more"><?
	$strAjaxUrl = '';
	foreach ($_GET as $k => $v){
		if ($k != 'PAGEN_' . $arResult['PAGEN_NUM'] && $k != 'SIZEN_' . $arResult['PAGEN_NUM']){
			if (strlen($strAjaxUrl)){
				$strAjaxUrl .= '&';
			}
			$strAjaxUrl .= $k . '=' . $v;
		}
	}
	if (strlen($strAjaxUrl)){
		$strAjaxUrl = '?' . $strAjaxUrl;
	} ?>
	<a href="<?=$strAjaxUrl?>"
	   class="btn btn__promo btn__promo js-more-link-worker"
	   data-page-number="<?=$arResult["PAGE_NUMBER"]?>"
	   data-name="<?=$arResult['NAVIGATION']["NAME"]?>"
	   data-page-count="<?=$arResult["NavPageCount"]?>">
		<?=GetMessage("SHOW_MORE")?>
	</a>
	</div><?
}
