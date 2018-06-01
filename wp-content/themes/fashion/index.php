<?php get_header(); ?>

    <div class="content-main">
        <?php if(!dynamic_sidebar( 'slider-top' )): ?>
            <h2>Добавьте элементы слайдера через виджет html!!!</h2>    
        <?php endif; ?>

        <div class="content-main-blocks">
            <?php $posts_index = new WP_Query([
                    'posts_per_page' => 3,
                    'post_type' => ['post', 'page'],
                    'meta_key' => 'order',
                    'orderby' => 'meta_value_num',
                    'order' => 'ASC'
                ]); ?>

                <?php if ( $posts_index->have_posts() &&  count($posts_index->posts) === 3) : ?>  
                    <?php while ( $posts_index->have_posts() ) : $posts_index->the_post(); ?>
                    <div>
                        <a href="<?php the_permalink(); ?>">
                            <?php the_post_thumbnail(); ?>
                        </a>
                        <h1>
                            <a href="<?php the_permalink(); ?>">
                                <?php echo get_post_meta( get_the_ID(), 'title', true ); ?>
                            </a>
                        </h1>
                        <?php the_excerpt(); ?>
                        <p><a href="<?php the_permalink(); ?>" class="read-more">read more</a></p>
                    </div>  
                  <?php endwhile; ?>
                  <!-- post navigation -->
                  <?php else: ?>
                    <h1>Добавьте записям/страницам обязательное произвольное поле title и order</h1>
                <?php endif; ?>
        </div>
    </div>  
</div>
<?php get_footer(); ?>