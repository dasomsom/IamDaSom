<?  header("Content-Type: text/html; charset = UTF-8");	?>
<!DOCTYPE html>
<html lang="en">
<head>
	<? 
		include_once('../../_inc/head.php');
		//data 참조
		include_once('../../_inc/data.php'); 
	?>
	<link rel="stylesheet" href="../../_assets/js/lightbox/css/lightbox.min.css">
</head>
<body>
	<? include_once('../../_inc/menubar_port.php'); ?>
	<div id="cos-head" class="port-intro">
		<div class="menutop dust">
			<div class="text-center intro_page">
				<h2 class="h2bold text-center">COSMETIC</h2>
				<h1 class="circle-box ml8-2">	
					<span class="circle circle-container">
				  		<img class="circle circle-img" src="../../_assets/img/1x/planet03.png" alt="cosmetic"/>
				  	</span>
				</h1>
				<p>코스메틱 브랜드에서 근무하는 동안 매장 POP, 박람회의 이벤트, 인쇄물 등 디자인에 참여한 작업물입니다.</p>
				<div class="mt20"><img src="../../_assets/img/down_btn.gif" alt="arrow down" style="width: 60px; height: 60px; opacity: 0.7;"></div>
			</div>	
			<ul id="navbar">
				<li class="col-xs-3"><a href="#cospromot">프로모션</a></li><!--
				--><li class="col-xs-3"><a href="#cosposter">박람회</a></li><!--
				--><li class="col-xs-3 alert-js"><a href="#cospack">패키지</a></li><!--
				--><li class="col-xs-3"><a href="#cosprod">상품보정</a></li>
			</ul>
		</div>
	</div>
	<div id="cos-body" class="cos-mo-bg">
		<div class="container port_tab">
			<p class="text-center fontbgtl">이미지를 click 하시면 확대 이미지를 보실 수 있습니다.</p>
			<ul id="cospromot" class="grid clearfix">
				<? for( $i=0; $i < count($cospromot['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$cospromot['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$cospromot['title'][$i]?>">
							<img src="<?=$cospromot['img'][$i]?>" alt="cosmetic-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
			<ul id="cosposter" class="grid clearfix hidden">
				<? for( $i=0; $i < count($cosposter['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$cosposter['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$cosposter['title'][$i]?>">
							<img src="<?=$cosposter['img'][$i]?>" alt="promotion-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
			<ul id="cosprod" class="grid clearfix hidden">
				<? for( $i=0; $i < count($cosprod['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$cosprod['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$cosprod['title'][$i]?>">
							<img src="<?=$cosprod['img'][$i]?>" alt="product-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
		</div>
	</div>
	<!-- 하단 -->
	
	<!--// 하단 -->
	<script src="/web/zien/_assets/jQ-plugin/lightbox/js/lightbox.min.js"></script>
	<script src="../../_assets/js/portfolio.js"></script>
	<script src="../../_assets/js/menubar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>