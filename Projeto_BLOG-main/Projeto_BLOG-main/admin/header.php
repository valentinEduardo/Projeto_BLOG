<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
	<style>
         #footer{
        padding-left: 10px;
        padding-right: 10px;
        display: flex;
        justify-content: space-between;
        text-align: center;
        height: 20px;
        margin: 0;
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
		i{
			text-decoration: none;
        list-style: none;
		}
        #footer{
            margin-top: 3.3cm;
        }
	</style>
        <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.2/font/bootstrap-icons.css">
</head>

<body>
<div class="container-fluid">
    <div class="row">
        <nav id="sidebarMenu" class="col-md-3 col-lg-2 text-white bg-dark pt-3">
            <h2>Bom dia, <?php echo $_SESSION['nome']; ?></h2>
            <p><a href="?sair">Deslogar</a></p>
            <ul class="nav flex-column">
                <li class="nav-item">
<a href="insert.php">CONTROLAR POSTS</a>
                </li>
                <li class="nav-item">
<a href="">CONTROLAR SLIDES</a>
                </li>
            </ul>
    </nav>
      

 </div>
 </div>
</body>
</html>
