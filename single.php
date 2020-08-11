<?php
get_header('blog');
?>
<section class="container contenido">
        
<div class="row body-publicacion justify-content-center">
    
    
    
    <?php
        while(have_posts()): the_post();
        the_content();
        endwhile;
    ?>
    

</div>
    </section>

    <?php get_footer(); ?>
