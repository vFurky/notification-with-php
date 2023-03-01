<?php

require_once "./Connection.php";

if(@$_SERVER['HTTP_X_REQUESTED_WITH'] && strtolower(@$_SERVER['HTTP_X_REQUESTED_WITH']) == 'xmlhttprequest'){
	$query = $db -> prepare("SELECT * FROM notifications");
	$query -> execute();
	$result = $query -> fetchAll(PDO::FETCH_ASSOC);
	foreach ($result as $a) {
		echo '<a class="dropdown-item" href="#">' . $a['content'] . '</a>';
	}
} else {
	Header("Location: ./");
}