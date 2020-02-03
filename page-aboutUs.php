<?php 

/* 
Template name: About Us
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
        
            <div id="surroundAboutUs">
                <div class="showTabletMobile"><div class="uppercase"><h1><?php the_title(); ?></h1></div></div>
            <div id="slideshow">
                <?php echo do_shortcode('[metaslider id="62"]'); ?>
            </div>

            <div id="aboutUsText">
                <div class="hideTabletMobile"><div class="uppercase"><h1><?php the_title(); ?></h1></div></div>
                <?php the_content(); ?>
            </div>
        </div><!-- end surroundAboutUs -->

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