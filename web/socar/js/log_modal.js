/**
===================================================================
  * 로그인 모달창
  * 입력값 검사 
===================================================================
*/
$(function(){
	/**로그인 모달 창
	  *로그인 버튼을 클릭했을떄 #background와 #log_modal창 띄우기
	*/
	$('#log_m').click(function(e){
		e.preventDefault();        //페이지 이동방지
		$('#background').fadeIn(300);  //배경레이어어를 화면에 표시
		$('#front').fadeIn(300);    //로그인 창을 화면에 표시

	});

		/**화면에 표시된 배경 레이어를 눌렀을때*/ 
		$('#background').click(function(){
			$(this).fadeOut(300);    //배경레이어 제거
			$('#front').fadeOut(300);   //로그인창 제거
		});
		/* 로그인 모달 창의 창닫기 버튼을 눌렀을때 
	       로그인 모달창 숨기기
	    */
	    $(".close").click(function(e){
	    	e.preventDefault();         //페이지 이동방지
	    	
	    	$('#background').fadeOut(300);    //배경레이어 제거
			$('#front').fadeOut(300);  //로그인창 제거	
			
			/*hide()기능으로 제어할 수 있다.
			$('#background').hide();  
			$('#front').hide(); 
			*/
	    });

	


	/**입력값 검사**/
	$('#login').submit(function(e){
		e.preventDefault();

		//아이디가 입력되었을 때
		if(!regex.value('#user_id','아이디를 입력하세요.')){return false;}
		if(!regex.eng_num('#user_id','아이디는 영어와 숫자 조합만 입력 가능합니다.')){return false;}
		if(!regex.min_length('#user_id',4,'아이디는 최소 4자 이상 입력 가능합니다.')){return false;}
		if(!regex.max_length('#user_id',20,'아이디는 최대 20자 까지만 입력 가능합니다.')) {return false;}

		//비밀번호가 입력되었을 때
		if(!regex.value("#user_pw",'비밀번호를 입력하세요')){return false;}
		if(!regex.min_length('#user_pw',4,'비밀번호는 최소 4자 이상 입력 가능합니다.')){return false;}
		if(!regex.max_length('#user_pw',20,'비밀번호는 최대 20자까지 입력 가능합니다.')){return false;}
		if(!regex.compare_to('#user_pw', '#user_pw_re', '비밀번호 확인이 잘못되었습니다.')){return false;}
	});
});