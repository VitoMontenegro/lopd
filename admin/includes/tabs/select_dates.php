<div class="iump-wrapper">

	<div>
		<div style="margin: 10px 0px;">
		
				<div style="display: inline-block;float: left;" >
					<input  type="submit" value="Crear PDF" name="print" class="button button-primary button-large"  />
				</div>
				<div style="display: inline-block;float: left; margin-left: 20px;" >
					<form method="post">
						<input type="hidden" name="delete_tabel" value="<?php echo $the_date; ?>">								
						<input onclick="return confirm('¿Seguro que quieres borrar el listado?')"  type="submit" value="Eliminar" style="background: #d71e24;border-color: #d71e24;" class="button button-primary button-large" />
					</form>
				</div>
				<div class="linkbtn" style="display: inline-block;float: left; margin-left: 25px;" >
								
				</div>
			<div class="clear"></div>
		</div>
		
		<?php if (!empty($show_table_from_date)): ?>				
			<div  id="pdf"><!--Предпросмотр PDF отпр-получатель БЕЗ ФАНОВ-->
				<h3  class="text-center"><?php echo date( 'M Y', strtotime($the_date.'+1 month')) ; echo ' ' .$page;   ?></h3>
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
							<tr>
								<td><b><?php echo $user_from[0]['roles'] . ' / ' . $user_from[0]['user_email'] . ' / ' .$roleUserFrom.  ' <span style="color:'.$color.';">('. $iterration . ')</span>'; ?></b>
								</td>
								<td>
									<b><?php echo $user_to[0]['roles'] . ' / ' . $user_to[0]['user_email'] . ' / ' .$roleUserTo;
									?></b>									
								</td>
							</tr>							
						<?php endif ?>						
					<?php endforeach ?>
				</table>
			</div><!--/Предпросмотр PDF отпр-получатель-->	
		<?php elseif(!empty($show_table_from_date_fun)): ?>
			<div  id="pdf"><!--Предпросмотр PDF отпр-получатель ФАНОВ-->
				<h3  class="text-center"><?php echo date( 'M Y', strtotime($the_date.'+1 month')) ; echo ' ' .$page;   ?></h3>
				<table class="wp-list-table widefat fixed tags ihc-admin-tables">
					<thead>
						<tr>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class="manage-column">
								Receptor
							</th>
						</tr>
					</tfoot>
					<?php foreach ($show_table_from_date_fun as $variable): ?>
						<?php foreach ($variable as $key => $value): ?>
							<?php 
							$rolefun ='';
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
							<tr>
								<td>
									<b><?php echo $value['first_name'] . ' ' . $value['last_name'] . ' / ' .$rolefun;
									?></b>									
								</td>
							</tr>												
						<?php endforeach ?>					
					<?php endforeach ?>
				</table>
			</div><!--/Предпросмотр PDF отпр-получатель-->	
		<?php elseif(!empty($show_all_dates)): ?>	

			<div class="iump-rsp-table"><!--Вывод дат формирования таблиц-->
				<table class="wp-list-table widefat fixed tags ihc-admin-tables">
					<thead>
						<tr>
							<th class="manage-column">
								Fecha
							</th>
							<th class="manage-column">
								Links
							</th>
						</tr>
					</thead>
					<tfoot>
						<tr>
							<th class="manage-column">
								Fecha
							</th>
							<th class="manage-column">
								Links
							</th>
						</tr>
					</tfoot>
					<?php foreach ($show_all_dates as $key => $value): ?>
					<tr>
						<td>
							<b>
							<?php
							$text = $value;
							//echo $value;
							?>	
							<?php echo date( 'M Y', strtotime($this->delete($value, ' /').'+1 month')) ; echo ' ' .stristr($text,'/',false);   ?>							
							</b>
						</td>
						<td>							
						<div style="display: inline-block;float: left;" >
							<form method="post">
								<input type="hidden" name="date_table" value="<?php echo $value;?>">								
								<input type="submit" value="ver" value="<?php echo $value; ?>" class="button button-primary button-large" />
							</form>
						</div>							
						<div style="display: inline-block;float: left;margin-left: 15px" >
							<form method="post">
								<input type="hidden" name="date_table_fun" value="<?php echo $value;?>">		

								<input type="submit" value="ver fan" value="<?php echo $value; ?>" class="button button-primary button-large" />
							</form>
						</div>			
						<div style="display: inline-block;float: left; margin-left: 15px;" >
							<form method="post">
								<input type="hidden" name="delete_tabel" value="<?php echo $this->delete($value, ' /');?>">								
								<input onclick="return confirm('¿Seguro que quieres borrar el listado?')"  type="submit" value="Eliminar" style="background: #d71e24;border-color: #d71e24;" class="button button-primary button-large" />
							</form>
						</div>
						</td>
					</tr>						
					<?php endforeach ?>

				</table>
			</div><!--/Вывод дат формирования таблиц-->	

		<?php else: ?>	

			Sorry, date list is empty	

		<?php endif ?>


		<div class="linkbtn" style="display: inline-block;float: left; margin-top: 25px;" >
		<div class="linkbtnfan" style="display: inline-block;float: left; margin-top: 25px;" >

	</div>


</div>

<div class="clear"></div>

