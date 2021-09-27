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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['shop']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="<?=$gnb['shop']['title1url']?>" class="fl16"><?=$gnb['shop']['title1']?></a></li>
						<li><a href="<?=$gnb['shop']['title2url']?>" class="fl16"><?=$gnb['shop']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->

	<!-- 내용-->
	<div id="shop-sub" class="clearfix">
		<ul class="clearfix">
			<li class="pull-left">
				<div class="front">
					<div class="shoptxt">
						<h2 class="center"
						data-aos="fade-up" data-aos-duration="600"
     					data-aos-anchor-placement="bottom-bottom">
     					Tableware outlet<br>ZIENSHOP</h2>
						<a href="#" class="bt hide">Click</a> 
					</div>
					<div class="box">
						<div class="sbg-hover"></div>
						<a class="bg" href="#"></a>
					</div>	
				</div>
				<!-- 플라워샵 클릭 이벤트 -->
				<div class="sbg-click clearfix hide">
					<div class="mr88 pull-right">
						<? for( $i=0; $i<count($flower); $i++) {?>
							<ul class="disc justify">
								<? for($j=0; $j<count($flower[$i]); $j++) {?>
									<li><?=$flower[$i][$j]?></li>
								<?}?>
							</ul>
						<?}?>
					</div>	
					<div class="button">
						<a href="<?=$gnb['shop']['title2url']?>" class="pbt">Shop</a>
						<a href="#" class="pbt closed">Close</a>
					</div>	
				</div>
			</li>
			<li class="pull-right">
				<div class="front">
					<div class="shoptxt justify">
						<h2 class="center"
							data-aos="fade-up" data-aos-duration="600"
     						data-aos-anchor-placement="bottom-bottom">
     		Terracotta Pot Story<br>토분이야기</h2>
						<a href="#" class="bt hide">Click</a> 
					</div>
					<div class="box">
						<div class="sbg-hover"></div>
						<a class="bg" href="#"></a>
					</div>
				</div>
				<!-- 테이블샵 클릭 이벤트 -->
				<div class="sbg-click hide ">
					<div class="ml88">
						<? for( $i=0; $i<count($table); $i++) {?>
							<ul class="disc justify">
								<? for($j=0; $j<count($table[$i]); $j++) {?>
									<li><?=$table[$i][$j]?></li>
								<?}?>
							</ul>
						<?}?>
					</div>	
					<div class="button">
						<a href="<?=$gnb['shop']['title1url']?>" class="pbt">Shop</a>
						<a href="#" class="pbt closed">Close</a> 
					</div>	
				</div>
			</li>
		</ul>
	</div>
	<!--// 내용-->
	<!-- 하단 
	< include_once('../_inc/foot-info.php'); ?>
	<!- // 하단 -->
	<!--참조-->
	<script src="/web/zien/_assets/js/common.js"></script>
	<script src="/web/zien/_assets/jQ-plugin/aos.js"></script>
	<script>
		$(function(){
			
			AOS.init();
		
			$("#shop-sub li").hover(function(){
				if($(this).find('.bt').hasClass('hide') == true){
					$(this).find('.bt').removeClass('hide');
				} else{
					$(this).find('.bt').addClass('hide');
				}
			});

			 $("#shop-sub .bt").click(function(e){
			 	e.preventDefault();
				$("#shop-sub .bt").not(this).parents('.front').addClass('hide');
			 	$("#shop-sub .bt").not(this).parents('li').find('.sbg-click').removeClass('hide');	
		    });
			$("#shop-sub .closed").click(function(e){
				$(this).parents('.sbg-click').addClass('hide');
				$(this).parents('ul').find('.front').removeClass('hide');
			});
		});
	</script>