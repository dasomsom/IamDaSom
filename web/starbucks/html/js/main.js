/**
===================================================================
  * 메인
===================================================================
*/

$(function(){
    /**
    ------------------------------------------------------------------
      * #new_menu에 animateCSS 플러그인 적용
      + 페이지 로딩후 순서대로 표시
    ------------------------------------------------------------------
    */

    // 페이지 실행 즉시 2초 동안 재생
    $("#num1").animateCSS('fadeIn', { duration: 2000 });
    // 페이지 실행 0.7초 이후 2초동안 재생
    $("#num2").animateCSS('fadeIn', { duration: 2000, delay: 700 });
    // 페이지 실행 1.4초 이후 2초동안 재생
    $("#num3").animateCSS('fadeIn', { duration: 2000, delay: 1400 });
    // 페이지 실행 2.1초 이후 2초동안 재생
    $("#num4").animateCSS('fadeIn', { duration: 2000, delay: 2100 });

    /**
    ------------------------------------------------------------------
      * aos 플러그인 적용
    ------------------------------------------------------------------
    */
    AOS.init({
        offset: 300,
        easing: 'ease-in-sign',
        duration: 600,
        delay: 250,
    });

	/**
	------------------------------------------------------------------
	  * header > 검색창
	  * 유효성 검사
	------------------------------------------------------------------
	*/
	$('#s_btn_f').click(function(e){
		e.preventDefault();
        $(this).hide();
        $(this).next('#s_btn_b').show().addClass('slide_search');
        $(this).parent().children().eq(2).show();
	});
    $('#s_btn_b').click(function(e){
        e.preventDefault();
        //입력값 검사
        var menu_search =$('#menu_search').val();
        console.log(menu_search);
        if(!menu_search){
            alert('검색어를 입력하세요');
            $('#menu_search').focus();
            return false;
        };
    });

    /**
    ------------------------------------------------------------------
      * 메뉴 탭이 hover일때 해당 항목을 나타내라 
    ------------------------------------------------------------------
    */
    $('.menu li').hover(function(e){
        $(this).find(".menu-container").slideToggle(300);
    });
    $('.menu-container').hover(function(e){
        $(this).parent().find('.event').toggleClass('hover');
    });
    
    /**
    ------------------------------------------------------------------
      * #notice > 프로모션 div 슬라이드
    ------------------------------------------------------------------
    */
    $("#dw_btn").click(function(e){
        e.preventDefault();
        $(this).hide();
        $(this).next().show();
        $("#promotion").slideToggle();
    });
    $("#up_btn").click(function(e){
        e.preventDefault();
        $(this).hide();
        $(this).prev().show();
        $("#promotion").slideToggle();
    });
    /*슬라이드*/
    var carousel = $('#Glide').glide({
        type: 'carousel',
        paddings: '15%',
        startAt: 1,
    });
    /**
    ------------------------------------------------------------------
      * #store에 flip 플러그인 적용
    ------------------------------------------------------------------
    */
    $('#store_box').flip({
        trigger:'hover',
        front:$('.b-front'),
        back:$('.b-back'),
        speed:'250'
    });
    /**
    ------------------------------------------------------------------
      * #sticker > 프리퀀시 스티커 .close
    ------------------------------------------------------------------
    */
    $('.close').click(function(e){
        e.preventDefault();
        $(this).parent().hide();
    });
});