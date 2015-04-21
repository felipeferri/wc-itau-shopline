<?php
/**
 * Admin View: Notice - WooCommerce missing.
 */

if ( ! defined( 'ABSPATH' ) ) {
	exit;
}

$plugin_slug = 'woocommerce';

if ( current_user_can( 'install_plugins' ) ) {
	$url = wp_nonce_url( self_admin_url( 'update.php?action=install-plugin&plugin=' . $plugin_slug ), 'install-plugin_' . $plugin_slug );
} else {
	$url = 'http://wordpress.org/plugins/' . $plugin_slug;
}
?>

<div class="error">
	<p><strong><?php _e( 'WooCommerce Itau Shopline Disabled', 'woocommerce-itau-shopline' ); ?></strong>: <?php printf( __( 'This plugin depends on the last version of %s to work!', 'woocommerce-itau-shopline' ), '<a href="' . esc_url( $url ) . '">' . __( 'WooCommerce', 'woocommerce-itau-shopline' ) . '</a>' ); ?></p>
</div>
