<?
/**
===================================================================
  * gallery json
===================================================================
*/

$gallery = [
	[
		'img'    => '_assets/img/gallery01.png',
		'title'  => 'ZIEN Art Space 리뉴얼',
		'coment' => '기획부터 디자인, 코딩까지 100%',
		'src'    => 'web/zien/index.php',
	],[
		'img'    => '_assets/img/gallery02.png',
		'title'  => 'Starbucks',
		'coment' => '스타벅스 메인페이지 코딩',
		'src'    => 'web/starbucks/html/index.html',
	],[
		'img'    => '_assets/img/gallery03.png',
		'title'  => 'Socar',
		'coment' => '쏘카 메인페이지, 로그인 코딩',
		'src'    => 'web/socar/index.html',
	],[
		'img'    => '_assets/img/gallery04.png',
		'title'  => 'Hospy',
		'coment' => '하스피 메인페이지 코딩',
		'src'    => 'web/hospy/index.html',
	],[
		'img'    => '_assets/img/gallery05.png',
		'title'  => 'Eatsslim',
		'coment' => '잇슬림 메인페이지 코딩',
		'src'    => 'web/eatsslim/index.html',
	],[
		'img'    => '_assets/img/gallery06.png',
		'title'  => 'form',
		'coment' => 'form 코딩',
		'src'    => 'web/form/index.html',
	]
];

$galleryresult ='<ul class="clearfix" data-aos="fade-up" data-aos-offset="20" data-aos-duration="1400">';
	for ($i=0; $i<count($gallery); $i++) {
		$galleryresult .='<li class="port-box items">
							<a href="'.$gallery[$i]['src'].'" target="_blank">
					        	<img src="'.$gallery[$i]['img'].'" alt="web_portfolio"/>
					        	<h2 class="port-title">'.$gallery[$i]['title'].'</h2>
				      			<p class="text-center sub">
				      				'.$gallery[$i]['coment'].'<br/>
								</p>
						    </a>
						   </li>';
	}
		$galleryresult .='<li id="hide_mv_bg" class="move-ico text-center">
							<img src="./_assets/img/swipe_move_lt.gif" alt="move gif" />
							<span>touch</span>
						</li>
						</ul>';		    
$visu = [
	[
		'img'    => '_assets/img/visual/cosmetic01.png',
		'title'  => '코스메틱 브랜드 디자인',
		'coment' => '2017.01 ~ 2017.05',
		'src'    => 'visual/cos/cosmetic.php',
	]
];
$visuresult ='<ul class=" clearfix port-list">';
	for ($i=0; $i<count($visu); $i++) {
		$visuresult .='<li class="port-box" data-aos="fade-up" >
						<a href="'.$visu[$i]['src'].'" target="_blank">
							<figure>
					        	<img src="'.$visu[$i]['img'].'" alt="web_portfolio"/>
					        </figure>	
				        	<ul class="port-coment clearfix">
			      				<li class="port-title">'.$visu[$i]['title'].'</li><!--
			      				--><li class="sub">'.$visu[$i]['coment'].'</li>
			      			</ul>
					    </a>
					   </li>';
	}
		$visuresult .='</ul>';
$travel = [
	[
		'img'    => '_assets/img/visual/luckycover.png',
		'title'  => '여행 브랜드 디자인',
		'coment' => '2014.04 ~ 2016.06',
		'src'    => 'visual/travel/travel_prod.php',
	]

];
$travelresult ='<ul class=" clearfix port-list">';
	for ($i=0; $i<count($travel); $i++) {
		$travelresult .='<li class="port-box" data-aos="fade-up">
						<a href="'.$travel[$i]['src'].'" target="_blank">
							<figure>
					        	<img src="'.$travel[$i]['img'].'" alt="web_portfolio"/>
					        </figure>	
				        	<ul class="port-coment clearfix">
			      				<li class="port-title">'.$travel[$i]['title'].'</li><!--
			      				--><li class="sub">'.$travel[$i]['coment'].'</li>
			      			</ul>
					    </a>
					   </li>';
	}
		$travelresult .='</ul>';
