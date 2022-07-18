<!DOCTYPE html>
<html lang="pt-br">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?php bloginfo('name'); ?></title>
  <link rel="shortcut icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="icon" href="<?php echo get_stylesheet_directory_uri(); ?>/favicon.ico" type="image/x-icon">
  <link rel="stylesheet" type="text/css" href="//cdn.jsdelivr.net/npm/slick-carousel@1.8.1/slick/slick.css" />
  <link rel="stylesheet" type="text/css" href="slick/slick-theme.css" />
  <link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_directory_uri(); ?>/css/magnific-popup.css" />
  <link rel="stylesheet" href="<?php echo get_stylesheet_directory_uri(); ?>/css/style.min.css">
  <script src="https://kit.fontawesome.com/e87723997d.js" crossorigin="anonymous"></script>
  <?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
  <!--header inicio-->
  <header>
    <div class="header-navegacao__menu">
      <div class="container">
        <div class="row navegacao-menu">

          <div class="logo-chic">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <img src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo-chic.svg" alt="Logo Chic embalagens">
            </a>
          </div>
          <div class="navegacao-menu__principal">
            <div class="ancora-principal">
              <a class="trabalhe" href="<?php echo esc_url( home_url('/trabalhe-conosco') ); ?>">Trabalhe conosco</a>
              <a class="contato" href="<?php echo esc_url( home_url('/contato') ); ?>">Contato</a>
            </div>


            <?php
            $args = array(
              'menu' => 'principal',
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'menu_class' => 'menu-nav-header',
              'container_class' => 'menu-nav-header'
            
            );
            wp_nav_menu( $args );
            ?>

          </div>
        </div>
      </div>
    </div>
    <div class="menu-scroll">
      <div class="container">
        <div class="menu-scroll__conteudo row">
          <div class="menu-scroll__logo-chic">
            <a href="<?php echo esc_url( home_url('/') ); ?>">
              <img id="logo-chic__img-branco" class="logo-chic__img" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo-chic-scroll.svg" alt="Logo Chic embalagens">
              <img id="logo-chic__img-vermelho" class="logo-chic__img logo-ativa" src="<?php echo get_stylesheet_directory_uri(); ?>/imagens/logo-chic-scroll-vermelho.svg" alt="Logo Chic embalagens">
            </a>
          </div>
          <div class="menu-scroll__navegacao--menu-principal">
            <div class="ancora-principal">
              <a class="trabalhe" href="">Trabalhe conosco</a>
              <a class="contato" href="">Contato</a>
            </div>


            <?php
            $args = array(
              'menu' => 'principal-scroll',
              'theme_location' => 'header-menu',
              'container' => 'nav',
              'container_class' => 'menu-scroll__nav',
              'menu_class' => 'menu-scroll__ul',
              'add_li_class'  => 'menu-scroll__li',
            
            );
            wp_nav_menu( $args );
            ?>

            <a id="menu-mobile__toggle" role="button" href="#">
              <div class="menu-mobile__scroll"></div>
            </a>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!--header fim-->