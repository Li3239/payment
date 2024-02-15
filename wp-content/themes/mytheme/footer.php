<footer>
    <section class="container">
        <div class="column">
            <span class="category">Om</span>
            <?php
            $menu = array(
                'theme_location' => 'footer_om',
                'menu_id' => 'footer_om',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            wp_nav_menu($menu);
            ?>
        </div>
        <div class="column">
            <span class="category">Kundservice</span>
            <?php
            $menu = array(
                'theme_location' => 'footer_kundservice',
                'menu_id' => 'footer_kundservice',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            wp_nav_menu($menu);
            ?>
        </div>
        <div class="column">
            <span class="category">Sociala medier</span>
            <?php
            // [footer_socialmedia]是这个menu的名称，可以在【dashboard】-【Appearence】-【Menu】中查看具体设定内容
            // 【dashboard】-【Appearence】-【Menu】中最右上部有个【Screen Options】，打开选择☑️【css class】后Menu的项目中就添加了【CSS Classes】项目
            // 【CSS Classes】项目中指定的名称，比如menu中的项目【Facebook】的css class定名为【facebook】，则在style.css中可以针对这个menu进行css设定
            // 比如添加facebook::before 添加Facebook的图标，等
            $menu = array(
                'theme_location' => 'footer_socialmedia',
                'menu_id' => 'footer_socialmedia',
                'container' => 'nav',
                'container_class' => 'menu'
            );
            wp_nav_menu($menu);
            ?>
        </div>
    </section>

    <section class="container2">
        <div class="column2">
            <span class="site-info">
                <?= "&copy" . "Copyright " . get_option("store_name") . ". 2024"   ?>
            </span>
        </div>
        <div class="column2">
            <span class="site-info">
                <?= get_option("store_address") . ", " . get_option("store_post") . " " .  get_option("store_city")  ?>
            </span>
        </div>
    </section>


</footer>
</body>

</html>