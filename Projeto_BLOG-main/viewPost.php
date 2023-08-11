<?php 
include "config/connection.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM post WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchAll(PDO::FETCH_ASSOC);
?>

<!DOCTYPE html>
<html lang="pt-br" style="height: 100%;">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?= $results[0]['title'] ?> - Meu Blog</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    
    <style>
        body {
            background-color: #f8f9fa;
          
        }
        .container {
        background-color: white;
        padding: 20px;
        border-radius: 5px;
        box-shadow: 0px 0px 10px rgba(0, 0, 0, 0.1);
        width: 85%;
        min-height: 100%; 
        display: flex; 
        flex-direction: column; 
    }
        .post-title {
            font-size: 28px;
            font-weight: bold;
            margin-bottom: 10px;
        }
        .post-date {
            font-size: 14px;
            color: #6c757d;
            margin-bottom: 10px;
        }
        .post-image {
            max-width: 100%;
            height: auto;
        }
		img{
			width: 80%;
			height: 90%;
		}
        .post-description {
        font-size: 18px;
        line-height: 1.6;
        margin-top: 20px;
        flex-grow: 1; 
    }
    </style>
</head>
<body>

<div class="container">
    <?php foreach ($results as $post): ?>
        <div class="post-title"><?= $post['title'] ?></div>
        <div class="post-date"><?= date('d/m/Y', strtotime($post['data'])) ?></div>
        <div class="post-image">
            <img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
        </div>
        <div class="post-description"><?= $post['description'] ?></div>
        <div class="post-news">
                <?= $post['news'] ?>
        </div>
    <?php endforeach; ?>
</div>



<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
