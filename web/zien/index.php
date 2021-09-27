<?  header("Content-Type: text/html; charset = UTF-8");	?>
<?
	include_once('_inc/helper.php');
	$is_popup = get_cookie('is_popup','N');
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<? include_once('_inc/head.php'); ?>
	<!--플러그인 css참조-->
	<!-- 팝업창 -->
	<!-- 쿠키값의 존재 여부에 따른 팝업창 열기 -->
	<? if( $is_popup == 'N' ){ ?>
	<script type="text/javascript">
		// javascript 팝업창 열기
		window.open('child.php', 'child-win',
			'width=350, height=300, scrollbars=no, toolbar=no,resizable=no');
	</script>
	<? } ?>
	<!--// 팝업창 -->
	<link rel="stylesheet" href="_assets/css/jquery.fullpage.min.css"> 
</head>
<body>
	<!-- GUI 페이지 -->
	<? include_once('_inc/on-guipopup.php'); ?>
	<!--// GUI 페이지 -->
	<!-- 상단 -->
	<? include_once('_inc/menubar.php'); ?>
	<!-- main right tab-->
	<ul class="menu-right clearfix">
		<li class="mr15"><a href="about/contactus.php">CONTACT US</a></li>
		<li><a href="cscenter/reservation.php">예약 &amp; 문의</a></li>
	</ul>
	<!--// #menu-contents -->
	<!--// 상단 -->
	<!-- 내용 -->
	<div id="fullpage" class="fullpage-wrapper">
		<div class="section" id="page1">
			<ul >
				<li class="slide">
					<a href="#" class="bg">
						<img class="main-area2" src="_assets/img/main2-area-min.png" 
						     alt="김명식展/마음을 담은 집/The House That Holds A Heart">
					</a>
				</li>
				<li class="slide">
					<a href="#" class="bg">
						<span></span>
						<img class="main-area3" src="_assets/img/main3-area-min.png" 
							 alt="이인진展/하늘 아래 집/The House Under The Sky">
					</a>
				</li>
				<li class="slide">
					<a href="#" class="bg">
						<span class="main-area1 t-none">최성재展/四季/
						Steps Toward the four Seasons.</span>
					</a>
				</li>
			</ul>	
		</div>
		<!-- 브랜드 페이지 연결-->
		<div class="section" id="page2">
			<div class="bbg">
				<img src="_assets/img/brand-main-sub.png" 
				     alt="about ZIEN/ZIEN STORY/국내외 전문작가들의 창작 및 연구활동을 지원
						  하는/Open Studio를 통해 현장중심 교육의 장으로 활성화하고자 합니다." 
				     class="bbg-img-position"/>
			</div>
			<div>
				<a href="about/aboutzien.php" class="block bbt-position" id="bbt">더보기</a>
			</div>
		</div>

		<!-- 이벤트 페이지 연결-->
		<div class="section" id="page3">
			<div id="shop">
				<!-- 배경 -->
				<div></div>
				<div class="img"></div>
				<!--// 배경 -->
				<!-- 내용 -->
				<div class="cont center">
					<h2>ZIEN SHOP</h2>
					<p>지앤숍(ZIENshop)은 지앤아트스페이스에서 운영하는 리빙숍으로 국내는 물론 세계 각지의 숨겨진 명품 테이블웨어 및 생활 소품 중 우수한 품질과 아름다운 디자인, 합리적인 가격을 겸비한 제품만을 엄선하여 소비자에게 곧바로 선보이는 아울렛 &amp; 갤러리입니다.</p>
					<a href="shop/shop.php#shop-sub" class="bt">브랜드 소개</a>
				</div>
				<!--// 배경 -->
			</div>			
		</div>
	</div>
	<!--// 내용 -->
	<!-- 하단 -->
	<footer>
		<? include_once('_inc/footer.php'); ?>
	</footer>
	<!-- #gui page 호출 버튼 -->
	<div id="gui_btn" onclick="cls_btn();">
		<h3 class="fb16 hide">GUI</h3>
		<a href="#"><img src="_assets/img/search.png" alt="gui"/></a>
	</div>
	<!--// #gui page 호출 버튼 -->
	<!--// 하단 -->
	<!-- js/jq 참조 -->
	
	<!--jQ참조-->
	<script src="/dslee/web/zien/_assets/js/regex.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/jquery.fullpage.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/scrolloverflow.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/jquery.animatecss.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/aos.js"></script>
	<script>
		$(function(){

			/**
			--------------------------------------------------------
			  * animate/ aos plugin
			--------------------------------------------------------
			*/
			var box = $(".slide").eq(0).find("img");
			// 애니메이션 재생을 위해서 일단 숨겨 놓는다.
            //box.css('visibility', 'hidden');    
            box.eq(0).animateCSS('fadeIn', {        // animate.css 적용
                duration: 800,
                delay: 500
            });
            AOS.init({
                offset: 200,
                easing: 'ease-in-sign',
                duration: 800,
                delay: 800,
            });

			$(document).ready(function() {
				$("#fullpage").fullpage({
			        //scrolling
			        css3:true,
			        scrollingSpeed:700,
			        autoScrolling: true,
					fitToSection: true,
					fitToSectionDelay: 1000,
					scrollBar: false,
					easing: 'easeInOutCubic',
					easingcss3: 'ease',
					scrollOverflow: true,
					keyboardScrolling:true,
					scrollOverflowReset: true,
					controlArrows: true,
					loopBottom: true,
					loopTop: true,
					loopHorizontal: true,
			    });
			});				
		});
    
	</script>
	<!--//jQ참조-->
</body>
</html>