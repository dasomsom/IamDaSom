<?

/**
===================================================================
  * table product
===================================================================
*/
$Ceramic =[
	[	'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_128.png',
		'size'  => '지름 10.5 X 높이 7.5',
		'title' => '동물 죽그릇 세트_닭',
		'price' => '48,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_139.jpg',
		'size'  => '지름 10 X 높이 7',
		'title' => '파스텔 커피잔_Cobalt blue',
		'price' => '30,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_138.jpg',
		'size'  => '지름 10 X 높이 7',
		'title' => '파스텔 커피잔_Flower purpl',
		'price' => '30,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_116.jpg',
		'size'  => '지름 10 X 높이 4',
		'title' => '4색 원통찬기_Ivory',
		'price' => '15,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_119.jpg',
		'size'  => '지름 10 X 높이 4',
		'title' => '4색 원통찬기_Green',
		'price' => '15,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/ceramic/zien6623_118.jpg',
		'size'  => '지름 10 X 높이 4',
		'title' => '4색 원통찬기_Blue',
		'price' => '15,000원'
	]

];
$Glassware = [
	[	'img'   => '/web/zien/_assets/img/product/glass/zien6623_147.jpg',
		'size'  => '지름 8 X 높이 9',
		'title' => 'Light Bubble Cup_Darkgreen',
		'price' => '8,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/glass/zien6623_125.jpg',
		'size'  => '지름 8 X 높이 9',
		'title' => 'Light Bubble Cup_ Blue',
		'price' => '8,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/glass/zien6623_124.jpg',
		'size'  => '지름 8 X 높이 9',
		'title' => 'Light Bubble Cup_Clear',
		'price' => '8,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/glass/zien6623_104.jpg',
		'size'  => '지름 9 X 높이 12',
		'title' => 'Blown Glass S-Yellow',
		'price' => '66,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/glass/zien6623_106.jpg',
		'size'  => '지름 9 X 높이 12',
		'title' => 'Blown Glass S-Pink',
		'price' => '66,000원'
	],[
		'img'   => '/web/zien/_assets/img/product/glass/zien6623_103.jpg',
		'size'  => '지름 9 X 높이 12',
		'title' => 'Blown Glass L-Sky Blue',
		'price' => '88,000원'
	]
];

$tabletab = $_GET['tabletab'];


if (intval($tabletab) ==1) {
	/*모든 상품*/
	$tableresult ='<div class="list arch-box pl88">
					<ul class="center clearfix">';
	for ($i=0; $i<count($Ceramic); $i++) {
		$tableresult .='<li class="item">
						<a href="#">
				        	<img src="'.$Ceramic[$i]['img'].'"/>
				        </a>	
				        <a href="#">
					        <span class="gr">'.$Ceramic[$i]['size'].'</span><br/>
					        <strong class="fb18">'.$Ceramic[$i]['title'].'</strong><br/>
					        <strong class="fb22">'.$Ceramic[$i]['price'].'</strong>
					    </a>    
				    </li>';
	}
	for ($i=0; $i<count($Glassware); $i++) {
		$tableresult .='<li class="item">
						<a href="#">
				        	<img src="'.$Glassware[$i]['img'].'"/>
				        </a>
				        <a href="#">
					        <span class="gr">'.$Glassware[$i]['size'].'</span><br/>
					        <strong class="fb18">'.$Glassware[$i]['title'].'</strong><br/>
					        <strong class="fb22">'.$Glassware[$i]['price'].'</strong>
					    </a>    
				    </li>';
	}
	$tableresult .='</ul>
			</div>';
} else if (intval($tabletab) == 2) {
	/*세라믹*/
	$tableresult ='<div class="list arch-box pl88">
					<ul class="center clearfix">';
	for ($i=0; $i<count($Ceramic); $i++) {
		$tableresult .='<li class="item">
						<a href="#">						
				        	<img src="'.$Ceramic[$i]['img'].'"/>
				        </a>
				        <a href="#">
					        <span class="gr">'.$Ceramic[$i]['size'].'</span><br/>
					        <strong class="fb18">'.$Ceramic[$i]['title'].'</strong><br/>
					        <strong class="fb22">'.$Ceramic[$i]['price'].'</strong>
					    </a>    
				    </li>';
	}
	$tableresult .='</ul>
			</div>';

} else if (intval($tabletab) == 3) {
	/* 글라스*/
	$tableresult ='<div class="list arch-box pl88">
					<ul class="center clearfix">';
	for ($i=0; $i<count($Glassware); $i++) {
		$tableresult .='<li class="item">
						<a href="#">						
				        	<img src="'.$Glassware[$i]['img'].'"/>
				        </a>
				        <a href="#">
					        <span class="gr">'.$Glassware[$i]['size'].'</span><br/>
					        <strong class="fb18">'.$Glassware[$i]['title'].'</strong><br/>
					        <strong class="fb22">'.$Glassware[$i]['price'].'</strong>
					    </a>    
				    </li>';
	}
	$tableresult .='</ul>
			</div>';

}	

?>