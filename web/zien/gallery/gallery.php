<?  header("Content-Type: text/html; charset = UTF-8");	?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
	<? include_once('../_inc/datagallery.php'); ?>
	<link rel="stylesheet" href="/dslee/web/zien/_assets/css/jcarousel.responsive.css">
	<link rel="stylesheet" href="/dslee/web/zien/_assets/jQ-plugin/lightbox/css/lightbox.min.css">
</head>
<body>
	<!-- menu bar-->
	<? include_once('../_inc/menubar.php'); ?>
	<!-- nav -->
	<div class="fixed">
		<div class="cont">
			<div class="ml80">
				<div class="sub-bar clearfix">
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['gallery']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="../cscenter/reservation.php" class="fl16"><?=$gnb['gallery']['title1']?></a></li>
						<!-- 대관문의 이동 후 접수하고 나서 갤러리 페이지로 다시 돌아오는 이벤트 걸기!-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<!-- intro -->
	<div id="gallintro" class="mt175 control-box">
		<div class="arch-box pl88">
			<div class="disc">
				<p class="justify">
					<span class="gr fb28">지앤아트스페이스 갤러리는 대중의 삶과 공존하는<br/>‘리빙아트(Living Art)’ 가 전시기획의 기본방향입니다.</span><br/><br/>
					<?=$gallintro['intro']?>
				</p>
			</div>
			<div class="mt20 imgarea">
				<? for( $i=0; $i<count($gallintro['img']); $i++) { ?>
					<a href="<?=$gallintro['img'][$i]?>" data-lightbox="my-gallery" data-title="<?=$gallintro['title'][$i]?>">
		            	<img src="<?=$gallintro['img'][$i]?>" width="33%" height="230px" />
		            </a>
	            <?}?>
			</div>	
		</div>
	</div>		
	<!--// intro -->
	
	<div id="gallery" class="mt175">
		<div class="arch-box pl88">
			<ul class="title clearfix">
				<li class="fb22 pull-left">Crator's Pick</li>
			</ul>

			<!-- slide -->
			<div class="wrapper">
				<div class="jcarousel-wrapper">
					<div class="jcarousel">
						<ul id="gallbox" class="clearfix mt20">
							<? for($i=0; $i<count($gallery); $i++){?>
							<li>
								<div class="img">
									<img src="<?=$gallery[$i]['img']?>"/>
									<a class="ml15" href="#"><span class="bt1"></span>워드파일</a>
									<a href="#"><span class="bt1"></span>이미지</a>
									<a href="/web/zien/cscenter/reservation.php"><span class="bt2"></span>예약하기</a>
								</div>
								<div class="txtbox">
									<div class="txt justify">
										<h2 class="fb22 mb10"><?=$gallery[$i]['title1']?></h2>
										<p class="mb50"><?=$gallery[$i]['disc1']?></p>
										<h2 class="fb22 mb10"><?=$gallery[$i]['title2']?></h2>
										<p><?=$gallery[$i]['disc2']?></p>
									</div>
								</div>	
							</li>
							<?}?>
						</ul>	
					</div>	
				</div>	
			</div>
			<!--// slide -->
		</div>
			
	</div>
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/lightbox/js/lightbox.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/jquery.jcarousel.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/jcarousel.responsive.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/jquery.jcarousel-autoscroll.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/action.js"></script>
	<script>
		$(function(){
			$('.bt1').click(function(e){
				e.preventDefault();
				alert("다운로드 되었습니다.");
			});
		});
	</script>
	