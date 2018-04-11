<?php
	 	switch ($_POST["value"]) {
	 		case '哈哈':
	 			$arr = array("111","222","333");
	 			$res = array_rand($arr,1);
	 			print_r($arr[$res]);
	 			break;
	 		case '呵呵':
	 			$arr = array("444","555","666");
	 			$res = array_rand($arr,1);
	 			print_r($arr[$res]);
	 			break;
	 		
	 		default:
	 			$arr = array("777","888","999");
	 			$res = array_rand($arr,1);
	 			print_r($arr[$res]);
	 			break;
	 	}
	 
?>