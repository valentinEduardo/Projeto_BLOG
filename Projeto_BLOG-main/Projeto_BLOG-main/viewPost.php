<?php 
include "config/connection.php"; 
include "nav.php";

$id = $_GET['id'];

$stmt = $conectar->prepare("SELECT * FROM posts WHERE id = :id");
$stmt->execute(array('id'=>$id));

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);
?>

<div class="container">
	<?php foreach ($results as $post): ?>
		<h1><?= $post['title'] ?></h1>
		<p><?= date('d/m/Y', strtotime($post['data'])); ?></p>
		<p>
		<img src="<?= $post['image'] ?>" alt="<?= $post['title'] ?>">
		</p>
		<p><?= $post['description'] ?></p>
	<?php endforeach; ?>
</div>

<!-- footer -->
<?php include "footer.php"; ?>
