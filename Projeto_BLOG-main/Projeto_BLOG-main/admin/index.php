<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>LOGIN</title>
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
<link rel="stylesheet" href="style-index.css">
</head>
<body class="text-center">
<main class="form-login">
    <form action="logar.php" method="post">
<img class="mb-4" src="../images/blog.png" alt="logo" width="70" height="70">
<h3>Painel Administrativo</h3>
<div class="mb-3">
    <label for="formGroupExampleInput" class="form-label">Login</label>
    <input type="text" class="form-control" id="formGroupExampleInput" name="login" placeholder="Login" required>
  </div>
<div class="mb-3">
    <input type="text" class="form-control" id="formGroupExampleInput" name="senha" placeholder="Senha" required>
  </div>
  <button type="submit" class="btn btn-primary">LOGAR</button>


    </form>
</main>
    <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous">

</script>
</body>
</html>