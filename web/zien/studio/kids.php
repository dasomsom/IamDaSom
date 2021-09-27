<?  header("Content-Type: text/html; charset = UTF-8");	?>

<!DOCTYPE html>
<html lang="ko">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
	<? include_once('../_inc/datastudio.php'); ?>
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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['studio']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="../studio/studio.php" class="fl16"><?=$gnb['studio']['title0']?></a></li>
						<li><a href="../studio/kids.php" class="fl16 greenb16"><?=$gnb['studio']['title1']?></a></li>
						<li><a href="../cscenter/reservation.php" class="fl16"><?=$gnb['studio']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<div id="kids" class="section">
		<div class="img"></div>
		<h2 class="fb100"
			data-aos="fade-up"
     		data-aos-anchor-placement="bottom-bottom"
		>STUDIO FOR KIDS</h2>
	</div>	
	<!-- intro -->
	<div id="kidsintro" class="control-box">
		<div class="arch-box pl88">
			<div class="disc">
				<p class="justify">
					<?=$kidsintro['intro']?>
				</p>
			</div>

			<div class="mt20 imgarea">
				<? for( $i=0; $i<count($kidsintro['img']); $i++) { ?>
					<a href="<?=$kidsintro['img'][$i]?>" data-lightbox="my-studio" data-title="<?=$kidsintro['title'][$i]?>">
		            	<img src="<?=$kidsintro['img'][$i]?>" width="33%" height="230px" />
		            </a>
	            <?}?>
			</div>	
			
		</div>
	</div>	
	<!--// intro -->
	<div id="kidsdisc" class="kidimg section">
		<div class="img"></div>	
		<div class="disc justify fl18 line21">
			<div class="first" 
				 data-aos="fade-right" data-aos-offset="100" 
                 data-aos-easing="ease-in-sine" data-aos-duration="600">
				<h2 class="fb28 fh50">실내 창작실</h2>
				<p>약 30평의 어린이 작가들을 위한 공간으로 각종 미술활동 재료와 영상을 상영이 가능한 시청각 시설 구비</p>
			</div>
			<div class="last mt40"
				 data-aos="fade-right" data-aos-offset="100" 
                 data-aos-easing="ease-in-sine" data-aos-duration="800">
				<h2 class="fb28 fh50">실외 창작실</h2>
				<p>실내와 연결되어 야외까지 창작 공간을 활용할 수 있도록 설계되어 있고, 다양한 야외 예술 체험 수업 진행</p>
			</div>	
		</div>	
	</div>	
	<div id="kidscaut" class="control-box">
		<div class="arch-box pl88 line21">
			<ul class="clearfix">
				<li class="col-md-2">신청방법 및 등록 안내</li>
				<? for( $i=0; $i<count($kidsway['title']); $i++) { ?>
					<li class="col-md-10"><?=$kidsway['title'][$i]?></li>
				<? } ?>
			</ul>
			<ul class="clearfix mt20">
				<li class="pull-left col-md-2">수강등록</li>
				<li class="pull-left col-md-10">
					<ul>
						<? for( $i=0; $i<count($kidsway['noti1']); $i++ ) {?>
							<li>- <?=$kidsway['noti1'][$i]?></li>
						<?}?>
					</ul>
				</li>
			</ul>
			<ul class="clearfix mt20">
				<li class="pull-left col-md-2">전시안내</li>
				<li class="pull-left col-md-10">
					<ul>
						<? for( $i=0; $i<count($kidsway['noti2']); $i++ ) {?>
							<li>- <?=$kidsway['noti2'][$i]?></li>
						<?}?>
					</ul>
				</li>
			</ul>
		</div>
	</div>		
	
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/lightbox/js/lightbox.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/aos.js"></script>
	<script>
		$(function(){
			AOS.init();
		});
	</script>