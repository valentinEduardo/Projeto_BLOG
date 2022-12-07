<?php
include_once('../config/connection.php');

$stmt = $conectar->prepare("SELECT * FROM post ORDER BY id DESC");

$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
		i{
			text-decoration: none;
        list-style: none;
		}
	</style>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
    
 <main>
    <div class="container">
        <h1 id="main-title">Meus Posts</h1>
        <table class="table" id="contacts-table">
            <thead>
                <tr>
                    <th scope="col">#</th>
                    <th scope="col">Titulo</th>
                    <th scope="col">Descrição</th>
                    <th scope="col">Ações</th>
                </tr>
            </thead>
            <tbody>
            <?php foreach($results as $post): ?>
                <tr>
                    <td scope="row"><?=$post["id"]?></td>
                    <td scope="row"><?=$post["title"]?></td>
                    <td scope="row"><?=$post["description"]?></td>
                    <td class="actions">
                        <a href="viewBlog.php?id=<?=$post["id"]?>">
                        <i class="bi bi-eye">  VER  <br></i>
                        </a>
                        <a href="editar.php?id=<?=$post["id"]?>">
                        <i class="bi bi-pen">  EDITAR <br> </i>
                        </a>
                        <a href="delete.php?id=<?=$post["id"]?>">
                        <i class="bi bi-trash">  DELETE  <br></i>
                    </a>
                    </td>
                </tr>
                <?php endforeach; ?>

            </tbody>
        </table>
    </div>
 </main>
</body>
</html>
