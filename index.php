<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0"> <!--Só pra poder dar push-->
    <title>RelembraFP - Homepage</title>
    <?php include 'inc/includes.php' ?>
</head>
<body>
    <?php include 'inc/header.php'; ?>

    <main class="container d-flex flex-column justify-content-center align-items-center mt-3">
        <h1>RelembraFP</h1>
        <h3>O lugar para reviver suas memórias na ETEC Fernando Prestes</h3>

        <section class="carousel-section my-2">
            <div id="carousel" class="carousel slide carousel-fade" data-bs-ride="carousel" data-bs-interval="3000">
                <div class="carousel-inner">
                    <div class="carousel-item active">
                        <a href="esportivas/index.php">
                            <img src="css/img/esportivas.png" class="d-block w-100" alt="Esportivas">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="filantropicas/index.php">
                            <img src="css/img/filantropicas.png" class="d-block w-100" alt="Filantrópicas">
                        </a>
                    </div>
                    <div class="carousel-item">
                        <a href="culturais/index.php">
                            <img src="css/img/culturais.png" class="d-block w-100" alt="Culturais">
                        </a>
                    </div>
                </div>
            </div>
        </section>

        <p class="fs-5">
            A <strong>Gincana da Amizade</strong> é uma tradição de décadas da ETEC Fernando Prestes, sendo uma das várias coisas
            que tornam a experiência de estudar nessa escola algo tão único.
            Por isso, criamos o <strong>RelembraFP</strong>, um website onde você, seja estudante ou ex-alune, pode reviver alguns
            dos momentos mais marcantes desse evento tão especial, ou mesmo adicionar as suas próprias memórias.
        </p>

        <div class="botoes-ano card-group">
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Esportivas</h3>
                    <p class="card-text">
                        Não se lembra quem ganhou aquela partida de basquete? Ou então quer rever
                        o EM2 destruindo esse seu EM miserável no volêi denovo? Clique no botão, selecione
                        o ano e dê uma olhada nas modalidades!
                    </p>
                </div>
                <div class="card-footer">
                    <a href="#" class="btn w-100 h-100">Ir até a página de esportivas</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Filantrópicas</h3>
                    <p class="card-text">
                        Lembra daquele dia que o 2 arrecadou uma única unidade de leite? Não? Então clique
                        no botão e relembre já esse momento!
                    </p>
                </div>
                <div class="card-footer">
                    <a href="./filantropicas/" class="btn w-100 h-100">Ir até a página de filantropicas</a>
                </div>
            </div>
            <div class="card">
                <div class="card-body">
                    <h3 class="card-title">Culturais</h3>
                    <p class="card-text">
                        Quer uma prova de que o EM3 roubou todas as culturais até hoje? Clique no
                        botão e veja as provas se mostrando nos placares!
                    </p>
                </div>
                <div class="card-footer">
                    <a href="./culturais/" class="btn w-100 h-100">Ir até a página de culturais</a>
                </div>
            </div>
        </div>
    </main>
    <?php include 'inc/footer.php'; ?>
</body>
</html>