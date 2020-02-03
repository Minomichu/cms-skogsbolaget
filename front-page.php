<?php 
    get_header();
?>

</div> <!-- end wrapper -->

<div id="bannerWeb">
    <?php if(dynamic_sidebar('banner_web')) : else : endif; ?>
</div>

<div id="bannerTabletMobile">
    <?php if(dynamic_sidebar('banner_tablet_and_mobile')) : else : endif; ?>
</div>
            
<div id="maxWidthStartpage">
    <div class="wrapper">
        <section>
            <div class="tabletWrapper">

                <div class="slogan">
                    <?php if(dynamic_sidebar('slogan')) : else : endif; ?>
                </div>
                <div class="uppercase">
                    <h1><?php echo get_the_title( get_option('page_for_posts', true) ); ?></h1>
                </div>

                <div id="surroundingNewsStartpage">

                    <?php
                        $args = array( 'numberposts' => 3 );
                        $lastposts = get_posts( $args );
                        foreach($lastposts as $post) : setup_postdata($post);
                    ?>

                    <div class="newsStartpage">
                        <div class="textNewsStartpage">
                            <p class="date">
                                <?php echo get_the_date('Y-m-d'); ?>
                            </p>
                            <p class="title">
                                <a href="<?php the_permalink() ?>"><?php the_title(); ?></a>
                            </p>
                            <p class="text">
                                <?php echo excerpt(15); ?>
                                <br/>
                                <a href="<?php the_permalink() ?>">Läs mer&nbsp;&raquo;</a>
                            </p>
                        </div>
                        <div class="imageNewsStartpage">
                            <?php the_post_thumbnail('thumbnail'); ?>
                        </div>
                    </div> <!-- end newsStartpage -->

                <?php endforeach; ?>

            </div> <!-- end surroundingNewsFrontpage -->
        </div> 
    </section>
</div> <!-- end maxWidthStartpage -->

<?php
get_footer();
?>