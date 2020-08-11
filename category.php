<?php
get_header();
?>
    <section class="container contenido">
        
        <div class="row justify-content-center ">

            <?php  while(have_posts()): the_post(); ?>
                
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

        </div>

    </div>
    <div>

            </section>

    <?php get_footer(); ?>
