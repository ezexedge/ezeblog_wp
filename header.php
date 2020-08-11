<!doctype html>
<html lang="en">
  <head>
    <title>EZEBLOG</title>
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





      <style>
      
    header{
          height: 50vh;
         

          clip-path: polygon(0 0, 100% 0, 100% 37vh, 0 100%);
                    background: linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

     
      }
      
      </style>

      <?php if (is_page('entradas')): ?>

        <style>
      
      header{
        height: 50vh;
         

         clip-path: polygon(0 0, 100% 0, 100% 39vh, 0 100%);
                   background: linear-gradient(to right, #FFAF7B, #D76D77, #3A1C71); /* W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */

    
            margin-bottom: 50px;
        }
        
        </style>

      <?php endif;?>
    
   

    <header class="site-header align-items-center " >
      <div class="row justify-content-center ">



      <?php if (is_front_page()): ?>

      <a href="<?php echo esc_url(home_url('/'))?>" class="titulo-home"><h1>< / EZEBLOG > </h1></a>
     
      <?php elseif (is_category()): ?>

        <a href="<?php echo esc_url(home_url('/'))?>" class="titulo-home"><h1><?php the_archive_title(); ?> </h1></a>


      <?php else: ?>

        <a href="<?php echo esc_url(home_url('/'))?>" class="titulo-home"><h1><?php the_title(); ?> </h1></a>

      
      <?php endif;?>

      </div>

    </header>
