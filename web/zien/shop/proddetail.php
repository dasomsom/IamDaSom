<?  header("Content-Type: text/html; charset = UTF-8");	?>
<!DOCTYPE html>
<html lang="ko">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/datashop.php'); ?>
		
</head>
<body>
	<!-- menu bar-->
	<? include_once('../_inc/menubar.php'); ?>
	<!-- 내용-->
	
	<div id="proddtail" class="section">
			<ul class="control-box clearfix">
				<!-- 이미지 영역 -->
					<li class="pull-left">
						<a href="#"><?=($flowervint)[0]['img']?></a>
					</li>
					<!-- 내용 영역 -->
					<li class="pull-left">
						<ul class="clearfix">
							<li><?=($flowervint)[0]['title']?></li>
							<li><?=($flowervint)[0]['size']?></li>
							<li><span class="">판매가</span><div class=""><?=($flowervint)[0]['price']?></div></li>
							<li></li>
							<li></li>
							<li></li>
							<li></li>
						</ul>
					</li>

			</ul>

	</div>

	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->

</body>
</html>