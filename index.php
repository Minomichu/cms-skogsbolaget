<?php 
    get_header();

    if (have_posts()) {
        while (have_posts()) {
            the_post();
?>
        
<article>
    <h1><?php the_title(); ?></h1>
    <?php the_excerpt(); ?>
    <p><a href="<?php the_permalink() ?>">Läs mer</a></p>
</article>

<?php
    }
}
get_footer();
?>