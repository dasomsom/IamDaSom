
$(function(){
	/** #user_kakao의 선택 상태가 변경된 경우*/
	$('#user_kakao').change( function(){
		// #kakao_id의 현재 disabled 값을 가져온다 -->true/false
		var now = $('#kakao_id').prop('disabled');
		//가져온 값을 역으로 변경하여 다시 적용한다.
		$("#kakao_id").prop('disabled',!now);
		//입력가능 상태라면 포커스 지정
		if($("#kakao_id").prop('disabled') == false){
			$("#kakao_id").focus();
		}
	});

	/**상담 폼의 submit이벤트*/
	$("#counsel_form").submit(function(e){
		//기본 동작 수행 방식
		e.preventDefault();

		//카카오톡 아이디가 체크 되었을때
		if($("#kakao_id").prop('checked') == true) {
			/**카카오톡 아이디 검사**/
			if(!regex.value('#kakao_id','아이디를 입력하세요')){return false;}
			if(!regex.eng_num('#kakao_id','아이디는 영어와 숫자 조합만 입력가능합니다.')){return false;}
			if(!regex.min_length('#kakao_id',4,'아이디는 최소 4자 이상 입력 가능합니다.')){return false;}
			if(!regex.max_length('#kakao_id', 20, '아이디는 최대 20자까지만 입력 가능합니다.')){return false;}
		}
		/**이름 검사**/
		if(!regex.value('#user_name','이름을 입력하세요')){return false;}
		if(!regex.kor('#user_name','이름은 한글만 입력 가능합니다.')){return false;}
		if(!regex.min_length('#user_name',2,'이름은 최소 2자 이상 입력 가능합니다.')){return false;}
		if(!regex.max_length('#user_name',20,'이름은 최대 20자 까지만 입력 가능합니다.')){return false;}

		/**연락처 검사**/
		if(!regex.value('#tel','연락처를 입력하세요')){return false;}
		if(!regex.phone('#tel', '연락처가 잘못되었습니다.')){return false;}

		/**이메일 검사**/
		if(!regex.value('#email', '이메일을 입력하세요.')){return false;}
		if(!regex.email('#email', '이메일 주소가 잘못되었습니다.')){return false;}

		/**사진 검사**/

		//처리완료
		alert("상담신청 완료!^___^!");
	});
});