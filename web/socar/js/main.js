/**
===================================================================
  * 캐러셀
  * 비주얼 배너 js 
===================================================================
*/


$(function(){
	/** #slides 요소에 대해 플러그인 적용*/
	$('#slides').superslides({
		inherit_width_from:'#slide-container',  //슬라이드의 넓이를 구성할 부모요소
		inherit_height_from:'#slide-container', //슬라이드의 높이를 구성할 부모요소 
		play:4000,                              //재생시간 
		animation:'slide'						//애니메이션 옵션 
	});

	/**탭과 이미지 영역 연결하기 **/
	$('.v-tab li').click(function(e){
		e.preventDefault();

		/*강사님 추가 답변*/
		//탭 영역의 배경 변경*/
		$(this).addClass('on');
		$('.v-tab li').not($(this)).removeClass('on');

		/*탭과 이미지연결하여 변경시키기*/
		//이미지 영역의 순서가 탭영역의 순서와 동일하다는 가정에서!!
		var i = $(this).index();
		var target = $(".visual_area > li");
		target.eq(i).removeClass('hide');
		target.not(target.eq(i)).addClass('hide'); 

		/*
		$('.v-tab li').not(this).removeClass('on');
		$(this).addClass('on');

		//이미지 영역의 순서가 탭영역의 순서와 동일하다는 가정에서!!
		var k = $(this).index();  //탭 영역의 클릭된 요소의 순서를 불러온다.
		var s = $('.visual_area >li').eq(k);  //이미지 영역의 순서에 탭영역의 순서를 불러온다.

		/*추가하고 제거가 1set
		$(s).addClass('on');   //s 변수에 'on'클래스를 저장
		$(".visual_area >li").not($(s)).removeClass('on');   //클릭되지 않은 요소에 작용된 'on'클래스를 제거한다.	
		
		$(s).removeClass('hide'); 
		$(".visual_area >li").not($(s)).addClass('hide');
		*/
	});
});