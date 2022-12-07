<?php
include_once("../config/connection.php");

$stmt = $conectar->prepare("INSERT INTO post(title, description, data, image) VALUES(:title, :description, :data, :image)");
$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$arquivo = $_FILES['image'];

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
$image = 'uploads/'.$arquivo['name'];

$stmt->bindParam(":title", $title);
$stmt->bindParam(":data", $data);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":image", $image);
$stmt->execute();

//redireciona o arquivo
header("Location:view.php");
