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
<?if ($arResult["NavPageCount"] > 1) > 0)
{?>
	<div class="page__p-more">
		<a href=""
		   class="p-more js-more-link-worker"
		   data-page-number="<?=$arResult["PAGE_NUMBER"] ?>"
		   data-name="<?=$arResult['NAVIGATION']["NAME"] ?>"
		   data-page-count="<?=$arResult["NavPageCount"] ?>">
			Показать еще
		</a>
	</div>
	<?
}?>
