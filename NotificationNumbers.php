<?php

require_once "./Connection.php";

$notificationNumber = $db -> query("SELECT COUNT(*) FROM notifications WHERE status = 'Unread'");
$notificationNumbers = $notificationNumber -> fetchColumn();

echo $notificationNumbers;