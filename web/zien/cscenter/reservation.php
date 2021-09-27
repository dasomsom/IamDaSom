<?  header("Content-Type: text/html; charset = UTF-8");	?>

<!DOCTYPE html>
<html lang="ko">
<head> 
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
</head>
<body>
	<!-- menu bar-->
	<? include_once('../_inc/menubar.php'); ?>
	<!-- nav -->
	<div class="fixed">
		<div class="cont">
			<div class="ml80">
				<div class="sub-bar clearfix">
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['cscenter']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="../cscenter/reservation.php" class="fl16 greenb16"><?=$gnb['cscenter']['title1']?></a></li>
						<li><a href="../cscenter/faq.php" class="fl16"><?=$gnb['cscenter']['title2']?></a></li>
						<li><a href="../cscenter/notice.php" class="fl16"><?=$gnb['cscenter']['title3']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<!-- 1:1 문의 -->
	<div id="cscenter">
		<div class="control-box">
			<div class="ml80 cs">
				<div class="title mb20">
					<ul>
						<li class="inline fb35 pr15">1:1 문의</li>
						<li class="inline">예약 / 문의</li>
					</ul>
				</div>
				<div class="clearfix box750 ">
					<form  id="QAbox" class="pull-left">
						<!-- 문의유형 -->
					 	<div class="form-group">
					 		<label for="cs_type" class="col-md-2">문의유형</label>
					 		<div class="col-md-10">
					 			<select name="cs_type" id="cs_type" class="hide">
							 			<option value="Gallery & Studio">Gallery &amp; Studio</option>
							 			<option value="Studio for Kids">Studio for Kids</option>
							 			<option value="Shop & Product">Shop &amp; Product</option>
							 			<option value="ect">ect</option>
					 			</select>
					 			<div id="cs-front" class="form-control">
					 				<a href="#" id="csfront" class="line21">선택하세요.</a>
					 				<ul id="csdrop" class="drop-box hide">
						 				<li>Gallery &amp; Studio</li>
						 				<li>Studio for Kids</li>
						 				<li>Shop &amp; Product</li>
						 				<li>ect</li>
						 			</ul>
						 			<button type="img" class="form-bt"><a href="#"><img src="../_assets/img/icon/icon_09.png">
						 			</button>
					 			</div> 
					 		</div>
					 	</div>
					 	<!-- 이름 -->
					 	<div class="form-group">
				 			<label for="user_name" class="col-md-2">이 &nbsp;&nbsp;&nbsp; 름</label>
				 			<input type="text" id="user_name" class="col-md-10 form-control">
				 		</div>
				 		<!-- 연락처 -->
				 		<div class="form-group">
				 			<label for="tel" class="col-md-2">연 락 처</label>
				 			<div class="col-md-10 clearfix">
					 			<select name="telec" id="telec" class="hide">
					 				<option value="SKT">SKT</option>
					 				<option value="KT">KT</option>
					 				<option value="LGT">LGT</option>
					 			</select>
					 			<div id="tel-front" class="form-control">
					 				<a href="#" id="tfront" class="line21">통신사</a>
					 				<ul id="teldrop" class="drop-box hide">
						 				<li>SKT</li>
						 				<li>KT</li>
						 				<li>LGT</li>
						 			</ul>

						 			<button type="img" class="form-bt"><a href="#"><img src="../_assets/img/icon/icon_09.png"></a>
						 			</button>
					 			</div>

					 			<input type="tel" class="tel-box pull-left form-control" placeholder="01012345678" style="font-weight: 300; font-size: 14px;">
					 			<label style="line-height: 39px; font-size:14px;" class="ml15">'-' 없이 입력하세요.</label>
					 		</div>
				 		</div>
				 		<!-- 이메일 -->
				 		<div class="form-group">
					 		<label for="email" class="col-md-2">이&nbsp;메&nbsp;일</label>
					 		<div class="col-md-10">
					 			<input type="email" class="ebox pull-left col-md-10 form-control">
					 			<label class="pull-left mlr10 line34">@</label>
					 			<select name="email" id="email" class="hide">
						 			<option value="naver.com">naver.com</option>
						 			<option value="gmail.com">gmail.com</option>
						 			<option value="hanmail.net">hanmail.net</option>
						 			<option value="nate.net">nate.net</option>
						 		</select>
						 		<div id="email-front" class="form-control">
						 			<a href="#" id="efront" class="line21">선택하세요.</a>
						 			<ul id="maildrop" class="drop-box hide">
						 				<li>naver.com</li>
						 				<li>gmail.com</li>
						 				<li>hanmail.net</li>
						 				<li>nate.net</li>
						 			</ul>
						 			<button type="img" class="form-bt"><a href="#"><img src="../_assets/img/icon/icon_09.png"></a>
						 			</button>
						 		</div>
						 	</div>
						 </div>
						 <!-- 제목 -->
						 <div class="form-group">
					 		<label for="f-title" class="col-md-2">제&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;목</label>
					 		<input type="text" class="txt-box col-md-10 form-control">
					 	</div>
					 	<!-- 내용 -->
					 	<div class="form-group">
					 		<label for="f-txt" class="col-md-2">내&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;용</label>
					 		<textarea name="f-txt" id="f-txt" class="txt-box form-control col-md-10" placeholder="단체 수강, 워크샵 문의 : 인원, 희망 날짜를 기입해주세요."></textarea>
					 	</div>	
					 	<div id="reservok" class="clearfix">
							<button type="button" onclick="window.location.href='../index.php'">신 청 하 기</button>
						</div>	
					</form>	
				</div>
			</div>
		</div>
	</div>
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script>
		$(function(){
			/* 연락처*/
			$("#teldrop li").click(function(e){
				e.preventDefault();

				var i = $(this).index();
				var target = $("#telec > option");
				var result = target.eq(i).attr('value');

				$("#tfront").attr('i',result);
				$("#tfront").html(result);
				$("#teldrop").slideUp(300);
			});
			/* // 연락처*/
			/* 메일*/
			$("#maildrop li").click(function(e){
				e.preventDefault();

				var i = $(this).index();
				var target = $("#email > option");
				var result = target.eq(i).attr('value');
				
				$("#efront").attr('i',result);
				$("#efront").html(result);
				$("#maildrop").slideUp(300);
			});
			/* //메일 */
			/* 문의사항*/
			$("#csdrop li").click(function(e){
				e.preventDefault();

				var i = $(this).index();
				var target = $("#cs_type > option");
				var result = target.eq(i).attr('value');

				$("#csfront").attr('i',result);
				$("#csfront").html(result);
				$("#csdrop").slideUp(300);
			});
			/*// 문의사항*/


			/* .dropbox slide*/ 
			$('.form-bt').click(function(e){
				e.preventDefault();

				$(this).parent('div').find('.drop-box').removeClass('hide').slideToggle(300);
				$(".form-bt").not(this).parent('div').find('.drop-box').addClass('hide').slideUp(300);	
				
			});
			/* // .dropbox slide*/
			
			$('#reservok button').click(function(){
			 	alert("신청이 완료되었습니다. 확인 후 연락드릴게요!");
			});

			
		});
	</script>