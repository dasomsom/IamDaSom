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
                    <div class="sub">
	                    <p class="h3">지앤아트스페이스의 전시 및 다양한 소식을 알려드립니다.<br/>
	                    	회원가입 및 정상적인 서비스 이용을 위해 아래 약관을 읽어 보시고, 동의 여부를 결정해 주세요.<br/><span class="gr">- 필수 약관을 동의 하셔야 회원가입이 가능합니다.</span>
	                    </p>
	                </div>
					
					<!-- 약관동의 -->
					<form action="" class="agreebox" name="agreeform" id="agreeform">
						<div class="form-group">
							<label for="" class="pull-left">지앤아트센터 약관 동의</label>
							<div class="pull-right">
								<label>전체동의<input type='checkbox' name='allagree' id='allagree' value='allagr'></label>
							</div>	
						</div>
						<div class="form-group">
							<label >서비스 이용약관</label>
						</div>
						<div class="form-group">
							<textarea name="servagr" id="servagr" disabled><?=$agree['service']?></textarea>
						</div>
						<div class="pull-right mt10">
							<label>서비스 이용약관 동의 (필수)<input type='checkbox' name='servagree' id='servagree' class="servagree"></label>
						</div>
						<div class="form-group">
							<textarea name="infoagr" id="infoagr" disabled><?=$agree['info']?></textarea>
						</div>
						<div class="pull-right">
							<label>개인정보 수집/이용 동의 (필수)<input type='checkbox' name='servagree' id='infoagree' class="servagree"></label>
						</div>
					</form>
					<div class="agreebt">
						<a href="join.php" id="joinok">동의</a>
						<a href="../index.php" id="joinno">동의하지 않음</a>
					</div>	
					<!--// 약관동의 -->
                </div>
            </div><!--// container end -->
		</div>
	</div>
	<!--// 가입폼-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script src="/dslee/web/zien/_assets/js/join.js"></script>

</body>
</html>