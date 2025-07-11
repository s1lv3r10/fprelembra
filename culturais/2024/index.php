<!DOCTYPE html>
<html lang="pt-br">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Provas Culturais de 2024 - RelembraFP</title>
        <?php include '../../inc/includes.php' ?>
    </head>
    <body>
        <?php include '../../inc/header.php'; ?>

        <main class="container d-flex flex-column justify-content-center align-items-center mt-3">
            <h1>Culturais - 2024</h1>
            <p class="fs-5">
                Nas Culturais de 2024, ocorreram as seguintes provas:
            </p>
            
            <ul class="list-group w-100 mb-3 shadow-sm">
                <li class="list-group-item">
                    <h3 class="emtitulo">Quadrilha</h3>
                    <p class="fs-5">
                        Descrição da quadrilha conforme o campo especificado na tabela culturais do banco de dados.
                    </p>
                    <p class="fs-5">
                        O vencedor foi o <strong>EM2 (Desenvolvimento de Sistemas)</strong>, com o tema <strong>Tema do 2</strong>.
                    </p>
                </li>
                <li class="list-group-item">
                    <h3 class="emtitulo">Fotografia</h3>
                    <p class="fs-5">
                        Descrição da fotografia conforme o campo especificado na tabela culturais do banco de dados.
                    </p>
                    <p class="fs-5">
                        Em 2024, o tema da modalidade foi <strong><i>Tema da Fotografia</i></strong>, e o vencedor foi o <strong>EM2 (Desenvolvimento de Sistemas)</strong>.
                    </p>
                </li>
            </ul>
           
            <!-- <div class="accordion w-100 mb-3" id="modalidades">
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#quadrilha">
                            Quadrilha
                        </button>
                    </h2>
                    <div id="quadrilha" class="accordion-collapse collapse" data-bs-parent="#modalidades">
                        <div class="accordion-body">
                            <p class="fs-5">
                                Descrição da quadrilha conforme o campo especificado na tabela culturais do banco de dados.
                            </p>
                            <p class="fs-5">
                                O vencedor foi o <strong>EM2 (Desenvolvimento de Sistemas)</strong>, com o tema <strong>Tema do 2</strong>.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="accordion-item">
                    <h2 class="accordion-header">
                        <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#foto">
                            Fotografia
                        </button>
                    </h2>
                    <div id="foto" class="accordion-collapse collapse" data-bs-parent="#foto">
                        <div class="accordion-body">
                            <p class="fs-5">
                                Descrição da fotografia conforme o campo especificado na tabela culturais do banco de dados.
                            </p>
                            <p class="fs-5">
                                Em 2024, o tema da modalidade foi <strong><i>Tema da Fotografia</i></strong>, e o vencedor foi o <strong>EM2 (Desenvolvimento de Sistemas)</strong>.
                            </p>
                        </div>
                    </div>
                </div>
            </div> -->
            <h2 class="emtitulo">Mídias</h2>
            <div class="midias container w-100">
                <div class="row gy-4 justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="../../css/img/culturais.png" alt="">
                        <h5 class="mt-2">Quadrilha EM3 2024</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="../../css/img/culturais.png" alt="">
                        <h5 class="mt-2">Fotografia vencedora 2024</h5>
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-12">
                        <img src="../../css/img/culturais.png" alt="">
                        <h5 class="mt-2">Performance EM5 de 2024</h5>
                    </div>
                </div>
            </div>
            <p class="fs-5 mt-4">
                Tem alguma foto ou vídeo de alguma dessas provas que ficaria bem aqui? Preencha o formulário abaixo e aguarde
                o veredito da moderação!
            </p>
            <form action="#" class="req w-100 text-start">
                <div class="mb-3">
                    <label for="exampleFormControlInput1" class="form-label">Nome da sua requisição</label>
                    <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="Ex.: Quadrilha EM3 2022, Vôlei EM2 x EM6 2024...">
                </div>
                <div class="mb-3">
                    <label for="exampleFormControlTextarea1" class="form-label">Detalhamento</label>
                    <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" placeholder="Conte-nos mais sobre sua mídia"></textarea>
                </div>
                <div class="mb-3">
                    <label for="formFile" class="form-label">Arquivo (imagem ou vídeo)</label>
                    <input class="form-control" type="file" id="formFile">
                </div>
                <button type="submit" class="btn">Enviar requisição</button>
            </form> 
        </main>
    </body>
    <?php include '../../inc/footer.php'; ?>
</html>