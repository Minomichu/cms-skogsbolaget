<?php 

/* 
Template name: Contact
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
    
            <div id="surroundContact">
                <div class="uppercase"><h1><?php the_title(); ?></h1></div>
        
                <div id="map">
                    <?php echo do_shortcode('[wpgmza id="1"]'); ?>
                </div>

                <div id="aboutUsText">
                    <?php echo do_shortcode('[ninja_form id=2]'); ?>
                </div>
            </div><!-- end surroundContact -->

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