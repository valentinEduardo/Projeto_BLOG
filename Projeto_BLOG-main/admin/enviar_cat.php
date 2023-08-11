<?php
include_once("../config/connection.php");

$stmt = $conectar->prepare("INSERT INTO category (name_cat) VALUES(:nome)");
$nome = $_POST['nome'];



$stmt->bindParam(":nome", $nome);
$stmt->execute();

//redireciona o arquivo
header("Location:view.php");
