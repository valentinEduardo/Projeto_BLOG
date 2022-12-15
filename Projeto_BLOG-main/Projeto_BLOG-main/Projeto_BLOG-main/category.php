<?PHP
include_once('config/connection.php');
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare('SELECT id, title, image, description, data FROM post WHERE idCategory = :id');


$stmt->execute(array('id' => $id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);


echo ""
?>
  
	<style>
		.container{
margin-top:10px;
    }
    .card{
      margin:10px;
    }
 
	</style>

  <?php foreach($results as $post): ?>
  <div class="card" style="width: 18rem;">
  <img src="<?= $post["image"] ?>" class="card-img-top" alt="...">
  <div class="card-body">
  <h5 class="card-title">
<?= $post["title"]?></h5>
<p class="card-text">
<?= $post["description"]?> </p>
<a href="viewPost.php?id=<?= $post["id"] ?>" class="btn btn-primary">
<i class="fas fa-eye check-icon">Ver</i>
        </a>
  </div>
</div>
<?php endforeach; ?>
		</div>
<?php 
include "footer.php";
?>