<?php 
    get_header();
?>

<div class="maxWidth">
    <section>
        <div class="tabletWrapper">

            <?php
                if (have_posts()) {
                while (have_posts()) {
                the_post();
            ?>
        
                <h2><?php the_title(); ?></h2>
                <?php the_post_thumbnail('medium'); ?>
                <div class="separator"></div>
                <?php the_content(); ?>
        
        <?php
    }
}
?>

        </div> 
    </section>
</div> <!-- end maxWidth -->

<?php
get_footer();
?>