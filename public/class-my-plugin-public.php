<?php


/**
 * The public-facing functionality of the plugin.
 *
 * @link       https://my-plugin/author
 * @since      1.0.0
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/public
 */

/**
 * The public-facing functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the public-facing stylesheet and JavaScript.
 *
 * @property  my_plugin_options
 * @package    My_Plugin
 * @subpackage My_Plugin/public
 * @author     Author <my-plugin@gmail.com>
 */
class My_Plugin_Public {

	/**
	 * The ID of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $plugin_name    The ID of this plugin.
	 */
	private $plugin_name;

	/**
	 * The version of this plugin.
	 *
	 * @since    1.0.0
	 * @access   private
	 * @var      string    $version    The current version of this plugin.
	 */
	private $version;

	/**
	 * Initialize the class and set its properties.
	 *
	 * @since    1.0.0
	 * @param      string    $plugin_name       The name of the plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name='my-plugin', $version='1.0' ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->my_plugin_options = get_option($this->plugin_name);
		//add_shortcode( 'reviews_form',  array($this, 'add_shorc_example') );
		
	}


	// фильтр передает переменную $template - путь до файла шаблона.
	// Изменяя этот путь мы изменяем файл шаблона.
	public function my_template( $template ) {



		# шаблон для записи по ID
		// файл шаблона расположен в папке плагина /my-plugin/site-template.php
		global $post;
		if( $post->post_title == 'archivos de interes' ){
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/archivos_de_interes.php';
		} elseif ( $post->post_title == 'comunidad de propietarios') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/comunidad_de_propietarios.php';
		} elseif ( $post->post_title == 'datos generales') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/datos_generales.php';
		} elseif ( $post->post_title == 'empresas y autonomos') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/empresas_y_autonomos.php';
		} elseif ( $post->post_title == 'emresas y autonomos externos') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/emresas_y_autonomos_externos.php';
		} elseif ( $post->post_title == 'equipos informaticos') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/equipos_informaticos.php';
		} elseif ( $post->post_title == 'firma') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/firma.php';
		} elseif ( $post->post_title == 'locales') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/locales.php';
		} elseif ( $post->post_title == 'personal') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/personal.php';
		} elseif ( $post->post_title == 'software y backups') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/software_y_backups.php';
		} elseif ( $post->post_title == 'tratamiento de datos') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/tratamiento_de_datos.php';
		} elseif ( $post->post_title == 'tus documentos') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/tus_documentos.php';
		} elseif ( $post->post_title == 'tus documentos unready') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/tus_documentos_unready.php';
		} elseif ( $post->post_title == 'web ecommerce') {			
			return wp_normalize_path( WP_PLUGIN_DIR ) . '/WordPress-Plugin-Boilerplate-Example-master/public/templates/web_ecommerce.php';
		}


		return $template;

	}

	// Получение полей пользователя
	public function get_users_fields($user_id)	{
		global $wpdb;
		$table_name = $wpdb->get_blog_prefix() . 'id_choices';
		$results = $wpdb->get_results( "SELECT * FROM {$table_name} WHERE user_id = {$user_id}", ARRAY_A );
		$user_fields = [];
		foreach ($results as $result) {
			$user_fields[$result['choice_key']] = $result['choice_value'];
		}
		return $user_fields;
	}
	// Сохранение таблиц в БД
	public function ajax_query_lists()	{
		global $wpdb;
		$table_name = $wpdb->get_blog_prefix() . 'id_choices';
		$vars = $_POST;
		$user_id = $vars['user_id'];
		unset($vars['user_id']);
		unset($vars['action']);

		// We're preparing each DB item on it's own. Makes the code cleaner.
		foreach ( $vars as $key => $value ) {
			if (!$post = $wpdb->get_row( "SELECT * FROM {$table_name} WHERE user_id = {$user_id} AND choice_key = '{$key}'", ARRAY_A )) {
				$wpdb->insert( 
					$table_name, // указываем таблицу
					array( // 'название_колонки' => 'значение'
						'user_id' => $user_id,
						'choice_key' => $key, 
						'choice_value' => $value 
					), 
					array( 
						'%d', // %d - значит число
						'%s', // %s - значит строка
						'%s'
					) 
				);
			} else {
				$wpdb->update( 
					$table_name, // указываем таблицу
					array('choice_value' => $value), // поменяем имя 
					array( // где 
						'user_id' => $user_id,
						'choice_key' => $key
					), 
					array( '%s' ),
					array( // формат для «где»
						'%d',
						'%s'
					)
				);
			}
			//$post = $wpdb->get_results( "SELECT * FROM {$table_name} WHERE  choice_key = '{$key}'", ARRAY_A );
		}
		var_dump($vars);
	}



	public function add_shorc_example()
	{
		ob_start();?>
			
		<?php
		$myvariable = ob_get_clean();
    	return $myvariable;
	}
	/**
	 * Register the stylesheets for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_styles() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/my-plugin-public.css', array(), $this->version, 'all' );

	}

	/**
	 * Register the JavaScript for the public-facing side of the site.
	 *
	 * @since    1.0.0
	 */
	public function enqueue_scripts() {

		/**
		 * This function is provided for demonstration purposes only.
		 *
		 * An instance of this class should be passed to the run() function
		 * defined in My_Plugin_Loader as all of the hooks are defined
		 * in that particular class.
		 *
		 * The My_Plugin_Loader will then create the relationship
		 * between the defined hooks and the functions defined in this
		 * class.
		 */

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/my-plugin-public.js', array( 'jquery' ), $this->version, false );

	}

	/**
	 * The function of adding text to the footer
	 *
	 * @since    1.0.0
	 */

	public function add_text_footer(){

		if( !empty($this->my_plugin_options['footer_text']) )
		{
			echo '<h3 class="center">'.$this->my_plugin_options['footer_text'].'</h3>';
		}
	}


}
