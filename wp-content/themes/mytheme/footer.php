<footer>
    <section class="container">
        <div class="column-address">
            <span><?= get_option('store_address'); ?></span>
            <span><?= get_option('store_city') . ' ' . get_option('store_post') . ' ' . get_option('store_country'); ?></span>
        </div>
        <div class="column-links">
            <span class="category">Links</span>
            <?php
            $menu = array(
                'theme_location' => 'footer_links',
                'menu_id' => 'footer_links',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            wp_nav_menu($menu);
            ?>
        </div>
        <div class="column-help">
            <span class="category">Help</span>
            <?php
            $menu = array(
                'theme_location' => 'footer_help',
                'menu_id' => 'footer_help',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            wp_nav_menu($menu);
            ?>
        </div>
        <div class="column-newsletter">
            <span class="category">Newsletter</span>
            <div class="subscribe">
                <form class="subscribe-form">
                    <input type="email" placeholder="Enter Your Email Address">
                    <button type="submit">SUBSCRIBE</button>
                </form>
            </div>
        </div>
    </section>

    <div class="footer-line"></div>

    <section class="container-copyright">
        <span class="site-info">
            <?= get_option("store_copyright") ?>
        </span>
    </section>
</footer>
</body>

</html>

<?php
// submit form input
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // get email
    $email = $_POST['email'];
    // do something(check email, verify, save...)
    echo ('Your inputed email is : ' . $email);
}
?>