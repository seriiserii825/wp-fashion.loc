<?php get_header(); ?>
    <div class="content-main">
        
    	<?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <?php if(in_category('portfolio')): ?>
            <?php the_content(); ?>
          <?php else: ?>
            <h1><?php the_title(); ?></h1>
            <?php the_content(); ?>
          <?php endif; ?>
          
        <?php endwhile; ?>
        <!-- post navigation -ad->
        <?php else: ?>
      <?php endif; ?>            
    	
    </div>  
</div>
<?php get_footer(); ?>