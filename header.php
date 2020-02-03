<!DOCTYPE HTML>
<html <?php language_attributes(); ?>>
<head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-149251408-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];
        function gtag(){dataLayer.push(arguments);}
        gtag('js', new Date());

        gtag('config', 'UA-149251408-1');
    </script>

    <meta http-equiv="content-type" content="text/html; charset=utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="author" content="miun.se" />
    <title><?php bloginfo('name'); ?></title>
    <link rel="shortcut icon" type="image/png" href="bilder/favicon.png">
    <?php wp_head() ?>
</head>

<body>
    <div id="container">
        <header>
            <div class="headerWeb">
                <a href="<?php echo home_url(); ?>" >
                <img class="nameAndLogo" 
                src="<?php echo header_image(); ?>" alt="" /></a>
            </div>

            <!-- Försökte göra logga + företagsnamnet till widgets så att dom enkelt gick att
            byta ut, men css:n började bråka något enormt och vägrade lägga 
            logga + företagsnamn + hamburgarmenyn på rätt ställen så gick tillbaka till det som
            är nedan efter några timmar, hoppas det är okej.
            För dekstop är det dynamiskt med header-val -->
            <div class="headerTabletMobile">

                <a href="<?php echo home_url(); ?>" ><img id="logo" 
                src="<?php echo get_template_directory_uri(); ?>/images/logo.png" 
                alt="Loggan är en sittande ekorre" /></a>
                <a href="<?php echo home_url(); ?>" ><img id="companyName" 
                src="<?php echo get_template_directory_uri(); ?>/images/companyname.png" 
                alt="Företaget heter Skogsbolaget" /></a> 
                <img id="burgerImage" src="<?php echo get_template_directory_uri(); ?>/images/greenBurger.png" 
                alt="Meny för mindre skärmar" />
            </div>


            <nav id="desktopNav">
                <?php wp_nav_menu(array('theme_location' => 'mainMenu')); ?>
            </nav>
        </header> 

        <nav class="toggleNavigation fullToggle">
            <?php wp_nav_menu(array('theme_location' => 'mainMenu')); ?>
        </nav>
        <main>
            <div class="wrapper">