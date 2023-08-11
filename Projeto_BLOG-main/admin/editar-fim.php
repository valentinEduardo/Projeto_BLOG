<?php
include_once('../config/connection.php');



$id = $_POST['id'];
$title = $_POST['title'];
$description = $_POST['description'];
$news = $_POST['news'];
$arquivo = $_FILES['image'];


$stmt = $conectar->prepare('UPDATE post SET id = :id, title = :title,news = :news, description = :description, image = :image WHERE id = :id');


move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
$image = 'uploads/'.$arquivo['name'];

$stmt->bindParam(":title", $title);
$stmt->bindParam(":data", $data);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":image", $image);
$stmt->bindParam(":news", $news);
$stmt->bindParam(":id", $id);
$stmt->execute();

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

header('Location: view.php');
?>
