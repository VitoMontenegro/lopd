<?php

/**
 * The admin-specific functionality of the plugin.
 *
 * @link       https://my-plugin/author
 * @since      1.0.0
 *
 * @package    My_Plugin
 * @subpackage My_Plugin/admin
 */

/**
 * The admin-specific functionality of the plugin.
 *
 * Defines the plugin name, version, and two examples hooks for how to
 * enqueue the admin-specific stylesheet and JavaScript.
 *
 * @property   my_plugin_options
 * @package    My_Plugin
 * @subpackage My_Plugin/admin
 * @author     Author <my-plugin@gmail.com>
 */
class My_Plugin_Admin {

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
	 * @param      string    $plugin_name       The name of this plugin.
	 * @param      string    $version    The version of this plugin.
	 */
	public function __construct( $plugin_name, $version ) {

		$this->plugin_name = $plugin_name;
		$this->version = $version;
		$this->my_plugin_options = get_option($this->plugin_name);

	}

	/**
	 * Register the stylesheets for the admin area.
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

		wp_enqueue_style( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'css/my-plugin-admin.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap', plugin_dir_url( __FILE__ ) . 'css/bootstrap.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'jquery-ui.min', plugin_dir_url( __FILE__ ) . 'css/jquery-ui.min.css', array(), $this->version, 'all' );
		wp_enqueue_style( 'bootstrap-slider', plugin_dir_url( __FILE__ ) . 'css/bootstrap-slider.css', array(), $this->version, 'all' );
	}

	/**
	 * Register the JavaScript for the admin area.
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

		wp_enqueue_script( $this->plugin_name, plugin_dir_url( __FILE__ ) . 'js/my-plugin-admin.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'ajax-requests', plugin_dir_url( __FILE__ ) . 'js/ajax-requests.js', array( 'jquery' ), $this->version, false );
		wp_enqueue_script( 'script-main', plugin_dir_url( __FILE__ ) . 'js/script.js', array( 'jquery' ), $this->version, false );

			

	}

	/**
	 * Register the administration menu for this plugin into the WordPress Dashboard menu.
	 *
	 * @since    1.0.0
	 */

	public function add_plugin_admin_menu() {

	    /*
	     * Add a settings page for this plugin to the Settings menu.
	     *
	     */
	    add_options_page( 'Bilder', 'Bilder', 'manage_options', $this->plugin_name, array($this, 'display_plugin_setup_page')
	    );
	}

	 /**
	 * Add settings action link to the plugins page.
	 *
	 * @since    1.0.0
	 */

	public function add_action_links( $links ) {
	    
	   $settings_link = array(
	    '<a href="' . admin_url( 'options-general.php?page=' . $this->plugin_name ) . '">' . __('Settings', $this->plugin_name) . '</a>',
	   );
	   return array_merge(  $settings_link, $links );

	}


	/**
	 * Render the settings page for this plugin.
	 *
	 * @since    1.0.0
	 */

	public function display_plugin_setup_page() {
		
	    include_once( 'partials/my-plugin-admin-display.php' );
	    
	}


    /**
	 * Validate options
	 */
	public function validate($input) {
		$valid = array();
		$valid['footer_text'] = (isset($input['footer_text']) && !empty($input['footer_text'])) ? $input['footer_text'] : '';
		return $valid;
	}
	
	/**
	 * Update all options
	 *
	 */
	public function options_update() {

			register_setting($this->plugin_name, $this->plugin_name, array($this, 'validate'));

	}


	public function sample_name()
	{
		echo 'wdfghgfdswrethnbfdsgh';
	}

