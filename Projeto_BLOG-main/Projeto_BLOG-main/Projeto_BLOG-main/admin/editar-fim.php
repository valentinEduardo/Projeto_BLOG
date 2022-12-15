<?php
include_once('../config/connection.php');

$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];

$stmt = $conectar->prepare('UPDATE post SET id = :id, title = :title, description = :description WHERE id = :id');

$stmt->bindParam(":title", $title);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":id", $id);

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: view.php');
?>
