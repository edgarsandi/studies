<?php
//username and password of account
$username = "edgar.sandi@grupofolha.com.br" ;
$password = "ERS5885*" ;

$url="http://dev.login.folha.com.br/login?service=themis%2Fadmin"; 

$postinfo = "email=".$username."&password=".$password."&challenge=f7163a83e60782eded7836373042d5f4";

$headers  = array();

$headers[] = 'application/xhtml+voice+xml;version=1.2, application/x-xhtml+voice+xml;version=1.2, text/html, application/xml;q=0.9, application/xhtml+xml, image/png, image/jpeg, image/gif, image/x-xbitmap, */*;q=0.1';
$headers[] = 'Connection: Keep-Alive';
$headers[] = 'Content-type: application/x-www-form-urlencoded;charset=UTF-8';


$ch = curl_init();
curl_setopt($ch, CURLOPT_COOKIEJAR, "/tmp/cookieFileName");
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_HEADER, 1);

ob_start();      // prevent any output
curl_exec ($ch); // execute the curl command
ob_end_clean();  // stop preventing output

curl_close ($ch);
unset($ch);

$ch = curl_init();
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
curl_setopt($ch, CURLOPT_COOKIEFILE, "/tmp/cookieFileName");
curl_setopt($ch, CURLOPT_URL,"http://41.dev.themis.corp.folha.com.br/");
curl_setopt ($ch, CURLOPT_HTTPHEADER, $headers);
curl_setopt ($ch, CURLOPT_HEADER, 1);

$buf2 = curl_exec ($ch);

echo curl_errno($ch) . '-' . curl_error($ch);

curl_close ($ch);

echo "<PRE>".htmlentities($buf2);

var_dump($buf2);

/*

$postinfo = "email=".$username."&password=".$password;

$cookie_file_path = $path."cookie.txt";

$ch = curl_init();
curl_setopt($ch, CURLOPT_HEADER, false);
curl_setopt($ch, CURLOPT_NOBODY, false);
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);

curl_setopt($ch, CURLOPT_COOKIEJAR, $cookie_file_path);
//set the cookie the site has for certain features, this is optional
curl_setopt($ch, CURLOPT_COOKIE, "cookiename=0");
curl_setopt($ch, CURLOPT_USERAGENT, "Mozilla/5.0 (Windows; U; Windows NT 5.0; en-US; rv:1.7.12) Gecko/20050915 Firefox/1.0.7");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);

curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "POST");
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, $postinfo);
curl_exec($ch);

//page with the content I want to grab
//curl_setopt($ch, CURLOPT_URL, "http://www.site.com/page/");
//do stuff with the info with DomDocument() etc
$html = curl_exec($ch);

echo curl_errno($ch) . '-' . curl_error($ch);

curl_close($ch);


var_dump( $html );

/*







$url_base = "http://dev.login.folha.com.br/login?service=themis%2Fadmin" ;
$url_param = "email=" . "edgar.sandi@grupofolha.com.br" . ";password=" . "ERS5885*" ;

$ch = curl_init() ;
curl_setopt( $ch , CURLOPT_URL , $url_base ) ;
curl_setopt( $ch , CURLOPT_FOLLOWLOCATION , 1 ) ;
curl_setopt( $ch , CURLOPT_RETURNTRANSFER , 1 ) ;
curl_setopt( $ch , CURLOPT_TIMEOUT , 1 ) ;
curl_setopt( $ch , CURLOPT_POST , 1 ) ;
curl_setopt( $ch , CURLOPT_POSTFIELDS , $url_param ) ;
curl_setopt( $ch , CURLOPT_HTTPHEADER , array( "Content-Type: multipart/form-data" , "Content-Length: " . strlen( $url_param ) ) ) ;
$result = curl_exec( $ch ) ;

echo curl_errno($ch) . '-' . curl_error($ch);

curl_close( $ch ) ;

var_dump( $result );