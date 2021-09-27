<?  header("Content-Type: text/html; charset = UTF-8");	?>


<!DOCTYPE html>
<html lang="ko">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
	<? include_once('../_inc/datashop.php'); ?>
	<? include_once('../_inc/helper.php'); ?>
		
</head>
<body>
	<!-- menu bar-->
	<? include_once('../_inc/menubar.php'); ?>
	<!-- nav -->
	<div class="fixed">
		<div class="cont">
			<div class="ml80">
				<div class="sub-bar clearfix">
					<? for( $i=0; $i<count($prodtitle)-1; $i++) {?>
						<ul class="pull-left">
							<li class="mr30 fb18">PRODUCT</li>
							<? for($j=0; $j<count($prodtitle['flower']); $j++) {?>
								<li><a href="flowershop.php?tab=<?=$j+1?>"><?=$prodtitle['flower'][$j]?></a></li>
							<?}?>
						</ul>
					<?}?>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="<?=$gnb['shop']['title1url']?>" class="fl16"><?=$gnb['shop']['title1']?></a></li>
						<li><a href="<?=$gnb['shop']['title2url']?>" class="fl16 greenb16"><?=$gnb['shop']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
			
	<div class="product mt175 mb100">		
		<?=$result?>
	</div>
	<!-- 장바구니 알럿-->
	<div id="cartalert" class="container-box">
		<div class="area center hide">
			<a href="#"></a>
			<h1 class="fb22">장바구니에<br/>추가하였습니다.</h1>
		</div>
	</div>
	<!--// 장바구니 알럿-->
	
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	
	<script src="/web/zien/_assets/js/common.js"></script>
</body>
</html>	