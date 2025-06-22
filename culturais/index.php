<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Provas Culturais - RelembraFP</title>
    <?php include '../inc/includes.php' ?>
</head>
    <body>
        <?php include '../inc/header.php'; ?>

        <main class="container d-flex flex-column justify-content-center align-items-center mt-3">
            <h1>Culturais</h1>
            <p class="fs-5">
                Ao longo dos anos, além de incentivar a prática do esporte e arrecadar insumos para
                causas filantrópicas, a Gincana da Amizade também promoveu atividades visando o desenvolvimento
                sociocultural dos alunos. Escolha um dos anos disponíveis abaixo para visualizar suas respectivas
                provas, placares e vencedores.
            </p>
            <img src="../css/img/culturais.png" alt="culturais" class="mb-4 w-75">
            <div class="anos container d-flex flex-column gap-4">
                <a href="./2024/"><button class="btn w-100">2024</button></a>
                <button class="btn w-100">2023</button>
                <button class="btn w-100">2022</button>
                <button class="btn w-100">2021</button>
            </div>
        </main>
    </body>

    <?php include '../inc/footer.php'; ?>
</html>