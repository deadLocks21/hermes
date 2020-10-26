<?php
/*
Plugin Name: H.E.R.M.E.S.
Plugin URI: https://timothe.hofmann.fr/projects/hermes/
Description: Plugin permettant un envoie de mail récurent à diférentes dates données avec des contenus différents.
Author: Timothé HOFMANN
Version: 1.0
Author URI: http://timothe.hofmann.fr
*/

add_action( 'admin_menu', 'hermes_options_page' );
function hermes_options_page() {
    add_menu_page(
        'H.E.R.M.E.S.',
        'H.E.R.M.E.S. Options',
        'manage_options',
        'hermes',
        'hermes_options_page_html',
        plugins_url('hermes/images/icon_logo.png')
    );
}

function hermes_options_page_html() {
    ?>
    <div class="wrap">
        <h1><?php echo esc_html( get_admin_page_title() ); ?></h1>
        <form action="options.php" method="post">
            <?php
            /*            // output security fields for the registered setting "wporg_options"
                        settings_fields( 'wporg_options' );
                        // output setting sections and their fields
                        // (sections are registered for "wporg", each field is registered to a specific section)
                        do_settings_sections( 'wporg' );
                        // output save settings button
                        submit_button( __( 'Save Settings', 'textdomain' ) );*/
            ?>
        </form>
        <div>Icons made by <a href="https://www.flaticon.com/authors/freepik" title="Freepik">Freepik</a> from <a href="https://www.flaticon.com/" title="Flaticon">www.flaticon.com</a></div>
    </div>
    <?php
}