<!DOCTYPE html>
<html <?php language_attributes(); ?>>
  <head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php bloginfo('name'); ?></title>
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <?php wp_head(); ?>
  </head>
  <body>
    <div class="container d-flex justify-content-center">
      <div class="box-404">
        <h1>404</h1>
        <h2>Strony nie znaleziono</h2>
        <span class="fa fa-frown-o" aria-hidden="true"></span>
        <h3>Kliknij <a href="<?php echo home_url(); ?>">tutaj</a>, aby powrócić na stronę główną.</h3>
      </div>
    </div>
  <?php wp_footer(); ?>
  </body>
</html>
