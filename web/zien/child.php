<? header("Content-Type: text/html; charset=UTF-8"); ?>

<!DOCTYPE html>
<html lang="en">
<head>
	<? include('_inc/head.php'); ?>
	<style>
		.p50 {padding: 30px;}
		#pop {
			border:2px solid #6fc000;
			margin: 10px;
		}
		#pop h1 {
			line-height: 1.5; padding: 0 10px;
			border-bottom: 1px dotted #6fc000;
		}
		#pop p {
			padding: 0 10px;
			margin-top: 10px;
			line-height: 2;
		}
		#pop form { margin-top: 30px; }
		#pop button { 
			margin-left: 20px;
			color: #fff; 
			line-height: 1.7;
			cursor: pointer;
			background-color: #6fc000;
			border-radius: 3px;
		}
	</style>
</head>
<body>
	<div id="pop" class="container p50 clearfix">
		<h1 class="page-header fb35">환영합니다!</h1>
		<p>이 사이트는 포트폴리오용 사이트 입니다 :)</p>
		<form action="child.close.php" method="post" name="myform" class="form-inline pull-right">
			<div class="checkbox inline">
				<label>
					<input type="checkbox" name="is_popup" value="Y">
					1시간 동안 창 열지 않음
				</label>
			</div>
			<button class="bold" type="submit">창닫기</button>
		</form>
	</div>
</body>
</html>