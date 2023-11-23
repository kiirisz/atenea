<!-- for displaying single blog posts -->

<!DOCTYPE html>
<html>

<!-- menú superior -->
<?php get_header() ?>


<!-- behold!!!! this will contain the bulk of the website -->
<div id="main-container">
    <?php
        if ( have_posts() ) { // if there are posts
            while ( have_posts() ) { // while there are posts
                the_post(); // get the post

                get_template_part( 'template-parts/content', 'single' ); // get the content-single.php file
            }
        }
    ?>
</div>

<!-- pie de página -->
<?php get_footer() ?>


<!-- for unbeknownst reasons the addition of wp_footer makes it so the wordpress bar appears at the top!! why it does that is beyond me -->
<?php wp_footer(); // this loads the as-yet-nonexistent js ?>

</html>