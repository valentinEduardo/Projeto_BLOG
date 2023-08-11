<?php 

include_once('../config/connection.php');
$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description, image, news FROM post WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('session.php');

include_once('header.php');


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <script src="https://cdn.tiny.cloud/1/s9e2qg2y1vno92mqsxqjva1qak6wlvn5d4mb9eke2gwyzgm1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
</head>
<body>
   <main class="col-md-9 col-lg-10">
            <div class="container">
                <h1 id="main-title">Editar Post</h1>
	</div>
    <form action="editar-fim.php" method="post" enctype="multipart/form-data">
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<div class="mb-3">

    <div class="mb-3">
         <p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
    </div>

    <div class="mb-3">
        <div>
          <label for="news" class="form-label">Descrição</label>  
        </div>
   
<textarea name="news" id="mytextarea" method="post">
<?= $post["news"] ?>
</textarea>

   </div>
            
	<div class="mb-3">
                  <label for="image" class="form-label">Imagem</label>
                  <input type="file" class="form-control" id="image"  placeholder="Insira uma Imagem" name="image" required>
                </div>
<?php endforeach; ?>

	<input type="submit" value="EDITAR">
</form>

</main>
<script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</body>
</html>

<?php
include "footer.php";
?>
