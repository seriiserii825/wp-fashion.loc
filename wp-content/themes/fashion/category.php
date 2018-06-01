<?php get_header(); ?>
<div class="content-main">

    <?php if(!dynamic_sidebar( 'slider-top' )): ?>
        <h2>Добавьте элементы слайдера через виджет html!!!</h2>    
    <?php endif; ?>

    <div class="content-left">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
            <div class="portfolio-image">
                <a href="<?php the_permalink(); ?>">
                    <?php the_post_thumbnail(); ?>
                </a>

            </div>
              <?php endwhile; ?>
              <div class="clear"></div>
              <?php posts_nav_link(); ?>
          <?php else: ?>
              <!-- no posts found -->
          <?php endif; ?>

          <?php wp_reset_postdata(); ?>
    </div>

<?php get_sidebar(); ?>

</div>  
<?php get_footer(); ?>