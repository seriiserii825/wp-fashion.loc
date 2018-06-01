<?php get_header(); ?>
<div class="content-main">

    <div class="content-left">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <?php the_content(); ?>
      <?php endwhile; ?>
      <!-- post navigation -->
  <?php else: ?>
      <!-- no posts found -->
  <?php endif; ?>
</div>

<div class="sidebar">
    <?php $about_post = new WP_Query([
            'posts_per_page' => 1,
            'post_type' => 'post',
            'category_name=exhibitions,latest-photo-shoot',
            'orderby' => 'rand'
        ]); ?>

    <?php if ( $about_post->have_posts() ) : while ( $about_post->have_posts() ) : $about_post->the_post(); ?>
        <div>
            <a href="<?php the_permalink(); ?>">
                <?php the_post_thumbnail(); ?>
            </a>
            <h1><a href="#"><?php the_title(); ?></a></h1>

            <?php the_excerpt(); ?>

            <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
        </div>
      <?php endwhile; ?>
      <!-- post navigation -->
      <?php else: ?>
      <!-- no posts found -->
    <?php endif; ?>
    
</div>

</div>  
<?php get_footer(); ?>