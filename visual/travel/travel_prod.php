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
				<h2 class="h2bold text-center">TRAVEL</h2>
				<h1 class="circle-box ml8-2">	
					<span class="circle circle-container">
				  		<img class="circle circle-img" src="../../_assets/img/1x/planet02.png" alt="cosmetic"/>
				  	</span>
				</h1>
				<div>
					<p class="container mt20">여행 종합 브랜드에서 근무하는 동안 상품, 패키지 및 웹페이지 등 디자인에 참여한 작업물입니다. </p>
				</div>	
				<div class="mt20"><img src="../../_assets/img/down_btn.gif" alt="arrow down" style="width: 60px; height: 60px; opacity: 0.7;"></div>
			</div>	
			<ul id="navbar">
				<li class="col-xs-3"><a href="#luckyprod">상품</a></li><!--
				--><li class="col-xs-3"><a href="#luckypack">패키지</a></li><!--
				--><li class="col-xs-3"><a href="#webdes">웹 &amp; 기획전</a></li><!--
				--><li class="col-xs-3"><a href="#luckylogo">브랜드</a></li>
			</ul>
		</div>
	</div>	
	<div id="cos-body">
		<div class="container port_tab">
			<p class="text-center fontbgtl">이미지를 click 하시면 확대 이미지를 보실 수 있습니다.</p>
			<ul id="luckyprod" class="grid clearfix">
				<? for( $i=0; $i < count($luckyprod['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$luckyprod['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$luckyprod['title'][$i]?>">
							<img src="<?=$luckyprod['img'][$i]?>" alt="product-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
			<ul id="luckypack" class="grid clearfix hidden">
				<? for( $i=0; $i < count($luckypack['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$luckypack['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$luckypack['title'][$i]?>">
							<img src="<?=$luckypack['img'][$i]?>" alt="package-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
			<ul id="webdes" class="grid clearfix hidden">
				<? for( $i=0; $i < count($webdes['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$webdes['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$webdes['title'][$i]?>">
							<img src="<?=$webdes['img'][$i]?>" alt="web-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
			<ul id="luckylogo" class="grid clearfix hidden">
				<? for( $i=0; $i < count($luckylogo['img']); $i++ ) { ?>
					<li class="item imgarea">
						<a href="<?=$luckylogo['img'][$i]?>"  data-lightbox="my-gallery" data-title="<?=$luckylogo['title'][$i]?>">
							<img src="<?=$luckylogo['img'][$i]?>" alt="logo-img"/>
						</a>
					</li>
				<? } ?>
			</ul>
		</div>
		
	</div>
	<script src="/web/zien/_assets/jQ-plugin/lightbox/js/lightbox.min.js"></script>
	<script src="../../_assets/js/portfolio.js"></script>
	<script src="../../_assets/js/menubar.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/animejs/2.0.2/anime.min.js"></script>
</body>
</html>