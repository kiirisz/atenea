<div id="article-title">
    <?php the_title(); // get the title!!!! intuitive ?>
</div>

<div class="metadata">
    <div id="article-author">Josefina Delgado</div>
    <div id="article-time"><?php the_date(); ?></div>
</div>

<article>
    <?php
    the_content(); // get the content!!!! intuitive
    ?>
</article>

<div class="metadata">
    <div id="article-tags">
        <?php the_tags( "Etiquetas: ", ", "); ?>
    </div>
</div>

<div id="article-comments">
    <?php comments_template(); // get the comments!!!! intuitive ?>
</div>