<?php

require_once("./Connection.php");


// Bildirimleri Getir
function getNotification() {
	global $db;

	$query = $db -> prepare("SELECT * FROM notifications");
	$query -> execute();
	$result = $query -> fetchAll(PDO::FETCH_ASSOC);
	return $result;
}


// Bildirim Sayısı
$notiNum = $db -> query("SELECT COUNT(*) FROM notifications WHERE status = 'Unread'");
$notifNum = $notiNum -> fetchColumn();