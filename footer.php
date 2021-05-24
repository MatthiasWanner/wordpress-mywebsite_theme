</main> <!-- main-container -->
    
    <footer class="footer-page">
		<?php wp_nav_menu([
                'theme_location' => 'footer-menu',
                'container' => false,
				'menu_class' => 'navbar-nav']); ?>
    </footer>
    <?php wp_footer(); ?>

</body>
</html>