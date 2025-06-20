<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Só pra poder dar push-->
    <title>Centro de Memória - Etec</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
    <link href="https://fonts.googleapis.com/css2?family=Roboto+Slab&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">

</head>
<body>
    <?php include('inc/header.php'); ?>

    <main style="margin-bottom: 0">
        <br>
            <h2 class="titulo">Centro de Memória Virtual da Gincana</h2>
        <section class="carousel-section">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="1000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="esportivas/index.php">
                            <img src="css/img/esportivas.png" alt="Esportivas">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="filantropicas/index.php">
                            <img src="css/img/filantropicas.png" alt="Filantrópicas">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="culturais/index.php">
                            <img src="css/img/culturais.png" alt="Culturais">
                        </a>
                    </div>
                </div>
            </div>
        </section>


        <div class="destaques" style="background-color: #FFF;">
            <h2 class="titulo" >Destaques</h2>
            <div class="btn-grid">
                <a href="2023/index.php" class="btn botaoano">
                    <img src="img/culturais2023.jpg" alt="">
                    <p>Vencedores Anteriores</p>
                </a>
                <a href="2024/index.php" class="btn botaoano">
                    <img src="img/culturais2024.jpg" alt="">
                    <p>Placares</p>
                </a>
                <a href="2025/index.php" class="btn botaoano">
                    <img src="img/culturais2025.jpg" alt="">
                    <p>Maiores Recordes</p>
                </a>
            </div>
        </div>
    </main>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"></script>

</body>
    <?php include('inc/footer.php'); ?>
</html>