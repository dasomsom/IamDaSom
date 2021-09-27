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
						<li><a href="../studio/studio.php" class="fl16 greenb16"><?=$gnb['studio']['title0']?></a></li>
						<li><a href="../studio/kids.php" class="fl16"><?=$gnb['studio']['title1']?></a></li>
						<li><a href="../cscenter/reservation.php" class="fl16"><?=$gnb['studio']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<div id="studio">
		<!-- intro -->
		<div id="gallintro" class="mt175 mb100 control-box">
			<div class="arch-box pl88">
				<div class="disc">
					<p class="justify">
						<span class="gr fb28">예술과 삶이 만나﻿<br/>
서로 대화하고, 창작하고, 체험할 수 있는 현장중심 교육. </span><br/><br/>
						<?=$studintro['intro']?>
					</p>
				</div>
				<div class="mt20 imgarea">
					<? for( $i=0; $i<count($studintro['img']); $i++) { ?>
						<a href="<?=$studintro['img'][$i]?>" data-lightbox="my-studio" data-title="<?=$studintro['title'][$i]?>">
			            	<img src="<?=$studintro['img'][$i]?>" width="33%" height="230px" />
			            </a>
		            <?}?>
				</div>	
			</div>
		</div>		
		<!--// intro -->
	</div>

	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/lightbox/js/lightbox.min.js"></script>