<?php
  include "nav.php";

  //http://localhost/Projeto_BLOG-main/Projeto_BLOG-main/admin/insert.php#
  ?>

  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
<style>
    .container{
        display: flex;
        justify-content: space-between;
        margin: 0 auto;
        text-align: center;
        box-sizing: border-box;
        width: 1070px;
    }
   .navegacao li{
        text-decoration: none;
        list-style: none;
        padding-left: 10px;
        padding-right: 10px;
        
 

    }
    .navegacao{
        display: flex;
        justify-content: space-between;
        align-items: center;
       

    }
    #footer{
        padding-left: 10px;
        padding-right: 10px;
        display: flex;
        justify-content: space-between;
        text-align: center;
        height: 20px;
        margin: 0;
    }
    
    #header{
        display: flex;
        justify-content: space-between;
align-items: center;
height: 90px;
    }
    #cards{
        margin-top: 10px;
    }
    .container{
margin-top:10px;
    }
    .card{
      margin:10px;
    }
</style>
</head>
<body>
<div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="true">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="images/code-1839406_1920-1.jpg" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/Foto-de-fauxels-no-Pexels-27-696x487.png" class="d-block w-100" alt="...">
      </div>
      <div class="carousel-item">
        <img src="images/i528837.webp" class="d-block w-100" alt="...">
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>

  <div class="container">
    
 
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
<!--olá--> 
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
      </div>
</body>
     
<?php
include "footer.php";
?>



