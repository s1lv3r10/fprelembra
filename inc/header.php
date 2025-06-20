<?php
    // Defina a URL base do site
    $base_url = "/fprelembra"; // Substitua pelo domínio correto
?>

<nav class="navbar navbar-expand-lg">
    <div class="container">
        <!-- BRAND / IMAGEM -->
        <a href="#" class="navbar-brand">
            <img src="<?php echo $base_url; ?>/css/img/LogoAPP.png" alt="Logo Etec" width="60" height="60">
        </a>

        <!-- TOGGLER RESPONSIVO -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
            data-bs-target="#nav-content" 
            aria-label="Toggle navigation"
        >
            <span class="navbar-toggler-icon"></span>
        </button>
        
        <!-- CONTEUDO NAVBAR -->
        <div class="collapse navbar-collapse" id="nav-content">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/" class="nav-link">Home</a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/culturais/" class="nav-link">Culturais</a>
                </li >

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/esportivas/" class="nav-link">Esportivas</a>
                </li>

                <li class="nav-item">
                    <a href="<?php echo $base_url; ?>/filantropicas/" class="nav-link">Filantrópicas</a>
                </li>
            </ul>
        </div>
    </div>
</nav>