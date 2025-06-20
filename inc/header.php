<?php
    // Defina a URL base do site
    $base_url = "http://localhost/fprestesrelembra"; // Substitua pelo domínio correto
?>

<header>
    <nav>
        <div class="logo">
            <img src="<?php echo $base_url; ?>/css/img/LogoAPP.png" alt="Logo Etec">
        </div>
        <ul>
            <li><a href="<?php echo $base_url; ?>/" class="nav-link">Home</a></li>
            <li><a href="<?php echo $base_url; ?>/culturais/" class="nav-link">Culturais</a></li>
            <li><a href="<?php echo $base_url; ?>/esportivas/" class="nav-link">Esportivas</a></li>
            <li><a href="<?php echo $base_url; ?>/filantropicas/" class="nav-link">Filantrópicas</a></li>
        </ul>
    </nav>
</header>