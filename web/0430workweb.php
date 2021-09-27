<?
	//data 참조
	include_once('_inc/data.php');
?>
<div id="work_port">
	<div class="dust">
		<!-- work -->
		<div id="menu-work" class="container clearfix">
			<div class="nav-work">
				<div class="container">
					<div class="clearfix center">
						<h2 class="h2bold">PORTFOLIO</h2>
						<ul class="navi">
							<li><a href="#gall_web" class="tabselec">WEB</a></li>
							<li><a href="#gall_visu">Visual + Product</a></li>
						</ul>
					</div>
				</div>
			</div>	
			<div id="list">
				<!-- web -->
				<ul id="gall_web" class="gridbox grid">
					<li class="center sub">"UI/UX 디자인은 물론 웹표준에 맞춘 코딩작업이 가능합니다."</li>
					<? for( $i=0; $i < count($gallery)+1; $i++ ) { ?>
						<li class="item text-center">
							<div class="clearfix">
								<figure class="effect-oscar">
									<img src="<?=$gallery['img'][$i]?>"/>
									<figcaption>
										<h2>
											<a href="<?=$gallery['src'][$i]?>" target="_blank">사이트로 이동 &gt;</a>
										</h2>	
									</figcaption>	
								</figure>
							</div>	
							<div class="grid-info">
								<h2><?=$gallery['title'][$i]?></h2>
								<p>
									<?=$gallery['coment'][$i]?>
									<br/>
									<div class="mt20">
										<img class="middle" src="../_assets/img/tool.png" width="30px" height="30px">
										<span>
											<?=$gallery['prog'][$i]?>
										</span>	
									</div>
								</p>
							</div>
						</li>
					<? } ?>		
				</ul>
				<!--// web -->
				<!-- visual -->
				<ul id="gall_visu" class="gridbox hidden grid">
					<li class="center sub">"상품 및 패키지 디자인과<br/>기획전, 박람회의 이벤트 인쇄물, 배너, 로고 등의 시각물 작업이 가능합니다."</li>
					<? for( $i=0; $i < count($visu)-3; $i++ ) { ?>
						<li class="item text-center">
							<div class="clearfix">
								<figure class="effect-oscar">
									<img src="<?=$visu['img'][$i]?>"/>
									<figcaption>
										<h2>
											<a href="<?=$visu['src'][$i]?>">사이트로 이동 &gt;</a>
										</h2>
									</figcaption>	
								</figure>
							</div>	
							<div class="grid-info">
								<h2><?=$visu['title'][$i]?></h2>
								<p>
									<?=$visu['coment'][$i]?>
									<br/>
									<div class="mt20">
										<img class="middle" src="../_assets/img/tool.png" width="30px" height="30px">
										<span>
											<?=$visu['prog'][$i]?>
										</span>	
									</div>
								</p>
							</div>	
						</li>
					<? } ?>		
				</ul>
				<!--// visual -->
				
			</div>
		</div>
	</div>
</div>