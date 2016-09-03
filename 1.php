<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"f82e5539b983be36e489aaa5ecfac591",petok:"168c1320ac1c258ac14f1a42ccb9619d5321cdda-1468621506-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<style>body{background-image:url("112.png");background-size:cover;background-repeat:no-repeat;}</style>
</head>
<body>
</body>
</html>
<?php
include'refresh.php';
set_time_limit(0);
 error_reporting(0);
  class semvak
{

   public $id;
        private function getCaptcha($lokasi)
     {
                 $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
         $ch = curl_init($lokasi);
         curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie.txt');      
         curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie.txt');
                 curl_setopt($ch,CURLOPT_FRESH_CONNECT,true);            
         curl_setopt($ch,CURLOPT_TCP_NODELAY,true);            
                 curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
                 curl_setopt($ch,CURLOPT_COOKIESESSION,true);
         curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
         curl_setopt($ch,CURLOPT_REFERER,$lokasi);
         curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
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
         $xa = file_get_contents('https://nhidz6-nhidz.c9users.io/ocr.php?img='.$up); //API
         unlink($file);
         return $xa;
                 curl_close($ch);
        }
 private function Submit($url,$fields,$cok)
    {
        $random_IP = "".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255).".".mt_rand(0,255);
		$field_string = http_build_query($fields);
		$ch = curl_init();
		curl_setopt($ch,CURLOPT_URL,$url);
		curl_setopt($ch,CURLOPT_FOLLOWLOCATION,false);
        curl_setopt($ch,CURLOPT_FRESH_CONNECT,true);
        curl_setopt($ch,CURLOPT_HTTPHEADER,array("REMOTE_ADDR: $random_IP", "HTTP_X_FORWARDED_FOR: $random_IP"));
        curl_setopt($ch,CURLOPT_TCP_NODELAY,true);       
		curl_setopt($ch,CURLOPT_REFERER,$url);          
		curl_setopt($ch,CURLOPT_TIMEOUT,5);		
		curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
		curl_setopt($ch, CURLOPT_USERAGENT,'Mozilla/5.0 (X11; Linux x86_64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/28.0.1500.52 Safari/537.36');
		curl_setopt($ch,CURLOPT_COOKIEFILE,'cookie_liker/cookiee_'.$cok);
		curl_setopt($ch,CURLOPT_COOKIEJAR,'cookie_liker/cookiee_'.$cok);
		curl_setopt($ch, CURLOPT_POST, count($field_string));
		curl_setopt($ch,CURLOPT_POSTFIELDS,$field_string);   
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);
		curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
		$body = curl_exec($ch);
		if(!curl_errno($ch)){
		$info = curl_getinfo($ch);
		$redir = $info['redirect_url'];
		$code = $info['http_code'];
		curl_close($ch);
		return $redir." <br> Liker =)) = ".$code."";
		}
		 
		curl_close($ch);
 unlink("cookie_liker/cookiee_$cok"); 
   }
       
    private function tach($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://likelo.in/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://likelo.in/liker.php?type=custom";
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
    private function tach2($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.fb-likers.com/mylogin.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.fb-likers.com/liker.php?type=custom";
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
    private function tach3($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://m.fb-auto-likers.com/verify.php?fbtoken=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://m.fb-auto-likers.com/liker.php?type=custom";
		$IIIII = array(
                       "id" => $this->id,
                       "id" => $this->id,
                       "yourlimitpost" => "00001,00010000",
                       "submit" => "Submit",
                       "IL_IN_TAG" => "2",
		);
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
   private function tach4($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	    $II = "http://www.royaliker.net/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue!",
        );
        $IIII = "http://www.royaliker.net/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
	  	     private function tach5($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://fbautolikerapp.com/Access.php";
        $III = array(
        "pass" => $tok,
        );
        $IIII = "http://fbautolikerapp.com/dashboard.php?type=custom";
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
	  	     private function tach8($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://postlikes.in/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://postlikes.in/liker.php?type=custom";
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
   private function tach9($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autoliker4fb.com/verified.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autoliker4fb.com/dashboard.php?type=custom";
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
   private function tach10($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://myautoliker.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://myautoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Send Likes",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach14($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
     	$II = "http://www.myliker.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
        "accesstoken" => $tok,	
        );
        $IIII = "http://www.myliker.com/liker.php?type=custom";
        $IIIII = array(
        "myidz" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach15($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://fblikerapp.com/security.php?fbtoken=".$tok;
        $III = array(
        "answer" => "",
        "submit" => "Continue",
        );
        $IIII = "http://fblikerapp.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Send Likes",
        "IL_IN_TAG" => "2",
        );
	echo $this->Submit($II,$III,$cok);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII,$cok);
	echo "<br>";
	echo "<hr><hr>";	
	  }
   private function tach16($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
     	$II = "http://autolikero.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
        "accesstoken" => $tok,	
        );
        $IIII = "http://autolikero.com/liker.php?type=custom";
        $IIIII = array(
        "idzkrokro" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
   private function tach17($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
	$II = "http://auto-fb-tools.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "https://auto-fb-tools.com/liker.php?type=custom";
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
    private function tach20($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	       $II = "http://autolikesub.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://autolikesub.com/like.php?user=".$tok;
        $IIII = "http://autolikesub.com/autolike.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "capcode" => "",
        "submit" => "AutoLike",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
	  private function tach21($tok,$cok)
	  	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://autolike-us.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://autolike-us.com/liker.php?type=custom";
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
	     private function tach22($tok,$cok)
{
	echo'Autolikesgroups.com<br>';
	$II = "http://www.kingliker.com/login.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://www.kingliker.com/content/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "submit" => "Send+Likes",
        "IL_IN_TAG" => "2",
        );
	echo $this->Submit($II,$III,$cok);
	echo "<br>";
	echo $this->Submit($IIII,$IIIII,$cok);
	echo "<br>";
	echo "<hr><hr>";	
	  }
	  	     private function tach23($tok,$cok)
{
		 echo'Autolikesgroups.com<br>';
               $II = "http://likebuck.net/login.php?access_token=".$tok;
                $III = array(
                "null" => "null",
                );
                $IIII = "http://likebuck.net/likes.php?type=custom";
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
	     private function tach24($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://hublaalike.com/verify.php";
        $III = array(
        "user" => $tok,
        );
        $IIII = "http://hublaalike.com/liker.php?type=custom";
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
	  
	      private function tach25($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
     	$II = "http://vliker.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
        "accesstoken" => $tok,	
        );
        $IIII = "http://vliker.com/liker.php?type=custom";
        $IIIII = array(
        "vidz" => $this->id,
        "submit" => "Submit",
        "IL_IN_TAG" => "2",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	     echo "<hr><hr>";	
	  }
 public function SADAP($tok,$cok)
	{
  ignore_user_abort(true);
	while (@ob_end_flush());      
	ob_implicit_flush(true);
 echo $this-> tach($tok,$cok);
 echo $this-> tach2($tok,$cok);
 echo $this-> tach3($tok,$cok);
 echo $this-> tach4($tok,$cok);
 echo $this-> tach5($tok,$cok);
 echo $this-> tach8($tok,$cok);
 echo $this-> tach9($tok,$cok);
 echo $this-> tach10($tok,$cok);
 echo $this-> tach14($tok,$cok);
 echo $this-> tach15($tok,$cok);
 echo $this-> tach16($tok,$cok);
 echo $this-> tach17($tok,$cok);
 echo $this-> tach20($tok,$cok);
 echo $this-> tach21($tok,$cok);
 echo $this-> tach22($tok,$cok);
 echo $this-> tach23($tok,$cok);
 echo $this-> tach24($tok,$cok);
 echo $this-> tach25($tok,$cok);
     

 }
}
include'user.php';
$try = new semvak;
$token= file_get_contents('token.txt');
 $feed=json_decode(file_get_contents('https://graph.fb.me/'.$UID.'/feed?access_token='.$token.'&limit=1'),true); 
for($i=0;$i<count($feed['data']);$i++){ // Parse ID
$id = $feed['data'][$i]['id'];  
$sllike = $feed['data'][$i]['likes']['count']; 
} 
$stt = explode("_", $id);
$iduser= $stt[0];
$post_id= $stt[1];
echo "Status : " .$post_id. " Số like: " .$sllike. "<br>" ;
echo "<hr><hr>";	
$try->id = $post_id;
$try->SADAP(file_get_contents('token.txt')); 