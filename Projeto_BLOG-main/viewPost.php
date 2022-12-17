<?php 
include "config/connection.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM post WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
	<style>
		img{
			width: 300px;
			height: 300px;
		}
	</style>
	<?php foreach ($results as $post): ?>
		<div id="title">
			<h1><?= $post['title'] ?></h1>
		</div>
		<div id="data">
			<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
	
		</div>
		<div id="image">
				<p>
			<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
			</p>
		</div>
		<div id="descricao">
<p><?= $post['description'] ?></p>
		</div>
		
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>