    /********************************************************************************
   	*********                     Функции работы с БД                      **********
    *********************************************************************************/
	// Получаем id отправтелей (кому ) где $role - id роли 
	public function get_ids_to($role=[]) {
        global $wpdb;
        $table_name = $wpdb->get_blog_prefix() . 'ihc_user_levels';
        $ids_to = [];
        /*  $product = $wpdb->get_row( $wpdb->prepare( "SELECT * FROM {$table_name} WHERE `id` = %d LIMIT 1;", $product_id ) );
        $related = $wpdb->get_results( "SELECT DISTINCT user_id FROM {$table_name} WHERE level_id = $role "  ); */
        $query = "SELECT DISTINCT user_id FROM {$table_name} WHERE `level_id` IN (" . implode(',', array_map('intval', $role)) . ")";
        $related = $wpdb->get_results( $query);
        
        foreach ($related as $value) {
        	$ids_to[] = $value->user_id;
        }
		return $ids_to;
	}

    // Возвращает масив данных пользователя
	public function show_user_info_new($value)	{
        global $wpdb;
		$table_usermeta = $wpdb->get_blog_prefix() . 'usermeta';


		$query = "SELECT user_id, meta_key, meta_value FROM {$table_usermeta}
			WHERE user_id  = %s
			AND meta_key IN ('first_name','last_name','addr2','zip','city','country','ihc_user_levels', 'nickname')
			ORDER BY meta_value ASC";

		return $wpdb->get_results($wpdb->prepare($query, $value), ARRAY_A );
	}

	
    /********************************************************************************
   	*********                   Функции вывода данных                      **********
    *********************************************************************************/	



    // Возвращает масив данных пользователя
	public function show_user_info($value)	{
        global $wpdb;
		$table_users = $wpdb->get_blog_prefix() . 'users';
		$table_usermeta = $wpdb->get_blog_prefix() . 'usermeta';
		$table_ihc_user = $wpdb->get_blog_prefix() . 'ihc_user';
		$query = "SELECT DISTINCT u.ID, u.user_login, u.user_nicename, u.user_email, u.display_name as roles, u.user_registered, IFNULL( GROUP_CONCAT( DISTINCT(ul.level_id)), -1 ) as levels FROM {$table_users} u INNER JOIN {$table_usermeta} um ON um.user_id=u.ID LEFT JOIN wpfq_ihc_user_levels ul ON u.ID=ul.user_id  WHERE u.ID=%d" ;

		return $wpdb->get_results($wpdb->prepare($query, $value), ARRAY_A );
	}



