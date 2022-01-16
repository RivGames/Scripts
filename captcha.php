<?php
/*
*Реализовал простую капчу для авторизации или регистрации
*/
$captcha = imagecreate(150,170);
$color = imagecolorallocate($captcha,255,255,255);
$color = imagecolorallocate($captcha,0,0,255);
imagestring($captcha,50,80,150,"313242",$color);
Header("Content-type: image/jpeg");
imagejpeg($captcha);
imagedestroy($catcha);