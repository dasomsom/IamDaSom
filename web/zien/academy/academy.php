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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['academy']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="/web/zien/academy/academy.php" class="fl16"><?=$gnb['academy']['title1']?></a></li>
						<!-- 수강신청 이동 후 접수하고 나서 갤러리 페이지로 다시 돌아오는 이벤트 걸기!-->
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->

	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="http://code.jquery.com/jquery-3.2.1.min.js"></script>