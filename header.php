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
        <li><span class="modal-show" data-toggle="modal" data-target="#loginModal">Zaloguj się</span></li>
        <li><span class="modal-show" data-toggle="modal" data-target="#registerModal">Rejestracja</span></li>
        <li><a href="<?php echo get_template_directory_uri().'/koszyk'; ?>"><span class="fa fa-shopping-basket modal-show" aria-hidden="true"></span></a></li>
      </ul>
      <!-- login modal -->
      <div class="login">
        <div class="modal fade" id="loginModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="loginModalLabel">Zaloguj się</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Nazwa użytkownika</span>
                  <input type="text" id="shop-login" class="form-control" aria-label="Nazwa uzytkownika" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Hasło</span>
                  <input type="password" class="form-control" aria-label="Hasło" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Zaloguj się</button>
            </div>
          </div>
        </div>
      </div>
      </div>
      <!-- register modal -->
      <div class="register">
        <div class="modal fade" id="registerModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="registerModalLabel">Rejestracja</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Nazwa użytkownika</span>
                  <input type="text" id="shop-login" class="form-control" aria-label="Nazwa uzytkownika" aria-describedby="basic-addon1">
                </div>
                <div class="input-group">
                  <span class="input-group-addon" id="basic-addon1">Hasło</span>
                  <input type="password" class="form-control" aria-label="Hasło" aria-describedby="basic-addon1">
                </div>
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-success">Zarejestruj się</button>
            </div>
          </div>
        </div>
      </div>
      </div>
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
