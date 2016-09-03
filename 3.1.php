<?php
/*
* cURL Like Tương Tác For Facebook
* Mod Of Fix By Star Leo
* Phone : +84972806122
* FaceBook : https://www.facebook.com/100009905380221
* Mail: nguyenduchoai2104@gmail.com
*/
	set_time_limit(0);
	error_reporting(0);
	class curllikestarleo
	{
	public $id;
	private function thongtin()
    {
	$w = '<pre>

<div class="table-responsive">                 
<h2>cURL Like Facebook By Nhi Đz</h2>
Đang sử lý thực hiện tăng LIKE cho ID: '.$this->id.'
<hr><hr><br>
</pre>';
    echo $w;
    }


 private function Submit($url,$fields,$cok)
    {
		$userAgents=array( 
			"Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/5.0; chromeframe/11.0.696.57)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.0; Trident/4.0; GTB7.4; InfoPath.3; SV1; .NET CLR 3.1.76908; WOW64; en-US)",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; WIndows NT 9.0; en-US))",
            "Mozilla/5.0 (Windows; U; MSIE 9.0; Windows NT 9.0; en-US)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 7.1; Trident/5.0)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7)",
            "Mozilla/5.0 (compatible; MSIE 9.0; Windows NT 6.1; WOW64; Trident/5.0; SLCC2; Media Center PC 6.0; InfoPath.3; MS-RTC LM 8; Zune 4.7",
			"Mozilla/5.0 (Windows NT 6.2; rv:21.0) Gecko/20130326 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130331 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20130330 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; WOW64; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130401 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20130328 Firefox/21.0",
            "Mozilla/5.0 (Windows NT 6.1; rv:21.0) Gecko/20100101 Firefox/21.0",
            "Opera/9.80 (X11; Linux i686; U; en-GB) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; en) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; Debian; pl) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (X11; Linux i686; U; de) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; zh-cn) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; fi) Presto/2.2.15 Version/10.00",
            "Opera/9.80 (Windows NT 6.1; U; en) Presto/2.2.15 Version/10.00",
			"Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ru-ru) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; ko-kr) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; it-it) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; HTC-P715a; en-ca) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-us) AppleWebKit/534.1+ (KHTML, like Gecko) Version/5.0 Safari/533.16",
            "Mozilla/5.0 (Macintosh; U; Intel Mac OS X 10_6_3; en-au) AppleWebKit/533.16 (KHTML, like Gecko) Version/5.0 Safari/533.16",
			"Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.9 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.0) AppleWebKit/536.5 (KHTML, like Gecko) Chrome/19.0.1084.36 Safari/536.5",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 5.1) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Macintosh; Intel Mac OS X 10_8_0) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1063.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1062.0 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.2) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3",
            "Mozilla/5.0 (Windows NT 6.1; WOW64) AppleWebKit/536.3 (KHTML, like Gecko) Chrome/19.0.1061.1 Safari/536.3"
		);
		$this->proxy1 = explode(':', $this->proxy);
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch, CURLOPT_URL,$url);
		curl_setopt($ch, CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch, CURLOPT_FRESH_CONNECT,true);
		//curl_setopt($ch, CURLOPT_PROXYTYPE, CURLPROXY_SOCKS5);
		//curl_setopt($ch, CURLOPT_PROXY, $this->proxy1[0]);
		//curl_setopt($ch, CURLOPT_PROXYPORT, $this->proxy1[1]);
        //curl_setopt($ch, CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $this->proxy1[0]", "HTTP_X_FORWARDED_FOR: $this->proxy1[0]"));
        curl_setopt($ch, CURLOPT_TCP_NODELAY,true);       
		curl_setopt($ch, CURLOPT_REFERER,$url);          
		curl_setopt($ch, CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[$random]);
		curl_setopt($ch, CURLOPT_COOKIEFILE,'cookie_curllikestarleo.txt');
		curl_setopt($ch, CURLOPT_COOKIEJAR,'cookie_curllikestarleo.txt');
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch, CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$code = $info['http_code'];
		curl_close($ch);
		return $redir." <br> Dengan Code = ".$code."";
		}
		unlink("cookie_curllikestarleo.txt");
		curl_close($ch);
	} 
	        private function BypassCaptcha($lokasi)
    {
        $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
        $ch = curl_init($lokasi);
        curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie_curllikestarleo.txt');      
        curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie_curllikestarleo.txt');
        curl_setopt($ch,CURLOPT_FRESH_CONNECT,true);            
        curl_setopt($ch,CURLOPT_TCP_NODELAY,true);            
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
        curl_setopt($ch,CURLOPT_COOKIESESSION,true);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch,CURLOPT_REFERER,$lokasi);
		curl_setopt($ch, CURLOPT_USERAGENT, $userAgents[$random]);
        curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch,CURLOPT_HEADER,0);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        $y = curl_exec($ch);
        $tmpFile = uniqid();
        $file = $tmpFile.'.png';
        $x = fopen($file,"w");
        fwrite($x,$y);
        fclose($x);
        $up = 'http://'.$_SERVER['HTTP_HOST'].dirname($_SERVER['PHP_SELF']).'/'.$file;
        $xa = file_get_contents('http://chuyhiep.net/read_img/hoai.php?url='.$up); //API
        unlink($file);
        return $xa;
        curl_close($ch);
    }
			private function vipliketay31($tok,$cok)
		{
                $II = "http://www.moelikes.net/official/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.moelikes.net/official/index.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "pancal" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay32($tok,$cok)
		{
                $II = "http://hacklike24h.com/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://hacklike24h.com/hack-like.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay33($tok,$cok)
		{
                $II = "http://hacklikes.net/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://hacklikes.net/autolike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay34($tok,$cok)
		{
                $II = "http://hacklike.net/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://hacklike.net/autolike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay35($tok,$cok)
		{
                $II = "http://autolikesub.com/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autolikesub.com/autolike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay36($tok,$cok)
		{
                $II = "http://huuky9x.com/index.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://huuky9x.com/uplike.php?hanhdong=custom";
                $IIIII = array(
                "id" => $this->id,
                "like" => "Tăng+Like",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay37($tok,$cok)
		{
                $II = "http://autolike.vn/login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://autolike.vn/getlike.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay38()
		{
                $II = "http://botviet.net/login_2.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://botviet.net/K-LIKE.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "AutoLike",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay39($tok,$cok)
		{
                $II = "http://bestlike.info/verify.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://bestlike.info/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay40($tok,$cok)
		{
                $II = "https://indoliker.id/index.php";
                $III = array(
                "access_token" => $tok,
				"submit" => "SUBMIT"
                );
                $IIII = "https://indoliker.id/index.php";
                $IIIII = array(
                "id" => $this->id,
				"access_token" => $tok,
                "tri" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
	        private function vipliketay41($tok,$cok)
		{
                $II = "http://likelo.ws/process/login/".$tok;
                $III = array(
                "token" => $tok,
                );
                $IIII = "http://likelo.ws/liker/custom";
                $IIIII = array(
                "id" => $this->id,
				"limit" => "00001,00010000",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay42($tok,$cok)
		{
                $II = "http://www.fb4autoliker.com/10login.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://www.fb4autoliker.com/liker.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
				"yourlimitpost" => "00001,00010000",
                "submit" => "Submit",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay43($tok,$cok)
		{
                $II = "http://holaliker.com/verify2.php?user=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://hola21212121ker.com/likes.php?type=custom";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Send+50+Likes",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr><hr>";          
        }
			private function vipliketay44($tok,$cok)
        {
                $II = "http://likelikego.com/llg.php?accesstoken=".$tok;
                $III = array(
                "likelikegoid" => $this->id,
                "submit" => "Get+Likes",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo "<hr>";
                echo "<hr>";
        }
			private function vipliketay45($tok,$cok)
        {
                $II = "http://botex-viet.com/index.php";
                $III = array(
                "user" => $tok,
				"submit" => "Đăng+Nhập",
                );
                $IIII = "http://botex-viet.com/BotEx-autolike.html";
                $IIIII = array(
                "id" => $this->id,
                "submit" => "Tăng+Like",
                );
                echo $this->Submit($II,$III,$cok);
                echo "<br>";
                echo $this->Submit($IIII,$IIIII,$cok);
                echo "<br>";
                echo "<hr>";
                echo "<hr>";
        }

	
		public function CHAYLIKE($tok,$cok)
		{
		ignore_user_abort(true);
		while (@ob_end_flush());      
		ob_implicit_flush(true);
		echo $this->thongtin();
		echo $this->vipliketay31($tok,$cok);
		echo $this->vipliketay32($tok,$cok);
		echo $this->vipliketay33($tok,$cok);
		echo $this->vipliketay34($tok,$cok);
		echo $this->vipliketay35($tok,$cok);
		echo $this->vipliketay36($tok,$cok);
		echo $this->vipliketay37($tok,$cok);
		echo $this->vipliketay38($tok,$cok);
		echo $this->vipliketay39($tok,$cok);
		echo $this->vipliketay40($tok,$cok);
		echo $this->vipliketay41($tok,$cok);
		echo $this->vipliketay42($tok,$cok);
		echo $this->vipliketay43($tok,$cok);
		echo $this->vipliketay44($tok,$cok);
		echo $this->vipliketay45($tok,$cok);
		}
 }
function getid($uid,$tk){
$feed=json_decode(file_get_contents('https://graph.fb.me/'.$uid.'/feed?access_token='.$tk.'&limit=1'),true); 
$idstt = $feed['data'][0]['id'];
$starleo = explode("_", $idstt);
$iduser = $starleo[0];
$id = $starleo[1]; 
return $id;
}
include 'user.php';
$try = new curllikestarleo;
$tk = file_get_contents("".$linktoken."");
$id= getid($uid,$tk);
if (!$id){
echo '<font color="red"><font><font>Sai ID hoặc TOKEN đã chết vui lòng kiểm tra lại TOKEN!</font></font></font>';
}else{
$try->id = $id."&"; 
$try->CHAYLIKE(file_get_contents("".$linktoken."")); 
}
?>