$cospromot = [
				'img' => [
					'_assets/img/visual/cos-full-06.png',
					'_assets/img/visual/cos-full-07.png',
					'_assets/img/visual/cos-full-09.png',
					'_assets/img/visual/cos-full-08.png',
					'_assets/img/visual/cos-full-012.png',
					'_assets/img/visual/cos-full-010.png'
				],'title'=> [
					'매장 프로모션 포스터 디자인 1',
					'매장 프로모션 포스터 디자인 2',
					'매장 프로모션 포스터 디자인 3',
					'매장 프로모션 포스터 디자인 4',
					'매장 프로모션 포스터 디자인 5',
					'매장 프로모션 포스터 디자인 6',
				]
];
$cosposter = [
				'img' => [
					'_assets/img/visual/cos-full-01.png',
					'_assets/img/visual/cos-full-05.png',
					'_assets/img/visual/cos-full-03.png',
					'_assets/img/visual/cos-full-04.png',
					'_assets/img/visual/cos-full-02.png'
				],'title'=> [
					'박람회 디자인 포스터 1',
					'박람회 디자인 포스터 2',
					'박람회 디자인 포스터 3',
					'박람회 디자인 포스터 4',
					'박람회 디자인 포스터 5'
				]
];
$cosprod =[
				'img' => [
					'_assets/img/visual/cos-full-011.png',
				],'title'=> [
					'상품보정 1',
				]
];
// $cospack = [
// 				'img' => [
// 					'_assets/img/visual/main_bomb01.png',
// 					'_assets/img/visual/main_bomb01.png',
// 					'_assets/img/visual/main_bomb01.png',
// 				],'title'=> [
// 					'그린 보야지 캠페인 패키지 디자인',
// 					'매장 오픈 리플렛',
// 					'화장품 전시 패키지 디자인'					
// 				]
// ];
$luckyprod = [
				'img' => [
					'_assets/img/visual/product01.png',
					'_assets/img/visual/product02.png',
					'_assets/img/visual/product03.png',
					'_assets/img/visual/product04.png',
					'_assets/img/visual/product05.png',
					'_assets/img/visual/product06.png',
					'_assets/img/visual/product07.png',
					'_assets/img/visual/product08.png',
					'_assets/img/visual/product09.png',
					'_assets/img/visual/product010.png',
					'_assets/img/visual/product011.png',
					'_assets/img/visual/product012.png'
				],'title'=> [
					'캐리어 커버 디자인 1',
					'캐리어 커버 디자인 2',
					'워너브라더스 라이센스 루니툰 여권케이스 디자인 1',
					'워너브라더스 라이센스 루니툰 여권케이스 디자인 2',
					'워너브라더스 라이센스 슈퍼맨 여행캐리어 디자인',
					'워너브라더스 라이센스 히어로즈 에코백 디자인 1',
					'워너브라더스 라이센스 히어로즈 에코백 디자인 2',
					'워너브라더스 라이센스 히어로즈 네임택 디자인 1',
					'워너브라더스 라이센스 히어로즈 네임택 디자인 2',
					'워너브라더스 라이센스 히어로즈 클러치백 디자인',					
				]
];
$luckypack = [
				'img' => [
					'_assets/img/visual/luckypack_01.png',
					'_assets/img/visual/luckypack01.png',
					'_assets/img/visual/luckypack_02.png',
					'_assets/img/visual/luckypack02.png',
					'_assets/img/visual/luckypack03.png',
					'_assets/img/visual/luckypack04.png',
					'_assets/img/visual/luckypack05.png'
				],'title'=> [
					'캐리어 리폼 스티커',
					'캐리어 리폼 스티커 패키지 디자인',
					'워너브라더스 라이센스 히어로즈 뱃지',
					'워너브라더스 라이센스 히어로즈 뱃지 패키지 디자인',
					'여권 케이스 패키지 디자인',
					'손난로 패키지 디자인',
					'워너브라더스 라이센스 파우치 패키지 디자인<br/>박람회 라벨 디자인',							
				]
];

$webdes = [
				'img' => [
					'_assets/img/visual/webd01.png',
					'_assets/img/visual/webd02.png',
					'_assets/img/visual/webd03.png',
					'_assets/img/visual/webd04.png',
					'_assets/img/visual/webd05.png',
					'_assets/img/visual/webd06.png',
					'_assets/img/visual/webd07.png',
					'_assets/img/visual/webd08.png',
					'_assets/img/visual/webd09.png',
					'_assets/img/visual/webd010.png',
					'_assets/img/visual/webd011.png',
					'_assets/img/visual/event01.png',
					'_assets/img/visual/event02.png',
					'_assets/img/visual/event04.png'
				],'title'=> [
					'브랜드 소개 &amp; 배송관련 소개 페이지 디자인',
					'홈페이지 리뉴얼 디자인',
					'홈페이지 배너 디자인 1',
					'홈페이지 배너 디자인 2',
					'홈페이지 배너 디자인 3',
					'홈페이지 배너 디자인 4',
					'홈페이지 배너 디자인 5',
					'홈페이지 배너 디자인 6',
					'홈페이지 배너 디자인 7',
					'홈페이지 배너 디자인 8',
					'기획전 페이지 디자인 1',	
					'기획전 페이지 디자인 2',
					'기획전 페이지 디자인 3',		
				]
];
$luckylogo = [
				'img' => [
					'_assets/img/visual/event05.png',
					'_assets/img/visual/event06.png'
				],'title'=> [
					'리빙 소품 브랜드 로고 디자인',
					'리빙 소품 브랜드 로고 디자인',
				]					
];
?>