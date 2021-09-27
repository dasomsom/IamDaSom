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
					<a href="#" class="fb28 ml15 pull-left"><?=$gnb['cscenter']['title0']?></a>
					<ul class="pull-right mr15" id="sub_bt">
						<li><a href="../cscenter/reservation.php" class="fl16"><?=$gnb['cscenter']['title1']?></a></li>
						<li><a href="../cscenter/faq.php" class="fl16"><?=$gnb['cscenter']['title2']?></a></li>
						<li><a href="../cscenter/notice.php" class="fl16 greenb16"><?=$gnb['cscenter']['title3']?></a></li>
					</ul>
				</div>
			</div>
		</div>
	</div>
	<!--// nav -->
	
	<!-- 내용-->
	<div id="notice">
		<div class="control-box">
			<div class="ml80">
				<div class="box900">
					<div class="center mb40">
						<h2 class="fb28 fh50">지앤 아트 스페이스 소식</h2>
						<h3 class="gr">다양한 이벤트와 공지사항을 미리 확인하세요.</h3>
					</div>	
					<div class="collapse">
						<? for( $i=0; $i<count($notice); $i++ ) {?>
					        <div class="collapse-item">
					            <h2 class="collapse-title clearfix"> 
					            	<a class="pull-left" href="#content<?=$i+1?>"><?=$notice[$i]['title']?><span class="pull-right"><?=$notice[$i]['date']?></span></a>
					            	
					            </h2>
					            <div id="content<?=$i+1?>" class="content">
					            	<div>
					            		<?for($j=0; $j<count($notice[$i]['img']); $j++){?>
					            			<img src="<?=$notice[$i]['img'][$j]?>">
					            		<?}?>
					            		<p class="justify mt20 mb20"><?=$notice[$i]['disc']?></p>
					            	</div>
					            </div>
					        </div>
					    <?}?>    
				    </div>
				</div>    
			</div>
		</div>
	</div>
	<!--// 내용-->
	<!-- 하단 -->
	<? include_once('../_inc/foot-info.php'); ?>
	<!--// 하단 -->
	<!--참조-->
	<script src="../_assets/js/common.js"></script>
	<script> 
     	
	    $(function() {
			/*========================================================= 
			제목을 클릭하면 해당 내용이 나온다. 
			다른 제목을 클릭하면 이전 내용은 들어가고 해당 내용이 나온다.         
			=======================================================*/

	        $('.collapse-title a').click( function(e) {
	               e.preventDefault(); 
	               var href = $(this).attr('href'); 
	               $(href).slideToggle(300); 
	               $('.content').not(href).slideUp(300);  
	        }); //end $().click();
	    });  //end $(function( ) { })
	</script>
