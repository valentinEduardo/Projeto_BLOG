<?php
include_once('../config/connection.php');
$stmt = $conectar->prepare("DELETE FROM post WHERE id = :id");
$id = $_GET['id'];
$stmt->bindParam(":id", $id);
$stmt->execute();

echo "Registro apagado";
header("Location:view.php");
?>



