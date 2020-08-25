<?php

/**
 * Fired during plugin activation
 *
 * @link       https://my-plugin/author
 * @since      1.0.0
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/includes
 */

/**
 * Fired during plugin activation.
 *
 * This class defines all code necessary to run during the plugin's activation.
 *
 * @since      1.0.0
 * @package    My_Plugin
 * @subpackage My_Plugin/includes
 * @author     Author <my-plugin@gmail.com>
 */
class My_Plugin_Activator {

	/**
	 * Short Description. (use period)
	 *
	 * Long Description.
	 *
	 * @since    1.0.0
	 */
	public static function activate() {
		global $wpdb;
		$table_name = $wpdb->get_blog_prefix() . 'id_choices';
		$charset_collate = "DEFAULT CHARACTER SET {$wpdb->charset} COLLATE {$wpdb->collate}";
		require_once( ABSPATH . 'wp-admin/includes/upgrade.php' );
		$sql = "CREATE TABLE {$table_name} (
			id int(11) unsigned NOT NULL auto_increment,
		    user_id int(11) unsigned  NOT NULL default '0',
		    choice_key varchar(60),
            choice_value varchar(250),
		    date_create TIMESTAMP DEFAULT CURRENT_TIMESTAMP,
		    PRIMARY KEY  (id)
		) {$charset_collate};";

		// Создать таблицу.
		dbDelta( $sql );

        $the_page_titles = ['archivos de interes', 'comunidad de propietarios', 'datos generales', 'empresas y autonomos', 'emresas y autonomos externos', 'equipos informaticos', 'firma', 'locales', 'personal', 'software y backups', 'tratamiento de datos', 'tus documentos', 'tus documentos unready', 'web ecommerce'];
        foreach ($the_page_titles as $the_page_title) {
            delete_option("my_plugin_page_title");
            add_option("my_plugin_page_title", $the_page_title, '', 'yes');
            // имя страницы (slug)
            delete_option("my_plugin_page_name");
            add_option("my_plugin_page_name", $the_page_title, '', 'yes');
            // ID
            delete_option("my_plugin_page_id");
            add_option("my_plugin_page_id", '0', '', 'yes');

            $the_page = get_page_by_title( $the_page_title );

            if ( ! $the_page ) {

                // Создаем пост
                $_p = array();
                $_p['post_title'] = $the_page_title; //Заголовок страницы
                $_p['post_content'] = "Можно вписать контент.";
                $_p['post_status'] = 'publish'; //Статус публикации
                $_p['post_type'] = 'page'; //Тип поста post или page
                $_p['comment_status'] = 'closed'; //Статус комментариев
                $_p['ping_status'] = 'closed'; //Пинги для поста
                $_p['post_category'] = array(1); // Категории поста, по умолчанию "Без категории"

                // Добавляем пост в бд
                $the_page_id = wp_insert_post( $_p );

            } else {
                // Плагин мог быть активнее и страница могла быть перемещена в корзину

                $the_page_id = $the_page->ID;

                //Обновляем статус страницы
                $the_page->post_status = 'publish';
                $the_page_id = wp_update_post( $the_page );

            }
            //Обновляем ID
            delete_option( 'my_plugin_page_id' );
            add_option( 'my_plugin_page_id', $the_page_id );
        }



	}


}
