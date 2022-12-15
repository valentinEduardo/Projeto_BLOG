<?php
include_once('config/connection.php');
include "nav.php";
$buscar = $_POST['buscar'];
$stmt = $conectar->prepare("SELECT * FROM post WHERE title LIKE '%$buscar%'");
$stmt->execute();
$search = $stmt->fetchAll();
?>
<div class="container">
    <div>
        <h2>Resultado da busca =</h2>
    </div>
	
    <div>
        <?php foreach($search as $key => $value): ?>
		<h5 class="card-title">
		<a href="viewPost.php?id=<?= $value["id"] ?>">
			<?= $value["title"] ?>
		</a>
		</h5>
	<?php endforeach; ?>
    </div>
	
  
</div>
<?php
include "footer.php";
?>