<?php
$artist_types = get_terms("artist_type");
$corto_collections = get_terms("corto_collection");
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
        <a href="<?php echo get_site_url(); ?>">Inicio</a>
        <span></span>
      </li>
      <li class="link-item dropdown">
        <a href="<?php echo get_site_url(); ?>/colecciones">Colecciones</a>
        <i class="arrow down"></i>
        <span></span>
        <div class="dropdown-contain">
          <ul class="dropdown-menu">
            <?php
            if ($corto_collections) :
              foreach ($corto_collections as $corto_collection) :
            ?>
                <li class="dropdown-item">
                  <a href="<?php echo get_site_url(); ?>/coleccion/?coleccion=<?php echo $corto_collection->slug; ?>">
                    <?php echo $corto_collection->name; ?>
                  </a>
                </li>
            <?php
              endforeach;
            endif;
            ?>
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