<?php
// Consultar los tipos de artistas
$artist_types = get_terms("artist_type");
?>


<nav id="nav-page">
  <div class="nav-contain">
    <a href="<?php echo get_site_url(); ?>" class="nav-logo">
      <img src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.svg" alt="Logo de GMA">
      <span>GMA</span>
    </a>
    <div id="icon-menu">
      <span></span>
      <span></span>
      <span></span>
    </div>
    <ul id="nav-menu" class="nav-links">
      <li class="link-item">
        <a href="<?php echo get_site_url(); ?>/autores">Inicio</a>
        <span></span>
      </li>
      <li class="link-item dropdown">
        <a href="<?php echo get_site_url(); ?>/colecciones">Colecciones</a>
        <i class="arrow down"></i>
        <span></span>
        <div class="dropdown-contain">
          <ul class="dropdown-menu">
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">TOP</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">Evolución</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">Cortos + Cortos</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">+18</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">Stop Motion</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">3D</a></li>
            <li class="dropdown-item"><a href="<?php echo get_site_url(); ?>/cortometrajes">Mano Alzada</a></li>
          </ul>
        </div>
      </li>
      <li class="link-item dropdown">
        <a href="<?php echo get_site_url(); ?>/artistas">Artistas</a>
        <span></span>
        <div class="dropdown-contain">
          <ul class="dropdown-menu">
            <?php
            if ($artist_types) :
              foreach ($artist_types as $artist_type) :
            ?>
                <li class="dropdown-item">
                  <a href="<?php echo get_site_url(); ?>/artistas/?tipo_artista=<?php echo $artist_type->slug; ?>">
                    <?php echo $artist_type->description; ?>
                  </a>
                </li>
            <?php
              endforeach;
            endif;
            ?>
        </div>
      </li>
      <li class="link-item">
        <a href="<?php echo get_site_url(); ?>/cortometrajes">Fanzine</a>
        <span></span>
      </li>
      <li class="link-item">
        <a href="<?php echo get_site_url(); ?>/cortometrajes">Sobre el proyecto</a>
        <span></span>
      </li>
    </ul>
  </div>
</nav>