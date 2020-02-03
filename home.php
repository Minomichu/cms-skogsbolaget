<?php 
    get_header();
?>

<a href="http://mimmimi.com/CMS/Skogsbolaget/<?php single_post_title(); ?>/"><img id="goToTop" src="<?php echo get_template_directory_uri(); ?>/images/arrowUp.png" 
alt="Klicka här för att komma till sidans topp" /></a>

<div class="maxWidth">
    <section>
        <div class="tabletWrapper">
            <div class="uppercase"><h1><?php single_post_title(); ?></h1> </div>

            <?php
                if (have_posts()) {
                while (have_posts()) {
                the_post(); 
            ?>
        
            <article>
                <div class="nyheterBildOchText">
                    <div class="titleOnTopMobile">
                        <div class="textNewsPage">
                            <div class="date newsDate">
                                <?php echo get_the_date('Y-m-d'); ?>
                            </div>
                            <div class="title">
                                <h3><?php the_title(); ?></h3>
                            </div>
                        </div>
                    </div>

                    <div class="imageNewspage">
                        <?php the_post_thumbnail('medium'); ?>
                    </div>
                    <div class="textNewsPage">
                        <div class="hideMobile">
                            <div class="date">
                                <?php echo get_the_date('Y-m-d'); ?>
                            </div>
                            <div class="title">
                                <h3><a href="<?php the_permalink() ?>"><?php the_title(); ?></a></h3>
                            </div>
                        </div>
                        <div class="text newsText">
                            <?php echo ellipsisLink(25); ?>
                        </div>
                    </div>    
                </div>
            </article>
        <div class="separator"></div>
    
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