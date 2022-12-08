<footer class="footer">
    <div class="container">
        <div class="footer-inner">
            <div class="footer-logo">
                <a href="/"><img src="<?php echo get_template_directory_uri() . '/images/logo.png'; ?>" alt="logo"></a>
            </div>
            <div class="footer-menu">
                <?php
                if (has_nav_menu('footer_menu')) {
                    wp_nav_menu(array(
                        'theme_location' => 'footer_menu',
                    ));
                }
                ?>
            </div>
        </div>
    </div>
</footer>
<?php wp_footer(); ?>
</body>

</html>