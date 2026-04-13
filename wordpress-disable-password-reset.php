<?php
/**
 * Plugin Name: WordPress Disable Password Reset
 * Plugin URI: https://github.com/levysoft/wordpress-disable-password-reset
 * Description: Completely disables the password reset functionality in WordPress. Blocks server-side requests, removes login links, and redirects direct access to the lost password form.
 * Version: 1.0.0
 * Author: Levysoft
 * Author URI: https://www.levysoft.it
 * License: GPL v2 or later
 */

if ( ! defined( 'ABSPATH' ) ) {
    exit; // Esce se l'accesso è diretto
}

// 1. Blocca le richieste di reset password a livello di core
add_filter( 'allow_password_reset', '__return_false' );

// 2. Rimuove il testo "Hai perso la password?" tramite gettext
add_filter( 'gettext', 'dpr_remove_lost_password_text' );
function dpr_remove_lost_password_text( $text ) {
    $strings_to_remove = array(
        'Lost your password?',
        'Lost your password',
        'Hai perso la password?',
        'Password perduta'
    );
    
    if ( in_array( $text, $strings_to_remove, true ) ) {
        return '';
    }
    
    return $text;
}

// 3. Fallback CSS per nascondere il link in caso di traduzioni particolari o temi
add_action( 'login_enqueue_scripts', 'dpr_hide_lost_password_css' );
function dpr_hide_lost_password_css() {
    echo '<style type="text/css">#nav a[href*="wp-login.php?action=lostpassword"] { display: none !important; }</style>';
}

// 4. Redirect dell'accesso diretto a ?action=lostpassword (protezione bot)
add_action( 'login_init', 'dpr_redirect_lost_password' );
function dpr_redirect_lost_password() {
    if ( isset( $_GET['action'] ) && $_GET['action'] === 'lostpassword' ) {
        // Reindirizza alla pagina di login standard
        wp_redirect( wp_login_url() );
        exit;
    }
}
