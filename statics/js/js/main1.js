// 导航
$(function () {
	$('#nav>li').mouseover(function() {
		$(this).children('.sub_nav').show();
	});
	$('#nav>li').mouseout(function() {
		$(this).children('.sub_nav').hide();
	});
})