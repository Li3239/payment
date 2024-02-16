<html>

<head>
    <!-- add wordpress header function-->
    <?php wp_head(); ?>
</head>

<body>
    <!-- muste be added after body element: for wordpress black top bolock(switch dashboard/site) -->
    <?php wp_body_open(); ?>

    <!-- header includes site icon, main menu -->
    <header>
        <div class="header-line">
            <div class="column-menu">
                <?php
                $menu = array(
                    'theme_location' => 'main_menu',
                    'menu_id' => 'main_menu',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
                wp_nav_menu($menu);
                ?>
            </div>
            <div class="column-login">
                <?php
                $menu = array(
                    'theme_location' => 'main_menu_icons',
                    'menu_id' => 'main_menu_icons',
                    'container' => 'nav',
                    'container_class' => 'menu'
                );
                wp_nav_menu($menu);
                ?>
            </div>
        </div>
        <div class="banner-line">
            <div class="banner-img" alt="Banner image">
                <div class="banner-content">
                    <div class="img-logo"></div>
                    <h1>Cart</h1>
                    <div class="banner-link">
                        <p class="banner-home">Home</p>
                        <p class="banner-arrow">></p>
                        <p class="banner-cart">Cart</p>
                    </div>
                </div>
            </div>
    </header>