	// PDF документ отправитель-получатель
	public function ajax_query_list(){	
		global $wpdb;
		$full_date = unserialize(base64_decode($_POST['price_val']));
		$str = $this->delete($full_date, ' /'); //2020-05-15 00:46:33

		//$show_table_from_date = $this->show_all_chois_from_date($str);
		$get_array_users = $this->get_ticket_new($str); //id получателей

		$id_choice = $wpdb->get_blog_prefix() . 'id_choice';

		foreach ($get_array_users as  $get_array_user) {

				$show_table_from_date[$get_array_user[0]] = $get_array_user[2] .'_'.$get_array_user[1];
			}
			//[$to,$iterration,$from]
			



		$page = substr($full_date, strrpos($full_date,"/")+2); //Fotografía
		ob_start();

		?>
				
			<style>
				th {
				    background-color: #f0f2ff;
				    background-clip: border-box;
					font-size:10pt;
				}
				th, td {
				    border:1pt solid #220044;
				}
			</style>
			<div  id="pdf">
				<h3 style="margin-top:10px;margin-bottom:20px;font-size:12pt;text-align: center;"><?php echo date( 'M Y', strtotime($str.'+1 month')) ; echo ' ' .$page;   ?></h3>
				<table  autosize="1" style="overflow: hidden;width:100%;border-collapse: collapse">
					<thead>
						<tr><th> </th>
							<th> </th>
							<th class="manage-column">
								Emisor
							</th>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</thead>
					<?php $count=1; ?>
					<?php foreach ($show_table_from_date as $to => $value): ?>
						<?php  


						$pieces = explode("_", $value);
						$from = $pieces[0];
						$iterration = $pieces[1]; 

						$user_from = $this->show_user_info($from);
						$user_to = $this->show_user_info($to);
						$user_level_from = $this->show_user_info($user_from[0]['ID'])[0]['levels'];	
						$user_level_to = $this->show_user_info($user_to[0]['ID'])[0]['levels'];	
						switch ($user_level_from ) {
							case '4':
								$roleUserFrom='Ilustrador/a ';
								break;
							case '5':
								$roleUserFrom='Fan Ilustración ';
								break;
							case '6':
								$roleUserFrom='Ambos  ';
								# code...
								break;
							case '7':
								$roleUserFrom='Fotógrafo/a  ';
								# code...
								break;
							case '8':
								$roleUserFrom='Fan +  ';
								# code...
								break;
							case '9':
								$roleUserFrom='Gratis ';
								# code...
								break;
							case '13':
								$roleUserFrom='Fan Fotografía';
								# code...
								break;
						}
						switch ($user_level_to ) {
							case '4':
								$roleUserTo='Ilustrador/a ';
								break;
							case '5':
								$roleUserTo='Fan Ilustración ';
								break;
							case '6':
								$roleUserTo='Ambos  ';
								# code...
								break;
							case '7':
								$roleUserTo='Fotógrafo/a  ';
								# code...
								break;
							case '8':
								$roleUserTo='Fan +  ';
								# code...
								break;
							case '9':
								$roleUserTo='Gratis ';
								# code...
								break;
							case '13':
								$roleUserTo='Fan Fotografía';
								# code...
								break;
						}
						?>
						<?php if ( !in_array($user_level_to, [8,5,13])): ?>

							<?php if ($iterration == 0): ?>
								<?php $color = 'black'; ?>
							<?php elseif($iterration == 1): ?>	
								<?php $color = '#2da157'; ?>
							<?php elseif($iterration == 2): ?>	
								<?php $color = 'blue'; ?>
							<?php elseif($iterration == 3): ?>
								<?php $color = 'red'; ?>	
							<?php elseif($iterration == 4): ?>
								<?php $color = 'orange'; ?>	
							<?php elseif($iterration == 5): ?>
								<?php $color = 'purple'; ?>	
							<?php elseif($iterration == 6): ?>
								<?php $color = '#00d8d5'; ?>	
							<?php elseif($iterration == 7): ?>	
								<?php $color = '#a47700'; ?>
							<?php elseif($iterration == 8): ?>	
								<?php $color = '#ff5252'; ?>
							<?php elseif($iterration == 9): ?>	
								<?php $color = '#815bff'; ?>
							<?php else: ?>								
								<?php $color = '#fd00be'; ?>
							<?php endif ?>
						<tr><td style="width: 3%;text-align:center"><?php echo $count++; ?> </td>
							<td style="width: 3%;"></td>
							<td style="width: 47%;text-align:center">				
								<?php echo $user_from[0]['roles'] . ' / ' .$roleUserFrom.  ' <span style="color:'.$color.';">('. $iterration . ')</span>'; ?>
							</td>
							<td style="width: 47%;text-align:center">
								<?php echo $user_to[0]['roles'] . ' / ' .$roleUserTo; ?>
							</td>
						</tr>							
					<?php endif ?>
				
					<?php endforeach ?>
	

				</table>
			</div>
		<?php 
		$myvariable = ob_get_clean();
		$stylesheet = file_get_contents(plugin_dir_url( __FILE__ ) . 'css/print.html');
		$html = $myvariable;



		$mpdf = new mPDF('utf-8', 'A4', '10', 'chelvetica', 10, 10, 7, 7, 10, 10);
		

        $mpdf->WriteHTML($html);
		//$id = md5(time());
		$id = 'list_' . date( 'M-Y', strtotime($this->delete($str, ' /').'+1 month'));

		$mpdf->Output($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/pdf/'.$id.'.pdf', 'F');

		echo $id.'.pdf';
		exit();
	}
	// PDF документ отправитель-получатель
	public function ajax_query_list_fun(){	
		$full_date = unserialize(base64_decode($_POST['price_val']));
		$str = $this->delete($full_date, ' /'); //2020-05-15 00:46:33
		$page = substr($full_date, strrpos($full_date,"/")+2); //Fotografía
		$show_table_from_date = $this->get_array_fans($page);
		ob_start();
		?>
			<style>
				th {
				    background-color: #f0f2ff;
				    background-clip: border-box;
					font-size:10pt;
				}
				th, td {
				    border:1pt solid #220044;
				}
			</style>
			<div  id="pdf">
				<h3 style="margin-top:10px;margin-bottom:20px;font-size:12pt;text-align: center;"><?php echo date( 'M Y', strtotime($str.'+1 month')) ; echo ' ' .$page;   ?></h3>
				<table  autosize="1" style="overflow: hidden;width:100%;border-collapse: collapse">
					<thead>
						<tr><th> </th>
							<th> </th>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</thead>
					<?php $count=1; ?>
					<?php foreach ($show_table_from_date as $variable): ?>
						<?php foreach ($variable as $key => $value): ?>
							<?php  
							switch ($value['ihc_user_levels'] ) {
								case '5':
									$rolefun='Fan Ilustración ';
									break;
								case '8':
									$rolefun='Fan +  ';
									# code...
									break;
								case '13':
									$rolefun='Fan Fotografía';
									# code...
									break;
							}
							?>

							<tr><td style="width: 3%;text-align:center"><?php echo $count++; ?> </td>
								<td style="width: 3%;"></td>
								<td style="width: 47%;text-align:center">
									<?php echo $value['first_name'] . ' ' . $value['last_name'] . ' / ' .$rolefun;?>
								</td>
							</tr>							

				
						<?php endforeach ?>
					<?php endforeach ?>
	

				</table>
			</div>
		<?php 
		$myvariable = ob_get_clean();
		$stylesheet = file_get_contents(plugin_dir_url( __FILE__ ) . 'css/print.html');
		$html = $myvariable;
		$mpdf = new mPDF('utf-8', 'A4', '10', 'chelvetica', 10, 10, 7, 7, 10, 10);
        $mpdf->WriteHTML($html);
		$id = 'list_fan' . date( 'M-Y', strtotime($this->delete($str, ' /').'+1 month'));
		$mpdf->Output($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/pdf/fun_'.$id.'.pdf', 'F');
		echo $id.'.pdf';
		exit();
	}
	// PDF документ печати этикеток
	public function ajax_query_labels(){	
		$str = unserialize(base64_decode($_POST['price_val']));
		$the_date = $this->delete($str, ' /');
		//$get_array_users = $this->get_array_users($str);
		//$get_array_users = $this->get_ticket($str);
		$get_array_users = $this->get_array_users_new($the_date);

		ob_start();?>
			<style>
				th {
				    background-color: #f0f2ff;
				    background-clip: border-box;
					font-size:10pt;
					font-family: spartan;
				}
				td {
					font-family: droid;
					font-style: ;
				}
			</style>
			<div  id="pdf">
				<table  autosize="1" style="overflow: hidden;width:100%;border-collapse: collapse">
					<?php $i=0; foreach ($get_array_users as $key2 => $value2): ?>

							<?php if (!in_array($value2['ihc_user_levels'], [8,5,13])): ?>
								<?php if ($i%2==0): ?>
									<tr>
								<?php endif ?>					
									<td style="width: 105mm;height:57mm;text-align:left; padding-left:25pt;">
										<div class="ticet_title" style="font-family: spartan;font-size:15pt; letter-spacing: 1pt;font-style: normal;">
										<?php if ($value2['first_name']): ?>
											<b><?php echo $value2['first_name']; ?></b>
										<?php endif ?>
										<?php if ($value2['last_name']): ?>
											<b><?php echo $value2['last_name'] ?></b>
										<?php endif ?>
										</div>
										<div class="ticet_addres" style="font-family:droid;font-style:italic">
										<?php if (isset($value2['addr2'])): ?>
											<i><?php echo $value2['addr2'] . ', '; ?></i><br>
										<?php endif ?>
										<?php if (isset($value2['zip'])): ?>
											<i><?php echo  $value2['zip'] . '- '; ?></i>
										<?php endif ?>
										<?php if (isset($value2['city'])): ?>
											<i><?php echo  $value2['city']; ?></i>
										<?php endif ?>
										<?php if (isset($value2['country'])): ?>
											<i><?php echo  $value2['country']; ?></i>
										<?php endif ?>
										</div>
									</td>
								<?php if ($i%2==0): ?>
									</tr>
								<?php endif; $i++;?>
								
							<?php endif ?>						

					<?php endforeach ?>
	

				</table>
			</div>
			
		<?php 
		$myvariable = ob_get_clean();
		$html = $myvariable;



		$mpdf = new mPDF('utf-8', 'A4', '10', '', 0, 0, '6mm', '6mm', 10, 10);
		

		$mpdf->WriteHTML($html);
		$id = 'Etiquetas_' . date( 'M-Y', strtotime($this->delete($str, ' /').'+1 month'));
		
		$mpdf->Output($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/pdf/'.$id.'.pdf', 'F');

		echo $id.'.pdf';
        exit(); 
	}
	// PDF документ печати этикеток
	public function ajax_query_labels_fun(){	
		$full_date = unserialize(base64_decode($_POST['price_val']));
		$str = $this->delete($full_date, ' /'); //2020-05-15 00:46:33
		$page = substr($full_date, strrpos($full_date,"/")+2); //Fotografía
		$get_array_users = $this->get_array_fans($page);



		ob_start();?>
			<style>
				th {
				    background-color: #f0f2ff;
				    background-clip: border-box;
					font-size:10pt;
					font-family: spartan;
				}
				td {
					font-family: droid;
					font-style: ;
				}
			</style>
			<div  id="pdf">

				<table  autosize="1" style="overflow: hidden;width:100%;border-collapse: collapse">
					<?php $i=0; foreach ($get_array_users as $key => $value): ?>
						<?php foreach ($value as $key2 => $value2): ?>
							<?php if (in_array($value2['ihc_user_levels'], [8,5,13])): ?>
								<?php if ($i%2==0): ?>
									<tr>
								<?php endif ?>					
									<td style="width: 105mm;height:57mm;text-align:left; padding-left:25pt;">
										<div class="ticet_title" style="font-family: spartan;font-size:15pt; letter-spacing: 1pt;font-style: normal;">
										<?php if ($value2['first_name']): ?>
											<b><?php echo $value2['first_name']; ?></b>
										<?php endif ?>
										<?php if ($value2['last_name']): ?>
											<b><?php echo $value2['last_name'] ?></b>
										<?php endif ?>
										</div>
										<div class="ticet_addres" style="font-family:droid;font-style:italic">
										<?php if (isset($value2['addr2'])): ?>
											<i><?php echo $value2['addr2'] . ', '; ?></i><br>
										<?php endif ?>
										<?php if (isset($value2['zip'])): ?>
											<i><?php echo  $value2['zip'] . '- '; ?></i>
										<?php endif ?>
										<?php if (isset($value2['city'])): ?>
											<i><?php echo  $value2['city']; ?></i>
										<?php endif ?>
										<?php if (isset($value2['country'])): ?>
											<i><?php echo  $value2['country']; ?></i>
										<?php endif ?>
										</div>
									</td>
								<?php if ($i%2==0): ?>
									</tr>
								<?php endif; $i++;?>
								
							<?php endif ?>						
						<?php endforeach ?>
					<?php endforeach ?>
	

				</table>
			</div>
		<?php 
		$myvariable = ob_get_clean();
		$html = $myvariable;



		$mpdf = new mPDF('utf-8', 'A4', '10', '', 0, 0, '6mm', '6mm', 10, 10);
		

		$mpdf->WriteHTML($html);
		$id = 'Etiquetas_' . date( 'M-Y', strtotime($this->delete($str, ' /').'+1 month'));
		
		$mpdf->Output($_SERVER['DOCUMENT_ROOT'].'/wp-content/uploads/pdf/fan_'.$id.'.pdf', 'F');

		echo $id.'.pdf';
        exit(); 
	}

}