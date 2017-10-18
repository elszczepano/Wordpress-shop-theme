</main>
<footer class="d-flex flex-row main-footer">
  <div class="container justify-content-center">
    <div class=" d-flex flex-row justify-content-center">
      <div>
        <h4>Kategorie:</h4>
        <ul>
          <?php
          $orderby = 'name';
          $order = 'asc';
          $hide_empty = false ;
          $cat_args = array(
          'orderby'    => $orderby,
          'order'      => $order,
          'hide_empty' => $hide_empty,
          );
          $product_categories = get_terms( 'product_cat', $cat_args );
          foreach ($product_categories as $category): ?>
          <li><a href="<?php echo get_term_link($category); ?>"><?php echo $category->name; ?></a></li>
          <?php endforeach;?>
        </ul>
      </div>
      <div>
        <h4>O firmie:</h4>
        <ul>
          <li><a href="#">Nasze sklepy</a></li>
          <li><a href="#">Regulamin</a></li>
          <li><a href="#">Polityka prywatności</a></li>
          <li><a href="#">Kontakt</a></li>
        </ul>
      </div>
      <div>
        <h4>Serwis:</h4>
        <ul>
          <li><a href="#">Dział obsługi klienta</a></li>
          <li><a href="#">Zwroty i reklamacje</a></li>
        </ul>
      </div>
      <div>
        <h4>Kontakt:</h4>
        <ul>
          <li><strong>+48 784 342 533</strong></li>
          <li><a href="mailto:kontakt@luxwatch.pl">kontakt@luxwatch.pl</a></li>
        </ul>
      </div>
    </div>
    <div class="text-center">
      Luxwatch.pl 2017 &copy; Copyright. all rights reserved.
    </div>
  </div>
</footer>
<?php wp_footer(); ?>
</body>
</html>
