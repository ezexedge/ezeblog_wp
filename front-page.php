<?php get_header(); ?>

<main>
    <div class="container">
        <div class="row">
            <div class="col-12">
            <?php if(is_category()): ?>
                    <h5 class="site-title text-center mt-3"><span> <?php echo the_archive_title(); ?> </span> </h5>

                 
                  <?php endif;?>
            </div>
        </div>
    </div>
   
    <div class="container categorias pt-2">
        <div class="row flex-wrap  justify-content-center">
            <div class="mt-4">

                <?php $categorias = get_categories(); ?>
                

            </div>
        </div>
        <div class="row justify-content-center">
            
                <div class="d-flex flex-wrap categoria  m-5 ">
                <?php foreach($categorias as $categoria){ ?>
                    
                <ul >
                    
                    <li >
                    
                        <a  href="<?php echo get_category_link($categoria->cat_ID)?>" 
                        class="<?php echo $categoria->name ?>"> <?php echo $categoria->name; ?> </a>
                    
                    </li>
                
                </ul>
                  
                   
                <?php } ?>
            
            </div>
        </div>
        <div class="row">
            <div class="col-12">
            <h5 class="text-center mt-4 mb-5">Ultimas entradas</h5>

            </div>
        </div>
      
    </div>
   

    <section class="container contenido">
        
        <div class="row justify-content-center ">

            <?php $args = array('posts_per_page' => 8);
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

        </div>

    </div>
    <div>

            </section>
</main>

<?php get_footer(); ?>