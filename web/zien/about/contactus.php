<? header("Content-Type: text/html; charset = UTF-8"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<? include_once('../_inc/head.php'); ?>
	<? include_once('../_inc/common.php'); ?>
	<? include_once('../_inc/datacontactus.php'); ?>
	
	<!-- 구글 맵 스크립트 참조 -->
	<script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyCGGm7x9gAKv85HGIrgNtTGoBmI3UONgTk"></script>
	<!-- gmap 플러그인 참조 -->
	<script src="/dslee/web/zien/_assets/jQ-plugin/gmaps.min.js"></script>
	<script src="/dslee/web/zien/_assets/jQ-plugin/gmaps_helper.js"></script>
	<!-- Ajax Helper -->
	<link rel="stylesheet" href="/dslee/web/zien/_assets/css/ajax_helper.css" />
	<script src="/dslee/web/zien/_assets/jQ-plugin/ajax_helper.js"></script>
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
						<li><a href="contactus.php" class="fl16 greenb16"><?=$gnb['about']['title1']?></a></li>
						<li><a href="architecture.php" class="fl16"><?=$gnb['about']['title2']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->
	<!-- 내용-->
	<div id="contact" class="control-box">
		<div class="arch-box clearfix pl88">
			<h2 class="fb22 center">찾아오시는 길</h2>
			<div class="way clearfix">
				<div class="pull-left">
					<div class="pic"></div>
					<div class="disc pt15 mt20">
						<ul class="txt mb20">
							<li>대중교통 이용시</li>
							<li>지하철 + 버스</li>
							<li>[ 분당선 기흥역 6번출구 하차 후 일반/마을버스 이용 ]</li>
						</ul>
						<div class="wayline">
							<? for($i=0; $i<count($bus); $i++ ) { ?>
								<ul>
									<? for($j=0; $j<count($bus[$i]); $j++) {?>
									<li><span class="badge<?=$j?>"><?=$i+1?></span><?=$bus[$i][$j]?></li>
									<?}?>
								</ul>
							<? } ?>
						</div>
					</div>
				</div>
				<div class="pull-right">
					<div id="gmap"></div>
					<div class="disc pt15 mt20" style="margin-left: 40px;">
						<ul class="txt clearfix">
							<li>자가용 이용시</li>
							<li class="controler-l">[ 도로명 주소 ]</li>
							<li class="controler-r">경기도 용인시 기흥구 백남준로 7</li>
							<li class="controler-l">[ 지번 주소 ]</li>
							<li class="controler-r">경기도 용인시 기흥구 상갈동 150-7</li>
						</ul>
						<div class="highline">
							<? for($i=0; $i<count($car); $i++ ) { ?>
								<ul>
									<? for($j=0; $j<count($car[$i]); $j++) {?>
									<li><span class="badge<?=$j?>"><?=$i+1?></span><?=$car[$i][$j]?></li>
									<?}?>
								</ul>
							<? } ?>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="arch-box pl88">
			<h2 class="fb22 center">문의전화 및 영업시간</h2>
			<div class="worktime">
				<table class="center">
					<thead>
						<? for($i=0; $i<count($time)-4; $i++) {?>
							<tr>
								<? for($j=0; $j<count($time[$i]); $j++) {?>
									<th><?=$time[$i][$j]?></th>
								<?}?>
							</tr>
						<?}?>
					</thead>
					<tbody>
						<? for($i=1; $i<count($time); $i++) {?>
							<tr>
								<? for($j=0; $j<count($time[$i]); $j++) {?>
									<th><?=$time[$i][$j]?></th>
								<?}?>
							</tr>
						<?}?>
					</tbody>
				</table>
				<ul class="pic">
					<li class="inline">
						<img src="../_assets/img/location3.png">
						<p>
							<span class="bold">B1</span><br>
							1. 레스토랑<br>2. 갤러리<br>3. 이벤트홀
						</p>
					</li>
					<li class="inline">
						<img src="../_assets/img/location1.png">
						<p>
							<span class="bold">2F</span><br>
							1. 리빙숍<br>2. 어린이 창작 스튜디오<br>3. 주차장
						</p>
					</li>
					<li class="inline">
						<img src="../_assets/img/location2.png">
						<p>
							<span class="bold">1F</span><br>
							1. 카페<span class="pictxt">2. 갤러리</span>3. 아트숍 <br>
							4. 아카데미&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;5. 창작스튜디오&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;6. 가마실<br>7.주차장
						</p>
					</li>
				</ul>
				<div id="caution">
					<ul>
						<li class="fb18 mb20">주의사항</li>
						<? for($i=0; $i<count($parkcaut); $i++) {?>
							<? for($j=0; $j<count($parkcaut[$i]); $j++) {?>
							<li><span>- </span><?=$parkcaut[$i][$j]?></li>
							<?}?>
						<?}?>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	

	<!--참조-->
	<script src="/dslee/web/zien/_assets/js/common.js"></script>
	<script>
	$(function(){
		var map_addr ="경기도 용인시 기흥구 백남준로 7";
		var map_title = "지앤아트스페이스";
		var map_icon = "../_assets/img/icon/marker.png";

		var lat_value = 0;
		var lng_value = 0;

		var map = createGoogleMap("#gmap", lat_value, lng_value);

		/** geocoding으로 주소 가져오기**/
		$.get("https://maps.googleapis.com/maps/api/geocode/json",{
			address:map_addr,
			key:"AIzaSyCGGm7x9gAKv85HGIrgNtTGoBmI3UONgTk"
		}, function(json){
			if(json.status=='OK'){
				// 주소에 대한 위경도 추출
				lat_value = json.results[0].geometry.location.lat;
				lng_value = json.results[0].geometry.location.lng;

				/** 지도에 마커 추가하기 */
				addMapMarker(map, lat_value, lng_value, map_title, map_icon);

				// 위도와 경도로 지도의 중심 재설정
				map.setCenter(lat_value, lng_value);
			} else {
				alert("식별할 수 없는 주소 입니다.");
			}
		});
	});
	</script>