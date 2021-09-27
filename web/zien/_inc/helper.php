<?

/**
 * HTTP GET 파라미터 값을 수신한다.
 * @param $key - 파라미터 이름
 * @param $def - 값이 없을 경우 사용될 기본 값
 */

 function get( $key, $def ) {
 	//일단 기본값으로 변수 생성
 	$value  = $def;

 	//$key를 이름으로 하는 파라미터가 존재한다면?
 	if( isset($_GET[$key])){
 		//리턴할 변수를 HTTP GET 파라미터로 재설정
 		$value = $_GET[$key];

 		//배열이 아니라면?
 		if( is_array($value)){
 			//앞,뒤 공백 제거
 			$value = trim($value);

 			//길이가 1보다 작다면?
 			if(mb_strlen($value) < 1 ){
 				//전달된 값이 없는 경우 기본값으로 재설정
 				$value = $def;
 			}
 		}
 	}
 	// 최종값 리턴
 	return $value;
 }

 /**
  * 메시지를 화면에 표시한 후, 저장된 페이지로 강제 이동시킨다.
  * @param $url - 이동할 페이지 경로. FALSE로 지정한 경우 이전 페이지로 이동
  * @param $msg - 화면에 표시할 메시지. FALSE인 경우 표시안함.
  */
 function redirect( $url, $msg ){
 	$html = "<!doctype html>";
 	$html .= "<html>";
 	$html .= "<head>";
 	$html .= "<meta charset = 'UTF-8'>";

 	//메시지가 전달된 경우
 	if( $msg != FALSE ) {
 		$html .= "<script type = 'text/javascript'>alert('" . $msg . ";);<script>";
 	}

 	//이동할 URL이 전달된 경우
 	if( $url != FALSE ) {
 		$html .= "<meta http-equiv = 'refresh' content='0; url=" . $url . "''>";
 	} else {
 		$html .= "<script type = 'text/javascript'>history.back();</script>";
 	}
 	$html .= "</head>";
 	$html .= "<body></body>";
 	$html .= "</html>";
 	echo($html);
 	exit();
 }

 /**
  * HTTP POST 파라미터 값을 수신한다.
  * @param $key - 파라미터 이름
  * @param $def - 값이 없을 경우 사용될 기본값
  */

 function post( $key, $def ){

 	//일단 기본값으로 변수 생성
 	$value = $def;

 	//$key를 이름으로 하는 파라미터가 존재한다면?
 	if ( isset($_POST[$key])) {
 		// 리턴할 변수를 HTTP POST 파라미터로 재설정
 		$value = $_POST[$key];

 		//배열이 아니라면?
 		if ( !is_array($value)) {
 			//앞,뒤 공백 제거
 			$value = trim($value);

 			//길이가 1보다 작다면?
 			if(mb_strlen( $value ) < 1) {
 				//전달된 값이 없는 경우이므로 기본값으로 재설정
 				$value = $def;
 			}
 		}
 	}
 	// 최종값 리턴
 	return $value;
 }
 

/**
 * 쿠키값을 저장한다.
 *
 * @param   $key   - 쿠키이름
 * @param   $value - 쿠키값
 * @param   $time  - 저장시간
 *                 (60=60초 유지, 0=브라우저를 닫을 경우 즉시 삭제, 음수=즉시삭제)
 *
 * @return bool (true=성공, false=실패)
 */
function set_cookie($key, $value, $time)
{
    if ($time != 0) {
        $time += time();
    }

    return setcookie($key, urlencode($value), $time, '/');
}


/**
 * 쿠키값을 읽어온다.
 * @param $key - 쿠키 이름
 * @param $def - 값이 없을 경우 사용될 기본값.
 */
function get_cookie($key, $def)
{
    // 일단 기본값으로 변수 생성
    $value = $def;

    // $key를 이름으로 하는 쿠키가 존재한다면?
    if (isset($_COOKIE[$key])) {
        // 리턴할 변수를 쿠키값으로 재설정
        $value = $_COOKIE[$key];

        // 배열이 아니라면?
        if (!is_array($value)) {
            // 앞,뒤 공백 제거
            $value = trim($value);

            // 길이가 1보다 작다면?
            if (mb_strlen($value) < 1) {
                // 전달된 값이 없는 경우이므로 기본값으로 재설정
                $value = $def;
            }
        }
    }

    // 최종 값 리턴
    return $value;
}


/**
 * 세션값을 읽어온다.
 * @param $key - 세션 이름
 * @param $def - 값이 없을 경우 사용될 기본값.
 */
function get_session($key, $def)
{
    // 일단 기본값으로 변수 생성
    $value = $def;

    // $key를 이름으로 하는 세션값이 존재한다면?
    if (isset($_SESSION[$key])) {
        // 리턴할 변수를 세션값으로 재설정
        $value = $_SESSION[$key];

        // 배열이 아니라면?
        if (!is_array($value)) {
            // 앞,뒤 공백 제거
            $value = trim($value);

            // 길이가 1보다 작다면?
            if (mb_strlen($value) < 1) {
                // 전달된 값이 없는 경우이므로 기본값으로 재설정
                $value = $def;
            }
        }
    }

    // 최종 값 리턴
    return $value;
}
?>
