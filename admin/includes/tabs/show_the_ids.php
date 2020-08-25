<?php 
//Формирует и сохраняет спиок 
if ($the_id = isset($_GET['id']) ? $_GET['id'] : null) {
	$show_the_ids = $this->get_selections($the_id); // to->from

	if (empty($show_the_ids)) {		
		$empty = 'Ya haya recorrido todos los receptores posibles';
	}
	
}
if (!empty($_POST['save_tabel'])) {
	$str = unserialize(base64_decode($_POST['save_tabel']));
	$ovj = $this->wp_insert_ids($str,$_GET['id'] );
}  
if (!empty($_POST['delete_tabel'])) {
	$ovj = $this->drop_all();
	echo "<script>location.reload()</script>";
}  
?>
<div class="iump-wrapper">

	<div>
		<div style="margin: 10px 0px;">
			<?php if (!empty($show_the_ids) && !$ovj): ?>
			<div style="display: inline-block;float: left;" >
				<form method="post">
					<input type="hidden" name="save_tabel" value="<?php echo base64_encode(serialize($show_the_ids)); ?>">
					<input type="submit" value="Guardar" class="button button-primary button-large" />
				</form>
			</div>
			<?php endif ?>
			<div style="display: inline-block;margin-right:10px;position: absolute;left: 40%;">
				<strong>Select category: </strong>
				<select name="ihc_limit" class="js-ihc-search-users-limit" onchange="if (this.value) window.location.href=this.value">
				<option value="/wp-admin/options-general.php?page=my-plugin&tab=characteristics">select category</option>
					<option <?php if($the_id == '4'){echo 'selected';} ?> value="/wp-admin/options-general.php?page=my-plugin&tab=characteristics&id=4">
						Ilustrador											
					</option>
					<option <?php if($the_id == '7'){echo 'selected';} ?> value="/wp-admin/options-general.php?page=my-plugin&tab=characteristics&id=7">
						Fotógrafo												
					</option>
				</select>
			</div> 
			<div class="clear"></div>
		</div>
		<div class="iump-rsp-table">
			<?php if (!empty($show_the_ids) && !$ovj): ?>
				<table class="wp-list-table widefat fixed tags ihc-admin-tables">
					<thead>
						<tr>
							<th class="manage-column">
								Emisor
							</th>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class="manage-column">
								Emisor
							</th>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</tfoot>
					<?php foreach ($show_the_ids as $key => $value): ?>
					<?php 
						$to = $value[2];
						$from = $value[0];
						$iterration = $value[1]; 
					?>
					<tr>
						<td>
							<b>
							<?php
							$user = $this->show_user_info($from); 
							$user_to = $this->show_user_info($to); 
							$user_to_role =   $this->show_user_info($user_to[0]['ID'])[0]['levels'];
							switch ($this->show_user_info($user[0]['ID'])[0]['levels']) {
								case '4':
									$roleUser='Ilustrador/a ';
									break;
								case '5':
									$roleUser='Fan Ilustración ';
									break;
								case '6':
									$roleUser='Ambos  ';
									# code...
									break;
								case '7':
									$roleUser='Fotógrafo/a  ';
									# code...
									break;
								case '8':
									$roleUser='Fan +  ';
									# code...
									break;
								case '9':
									$roleUser='Gratis ';
									# code...
									break;
								case '13':
									$roleUser='Fan Fotografía';
									# code...
									break;
							}
							if ( !in_array($user_to_role, [8,5,13]) ) {
								echo $user[0]['roles'] . ' / ' . $user[0]['user_email'] .' / '. $roleUser.  ' <span style="color:#2da157;">('. $iterration . ')</span>';
							}					
							
							?>								
							</b>
						</td>
						<td>
							<b>
							<?php
							$user = $this->show_user_info($to);
							switch ($this->show_user_info($user[0]['ID'])[0]['levels']) {
								case '4':
									$roleUser='Ilustrador/a ';
									break;
								case '5':
									$roleUser='Fan Ilustración ';
									break;
								case '6':
									$roleUser='Ambos  ';
									# code...
									break;
								case '7':
									$roleUser='Fotógrafo/a  ';
									# code...
									break;
								case '8':
									$roleUser='Fan +  ';
									# code...
									break;
								case '9':
									$roleUser='Gratis ';
									# code...
									break;
								case '13':
									$roleUser='Fan Fotografía';
									# code...
									break;
							}
							echo $user[0]['roles'] . ' / ' . $user[0]['user_email'] .' / '.  $roleUser;
							?>
							</b>
						</td>
					</tr>						
					<?php endforeach ?>


				</table>				
			<?php endif ?>
			<?php if ($empty): ?>
				<?php echo $empty; ?>
			<?php endif ?>

			<?php if ($ovj): ?>
				<script>
					(function($) {
			            window.location.href = "/wp-admin/options-general.php?page=my-plugin&tab=selectdates";
					})( jQuery );
				</script>
			<?php endif ?>
		</div>


	</div>


</div>

<div class="clear"></div>