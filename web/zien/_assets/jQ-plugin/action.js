/** 슬라이드 액션 **/

function startAutoscroll() {
	$(".jcarousel").jcarouselAutoscroll({
		interval: 5000,
		autostart: true
	});
}

$(function(){
	// 슬라이드 자동 스크롤 함수 호출
	startAutoscroll();

	$('ul.nav li.dropdown.hidden-xs').hover(function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(100).slideDown(200);
	}, function() {
		$(this).find('.dropdown-menu').stop(true, true).delay(100).slideUp(200);
	});
	$('.dropdown-menu.nav-depth > li').hover(function() {
		$(this).children().eq(0).toggleClass('hidden');
	});
	
	$('#autostop').click(function(e) {
		e.preventDefault();
		var play = $(this).children().data('icon');
		var stop = $(this).children().attr('src');
		$(this).children().attr('src', play);
		$(this).children().data('icon', stop);
		if ( $(this).children().attr('src') == 'img/carousel_auto_play.png') {
			$(".jcarousel").jcarouselAutoscroll('stop');
		} else if ( $(this).children().attr('src') == 'img/carousel_auto_stop.png') {
			$(".jcarousel").jcarouselAutoscroll('start');
		}
	});
});