<?php get_header(); ?>
    <div id="carouselPromo" class="promo-carousel carousel slide" data-ride="carousel">
    <div class="carousel-inner">
      <?php while ( $slider_loop->have_posts() ) : $slider_loop->the_post();?>
        <div class="carousel-item">
          <img class="d-flex w-100" src="<?php the_post_thumbnail_url(); ?>" alt="Luxtime - watches">
          <div class="carousel-caption d-none d-md-block">
            <h3><?php the_title(); ?></h3>
            <p><?php the_content(); ?></p>
          </div>
        </div>
      <?php endwhile; ?>
    </div>
    <a class="carousel-control-prev" href="#carouselPromo" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselPromo" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

<?php get_footer(); ?>
