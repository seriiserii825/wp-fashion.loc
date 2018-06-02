<?php 
/*
Template Name: шаблон страницы контактов
 */
get_header(); ?>
<div class="content-main">
    <div class="content-left">
        <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
          <h1><?php the_title(); ?></h1>
          <div class="contact-form">
            <?php the_content(); ?>
          </div>
          <?php endwhile; ?>
          <!-- post navigation -->
      <?php else: ?>
          <!-- no posts found -->
      <?php endif; ?>
    </div>

    <div class="sidebar">
      <div>
          <?php if ( have_posts() ) : while ( have_posts() ) : the_post(); ?>
              <p><?php the_post_thumbnail(); ?></p>
              <h1>Contact Details</h1>
              <?php 
                $contacts_custom = get_post_custom( get_the_ID() ); 
                $pattern = '#^contact-#';
              ?>
                <?php foreach($contacts_custom as $key => $value): ?>
                  <?php if(preg_match($pattern, $key)): ?>
                    <p class="<?php echo $key; ?>"><?php echo $value[0]; ?></p>
                  <?php endif; ?>
                <?php endforeach; ?>
            <?php endwhile; ?>
            <!-- post navigation -->
            <?php else: ?>
            <!-- no posts found -->
          <?php endif; ?>
        </div>
    </div>
</div>  
<?php get_footer(); ?>













