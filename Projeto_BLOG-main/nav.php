<?php 
include "config/connection.php"; 

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
    <!-- CSS only -->
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
</style>
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar navbar-dark bg-dark">
    <div class="container-fluid">
      <a class="navbar-brand" href="index.php">G-TECH</a>
      <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav me-auto mb-2 mb-lg-0">
          <li class="nav-item">
            <a class="nav-link active" aria-current="page" href="index.php">Home</a>
          </li>
          <li class="nav-item">
            <a class="nav-link" href="admin/index.php" m>ADMIN</a>
          </li>
            <li class="nav-item">
	          <a class="nav-link" method="GET" href="category.php?id=1" name="id">Programação</a>
	        </li>
	        <li class="nav-item">
        <a class="nav-link" method="GET" href="category.php?id=2" name="id">Marcação</a>
	        </li>
        </ul>
        <form class="d-flex" role="search" action="buscar.php" method="post">
          <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search" name="buscar">
          <button class="btn btn-outline-success" type="submit">Search</button>
        </form>
      </div>
    </div>
  </nav>
<!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>

</body>
</html>