$(document).on('click','.js-more-link-worker', function (e) {
	e.preventDefault();
	var _this=$(this);
	var current_Page = 1;
	var count;
	if (parseInt(_this.data('page-number'))>0)
	{
		current_Page = parseInt(_this.data('page-number'));
	}
	if (parseInt(_this.data('page-count'))>0)
	{
		count = parseInt(_this.data('page-count'));
	}
	var next_Page = current_Page+1;
	var name = parseInt(_this.data('name'));
	var path_in_href = _this.attr('href');
	var path = document.location.pathname + path_in_href;
	console.log(next_Page);
	console.log(count);
	console.log(current_Page);
	$.ajax({
		type: "GET",
		url: path,
		data: 'is_ajax_nav=Y&clear_cache=Y&PAGEN_' + name + '=' + next_Page,
		//делаем ajax запрос и сразу инкремент номера страницы
		success: function (result) {
			$('.promo-article__wrapper').append(result);
			if (next_Page >= count) {
				_this.parent().hide();
			}
			else
			{
				_this.data('page-number',next_Page);
			}
		}
	});
});
