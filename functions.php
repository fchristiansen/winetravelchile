<?php // custom functions.php template @ digwp.com

function iniciarTema(){
    // ACTIVA IMAGENES DESTACADAS  
    add_theme_support( 'post-thumbnails' );
    add_image_size('slider_mobile', 320, 550, true);
    add_image_size('galeria1', 610, 355, true);
    add_image_size('galeria2', 610, 427, true);
    add_image_size('galeria3', 600, 792, true);
    add_image_size('galeria4', 610, 425, true);
    add_image_size('galeria5', 610, 357, true);
/*     add_image_size('galeria', 200); */

    // Activar Titulo 
    add_theme_support( 'title-tag' );
    register_nav_menu( 'primary', __( 'Menú Principal', 'menu_principal' ) );
  }
  // Cuando ocurra 'after_setup_theme, invocar "iniciarTema"
  add_action( 'after_setup_theme', 'iniciarTema' );
  
  
  