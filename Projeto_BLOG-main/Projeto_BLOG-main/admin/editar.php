<?php 

include_once('../config/connection.php');
$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title,description FROM post WHERE id = :id');
    
$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

include_once('session.php');

include_once('header.php');


?>
<main class="col-md-9 col-lg-10">
            <div class="container">
                <h1 id="main-title">Editar Post</h1>
	</div>
    <form action="editar-fim.php" method="post" enctype="multipart/form-data">
<?php foreach($results as $post): ?>
	<p><input type="hidden" value="<?= $post["id"] ?>" name="id"></p>
	<p><input type="text" value="<?= $post["title"] ?>" name="title"></p>
	<p><input type="text" value="<?= $post["description"] ?>" name="description"></p>
<?php endforeach; ?>
	<input type="submit" value="EDITAR">
</form>

</main>
<?php
include "footer.php";
?>
