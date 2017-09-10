<article>
    <a href="<?php echo get_permalink(); ?>" class="image"><img src="<?php echo get_post_img(); ?>" alt=""></a>
    <h3><?php
    the_title();
    ?></h3>
    <p><?php the_excerpt(); ?></p>
    <ul class="actions">
        <li><a href="<?php echo get_permalink(); ?>" class="button">阅读</a></li>
    </ul>
</article>