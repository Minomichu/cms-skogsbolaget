<?php 

/* 
Template name: Image and two columns
*/

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

            <div class="twoColumns">
                <div class="imageTwoColumn">
                    <?php the_post_thumbnail('medium'); ?>
                </div>
                <div class="separator"></div>
                
                <h1><?php the_title(); ?></h1>
                <div class="column">
                    <?php the_content(); ?>
                </div>
            </div>

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