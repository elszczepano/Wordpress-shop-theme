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
    <header class="main-header row d-flex justify-content-around">
      <div class="logo col-12 col-sm-4 col-md-4">
        <div class="text-center"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
      </div>
        <form role="search" method="get" id="searchform" class="searchform col-12 col-md-6 row align-items-center" action="http://localhost/sklep/">
        <div class="input-group">
            <button class="theme-layout input-group-addon" id="basic-addon1" data-toggle="tooltip" data-placement="bottom" title="Wyszukaj w sklepie"><span class="fa fa-search" aria-hidden="true"></span>&nbsp;Szukaj</button>
            <input type="text" class="form-control col-12 col-md-9" name="s" id="s" aria-label="search" aria-describedby="basic-addon1">
        </div>
        </form>
    </header>
    <ul class="nav nav-tabs main-topbar-menu">
      <li class="nav-item">
        <a class="nav-link active" href="<?php echo home_url(); ?>">Strona główna</a>
      </li>
      <li class="nav-item dropdown" data-toggle="tooltip" data-placement="bottom" title="Kategorie produktów">
        <a class="nav-link dropdown-toggle" data-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Kategorie</a>
        <div class="dropdown-menu">
          <?php
          $orderby = 'name';
          $order = 'asc';
          $hide_empty = false ;
          $cat_args = array(
          'orderby'    => $orderby,
          'order'      => $order,
          'hide_empty' => $hide_empty,
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
