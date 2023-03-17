<?php
ob_start();
require_once 'Connection.php';
/**
 * Helper class For generic functions
 */
class UsefulGenericFunctions extends DbConnection{
	
	/*Gerate Random Id With th name as prefix*/
	function gerateRandomId($data,$start,$end,$length){
		$geratedId=strtoupper(substr(uniqid(substr($data, $start,$end)."_".md5(uniqid($data, true))), 0,$length));
		return $geratedId;
	}
}

$helperObj=new UsefulGenericFunctions();
?>