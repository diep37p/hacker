<html>
<head>
<script type="text/javascript">
//<![CDATA[
try{if (!window.CloudFlare) {var CloudFlare=[{verbose:0,p:0,byc:0,owlid:"cf",bag2:1,mirage2:0,oracle:0,paths:{cloudflare:"/cdn-cgi/nexp/dok3v=1613a3a185/"},atok:"f82e5539b983be36e489aaa5ecfac591",petok:"168c1320ac1c258ac14f1a42ccb9619d5321cdda-1468621506-1800",zone:"takanachan.com",rocket:"a",apps:{},sha2test:0}];document.write('<script type="text/javascript" src="//ajax.cloudflare.com/cdn-cgi/nexp/dok3v=e982913d31/cloudflare.min.js"><'+'\/script>');}}catch(e){};
//]]>
</script>
<style>body{background-image:url("112.jpg");background-size:cover;background-repeat:no-repeat;}</style>
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
                $II = "http://freelikesnow.net/verify.php?user=".$tok;
                $III = array(
				"null" => "null",
                );
                $IIII = "http://freelikesnow.net/liker.php?type=custom";
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
   private function tach1($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	    $II = "http://www.fb4autoliker.com/10login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.fb4autoliker.com/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "yourlimitpost" => "200",
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
	    $II = "http://hacklike.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklike.net/like.php?user=".$tok;
        $IIII = "http://hacklike.net/autolike.php?type=custom";
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
    private function tach4($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://foxliker.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://foxliker.net/like.php?type=custom";
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
    private function tach5($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
               $II = "http://botvn.me/login.php?access_token=".$tok;
               $IIII = "https://botvn.me/autolike.php";
               $IIIII = array(
               "id_like" => $this->id,
               "limit" => "200",
               "submit" => "Submit",
               );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach6($tok,$cok)
		{
	echo'Autolikesgroups.com<br>';
     	$II = "http://fblikess.com/validated.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
        "user" => $tok,	
        );
        $IIII = "http://fblikess.com/liker.php?type=custom";
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
    private function tach7($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
               $II = "http://botviet.net/login.php";
               $III = array(
               	"access_token" => $tok,
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
       private function tach9($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	    $II = "http://autolike69.com/login.php?user=".$tok;
        $III = array(
        "input" => "",
        "submit" => "Click me to Check & continue...",
        );
        $IIII = "http://autolike69.com/K-LIKE.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "likekk" => "200",
        "submit" => "Get+Likes",
        );
        $IIIIX = "http://autolike69.com/K-SUB.php?type=custom";
        $IIIIIX = array(
        "id" => "100010271893360",
        "subkk" => "100",
        "submit" => "Get Sub",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
		echo $this->Submit($IIIIX,$IIIIIX,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach10($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://vipautoliker.com/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://vipautoliker.com/vlikers.php?type=status";
        $IIIII = array(
        "id" => $this->id,
        "likes" => "00001,000010000",
        "submit" => "Submit",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach11($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://get-liker.com/kodok.php?nz=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://get-liker.com/?type=custom&nz";
        $IIIII = array(
        "id" => $this->id,
        "anu" => "GET+LIKER",
        );
		echo $this->Submit($II,$III,$cok);
		echo "<br>";
		echo $this->Submit($IIII,$IIIII,$cok);
		echo "<br>";
	    echo "<hr><hr>";	
	  }
    private function tach12($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
	$II = "http://hacklikes.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklikes.net/like.php?user=".$tok;
        $IIII = "http://hacklikes.net/autolike.php?type=custom";
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
    private function tach13($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
        $II = "http://fb-autolikers.net/m/login.php?user=".$tok;
        $III = "http://fb-autolikers.net/m/captcha/captcha.php";
        $III = array(
        "captcha" => $this->getCaptcha($III),
        "submit" => "Verify",
        );
        $IIII = "http://fb-autolikers.net/m/liker.php?type=custom";
        $IIIII = array(
        "id" => $this->id,
        "privacy" => "Public",
        "c" => "210",
        "submit" => "Auto-Like",
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
        $II = "http://fbautoliker24x7.com/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://fbautoliker24x7.com/dashboard.php?type=custom";
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
	      private function tach15($tok,$cok)
	  {
		 echo'Autolikesgroups.com<br>';
        $II = "http://sitevalue.me/Go.login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://sitevalue.me/liker.php?type=custom";
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
	  private function tach16($tok,$cok)
	  {
		 echo'Autolikesgroups.com<br>';
        $II = "http://m.vipautoliker.com/verify.php?user=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://m.vipautoliker.com/mliker.php?type=custom";
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
	  private function tach17($tok,$cok)
	  {
		 echo'Autolikesgroups.com<br>';
        $II = "http://goautoliker.com/verify.php?fbtoken=".$tok;
        $III = array(
        "captcha" => "",
        "submit" => "Continue",
        );
        $IIII = "http://goautoliker.com/liker.php?type=custom";
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
	  	      private function tach18($tok,$cok)
	  {
		 echo'Autolikesgroups.com<br>';
        $II = "http://fblikeaddicts.com/test2/Go.login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://fblikeaddicts.com/test2/liker.php?type=custom";
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
	  
	  	  	      private function tach19($tok,$cok)
	  {
		 echo'Autolikesgroups.com<br>';
        $II = "http://www.autolikerfb.in/login.php?access_token=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.autolikerfb.in/?type=custom";
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
        $II = "http://www.on-liker.com/verify.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIII = "http://www.on-liker.com/liker.php?type=custom";
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
	  
				 private function tach21($tok,$cok)
	{
		 echo'Autolikesgroups.com<br>';
		$II = "http://www.superlike.net/login.php?user=".$tok;
		$III = array(
		"null" => "null",
		);
		$IIII = "http://www.superlike.net/Likes.php?type=custom&lang=en";
		$IIIII = array(
		"count" => "00001,00010000",
		"submit1" => "Submit",
		);
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
	    $II = "http://hacklike.net/login.php?user=".$tok;
        $III = array(
        "null" => "null",
        );
        $IIIX = "http://hacklike.net/like.php?user=".$tok;
        $IIII = "http://hacklike.net/autolike.php?type=custom";
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
	  
	     private function tach23($tok,$cok)
	{
	echo'Autolikesgroups.com<br>';
     	$II = "http://likerty.com/login/validate.php";
        $III = array(
        "g-recaptcha-response" => "03AHJ_VuvGpIjHBsmS2jo4EPKEbOFr76QNvWZmeg5WI1pnqPrWj7mnqFK1KtKj2qLAm54tG8biDg0E8S1M6HE2PJYkebzYfIz8oi5XqhBAQXLf19s_HqIHDB0kCQNp5PXNmZdfF2DRDqie1pkRhH_lzL8B4IR4VM1KHKj__bHCUdZVP8uNOsS4WY-b3OOLgCqh1IschDAUJyCfK7vm-WLEIzI4wLmN48CEOF5p1l5OkG_5rRcgPX-ftk6KjNfqZ_Jjb9uMQGYXAejCgp5TTqjVrkFcYaDntm5GHG42jLoKFnYMK9yIIUcyaNDTQsXaY09YbtK2Ke3gnYC4SFYrGJPffJOuhRZGpQJS0X6SdWEVhJzHokq3zz6TGjTCsM-5Nmod2dqKuw1HSZIePW--J6kZwIWHwHfiktEK9QWgvgzCItjeWfe_QUKaHLKU-kSrVz14asqw34SD8dvVjF_7qtbMTxxQnja8UwVPYOG-XVzk7QAv7BOGA4tniRvVsPMpH47wYKNrzaqq_0FNr75i-GtkHeS7xNFBN-bJdyP4UFSLyH1CFJVSy8cEk5BjbStJZTKH5-4wRBL6PUkzhJCLVumgqbKoTAh8LDoj2o9unnTV-KIk91pnyZAXQMrwiW6OkR3HXtEJX84OWZxgJc9I3ESg8IgEwWVOza7rXXuyPinCIeyZrQs46ztovxhE6KxsiTDWp6CIbPCNvEYNFfuN54MSWmtj0L1damtm6SppZcR3jHTt3_7Mz2fxJMSHrk-qzw0ZDXLV1CDcVD-8Buvs4zFoXZbFxdwQdnjYE_S5W88A69ti19Cv4WdP9diS5kg8BixG6LfRVbOlAS6ncTdB7Qq9xgU7_LjqIcwHHWt1A95gxTOlJx1F_Uo1lASTJJMy3UumIj_Yyi7mWKE9",
        "accesstoken" => $tok,	
        );
        $IIII = "http://likerty.com/liker.php?type=custom";
        $IIIII = array(
        "idis" => $this->id,
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
 echo $this-> tach1($tok,$cok);
 echo $this-> tach3($tok,$cok);
 echo $this-> tach4($tok,$cok);
 echo $this-> tach5($tok,$cok);
 echo $this-> tach6($tok,$cok);
 echo $this-> tach7($tok,$cok);
 echo $this-> tach9($tok,$cok);
 echo $this-> tach10($tok,$cok);
 echo $this-> tach11($tok,$cok);
 echo $this-> tach12($tok,$cok);
 echo $this-> tach13($tok,$cok);
 echo $this-> tach14($tok,$cok);
 echo $this-> tach15($tok,$cok);
 echo $this-> tach16($tok,$cok);
 echo $this-> tach17($tok,$cok);
 echo $this-> tach18($tok,$cok);
 echo $this-> tach19($tok,$cok);
 echo $this-> tach20($tok,$cok);
 echo $this-> tach21($tok,$cok);   
 echo $this-> tach22($tok,$cok);   
 echo $this-> tach23($tok,$cok);   
 
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