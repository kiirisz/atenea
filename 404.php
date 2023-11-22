<!-- for 404 errors -->

<!-- for displaying single blog posts -->

<!DOCTYPE html>
<html>

<!-- menú superior -->
<?php get_header() ?>


<!-- behold!!!! this will contain the bulk of the website -->
<main id="notfound">
    <div>404</div>

    <p>Aquí no está lo que buscas.</p>
</main>

<!-- pie de página -->
<?php get_footer() ?>


<!-- for unbeknownst reasons the addition of wp_footer makes it so the wordpress bar appears at the top!! why it does that is beyond me -->
<?php wp_footer(); // this loads the as-yet-nonexistent js ?>

</html>