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
						<li><a href="../cscenter/reservation.php" class="fl16"><?=$gnb['cscenter']['title1']?></a></li>
						<li><a href="../cscenter/faq.php" class="fl16 greenb16"><?=$gnb['cscenter']['title2']?></a></li>
						<li><a href="../cscenter/notice.php" class="fl16"><?=$gnb['cscenter']['title3']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<div id="faq">
		<div class="control-box">
			<div class="ml80 cs">
				<!-- faq-icon -->
				<div class="box900 clearfix">
					<ul id="faqico" class="clearfix">
						<? for( $i=0; $i<count($faq); $i++ ) { ?>		
							<li class="center">
								<a href="#" class="bg<?=$i+1?>"></a>
								<a href="#" class="gr">
									<span class="fb18 line34"><?=$faq[$i][0]?></span><br/>
									<?=$faq[$i][1]?>
								</a>
							</li>
						<? } ?>			
					</ul>
					<div class="noti mt50 pull-left">
						<div>
							<h2 class="clearfix"> 
				            	<a class="pull-left font">공지사항</a>
				            	<a class="pull-right line43" href="notice.php">+ more</a>
				            </h2>
				        </div>
						<? for( $i=0; $i<count($notice); $i++ ) {?>
					        <div>
					            <h2 class="clearfix"> 
					            	<a class="pull-left font" href="#content<?=$i+1?>"><?=$notice[$i]['title']?></a>
					            	<a class="pull-right line43"><?=$notice[$i]['date']?></a>
					            </h2>
					        </div>
					    <?}?> 
					</div>
					<div class="delivbox mt50 pull-left center">
						<img src="../_assets/img/icon/delivery.png" alt="운송장조회" >
						<form action="" id="deliver">
							<div class="form-group">
								<input type="text" id="delivnum" class="form-control" placeholder="운송장 번호를 '-'없이 입력하세요.">
							</div>	
							<div class="form-group mt10">
								<input type="password" id="delivpw" class="form-control" placeholder="비밀번호 ( 비회원은 주문시 등록한 비밀번호) ">
							</div>	
								<button type="submit">검색</button>
						</form>
					</div>
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
			$('#faqico li').click(function(e){
				e.preventDefault();
				alert("도움을 드리기위해 내용을 준비중입니다.");
			});


			/**
			===================================================================
			  * 운송장 버튼 
			===================================================================
			*/
			$('#deliver').submit(function(e){
				e.preventDefault();

				//아이디가 입력되었을 때
				if(!regex.value('#delivnum','운송장 번호를 입력하세요.')){return false;}
				if(!regex.eng_num('#delivnum','운송장 번호는 숫자만 입력 가능합니다.')){return false;}
				if(!regex.min_length('#delivnum',4,'운송장 번호는 최소 4자 이상 입력 가능합니다.')){return false;}
				if(!regex.max_length('#delivnum',20,'운송장 번호는 최대 20자 까지만 입력 가능합니다.')) {return false;}

				//비밀번호가 입력되었을 때
				if(!regex.value("#user_pw",'비밀번호를 입력하세요')){return false;}
				if(!regex.min_length('#user_pw',4,'비밀번호는 최소 4자 이상 입력 가능합니다.')){return false;}
				if(!regex.max_length('#user_pw',20,'비밀번호는 최대 20자까지 입력 가능합니다.')){return false;}
				if(!regex.compare_to('#user_pw', '#user_pw_re', '비밀번호 확인이 잘못되었습니다.')){return false;}
			});
		});
	</script>
