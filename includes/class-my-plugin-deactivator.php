<?php

/**
 * Fired during plugin deactivation
 *
 * @link       https://my-plugin/author
 * @since      1.0.0
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/includes
 */

/**
 * Fired during plugin deactivation.
 *
 * This class defines all code necessary to run during the plugin's deactivation.
 *
 * @since      1.0.0
 * @package    My_Plugin
 * @subpackage My_Plugin/includes
 * @author     Author <my-plugin@gmail.com>
 */
class My_Plugin_Deactivator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function deactivate() {
	global $wpdb;

	    $the_page_title = get_option( "my_plugin_page_title" );

	    // Получаем ID поста
	    $the_page_id = get_option( 'my_plugin_page_id' );
	    if( $the_page_id ) {

	        wp_delete_post( $the_page_id ); // переносим в корзину (полностью не удаляем)

	    }
	//Удаляем опции
	    delete_option("my_plugin_page_title");
	    delete_option("my_plugin_page_id");
		}

}
