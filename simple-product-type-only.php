<?php

/**
 * @link              https://www.cleova.com/simple-product-type-only/
 * @since             1.0
 * @package           simple-product-type-only
 *
 * @wordpress-plugin
 * Plugin Name:       Simple Product Type Only
 * Plugin URI:        https://www.cleova.com/simple-product-type-only/
 * Description:       This plugin is used to remove choices on product types except simple
 * Version:           4.0
 * Author:            DICKY IBROHIM
 * Author URI:        https://www.cleova.com/
 * License:           GPL-2.0+
 * License URI:       http://www.gnu.org/licenses/gpl-2.0.txt
 * Text Domain:       simple-product-type-only
 */


add_filter( 'product_type_selector', 'simpleproducttypeonly' );
function simpleproducttypeonly( $product_types ){
	if( isset($product_types['grouped']) ) {    
		unset( $product_types['grouped'] );
	}
	if( isset($product_types['external']) ) {    
		unset( $product_types['external'] );
	}
	if( isset($product_types['variable']) ) { 
		unset( $product_types['variable'] );
	}
	if( isset($product_types['virtual']) ) {    
		unset( $product_types[ 'virtual' ] );
	}
	if( isset($product_types['downloadable']) ) {    
	unset( $product_types[ 'downloadable' ] );
	}
	return $product_types;
}
