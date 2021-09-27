<?  header("Content-Type: text/html; charset = UTF-8");	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
</head>
<body>
	<!-- menu bar-->
	<? include_once('../_inc/menubar.php'); ?>
	
	<!--가입폼-->
	<div id="join" class="pl88">
		<div class="arch-box clearfix">
			<div class="join_container">
                <div class="wrap">
                    <p class="h2 pb20">MEMBERSHIP JOIN</p>

                    <!-- 회원가입 form, join us-->
                    <form class="joinbox" name="join_form" id="join_form">
                        <div class="form-group">
                            <label for='join_id' class="col-md-2">아이디 *</label>
                            <div class="col-md-10">
                                <input type="text" name="join_id" id="join_id" class="form-control" placeholder="영문+숫자 조합 8~12자리 이내 (특수문자 제외)" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='user_pw' class="col-md-2">비밀번호 *</label>
                            <div class="col-md-10">
                                <input type="password" name="user_pw" id="user_pw" class="form-control" placeholder="영문+숫자+특수문자 조합 8~12자리 이내" />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='user_pw' class="col-md-2">비밀번호 확인 *</label>
                            <div class="col-md-10">
                                <input type="password" name="user_pw_re" id="user_pw_re" class="form-control" placeholder="비밀번호를 다시 입력해 주세요." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='user_name' class="col-md-2">이름 *</label>
                            <div class="col-md-10">
                                <input type="text" name="user_name" id="user_name" class="form-control" placeholder="이름을 입력해 주세요." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='email' class="col-md-2">이메일</label>
                            <div class="col-md-10">
                                <input type="email" name="email" id="email" class="form-control" placeholder="이메일을 입력해 주세요. ex)zienartspace@gmail.com" />
                            </div>
                        </div>
				 		<div class="form-group">
                            <label for='tel' class="col-md-2">연락처</label>
                            <div class="col-md-10">
                                <input type="tel" name="tel" id="tel" class="form-control" placeholder="&nbsp;&nbsp;'-' 없이 입력해 주세요." />
                            </div>
                        </div>
                        <div class="form-group">
                            <label for='gender1' class="col-md-2">성별</label>
                            <div class="col-md-10">
                                <label class="mr15"><input type='radio' name='gender' id='gender1' value='M'>남자</label>
                                <label><input type='radio' name='gender' id='gender2' value='F'>여자</label>
                            </div>
                        </div>
                        <br/><br/>
                        <div class="form-group clearfix">
                            <div class="text-center b_btn">
                                <button class="pull-left mr15" type="submit">가입하기</button>
                                <button class="pull-left" type="reset">다시작성</button>
                            </div>
                        </div>
                    </form>
                    <!--// 회원가입 form, join us-->
                </div>
            </div><!--// container end -->
		</div>
	</div>
	<!--// 가입폼-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
    <script src="/dslee/web/zien/_assets/js/common.js"></script>
    <script src="/dslee/web/zien/_assets/js/regex.js"></script>
    <script src="/dslee/web/zien/_assets/js/join.js"></script>
</body>
</html>