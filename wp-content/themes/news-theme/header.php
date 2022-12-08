<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php the_title(); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri() . '/favicon.ico' ?>" type="image/x-icon" />
    <link rel="shortcut icon" href="<?php echo get_template_directory_uri() . '/favicon.ico' ?>" type="image/x-icon" />

    <?php wp_head(); ?>

</head>

<body <?php body_class(); ?>>

    <header class="header">
        <div class="container">
            <div class="header-inner">
                <div class="header-logo">
                    <a href="/"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="logo"></a>
                </div>
                <div class="main-menu">
                    <?php
                    if (has_nav_menu('main_menu')) {
                        wp_nav_menu(array(
                            'theme_location' => 'main_menu',
                        ));
                    }
                    ?>
                </div>
                <button class="hamburger hamburger--spring" type="button">
                    <span class="hamburger-box">
                        <span class="hamburger-inner"></span>
                    </span>
                </button>

                <form method="GET" class="header-search" action="/">

                    <div class="header-search-input">
                        <input type="search" placeholder="Search here..." name="s">
                        <button class="search-button-inner" type="submit">
                            <svg class="search-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M18.375 18.375L14.4497 14.4428M16.625 9.1875C16.625 11.16 15.8414 13.0518 14.4466 14.4466C13.0518 15.8414 11.16 16.625 9.1875 16.625C7.21495 16.625 5.3232 15.8414 3.92839 14.4466C2.53359 13.0518 1.75 11.16 1.75 9.1875C1.75 7.21495 2.53359 5.3232 3.92839 3.92839C5.3232 2.53359 7.21495 1.75 9.1875 1.75C11.16 1.75 13.0518 2.53359 14.4466 3.92839C15.8414 5.3232 16.625 7.21495 16.625 9.1875V9.1875Z" stroke="black" stroke-width="2" stroke-linecap="round" />
                            </svg>
                        </button>
                    </div>
                    <button class="search-button-outer" type="button">
                        <svg class="search-icon" width="21" height="21" viewBox="0 0 21 21" fill="none" xmlns="http://www.w3.org/2000/svg">
                            <path d="M18.375 18.375L14.4497 14.4428M16.625 9.1875C16.625 11.16 15.8414 13.0518 14.4466 14.4466C13.0518 15.8414 11.16 16.625 9.1875 16.625C7.21495 16.625 5.3232 15.8414 3.92839 14.4466C2.53359 13.0518 1.75 11.16 1.75 9.1875C1.75 7.21495 2.53359 5.3232 3.92839 3.92839C5.3232 2.53359 7.21495 1.75 9.1875 1.75C11.16 1.75 13.0518 2.53359 14.4466 3.92839C15.8414 5.3232 16.625 7.21495 16.625 9.1875V9.1875Z" stroke="white" stroke-width="2" stroke-linecap="round" />
                        </svg>
                    </button>


                </form>

            </div>
        </div>
    </header>
    <?php
   
