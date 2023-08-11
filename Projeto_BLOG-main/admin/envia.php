<?php
include_once("../config/connection.php");

$stmt = $conectar->prepare("INSERT INTO post (idCategory,title, description, data, image, news) VALUES(:idCategory, :title, :description, :data, :image, :news)");
$title = $_POST['title'];
$data = $_POST['data'];
$description = $_POST['description'];
$news = $_POST['news'];
$arquivo = $_FILES['image'];
$idCategory = $_POST['category'];

move_uploaded_file($arquivo['tmp_name'], '../uploads/'.$arquivo['name']);
$image = 'uploads/'.$arquivo['name'];

$stmt->bindParam(":idCategory", $idCategory);
$stmt->bindParam(":title", $title);
$stmt->bindParam(":data", $data);
$stmt->bindParam(":news", $news);
$stmt->bindParam(":description", $description);
$stmt->bindParam(":image", $image);
$stmt->execute();

//redireciona o arquivo
header("Location:view.php");
