
<?php
	ini_set('display_errors', 1);
	error_reporting(E_ALL);
?>
<?php


	function clean($string){
		$string = strip_tags(stripslashes(trim(htmlspecialchars($string,ENT_IGNORE,'utf-8'))));
		return $string;
	}

	
?>
