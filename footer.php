</div> <!-- end wrapper -->
</main>
    <div id="footerWrapper">
        <div id="footer">
            <div id="footerLeft">
                <div id="footer1">
                    <ul>
                        <li><?php if(dynamic_sidebar('footer_phonenumber')) : else : endif; ?></li>
                    </ul>
                </div>
                <div id="footer2">
                    <ul>
                        <li><?php if(dynamic_sidebar('footer_address')) : else : endif; ?></li>
                    </ul>
                </div>
            </div> <!-- end footerLeft -->
            <div id="footerRight">
                <div id="footer3">
                    <ul>
                        <!-- ### Gör mailto dynamisk också, utan att skriva ut -->
                        <li><a href="mailto:mino1801@student.miun.se"><?php if(dynamic_sidebar('footer_email')) : else : endif; ?></a></li>
                    </ul>
                </div>
                <div id="footer4">
                    <ul>
                        <li><?php if(dynamic_sidebar('footer_copyright')) : else : endif; ?></li>
                    </ul>
                </div>
            </div><!-- end footerRight -->
        </div>
    </div>
    
</div> <!-- end container -->

    <script src="http://code.jquery.com/jquery-1.11.3.min.js"></script>
    <script src="<?php echo get_template_directory_uri(); ?>/js/main.js"></script>
    <?php wp_footer() ?> <!-- alltid precis före body -->
    </body>
</html>