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
						<li><a href="aboutzien.php" class="fl16"><?=$gnb['about']['title0']?></a></li>
						<li><a href="contactus.php" class="fl16"><?=$gnb['about']['title1']?></a></li>
						<li><a href="architecture.php" class="fl16 greenb16"><?=$gnb['about']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->
	<!-- 내용-->
	<!-- ZIEN art space --> 
	<div id="space">
		<!-- 전경이미지 -->
		<div class="pic"></div>
		<div class="container_box hight">
			<!-- 문구 + 도면-->
			<div class="arch-box"> 
				<div class="disc justify pl88">
					<p>
						<span class="gr fb28 fh50">"건축은 삶을 담는 또 하나의 '그릇'이다."</span><br/>아름다운 그릇에 정성스런 음식이 담기듯, 아름다운 건축물에 풍요로운 삶이 담긴다. 선유도 공원, 의재미술관, 소마미술관 등을 설계한 건축가 조성룡은 평소의 건축 철학인 '풍경으로의 건축' 을 지앤아트스페이스를 통해서도 보여주고 있다. 자연, 사람, 문화, 예술이 조화롭게 공존하는 지앤아트스페이스는 예술적 감동과 문화적 공감이 피어나는 공간으로, 창작의 열정을 분출하는 공간으로, <span class="bold">새로운 아이디어와 다양한 목소리가 서로 소통하고 교류하는 공간으로 태어나게 될 것이다.</span>
					</p>
				</div>
			</div>
		</div>
		<!--// 문구 + 도면-->
	</div>
	<!-- 도면-->
	<div id="CAD" class="control-box mt50 mb100 pl88">
		<div id="cadbox" class="center arch-box">
			<div class="cad">
				<ul id="cadpic">
					<li id="ctab1"><img src="../_assets/img/cad1.png" alt="풍경으로서의 건축">
						<hr>
						<p>건물과 건물 사이로 참나무 숲을 보여주고 건물의 배치 또한 땅의 흐름과 유기적인 관계를 갖게<br/>계획하여 건물 전체가 주변에 스며드는 자연스러운 풍경을 만든다.</p></li>
					<li id="ctab2" class="hide"><img src="../_assets/img/cad2.png" alt="부분과 전체">
						<hr>
						<p>총 5개의 각기 다른 건물로 구성되는 독특한 공간은 서로 독립적인 성격을 가지고 동시에 유기적으로 관계하면서 하나의 커다란 전체를 이루게 된다.</p>
					</li>
					<li id="ctab3" class="hide"><img src="../_assets/img/cad3.png" alt="백남준 아트 센터와의 관계">
						<hr>
						<p>지앤아트스페이스는 주변환경을 충분히 고려하여 백남준아트센터의 건축물과 긴밀한 관계를 가질 수 있도록 설계되었다. 전시관, 문화센터, 이벤트홀, 레스토랑, 스튜디오, 수공간 등 미술관의 다양한 시설물들은 관람객들이 쉽게 접근 할 수 있도록 골목을 조성하며 향후 백남준아트센터를 비롯한 뮤지엄 파크와 자연스럽게 연결될 수 있도록 디자인 되었다.</p>
					</li>
				</ul>
				<ul id="cadtab" class="fb22">
					<li class="tab_selec"><a href="#ctab1" >풍경으로서의 건축</a></li><!--
				--><li><a href="#ctab2">부분과 전체</a></li><!--
				--><li><a href="#ctab3">백남준 아트 센터와의 관계</a></li>
				</ul>
			</div>
		</div>
	</div>	
	<!--// 도면-->

	<!--// ZIEN art space -->
	<!-- 건축가 소개 -->
	<div id="arch_itv" class="container_box hight">
		<div class="arch-box">
			<div id="arch" class="clearfix dm">
				<div class="cont pull-left">
					<div>
						<img src="../_assets/img/arch.png" alt="건축가 조성룡">
					</div>
					<ul class="title fb57 mt40 mb150">
						<li class="gr">Architecture_</li>
						<li class="f_name">Jo.</li>
						<li class="S_name">sung-ryong</li>
						<li class="fl25 mt20">2006.04.seoul</li>
					</ul>
				</div>
				<div id="hit1" class="pull-right clearfix">
					<div class="top clearfix">
						<h2 class="fl25 mb20">건축가 <span class="bold">조성룡</span></h2>
						<ul class="hit-num pull-left">
							<li>1944</li>
							<li class="mb50">1983 - </li>
							<li>1987</li>
							<li>1993</li>
							<li>2003</li>
						</ul>
						<ul class="hit-disc pull-left ml30">
							<li>일본 동경 출생</li>
							<li>&lt;서울아시아경기대회 선수촌 및 기념공원 국제설계경기&gt;,<br/>&lt;의제미술관&gt;,&lt;소마미술관&gt;,한강&lt;선유도 공원&gt;,<br/>&lt;해안사신행 문화도랑&gt;,&lt;고암 이응로화백 샐가지 복원 및 기념관&gt;설계</li>
							<li>서울시 건축상</li>
							<li>한국건축가협회상</li>
							<li>김수근문화상 수상</li>
						</ul>
					</div>
					<p class="justify">
						&lt;마당의 사상 - 신세대의 한국건축 3인전&gt; (일본 동경 Gallery MA 1989),<br/>&lt;4.3 그룹 건축전&gt; (서울 1991), &lt;베니스 비엔날레 건축전&gt;
						한국관 (이탈리아 2002) 전시회에 초대되었으며, 					2006년에는 같은 전시회의 한국관 커미셔너를 맡았다.
						현재 공동전시 &lt;s(e)oulscape-towards a new urbanity in Korea&gt; 유럽순회전시 중이다.<br/>
						1996년 부터 2003년 까지 김수근문화재단 부설 sa/서울건축학교의 교장을 역임하였고, 현재 조성료도시건축 대표이며, 성균관대학교 건축학과 석좌교수, 성균건축도시설계원 원장, 문화재청 문화재위원을 맡고있다.
					</p>
				</div>
			</div>
		</div>
	</div>
	<!--// 건축가 소개 -->
	<!-- 건축가 인터뷰 -->
	<div class="container_box hight">
		<div class="arch-box">
			<div class="disc justify pl88">
				<p><span class="gr fb28">풍경, 마음 속에 든 그림_</span><br/><br/>
					'서울 아시아경기대회 선수촌 및 기념공원' 국제설계경기에 1등으로 당선되며, 본격적으로 건축 작업을 시작한 그는 최근 5년간 풍경과 건축의 관계에 집중해왔다.<br/>

			“풍경(風景)이라는 한자는 7세기경 두보의 시에 처음 등장한 것으로 알고 있어요. '바람 풍'자가 들어가는 '풍경'의 말뜻은 자연과 바람의 관계, 바람이 부는 순간이 풍경이라는 것이죠. 풍경은 서양의 랜드스케이프(Landscape)와는 다른 개념입니다. 랜드스케이프가 멀찍이서 바라보는 모습이라면, 동양의 풍경은 자연 속의 일부입니다. 사람 또한 풍경을 구성하는 매개체가 되는 것이죠.”<br/><br/>

			그는 시대의 잊혀진 풍경을 찾아내 건축 공간을 엮어간다. 무등산 자락에 머물며 의재 허백련 선생의 풍류 시대를 재현한 의재미술관, 백제 몽촌토성과 연결되는 소마미술관, 버려진 여러 채의 콘크리트 건물인 정수장을 도시의 여백 공간으로 되돌려놓은 선유도 공원이 그러하다. 문득 그가 만든 풍경들이 의재 허백련 선생이 그린 한 점의 산수화와 닮았다는 생각이 들었다. 산수화 속에는 산과 나무, 물과 안개, 바위와 흙이 경계 없이 놓여 있다. 그리고 작은 집과 작은 집보다 더 작은 사람이 있다. 손톱만큼 작게 쓱쓱 그려낸 사람의 형상이지만 대부분의 산수화에는 사람이 등장한다. 산꼭대기 전망대가 아니라 자연 그 안에서 풍경을 즐기는 모습이다. 사랑하는 이에게 흠뻑 안기는 것처럼 자연 안에서 마음껏 노닐던 모습이 바로 산수화에 담겨 있다.<br/><br/>

			“잘 꾸민 일본식 정원과 달리 우리 정원은 볼 것이 하나도 없어요. 소쇄원이 그렇죠. 처음 소쇄원을 찾은 이들은 시시하다고들 하지요. 그냥 자연 속에 덩그러니 정자가 놓여 있다 생각하는데 그게 우리네 정원인걸요. 소쇄원은 관광지가 아니라 풍류를 느끼는 장소예요. 이리 보고, 저리 보고, 위로 보고, 아래로 보고, 초겨울에 보고, 가을에 봐야 하는 곳입니다.”<br/><br/>

			<span>- 2008년 8월호 JJ매거진에서 기사 일부 발췌</span><br/><br/>
			<span class="greenb16">2008년 10월 또 하나 풍경의 건축을 완성하다.</span><br/>
			유난히 풍경이라는 화두에 매달리는 건축가 조성룡씨는 2008년 여름 용인 기흥에 있는 복합문화공간 지앤아트스페이스> 건축 현장을 둘러보고 있었다.<br/>

			그의 또 다른 풍경드러내기의 마지막 마무리 작업이 한창이었다. 지앤아트스페이스는 2008년 10월 9일 개관했다.
				</p>
			</div>
		</div>
	</div>
	<!--// 건축가 인터뷰 -->
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script>
	$(function(){
		$('#cadtab li').click(function(e){
			e.preventDefault();
			$(this).addClass('tab_selec');
			$(this).find("a").css('color','#fff');

			$('#cadtab li').not($(this)).removeClass('tab_selec');
			$('#cadtab li').not($(this)).find("a").css('color','#666');
			/* 탭과 이미지 연결 */
			var i = $(this).index();
			var target = $('#cadpic li');

			target.eq(i).removeClass('hide');
			target.not(target.eq(i)).addClass('hide');
			<? include_once("../_assets/js/aboutZIEN.js"); ?> 

		});
	});	
	</script>