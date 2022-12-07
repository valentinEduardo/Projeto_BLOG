<?php
include_once('../config/connection.php');

$id = $_GET['id'];

$stmt = $conectar ->prepare("SELECT id, title, description FROM post WHERE id = :id");

$stmt -> execute(array('id' => $id));

$results = $stmt-> fetchALL(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php foreach($results as $post): ?>
    <h1><?= $post["title"] ?></h1>
    <p><?= $post["description"] ?></p>
<?php endforeach; ?>
</body>
</html>



