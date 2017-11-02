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
        <li><a href="<?php echo get_template_directory_uri().'/moje-konto'; ?>">
          <?php if(is_user_logged_in()):?>
          Moje konto
        <?php else: ?>
          Zaloguj się
        <?php endif;?>
        </a></li>
        <li><a href="<?php echo get_template_directory_uri().'/koszyk'; ?>"><span class="fa fa-shopping-basket modal-show" aria-hidden="true"></span></a></li>
      </ul>
    </div>
  <main class="container">
    <header class="main-header row d-flex justify-content-around">
      <div class="logo col-12 col-sm-4 col-md-4">
        <div class="text-center"><a href="<?php echo home_url(); ?>"><?php bloginfo('name'); ?></a></div>
      </div>
        <form role="search" method="get" id="searchform" class="searchform col-12 col-md-6 row align-items-center" action="http://localhost/sklep/">
        <div class="input-group">
            <button class="theme-layout input-group-addon" id="basic-addon1"><span class="fa fa-search" aria-hidden="true"></span>&nbsp;Szukaj</button>
            <input type="text" class="form-control col-12 col-md-9" name="s" id="s" aria-label="search" aria-describedby="basic-addon1">
        </div>
        </form>
    </header>
