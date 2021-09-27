$(function(){
			
	/**
	===================================================================
	**공통 페이지
	 * 메뉴바 - 아이콘 hover, active = 색상 변경
	 * 새로고침 : 메뉴 하위 목록 띄우고 2초있다 사라짐 
	 * 메뉴 아이콘 클릭 했을때 
	   - 색상 변경
	   - 메뉴 하위 목록 : 슬라이드
	   - 아이콘, 배경 클릭했을때 창닫기
	===================================================================
	*/
	

	 $('.bt-hover').hover(function(){
	 	$(this).find("a").toggle();
	 });

	 /* 메뉴 버튼 클릭 */
	 $('div.bt-hover').click(function(e){
	 	e.preventDefault();
	 	$(this).hide();                    // 메뉴 버튼 : 숨기기
	 	$('.m-bt-color').show();           // 메뉴항목 숨기기 버튼 : 나타내기
	 	//$('.menu-hide').show();            // 메뉴항목 + 검은 배경 : 나타내기
	 	$('.logo-color').show();           // 로고 : 나타내기
	 	$(".menu-hide").animate({
	      width: "toggle"
	    });
	 });

	 $('.m-bt-color').click(function(e){
	 	e.preventDefault();
	 	$(this).hide();                    // 메뉴항목 숨기기 버튼 : 숨기기
	 	$('div.bt-hover').toggle();        // 메뉴 버튼 : 토글 토글 
	 	$('.menu-hide').toggle();		   // 메뉴항목 + 검은 배경 : 숨기기
	 	$('.logo-color').hide();           // 로고 : 숨기기
	 });

	 /* 로그인 버튼 클릭 */
	 $("#log_bt").click( function(e){
	 	e.preventDefault();
	 	$(this).children("a").toggle();      // 메뉴 버튼 : 숨기기
	 	$('.log-hide').toggle();
	 	$(".mbg").toggle();					//검은 배경 : 나타내기
	 	$('.logo-color').show();
	 	$(".menu-right").hide();
	 });

	 $(".close").click(function(e){
	 	e.preventDefault();
	 	$("#log_bt").children("a").toggle();
	 	$("#logBox").hide();
	 	$('.logo-color').hide();
	 	$(".mbg").hide();
	 	$(".menu-right").show();
	 });

	 /* 검은 배경 클릭 : 모두 지우기 */
	 $(".mbg").click(function(e){
	 	$(".menu-hide").hide();
	 	$(".log-hide").hide();
	 	$(".showbt").show();
	 	$(".hidebt").hide();
	 	$(".menu-right").show();
	 });	

	/**
	===================================================================
	  * 로그인 모달창
	  * 입력값 검사 
	===================================================================
	*/
	$('#login').submit(function(e){
		e.preventDefault();

		//아이디가 입력되었을 때
		if(!regex.value('#user_id','아이디를 입력하세요.')){return false;}
		if(!regex.eng_num('#user_id','아이디는 영어와 숫자 조합만 입력 가능합니다.')){return false;}
		if(!regex.min_length('#user_id',4,'아이디는 최소 4자 이상 입력 가능합니다.')){return false;}
		if(!regex.max_length('#user_id',20,'아이디는 최대 20자 까지만 입력 가능합니다.')) {return false;}

		//비밀번호가 입력되었을 때
		if(!regex.value("#user_pwd",'비밀번호를 입력하세요')){return false;}
		if(!regex.min_length('#user_pwd',4,'비밀번호는 최소 4자 이상 입력 가능합니다.')){return false;}
		if(!regex.max_length('#user_pwd',20,'비밀번호는 최대 20자까지 입력 가능합니다.')){return false;}
		if(!regex.compare_to('#user_pwd', '#user_pw_re', '비밀번호 확인이 잘못되었습니다.')){return false;}
	});

	/**
	===================================================================
	  * GUI page
	===================================================================
	*/
	$("#gui .cls-btn").click(function(e){
		e.preventDefault();
		$(this).parents("#gui").addClass("hide").fadeOut(300);
	});
	$("#gui_btn").hover(function(e){
		if( $(this).find("h3").hasClass("hide") == true ){
			$(this).find("h3").removeClass("hide");
			$(this).find("a").addClass("hide");
		} else {
			$(this).find("h3").addClass("hide");
			$(this).find("a").removeClass("hide");
			$(this).addClass("btn_animate");
		}	
	});
});