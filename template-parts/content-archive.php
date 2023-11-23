<div id="article-title">
    <?php the_title(); // get the title!!!! intuitive ?>
</div>

<div class="metadata">
    <div id="article-author"><?php the_author(); ?></div>
    <div id="article-time"><?php the_date(); ?></div>
</div>

<article>
    <?php
    the_excerpt(  ); // get the content!!!! intuitive
    ?>
</article>

<a class="readmore" href="<?php the_permalink();?>">Leer más &rarr;</a>

<div class="metadata">
    <div id="article-tags">
        <?php the_tags( "Etiquetas: ", ", "); ?>
    </div>
</div>