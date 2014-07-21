<?
session_start();

$md5 = md5(microtime() * mktime());
$string = substr($md5,0,5);

$captcha = imagecreatefrompng("images/sfl_captcha_bg03.png");

$black = imagecolorallocate($captcha, 255, 255, 255);
$line = imagecolorallocate($captcha, 255, 255, 255);
//$line = imagecolorallocate($captcha,233,239,239);

imageline($captcha,0,0,100,100,$line);
//imageline($captcha,0,0,39,29,$line);
imageline($captcha,40,0,100,80,$line);
//imageline($captcha,40,0,64,29,$line);

imagestring($captcha, 5, 20, 20, $string, $black);

$_SESSION['key'] = md5($string);

header("Content-type: image/png");
imagepng($captcha);

?>