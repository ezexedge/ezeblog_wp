<!doctype html>
<html lang="en">
  <head>
    <title>GYM&CODE</title>
    <?php wp_head();?>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  </head>
  <body <?php body_class(); ?> >


  <nav class="navbar navbar-expand-md navbar-dark">


<button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#bs4navbar" aria-controls="bs4navbar" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon text-danger"></span>
  </button>
  <?php
  wp_nav_menu([
   
    'theme_location'  => 'menu_principal',
    'container'       => 'div',
    'container_id'    => 'bs4navbar',
    'container_class' => 'collapse navbar-collapse ',
    'menu_id'         => false,
    'menu_class'      => 'navbar-nav ml-auto',
    'depth'           => 2,
    'fallback_cb'     => 'bs4navwalker::fallback',
    'walker'          => new bs4navwalker()
  ]);
  ?>
</nav>




    
      <?php $destacada = wp_get_attachment_image_src(get_post_thumbnail_id(), 'full'); ?>
     <?php $destacada = $destacada[0]; ?>


    <style>
      
      header{
            background:
  linear-gradient(
    rgba(0, 0, 0, 0.7),
    rgba(0, 0, 0, 0.7)
  ),
  url(<?php echo $destacada; ?>);
            background-repeat: no-repeat;
            background-size: cover;
            background-position: 20% 50%;
            height: 70vh;
            background-attachment: fixed;

        }
        
        </style>
      


    <header class="site-header align-items-center " >
      <div class="row justify-content-center ">



      <?php if (is_front_page()): ?>

      <a href="<?php echo esc_url(home_url('/'))?>" class="titulo-home"><h1>< / GYM & CODE > </h1></a>

      <?php else: ?>

        <a href="<?php echo esc_url(home_url('/'))?>" class="titulo-home"><h1><?php the_title(); ?> </h1></a>

      
      <?php endif;?>

      </div>

    </header>
