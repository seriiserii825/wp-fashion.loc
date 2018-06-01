<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<!--[if gte IE 9]>
  <style type="text/css">
    body {
       filter: none;
    }
  </style>
<![endif]-->
        
<!--[if lt IE 9]>
  <style type="text/css">
    body {
       background:url(<?php bloginfo('template_url'); ?>/images/body-bg-ie.png) 0 730px repeat-x;
    }
    .menu, .elastislide-wrapper{
        background:url(<?php bloginfo('template_url'); ?>/images/opacity.png)
    }
  </style>
<![endif]-->
        
<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<div class="karkas">
    <div class="header">
        <a href="/"><img src="<?php bloginfo('template_url'); ?>/images/logo.png" class="logo" alt="Fashion photographer" /></a>
        
        <?php wp_nav_menu( array(
          'theme_location'  => 'main-menu',
          'container'       => '',
          'container_class' => 'menu-{menu-slug}-container',
          'container_id'    => '',
          'menu_class'      => 'menu',
          'menu_id'         => '',
          'before'          => '',
          'after'           => '',
        ) ); ?>
        
    </div>