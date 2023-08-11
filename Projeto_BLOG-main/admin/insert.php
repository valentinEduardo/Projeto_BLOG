<?php 
include "../config/connection.php"; 

$stmt = $conectar->prepare("SELECT * FROM category ORDER BY idCategory");
$stmt->execute();

$results = $stmt->fetchALL(PDO::FETCH_ASSOC);

?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- CSS only -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">
    <script src="https://cdn.tiny.cloud/1/s9e2qg2y1vno92mqsxqjva1qak6wlvn5d4mb9eke2gwyzgm1/tinymce/5/tinymce.min.js" referrerpolicy="origin"></script>
    <title>ENVIAR</title>
    
</head>
<body>
    <main class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <form action="envia.php" method="post" enctype="multipart/form-data">
                    <div class="mb-3">
                        <label for="title" class="form-label">Título</label>
                        <input type="text" class="form-control" id="title" name="title" placeholder="Título">
                    </div>
                    <div class="mb-3">
                        <label for="data" class="form-label">Data</label>
                        <input type="date" class="form-control" id="data" name="data">
                    </div>
                    <div class="mb-3">
                         <label for="description" class="form-label">Descrição</label>
                         <input type="text" name="description" class="form-control" placeholder="Descrição">
                   </div>
                    <div class="mb-3">
                        <label for="news" class="form-label">Notícia</label>
                        <textarea name="news" id="mytextarea" method="post" placeholder="Notícia">
                        </textarea>
                    </div>
                    <div class="mb-3">
                        <label for="category" class="form-label">Categoria</label>
                        <select name="category" class="form-select" required>
                            <option value="">Selecione uma categoria</option>
                            <?php
                            $query = $conectar->query("SELECT * FROM category");
                            while ($row = $query->fetch(PDO::FETCH_ASSOC)) {
                                echo '<option value="' . $row['idCategory'] . '">' . $row['name_cat'] . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="mb-3">
                        <label for="image" class="form-label">Imagem</label>
                        <input type="file" class="form-control" id="image" name="image">
                    </div>
                    <button type="submit" class="btn btn-primary">Enviar</button>
                </form>
            </div>
        </div>
    </main>

    <!-- JavaScript Bundle with Popper -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-kenU1KFdBIe4zVF0s0G1M5b4hcpxyD9F7jL+jjXkk+Q2h455rYXK/7HAuoJl+0I4" crossorigin="anonymous"></script>
    <script>
        tinymce.init({
            selector: '#mytextarea'
        });
    </script>
</body>
</html>
