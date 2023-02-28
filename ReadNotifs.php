<?php

require_once "./Connection.php";

if(@$_SERVER['HTTP_X_REQUESTED_WITH'] && strtolower(@$_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	$oldStat = 'Unread';
	$newStat = 'Read';
	$notquery = $db -> prepare("UPDATE notifications SET status = ? WHERE status = '$oldStat'");
	$notquery -> bindParam(1, $newStat, PDO::PARAM_STR);
	$notquery -> execute();
} else {
	Header("Location: ./");
}