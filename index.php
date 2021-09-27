<?  header("Content-Type: text/html; charset = UTF-8");	?>

<!DOCTYPE html>
<html lang="en">
<head>
	<? include_once('_inc/head.php'); ?>
	<? include_once('_inc/data.php'); //data 참조 ?>
</head>
<body>
	<!-- 상단 -->
	<? include_once('_inc/menubar.php'); ?>
	<!--// 상단 -->

	<!-- 내용 -->
		<!-- intro -->
		<div id="home">
			<video autoplay muted loop id="mainVideo">
		        <source src="_assets/img/588688352.mp4" type="video/mp4"/>
		    </video>
		    <div class="dust"></div>
			<div class="title text-center">
				<div>
					<b>Jo<span>u</span>rn<span>e</span>y</b><br/>
					<b><span>to</span> the</b><br/>
					<b style="color: #eaac31;">Gal<span>a</span>xy</b>
				</div>
			</div>
			<h1 class="circle-box ml8">
				<span class="circle circle-container">
			  		<span class="circle circle-dark-dashed"></span>
			  	</span>
			</h1>
			<div>
				<span id="typed3" class="typing" style="white-space:pre;"></span>
			</div>
		</div>
		<!--// intro -->
		<!-- about me -->
		<div id="about">
			<div class="dust">
				<div class="container">
					<div class="title-center text-center" id="welcome">
						<h2 class="h2bold" data-aos="fade">I CAN DO IT!</h2>
					</div>
					<div class="box ab-box fontbgtl">
						<div class="content">
							<div>
								<p class="text-center">
									 각각의 별들을 이어 별자리로 칭하듯, <br/>다양한 업무와 교육 활동을 통해 얻은 기술과 경험을 바탕으로
									 <span class="bold down fontbgt">'쉽고 간단하게 누구나 알아볼 수 있는'</span> 상품 및 콘텐츠를 기획하고 디자인하는 <span class="bold fontbgt">브랜드 디자이너</span>를 목표로 노력하고 있습니다.
								</p>
							</div>	
							<ul id="numbox" class="clearfix">
								<li data-aos="fade" data-aos-offset="100" data-aos-duration="700"><span class="bold fontQs">Product Designer_</span><br/> 상품을 디자인하고 3D 모델링으로 구현이 가능합니다.</li>
								<li data-aos="fade" data-aos-offset="100" data-aos-duration="2100"><span class="bold fontQs">Graphic Designer_</span><br/> 상품, 패키지, 포스터, 광고 등의 그래픽 작업이 가능합니다.</li>
								<li data-aos="fade" data-aos-offset="100" data-aos-duration="2800"><span class="bold fontQs">Web Publisher_</span><br/> 사용자의 접근성과 웹 표준을 준수한 코딩 작업이 가능합니다.</li>
								<li data-aos="fade" data-aos-offset="100" data-aos-duration="3500" style="padding-bottom: 0;"><span class="bold fontQs">Junior Web Developer_</span><br/> 사용자가 접하는 모든 형태를 화면에 구성하여 구현이 가능합니다.</li>
							</ul>
							
							<div class="constell" data-aos="fade"></div>
						</div>	
					</div>
					<div id="skill">
						<div class="title" data-aos="fade">
							<h2 class="h2bold" style="text-indent: 20px;">ABOUT ME</h2>
						</div>
						<div class="box clearfix fontbgtl">
							<div class="pull-left">
								<ul class="career">
									<li class="fontbgt point-yw">경력</li>
									<li>2017.01 ~ 2017.05</li>
									<li>(주)코스토리 디자인팀 근무</li>
									<li>2014.04 ~ 2016.06</li>
									<li>럭키팩토리 디자인팀 근무</li>
								</ul>
								<ul class="educational clearfix" >
									<li class="fontbgt point-yw">학력 및 교육사항</li>
									<li class="pr3">2017.09 ~ 2018.01</li>
									<li>디지털 컨버젼스 - UI/UX 디자인 양성과정 수료</li>
									<li class="pr3">2013.07 ~ 2013.11</li>
									<li>노동부 주관) 정국현의 디자인 멘토스쿨 수료</li>
									<li class="pr3">2012.03 ~ 2014.02</li>
									<li>용인 송담대학교 산업디자인과 수석 졸업</li>
								</ul>
								<div class="pro-skill">
									<div data-aos="fade" data-aos-offset="130">
										<h2 class="h2bold">SKILL</h2>
									</div>
									<ul>
										<li class="fontbgt point-yw">프로그램</li>
										<li>Photoshop / Illustrator</li>
										<li>HTML / CSS / JS /jQ / PHP / Bootstrap</li>
										<li>Auto CAD / Rhino / Keyshot / 3D Max / V-ray</li>
									</ul>
								</div>
							</div>
							<!-- my photo -->
							<div class="pull-right" data-aos="fade-left" data-aos-offset="100" data-aos-duration="700"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<!--// about me -->
		<!-- web site -->
		<? include_once('web/workweb.php'); ?>
		
	<!--// 내용 -->
	<!-- 하단 -->
		<? include_once('_inc/footer.php'); ?>
	<!--// 하단 -->
	<script>

		// main typing effect 
	    var typed3 = new Typed('#typed3', {
		    strings: ['Product Designer','Graphic Designer','Web Pulisher','Junior Web Developer'],
		    typeSpeed: 100,
		    backSpeed: 50,
		    smartBackspace: true, // this is a default
		    loop: true
		  });
	    // main typing effect typedfoot
	    var typed6 = new Typed('#typed6', {
		    strings: ['THANK YOU :)'],
		    typeSpeed: 100,
		    backSpeed: 0,
		    loop: true
		  });
	</script>
	<script src="_assets/js/common.js"></script>
	<script src="_assets/js/menubar.js"></script>
</body>
</html>
