<?php get_header(); ?>

<div class="container">
    <div class="row justify-content-center">
    
            <?php if(is_page('entradas')): ?>



            <?php $args = array('posts_per_page');
                $entradas = new WP_Query($args); while($entradas->have_posts()): $entradas->the_post(); ?>
                            
                                
                            <div class="col-sm-6 col-xs-6  col-lg-3 col-md-4 entrada card">

            <?php the_post_thumbnail('entradas',array('class' => 'img-fluid') );?>
            <div class="contenido-entrada p-2">

                <?php the_title('<h5 class="text-center">', '</h5>')?>


                <p >  <?php  the_excerpt();?> <?php mi_excerpt_leermas();?></p>
                <p class=" datos text-secondary">
                    escrito  el <span><?php the_time(get_option('date_format')); ?></span>
                </p>

                <p class="datos text-secondary">
                    por: <?php the_author();?>
                </p>

                <a href="<?php the_permalink();?>" class="btn ">Leer mas</a>

            </div>

            </div>

            <?php
                endwhile; wp_reset_postdata();
            ?>
            

               

          
                   


            <?php endif; ?>

            <?php if(is_page('contactame')): ?>
            
          <?php  the_title('<h3 class="text-center mt-5 mb-5">', '</h3>');?>

            <div class="offset-xl-4 offset-lg-4 offset-md-3 offset-sm-0  offset-xs-0 mb-5 contactame">
            <?php  
                        while(have_posts()): the_post();


                        the_content();

                        endwhile;
                    ?>
            </div>
            <?php endif; ?>



        </div>
    </div>
</div>

<?php get_footer(); ?>