<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CADASTRAR</title>
</head>
<body>
    <form action="cad_userOK.php" method="POST">
	
        <div class="mb-3">
            <label class="form-label">Digite seu nome do usuário</label>
          <input type="text" class="form-control" name="nome">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite seu login do usuário</label>
          <input type="text" class="form-control" name="login">
        </div>
        <div class="mb-3">
            <label class="form-label">Digite sua senha do usuário</label>
          <input type="text" class="form-control" name="senha">
        </div>
    <div class="mb-3">
            <button type="submit" class="btn btn-dark">Cadastrar</button>
        </div>
    </form>
    
</body>
</html>