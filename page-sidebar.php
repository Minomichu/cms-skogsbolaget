<?php 

/* 
Template name: Sidebar
*/

    get_header();
?>

<div class="maxWidth">
    <section>
       
        <?php
            if (have_posts()) {
            while (have_posts()) {
            the_post();
        ?>
        
        <div class="textWithSidebar">
            <div class="uppercase"><h1><?php the_title(); ?></h1></div>
            <?php the_content(); ?>
        </div> 
         
    <?php
    }
}
?>

        <div id="surroundSocialMedia">
            <div id="socialMedia">
                <?php if(dynamic_sidebar('social_media')) : else : endif; ?>
            </div>
        </div> <!-- end surroundSocialMedia -->
 
    </section>
</div> <!-- end maxWidth -->

<?php
get_footer();
?>