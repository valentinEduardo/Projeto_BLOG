<?php
include_once('../config/connection.php');

$stmt = $conectar->prepare("SELECT * FROM post ORDER BY id");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

foreach ($results as $row) {
	foreach ($row as $key => $value) {
		echo "<strong> ".$key."</strong>: ".$value."<br/>";
	}
	echo "+++++++++++++++++++<br/>";
}