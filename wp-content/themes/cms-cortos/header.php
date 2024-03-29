<?php
$artist_types = get_terms("artist_type");
$corto_collections = get_terms("corto_collection");

$url_fanzine = of_get_option("url_fanzine");
?>


<nav id="nav-page">
  <div class="overflow"></div>
  <div class="nav-contain">
    <a href="<?php echo get_site_url(); ?>" class="nav-logo">
      <svg id="Capa_2" viewBox="0 0 178.23 70.29">
        <defs>
          <style>
            .cls-1 {
              fill: #fff;
            }
          </style>
        </defs>
        <g id="Capa_1-2">
          <g id="ISOLOGOS">
            <path class="cls-1" d="m147.23,57.54c-1,.76-2.11.93-3.27.55-2.75-.9-4.95-2.71-7.16-4.35,1.38-1.44,2.68-2.85,4.05-4.21.47-.47.68-.93.67-1.61-.02-11.79-.01-23.58-.03-35.37,0-.61.17-1.05.62-1.47,1.27-1.19,2.5-2.43,3.73-3.66.18-.18.33-.4.5-.6-.03-.06-.07-.13-.1-.19-1.82,1.33-3.56.57-5.27-.16-1.11-.47-2.17-1.06-3.24-1.6-1.76-.88-1.81-.92-3.13.48-2.64,2.81-4.02,2.61-7.21,1.25-.49-.21-.97-.46-1.45-.7-.94-.46-1.88-.92-2.81-1.39-.39-.2-.68-.16-.99.18-.49.53-1.06.99-1.53,1.53-1.37,1.56-3.03,1.85-4.87,1.06-1.87-.8-3.69-1.7-5.53-2.58-.49-.23-.84-.24-1.26.19-2.28,2.3-4.61,4.56-6.92,6.84-.16.16-.29.34-.49.58,2.41,1.14,4.73,2.23,7.24,3.42-.29.22-.51.41-.76.57-.91.63-1.09,1.48-1.09,2.56.04,12.06.02,24.12.04,36.17,0,.79-.24,1.35-.81,1.88-1.37,1.28-2.69,2.62-4.02,3.94-.18.18-.34.37-.52.56.59.45,1.08.88,1.62,1.22,1.9,1.19,3.76,2.47,5.75,3.5,1.83.95,3.59.5,5.06-.98.64-.65,1.33-1.25,1.94-1.93.41-.44.69-.43,1.21-.11,1.57,1.01,3.15,2.04,4.82,2.87,1.91.95,3.71.55,5.19-1.02.83-.87,1.62-1.77,2.44-2.68.52.37.81.6,1.13.79,1.61.94,3.18,1.98,4.87,2.78,1.72.82,3.36.38,4.72-.95,2.43-2.38,4.86-4.77,7.28-7.16.18-.18.33-.41.49-.62-.06-.05-.11-.1-.17-.15-.25.18-.5.36-.74.55v.02Zm-26.49-40.98c-.56.44-.69.99-.69,1.68.02,12.24,0,24.47.03,36.7,0,.76-.19,1.3-.76,1.82-1.83,1.69-3.62,3.43-5.42,5.14-.1.1-.24.15-.36.23-.04-.04-.09-.08-.14-.11.85-1.34,1.7-2.68,2.56-4.03-1.93-1.32-3.82-2.6-5.65-3.85,1.42-1.48,2.7-2.88,4.05-4.21.5-.49.71-.98.71-1.68-.02-11.55-.01-23.1-.01-34.64v-1.19c2.28,1.07,4.44,2.08,6.69,3.13-.31.32-.62.71-1,1.01h0Zm14.09-.96c-1.3.85-1.46,2.08-1.45,3.53.05,11.88.02,23.76.04,35.64,0,.73-.21,1.25-.74,1.75-1.54,1.45-3.03,2.95-4.54,4.43-.17.16-.35.31-.53.46-.06-.04-.12-.08-.18-.12.63-1.11,1.26-2.22,1.86-3.3-2.01-1.35-3.97-2.68-5.89-3.97,1.35-1.41,2.53-2.75,3.83-3.98.7-.66.96-1.34.95-2.3-.03-11.52-.02-23.03-.02-34.55v-1.13c2.35,1.1,4.58,2.15,6.9,3.24-.07.09-.13.22-.24.29h0Z" />
            <path class="cls-1" d="m99.82,55.75c-.16-.06-.22-.1-.29-.12-1.76-.61-1.84-.72-1.84-2.54,0-9.91,0-19.82,0-29.74,0-.42-.04-.84-.06-1.41-1.3.71-2.49.37-3.64-.11-1.65-.69-3.31-1.39-4.93-2.15-.43-.2-.65-.16-.96.15-1.21,1.21-2.44,2.41-3.66,3.61-.16.15-.34.29-.6.5v-11.85c.37.14.67.24.97.35,1.42.54,2.84,1.11,4.28,1.63,1.59.58,2.93.13,4.1-1.03,2.38-2.35,4.77-4.7,7.16-7.05.21-.21.39-.45.59-.68-.06-.05-.11-.11-.17-.16-.09.05-.2.08-.27.15-1.2,1.21-2.59,1.26-4.08.65-2.16-.87-4.32-1.74-6.46-2.65-.45-.19-.74-.24-1.13.13-1.89,1.81-3.82,3.57-5.71,5.38-2.17,2.07-4.3,4.19-6.49,6.24-.73.68-1.02,1.33-1.02,2.39.06,12.7.02,25.39.07,38.09,0,1.33-.32,2.27-1.35,3.11-.85.7-1.55,1.59-2.37,2.45,2.65,2,5.51,3.62,8.47,5.07,3.93,1.93,7.5,1.21,10.63-1.76,2.76-2.62,5.45-5.31,8.17-7.97.2-.2.38-.42.61-.67h0Zm-10.26,3.02c-3.04-1.19-5.62-3.01-8.44-4.6.77-.78,1.4-1.47,2.09-2.1.43-.4.59-.82.59-1.4-.02-6.89-.01-13.77-.01-20.66v-1.09c1.97.5,3.63,1.87,5.77,1.23v28.61h0Z" />
            <path class="cls-1" d="m175.38,57.94c-.52-.5-.76-1-.75-1.74.02-9.75.01-19.5.01-29.25,0-3.29-.05-6.59.04-9.88.03-.89-.25-1.42-.85-1.97-2.58-2.37-5.14-4.75-7.68-7.16-1.54-1.46-3.04-2.94-4.52-4.46-.48-.5-.85-.49-1.46-.23-2.24.95-4.51,1.84-6.78,2.73-1.26.49-2.42.29-3.43-.65-.14-.13-.32-.2-.49-.29,0,.29.1.47.23.61,2.56,2.52,5.1,5.05,7.68,7.54.97.93,2.17,1.28,3.49.84,1.09-.36,2.17-.76,3.25-1.16.74-.28,1.47-.59,2.29-.92v11.91c-.3-.28-.5-.45-.69-.63-1.17-1.14-2.34-2.28-3.49-3.44-.34-.35-.59-.43-1.09-.19-1.8.83-3.63,1.59-5.47,2.34-.97.39-1.96.55-3.1-.31v3.94c0,9.03-.02,18.06-.02,27.09,0,1.94-.13,2.14-1.98,2.89-.04.01-.05.08-.13.22.41.44.82.92,1.28,1.37.57.56,1.19,1.08,1.76,1.63,2.05,1.97,4.02,4.02,6.15,5.89,1.89,1.66,4.1,2.8,6.74,2.38,1.1-.17,2.25-.41,3.22-.91,2.49-1.29,4.91-2.73,7.34-4.14.5-.29.92-.71,1.27-.99-.98-1.06-1.88-2.08-2.86-3.04h0Zm-14.65.71v-28.62c2.14.62,3.8-.71,5.77-1.25v1c0,6.91,0,13.82-.01,20.73,0,.61.16,1.06.62,1.47.67.61,1.28,1.29,2.01,2.05-2.71,1.61-5.34,3.38-8.39,4.62h0Z" />
            <path class="cls-1" d="m28.93,35.13c-.08-.4-.42-.55-.73-.68-1.44-.58-2.59-1.52-3.53-2.73-.53-.67-1.03-1.37-1.71-1.91-.88-.71-1.89-1-3-.79-1.01.2-1.52.91-1.76,1.84-.32,1.28-.13,2.52.44,3.68.63,1.29,1.68,2.19,2.95,2.84.79.4,1.64.57,2.36.6,1.68-.03,3.02-.54,4.23-1.44.23-.17.42-.41.6-.64.18-.22.21-.5.15-.78h0Z" />
            <path class="cls-1" d="m32.96,38.99c-.24-.44-.53-.85-.83-1.26-.26-.35-.66-.34-.95,0-.08.09-.15.18-.22.28-1.05,1.55-1.74,3.25-2.09,5.08-.1.51-.15,1.02-.02,1.54.18.69.78.96,1.38.58.27-.17.5-.41.71-.65.26-.31.47-.65.72-1,.06.09.11.18.17.26.3.48.62.94,1.07,1.29.71.55,1.48.25,1.58-.64.04-.38.04-.78-.02-1.17-.23-1.53-.78-2.95-1.51-4.3h0Z" />
            <path class="cls-1" d="m66.18,29.76h0L36.31.41c-.87-.87-2.36-.25-2.36.98.01,4.94-2.25,13.26-16.57,16.89-5.67,1.44-10.71,4.77-14.1,9.55-2.46,3.47-4.13,7.74-2.83,12.32l29.74,29.74c.87.87,2.37.25,2.35-.98-.06-4.94,2.13-13.27,16.41-17.03,5.66-1.49,10.68-4.86,14.03-9.67,2.44-3.5,4.56-7.84,3.19-12.44h0Zm-22.59-12.58c.37-.55.89-.9,1.59-.78.61.11,1.18.79,1.28,1.47.06.4.03.79-.11,1.18-.3.84-.69,1.62-1.42,2.17-.45.34-.96.55-1.42.57-1.04,0-1.6-.77-1.3-1.64.07-.2.17-.4.31-.56.34-.4.5-.87.64-1.37.1-.36.22-.73.42-1.04h0Zm4.97,21.4c-.34.17-.71.29-1.08.36-.98.2-1.98.34-2.96.55-1.25.27-2.37.79-3.34,1.65-.5.43-.89.94-1.19,1.53-.05.1-.09.2-.15.35.36-.35.66-.66,1-.94.79-.67,1.66-1.21,2.69-1.42.55-.11,1.09-.09,1.59.2.28.16.3.29.1.54-.37.47-.53,1.03-.69,1.59-.59,2.06-1.11,4.15-1.86,6.16-.38,1.02-.9,1.98-1.53,2.86-.31.43-.73.64-1.25.61-.49-.03-.75-.39-.89-.79-.24-.71-.41-1.45-.63-2.16-.16-.52-.33-1.04-.55-1.54-.18-.42-.52-.71-.97-.85-.23-.07-.44-.02-.58.17-.18.23-.39.46-.5.72-.44,1.05-.85,2.12-1.28,3.18-.4.98-.78,1.96-1.38,2.84-.28.41-.66.7-1.08.93-.25.14-.53.1-.8-.06-.69-.4-1.13-1.02-1.47-1.72-.67-1.36-1.18-2.78-1.72-4.2-.22-.57-.43-1.15-.85-1.61-.27-.29-.49-.35-.85-.17-.36.18-.67.43-.8.82-.24.68-.45,1.37-.66,2.06-.16.52-.31,1.05-.47,1.57-.04.12-.1.23-.17.33-.4.58-1.16.71-1.66.21-.36-.36-.65-.8-.92-1.24-.85-1.4-1.33-2.95-1.78-4.52-.36-1.26-.71-2.52-1.07-3.77-.16-.54-.33-1.07-.71-1.51-.13-.14-.08-.29.12-.42.39-.26.83-.33,1.29-.29.9.09,1.7.46,2.41.99.5.37.94.81,1.4,1.22.06.05.1.13.17.17-.18-.52-.45-.98-.82-1.38-1.08-1.18-2.45-1.83-3.99-2.15-.92-.19-1.86-.32-2.79-.5-.36-.07-.73-.18-1.06-.35-.57-.29-.74-.76-.54-1.36.08-.23.18-.46.31-.66.39-.59.81-1.16,1.21-1.75.18-.27.37-.55.49-.86.07-.18.03-.42.02-.63-.12-3.66.91-6.95,3.21-9.8,2.35-2.91,5.41-4.63,9.09-5.24.65-.11,1.32-.13,1.98-.19.12-.01.25-.04.36-.08,1.77-.64,3.08-1.81,3.98-3.46.64-1.16,1.14-2.38,1.59-3.62.26-.73.55-1.46,1.07-2.05.24-.27.5-.53.78-.75,1.06-.81,2.4-.43,2.91.81.4.97.24,1.9-.13,2.84-.3.78-.57,1.57-.83,2.36-.06.16-.07.35-.06.52.02.41.31.69.72.73.28.03.56.04.83.09.72.15.99.68.72,1.37-.17.41-.45.74-.75,1.06-.77.82-1.54,1.64-2.11,2.61-.34.58-.62,1.2-.72,1.87-.17,1.13.22,1.83,1.13,2.19.49.19.99.12,1.48,0,.96-.24,1.77-.77,2.55-1.35.64-.47,1.27-.94,1.91-1.41.43-.31.91-.41,1.43-.36.65.06,1.09.56,1.14,1.24.03.45-.05.88-.25,1.26-.29.53-.6,1.05-.91,1.57-.32.56-.66,1.12-.97,1.68-.17.31-.17.62-.06.97.58,1.75.79,3.55.68,5.4-.02.3.05.54.22.78.49.69.97,1.37,1.44,2.07.16.24.29.5.38.77.2.59.03,1.06-.52,1.34h0Z" />
            <path class="cls-1" d="m43.12,28.99c-1.04-.11-1.95.18-2.76.83-.62.49-1.09,1.12-1.57,1.74-.88,1.14-1.9,2.1-3.22,2.7-.25.11-.51.22-.75.37-.48.3-.6.8-.27,1.27.17.25.38.48.62.66,1.16.86,2.45,1.37,4.15,1.44.8,0,1.79-.21,2.69-.74,1.63-.94,2.82-2.22,3.16-4.15.15-.84.2-1.67-.1-2.49-.33-.91-.92-1.51-1.93-1.62Z" />
          </g>
        </g>
      </svg>
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
              $corto_collections = array_reverse($corto_collections);
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
              $artist_types = array_reverse($artist_types);
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
      <li class="link-item ">
        <a href="<?php echo get_site_url(); ?>/fanzine">Fanzine</a>
        <span></span>
      </li>
      <li class="link-item dropdown">
        <a>Estreno</a>
        <i class="arrow down"></i>
        <span></span>
        <div class="dropdown-contain">
          <ul class="dropdown-menu">
            <li class="dropdown-item">
              <a href="<?php echo get_site_url(); ?>/espacios">Espacios</a>
            </li>
            <li class="dropdown-item">
              <a href="<?php echo get_site_url(); ?>/difusion">Difusión</a>
            </li>
          </ul>
        </div>
      </li>
      <li class="link-item">
        <a href="<?php echo get_site_url(); ?>/sobre-el-proyecto">Sobre el proyecto</a>
        <span></span>
      </li>
      <li class="link-item">
        <a href="<?php echo get_site_url(); ?>/buscar"> <img class="icon-gema" src="<?php echo get_template_directory_uri(); ?>/assets/images/icons/search.svg" alt="Icono de buscar"></a>
        <span></span>
      </li>
    </ul>
  </div>
</nav>


<div class="page-loader">
  <img class="icon-gema" src="<?php echo get_template_directory_uri(); ?>/assets/images/logo-light.svg" alt="Logo de GMA">
  <div class="lds-ring">
    <div></div>
    <div></div>
    <div></div>
    <div></div>
  </div>
</div>