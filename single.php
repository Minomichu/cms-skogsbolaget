<?php 
    get_header();
?>

<div class="singlePage">
    <section>
        
        <div class="uppercase"><h1><?php single_post_title(); ?></h1> </div>
        <?php
            if (have_posts()) { 
            while (have_posts()) {
            the_post(); 
        ?>
            
            <?php the_post_thumbnail('full'); ?>
            
            <div class="textSinglePage">
                <div class="date">
                    <?php echo get_the_date('Y-m-d'); ?>
                </div>
            </div>
            <div class="smallSeparator"></div>
            <div class="text">
                <?php the_content(); ?>
            </div>
        
<?php
    }
}
?>

    </section>
</div> <!-- end singlePage -->


<?php
get_footer();
?>