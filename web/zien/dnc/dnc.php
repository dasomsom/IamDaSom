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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['dnc']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="/about/contactus.php" class="fl16"><?=$gnb['dnc']['title1']?></a></li>
						<li><a href="/cscenter/reservation.php" class="fl16"><?=$gnb['dnc']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<div id="dnc" class="section">
		<div></div>
		<div class="img"></div>
		<h2 class="fb100"
			data-aos="fade-up"
     		data-aos-anchor-placement="bottom-bottom">
     	<?=$gnb['dnc']['title0']?></h2>
	</div>	
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/_assets/jQ-plugin/aos.js"></script>
	<script>
		$(function(){
			AOS.init();
		});
	</script>