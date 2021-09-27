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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['about']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="aboutzien.php" class="fl16 greenb16"><?=$gnb['about']['title0']?></a></li>
						<li><a href="contactus.php" class="fl16"><?=$gnb['about']['title1']?></a></li>
						<li><a href="architecture.php" class="fl16"><?=$gnb['about']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->
	<!-- 내용-->
	<!-- aboutZIEN Page -->
	<div id="ZIENstory">	
		<h2 class="center fb57">경영 이념</h2>
		<div class="pic1">
			<ul class="circle center fl20">
				<li class="c1" 
					data-aos="fade-up" data-aos-duration="600"
     				data-aos-anchor-placement="bottom-bottom">전시<br/>Exhibition
     			</li>
				<li class="c2" 
					data-aos="fade-up" data-aos-duration="1200"
     				data-aos-anchor-placement="bottom-bottom">교육<br/>Education
     			</li>
				<li class="c3"
					data-aos="fade-up" data-aos-duration="1800"
     				data-aos-anchor-placement="bottom-bottom">창작<br/>Creation
     			</li>
				<li class="c4"
					data-aos="fade-up" data-aos-duration="2400"
     				data-aos-anchor-placement="bottom-bottom">생활<br/>Living
     			</li>
			</ul>
		</div>		
		<div class="disc2">	
			<div>
				<p>
					2008년 10월 9일 십여 년의 오랜 준비과정을 마치고 경기도 용인(龍仁) 기흥(器興)에 작은 문화공간이 문을 열었습니다.<br/><br/>
					삶과 예술이 공존하는 공간, 문화예술과 자연생태가 어우러진 공간, 재충전과 휴식의 공간.<br/>
					모든 사람들이 ‘행복한 기억’을 가져갈 수 있는 ‘지앤아트스페이스’로 오신 것을 환영합니다.<br/><br/>
					지앤아트스페이스는 대중과 함께 하는 예술, 일상생활 속에 살아 움직이는 예술을 모토로 다양한 장르의 전시와 행사를 기획하고, 
					자연이라는 큰 테마 속에서 예술을 체험할 수 있는 친환경 교육 프로그램을 운영하며, 
					국내외 전문작가들의 창작 및 연구활동을 지원하는 Open Studio를 통해 현장중심 교육의 장으로 활성화하고자 합니다. <br/>
					예술과 사회와의 만남. 이것은 예술의 대중화와 저변확대로 표현될 수 있습니다. <br/>
					따져보면 새롭거나 거창한 구호가 결코 아닌 , 예술을 더 알기 쉽게 풀이함으로써 관람객 스스로 예술을 향유할 수 있도록 도움을 주고자 하는 것입니다. <br/><br/>
				
					앞으로, 저희 지앤아트스페이스는 <span>4대 운영의 주체인 전시(exhibition), 교육(education), 창작(creation), 생활(living) 분야</span>의 사업을 보다 유기적이고 의욕적으로 추진해 나아갈 것이며, 단지 문화를 파는 것이 아닌, <span>문화에 ‘기쁨과 행복’이란 옷을 입히기 위해 임직원 모두 부단히 노력할 것을 약속</span> 드립니다. <br/><br/>
					여러분들의 많은 관심과 사랑을 부탁드리며, 지앤아트스페이스를 방문해 주시는 모든 분들의 가정에 ‘기쁨과 행복’이 늘 가득하길 진심으로 기원합니다.
				</p>
			</div>	
		</div>
	</div>
	<!-- CEO -->
	<div id="CEObox" class="control_box">
		<div class="arch-box pl88">
			<div id="CEO">
				<div class="cont clearfix">
					<ul class="title fb57 mb150">
						<li class="gr">CEO_</li>
						<li class="f_name">JI.</li>
						<li class="S_name">jong-jin</li>
						<li class="ko_name fl-30">대표 <span class="fb28">지종진</span></li>
					</ul>
					<div id="hit1" class="pull-left">
						<h2 class="fb22 mb20">관장약력</h2>
						<ul class="hit-num pull-left">
							<li>1964</li>
							<li>1984 - 1988</li>
							<li>1988 - 1993</li>
							<li>1989</li>
							<li>1990</li>
							<li>1993</li>
						</ul>
						<ul class="hit-disc pull-left ml30">
							<li>서울출생</li>
							<li>홍익대학교 미술대학 공예과 도예전공 졸업</li>
							<li>홍익대학교 산업미술대학원 공예과 요업디자인전공 졸업</li>
							<li>제 4회 대한민국 공예대전 특선 (국립 현대미술관)</li>
							<li>제 5회 대한민국 공예대전 입선 (국림 현대미술관)</li>
							<li>석사학위 청구전 (홍익대학교 박물관 전시실)</li>
							<li>제 23회 홍익도작가회전 출품 (문예진흥원 미술회관)</li>
						</ul>
					</div>
					<div id="hit2" class="pull-right">
						<h2 class="fb22 mb20">주요경력</h2>
						<ul class="hit-num pull-left">
							<li>1995</li>
							<li>1998</li>
							<li>1989 - 2001</li>
							<li>1997 - 2001</li>
							<li>2002 - 2004</li>
							<li>2002 - 2008</li>
							<li>2008 ~ </li>
						</ul>
						<ul class="hit-disc pull-left ml30">
							<li>제 1회 개인전 (토아트스페이스 / 서울)</li>
							<li>제 2회 개인전 (통인갤러리 / 서울) 그외 단체전 다수</li>
							<li>진세라믹스 대표</li>
							<li>홍익대학교 미술대학 도예유리과 출강</li>
							<li>홍익대학교 미술대학 도예유리과 겸임교수</li>
							<li>도예랑 대표</li>
							<li>지앤아트스페이스 대표</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
		
	</div>
	<!--// CEO -->
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/jQ-plugin/aos.js"></script>
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script>
		$(function(){
			AOS.init({
				offset: 10,
		        easing: 'ease-in-sign',
		        duration: 600,
		        delay: 250
			});	
		});	
	</script>
</body>
</html>