<?php
function portfolio_menu_html() {
    echo '<h1>Portfolio</h1>';
    ?>
    <form method="post" action="options.php">
        <?php
        settings_fields('portfolio_settings');
        do_settings_sections('portfolio_settings');
        submit_button(); ?>
    </form>
    <?php
}

function register_settings()
    {
        register_setting('portfolio_settings', 'portfolio_name');
        register_setting('portfolio_settings', 'portfolio_profile_img');
        register_setting('portfolio_settings', 'portfolio_about_post_id');
        add_settings_section('portfolio_settings_section', 'Paramètres de votre portfolio', 'section_html', 'portfolio_settings');
        add_settings_field('portfolio_name', 'Votre prénom', 'name_html', 'portfolio_settings', 'portfolio_settings_section');
        add_settings_field('portfolio_profile_img', 'URL de votre photo de profil', 'profile_img_html', 'portfolio_settings', 'portfolio_settings_section');
        add_settings_field('portfolio_about_post_id', 'L\'id du post "à propos"', 'about_id_html', 'portfolio_settings', 'portfolio_settings_section');
    }

  function section_html()
    {
        echo 'Renseignez les paramètres de votre profil';
    }

  function name_html()
    {?>
        <input type="text" name="portfolio_name" value="<?php echo get_option('portfolio_name')?>"/>
    <?php
    }

  function profile_img_html()
    {?>
        <input type="text" name="portfolio_profile_img" value="<?php echo get_option('portfolio_profile_img')?>"/>
    <?php
    }

  function about_id_html()
    {?>
        <input type="text" name="portfolio_about_post_id" value="<?php echo get_option('portfolio_about_post_id')?>"/>
    <?php
    }

function theme_menus() {
    add_menu_page('Portfolio', 'Porfolio', 'manage_options', 'portfolio', 'portfolio_menu_html', 'dashicons-admin-users', 8);
}


add_action( 'admin_menu', 'theme_menus' );
add_action('admin_init', 'register_settings');

