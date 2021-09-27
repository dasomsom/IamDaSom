$(function() {
  
    /*약관동의 페이지에서 전체 동의버튼 구현*/
    $("#allagree").click(function(){
        var chk = $(this).is(":checked");
        if(chk){
            $(".agreebox .servagree").prop('checked',true);
        }else {
            $(".agreebox .servagree").prop('checked',false);
        }
    });
      
    $("#joinok").click(function(e) {
       e.preventDefault();
       //링크의 href 속성이나 폼의 submit 등에 대해서 html 요소가 수행해야 하는 기본 동작을 차단하는 역할.
       if( $("#servagree").is(':checked') == false || $("#infoagree").is(':checked') == false ) {
               alert("서비스 약관과 개인정보 수집 및 이용에 대해 모두 동의해 주세요.");
               $("#agreeform").submit();
               return false;
            } else {
                window.location = "../join/join.php";
            }
    });


    /** 가입폼의 submit 이벤트 */
    $("#join_form").submit(function(e) {
        // 기본동작 수행 방식
        e.preventDefault();

        /** 아이디 검사 */
        if (!regex.value('#join_id', '아이디를 입력하세요.')) { return false; }
        if (!regex.eng_num('#join_id', '아이디는 영어와 숫자 조합만 입력 가능합니다.')) { return false; }
        if (!regex.min_length('#join_id', 4, '아이디는 최소 4자 이상 입력 가능합니다.')) { return false; }
        if (!regex.max_length('#join_id', 20, '아이디는 최대 20자 까지만 입력 가능합니다.')) { return false; }

        /** 비밀번호 검사 */
        if (!regex.value('#user_pw', '비밀번호를 입력하세요.')) { return false; }
        if (!regex.min_length('#user_pw', 4, '비밀번호는 최소 4자 이상 입력 가능합니다.')) { return false; }
        if (!regex.max_length('#user_pw', 20, '비밀번호는 최대 20자 까지만 입력 가능합니다.')) { return false; }
        if (!regex.compare_to('#user_pw', '#user_pw_re', '비밀번호 확인이 잘못되었습니다.')) { return false; }
        
        /** 이름 검사 */
        if (!regex.value('#user_name', '이름을 입력하세요.')) { return false; }
        if (!regex.kor('#user_name', '이름은 한글만 입력 가능합니다.')) { return false; }
        if (!regex.min_length('#user_name', 2, '이름은 최소 2자 이상 입력 가능합니다.')) { return false; }
        if (!regex.max_length('#user_name', 20, '이름은 최대 20자 까지만 입력 가능합니다.')) { return false; }

        /** 이메일 검사 */
        if (!regex.value('#email', '이메일을 입력하세요.')) { return false; }
        if (!regex.email('#email', '이메일 주소가 잘못되었습니다.')) { return false; }

        /** 연락처 검사 */
        if (!regex.value('#tel', '연락처를 입력하세요.')) { return false; }
        if (!regex.phone('#tel', '연락처가 잘못되었습니다.')) { return false; }

        /** 성별검사 */
        if (!regex.check('input[name=gender]', '성별을 선택하세요.')) { return false; }

        // 처리 완료
        alert("회원가입이 완료 되었습니다. 지앤아트센터에 오신걸 환영합니다!");
    });
});