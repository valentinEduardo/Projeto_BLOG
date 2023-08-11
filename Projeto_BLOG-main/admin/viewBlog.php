<?php
include_once('../config/connection.php');

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT id, title, description, image FROM post WHERE id = :id");

$stmt->execute(array('id' => $id));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <style>
        .post-container {
            max-width: 800px;
            margin: auto;
            padding: 20px;
        }
        .post-image {
            max-width: 100%;
            height: auto;
        }
    </style>
    <title>Visualizar Post</title>
</head>
<body>

    <div class="post-container">
        <?php foreach($results as $post): ?>
        <h1 class="mb-4"><?= $post["title"] ?></h1>
        <?php if (!empty($post["image"])): ?>
            <img src="../<?= $post["image"] ?>" alt="Imagem do Post" class="post-image mb-4">
        <?php endif; ?>
        <p><?= $post["description"] ?></p>
        <?php endforeach; ?>
    </div>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>