<?php get_header(); ?>
    <div class="content-main">
    
    	<div class="content-main-blocks">
            <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
                <div>
                    <a href="<?php the_permalink(); ?>"><?php the_post_thumbnail(); ?></a>
                    <h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
                    <?php $post_meta = get_post_meta( get_the_ID()); ?>
                    
                    <?php if(!empty($post_meta['place'][0])): ?>
                        <p class="ex-place"><?php echo $post_meta['place'][0]; ?></p>
                    <?php endif; ?>

                    <?php if(!empty($post_meta['date'][0])): ?>
                        <p class="ex-date"><?php echo $post_meta['date'][0]; ?></p>
                    <?php endif; ?>

                    <?php if(!empty($post_meta['ticket'][0])): ?>
                        <p class="ex-ticket"><?php echo $post_meta['ticket'][0]; ?></p>
                    <?php endif; ?>
                    
                    <?php the_excerpt(); ?>
                    <p><a href="<?php the_permalink(); ?>" class="read-more"> buy tickets</a></p>
                </div>
              <?php endwhile; ?>
              <!-- post navigation -->
              <?php else: ?>
              <!-- no posts found -->
            <?php endif; ?>
        </div>
    </div>  
</div>

<?php get_footer(); ?>