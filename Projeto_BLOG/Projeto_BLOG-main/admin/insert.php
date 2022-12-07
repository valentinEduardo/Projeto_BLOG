<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <title>Document</title>
    <style>
        #description{
          padding-bottom: 50px;
          border-radius: 10px;
          border-color: lightgrey;

        }
       
    </style>
</head>
<body>
    <main>
        <div class="container">
            <form action="envia.php" method="post" enctype="multipart/form-data">
                <div class="mb-3">
                  <label for="title" class="form-label">Título</label>
                  <input type="text" class="form-control" id="title" name="title" placeholder="Título"
                  height="20px">      
                </div>
                <div class="mb-3">
                  <label for="data" class="form-label">Data</label>
                  <input type="date" class="form-control" id="data" name="data">        
                </div>
                <div class="mb-3">
                  <label for="description" class="form-label">Descrição</label>
                  <textarea name="description" id="description" cols="149" rows="2" wrap="hard" style="resize:initial;" placeholder="Descrição"></textarea>
                </div>
                <div class="mb-3">
                  <label for="image" class="form-label">Imagem</label>
                  <input type="file" class="form-control" id="image"  placeholder="Insira uma Imagem" name="image">
                </div>
                <button type="submit" class="btn btn-primary">Submit</button>
              </form>
        </div>
    </main>
    
    
  <!-- JavaScript Bundle with Popper -->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
</body>
</html>