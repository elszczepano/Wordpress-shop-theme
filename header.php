<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="login-bar">
      <ul>
        <li><a href="<?php echo get_template_directory_uri() . '/moje-konto'; ?>">
          <?php if(is_user_logged_in()):?>
          <span data-toggle="tooltip" data-placement="bottom" title="Twoje konto">Moje konto</span>
        <?php else: ?>
          <span data-toggle="tooltip" data-placement="bottom" title="Strona logowania/rejestracji">Zaloguj się</span>
        <?php endif;?>
        </a></li>
        <li data-toggle="tooltip" data-placement="bottom" title="Twój koszyk"><a href="<?php echo get_template_directory_uri() . '/koszyk'; ?>"><span class="fa fa-shopping-basket modal-show" aria-hidden="true"></span></a></li>
      </ul>
    </div>
  <main class="container">
    <header class="d-none d-lg-flex main-header row justify-content-around">
      <div class="logo col-12 col-sm-4 col-md-4">
        <div class="text-center"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
      </div>
        <form role="search" method="get" id="searchform" class="searchform col-12 col-md-5 row align-items-center" action="http://localhost/sklep/">
        <div class="input-group">
            <button class="theme-layout input-group-addon" id="display-search-pc" data-toggle="tooltip" data-placement="bottom" title="Wyszukaj w sklepie"><span class="fa fa-search" aria-hidden="true"></span>&nbsp;Szukaj</button>
            <input type="text" class="form-control col-lg-9" name="s" id="s" aria-label="search" aria-describedby="display-search-pc" placeholder="Wyszukaj w sklepie">
        </div>
        </form>
    </header>
    <ul class="d-none d-lg-flex nav nav-tabs main-topbar-menu">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo home_url(); ?>">Strona główna<span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item dropdown" data-toggle="tooltip" data-placement="bottom" title="Kategorie produktów">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategorie</a>
        <div class="dropdown-menu">
          <?php
          $cat_args = array(
          'orderby'    => 'name',
          'order'      => 'asc',
          'hide_empty' => false,
          );
          $product_categories = get_terms( 'product_cat' , $cat_args );
          foreach ($product_categories as $category): ?>
          <a class="dropdown-item" href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a>
          <?php endforeach;?>
        </div>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="<?php echo get_template_directory_uri() . '/promocje'; ?>" data-toggle="tooltip" data-placement="bottom" title="Najnowsze promocje!">Promocje</a>
      </li>
    </ul>
    <nav class="d-flex d-lg-none navbar navbar-toggleable-md navbar-light bg-faded">
      <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
        <a class="navbar-brand" href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a>
      <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
          <li class="nav-item active">
            <a class="nav-link" href="<?php echo home_url(); ?>">Strona główna<span class="sr-only">(current)</span></a>
          </li>
          <li class="nav-item dropdown">
            <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategorie</a>
            <div class="dropdown-menu">
              <?php
              foreach ($product_categories as $category): ?>
              <a class="dropdown-item" href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a>
              <?php endforeach;?>
            </div>
          </li>
          <li class="nav-item">
              <a class="nav-link" href="<?php echo get_template_directory_uri() . '/promocje'; ?>">Promocje</a>
          </li>
        </ul>
        <div class="modal-header">
          <h5 class="modal-title">Wyszukaj w sklepie:</h5>
        </div>
        <div class="modal-body d-flex justify-content-center">
          <form role="search" method="get" id="searchform" class="searchform col-10" action="http://localhost/sklep/">
          <div class="input-group col-12">
              <button class="theme-layout input-group-addon" id="display-search-mobile"><span class="fa fa-search" aria-hidden="true"></span>&nbsp;Szukaj</button>
              <input type="text" class="form-control" name="s" id="s" aria-label="Szukaj w sklepie" aria-describedby="display-search-mobile" placeholder="Wyszukaj">
          </div>
          </form>
        </div>
        <hr class="my-3">
      </div>
    </nav>
