<?php 
$user_id = get_current_user_id();
$my_public_plugen = new My_Plugin_Public();
$args = $my_public_plugen->get_users_fields($user_id) ;
unset($args['telefono_publico']);
unset($args['publico_mail']);

?>	
<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="UTF-8" />
		<meta
			name="viewport"
			content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0"
		/>
		<meta http-equiv="X-UA-Compatible" content="ie=edge" />
		<title>ExpertosLOPD</title>
		<link rel="stylesheet" href="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/css/select2.min.css" />
		<link rel="stylesheet" href="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/css/main.css" />
		<?php echo '<script type="text/javascript">
	           var ajaxurl = "' . admin_url('admin-ajax.php') . '";
	         </script>'; ?>
	</head>

	<body>
		<main>
			<aside>
			</aside>

			<div class="content content-general">
				<header class="header">
					<ul class="breadcrumb">
						<li><a href="/empresas-y-autonomos/">Datos de la actividad</a></li>
						<li>Datos generales</li>
					</ul>

					<div class="clear-session">Cerrar Sesión</div>

				</header>

				<div class="container">
					<div class="form-header">
						<div class="form-header-left">
							<a href="/empresas-y-autonomos/" class="back-link">Volver</a>
						</div>

						<div class="progress-inline">
							<p class="progress-title">Su progreso:</p>

							<div class="progress-bar-wrap">
								<div class="progress-bar">
									<span class="progress-bar-fill" style="width: 39%;"></span>
									<p class="progress-percentage">39% para completar</p>
								</div>
							</div>
						</div>
					</div>

					<form class="form">
						<h2 class="form-title">Datos generales</h2>
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">
						<label>
							<p>Gerente *</p>

							<input type="text" data-required="true" name="datos_generales_gerente" placeholder="Nombre y Apellidos" value="<?php echo $args['datos_generales_gerente'] ? $args['datos_generales_gerente'] : '';?>" />
						</label>

						<label>
							<p>N.I.F. / N.I.E. Gerente *</p>

							<input
								name="datos_generales_nie_gerente"
								type="text"
								placeholder=""
								data-required="true"
								maxlength="9"
								spaces-and-points="disabled"
								value="<?php echo $args['datos_generales_nie_gerente'] ? $args['datos_generales_nie_gerente'] : '';?>"
							/>
						</label>

						<label>
							<p>Razón Social *</p>

							<input 
								type="text" 
								name="datos_generales_razon_social" 
								placeholder="" data-required="true"
								value="<?php echo $args['datos_generales_razon_social'] ? $args['datos_generales_razon_social'] : '';?>" 
								/>
						</label>

						<label>
							<p>C.I.F. / N.I.F. *</p>

							<input
								name="datos_generales_nif"
								type="text"
								placeholder=""
								data-required="true"
								maxlength="9"
								spaces-and-points="disabled"
								value="<?php echo $args['datos_generales_nif'] ? $args['datos_generales_nif'] : '';?>" 
							/>
						</label>

						<label>
							<p>Nombre Comercial</p>

							<input 
								name="datos_generales_nombre_comercial"
								type="text" 
								placeholder="" 
								value="<?php echo $args['datos_generales_nombre_comercial'] ? $args['datos_generales_nombre_comercial'] : '';?>"
							/>
						</label>

						<label>
							<p>Sector de Actividad *</p>
							<?php $datos_generales_sector_de_activaded =  $args['datos_generales_sector_de_activaded'] ? $args['datos_generales_sector_de_activaded'] : '';?>
							<div class="select-wrap">
								<select name="datos_generales_sector_de_activaded" required>
									<?php if (!$datos_generales_sector_de_activaded): ?>
										<option selected disabled></option>
									<?php endif ?>									
									<option <?php if($datos_generales_sector_de_activaded == "example 1"){echo 'selected';} ?> value="example 1">example 1</option>
									<option <?php if($datos_generales_sector_de_activaded == "example 2"){echo 'selected';} ?> value="example 2">example 2</option>
									<option <?php if($datos_generales_sector_de_activaded == "example 3"){echo 'selected';} ?> value="example 3">example 3</option>
								</select>
							</div>
						</label>

						<label>
							<p>Datos Reg.Mercantil *</p>

							<input
								name="datos_generales_reg_mercantil"
								type="text"
								data-required="true"
								placeholder="Tomo, Libro, Folio, Sección, Hoja"
								value="<?php echo $args['datos_generales_reg_mercantil'] ? $args['datos_generales_reg_mercantil'] : '';?>"
							/>
						</label>

						<label>
							<p>Calle *</p>

							<input 
								name="datos_generales_calle" 
								type="text" 
								data-required="true" 
								placeholder="" 
								value="<?php echo $args['datos_generales_calle'] ? $args['datos_generales_calle'] : '';?>"
							/>
						</label>

						<label>
							<p>Código postal *</p>

							<input 
								name="datos_generales_codigo_postal" 
								type="text" 
								data-required="true" 
								placeholder="" 
								maxlength="5" 
								value="<?php echo $args['datos_generales_codigo_postal'] ? $args['datos_generales_codigo_postal'] : '';?>"
							/>
						</label>

						<label>
							<p>Localidad *</p>

							<input 
								type="text" 
								name="datos_generales_localidad" 
								data-required="true" 
								placeholder="" 
								value="<?php echo $args['datos_generales_localidad'] ? $args['datos_generales_localidad'] : '';?>"
							/>
						</label>

						<label>
							<p>Provincia *</p>
							<?php $datos_generales_provincia =  $args['datos_generales_provincia'] ? $args['datos_generales_provincia'] : '';?>
							<div class="select-wrap">
								<select required name="datos_generales_provincia">
									<?php if (!$datos_generales_provincia): ?>
										<option selected disabled></option>
									<?php endif ?>
									<option <?php if($datos_generales_provincia == "example 1"){echo 'selected';} ?> value="example 1">example 1</option>
									<option <?php if($datos_generales_provincia == "example 2"){echo 'selected';} ?> value="example 2">example 2</option>
									<option <?php if($datos_generales_provincia == "example 3"){echo 'selected';} ?> value="example 3">example 3</option>
								</select>
							</div>
						</label>



						<div class="l-cont">
							<label>
								<p>Teléfono (contacto con nosotros)* <span class="popup-icon">?</span></p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de clientes/empleados de TUS cliente
								</span>

								<input  
									name="datos_generales_telefono_con_nostros" 
									type="tel" 
									data-required="true"
									placeholder="" 
									maxlength="9" 
									value="<?php echo $args['datos_generales_telefono_con_nostros'] ? $args['datos_generales_telefono_con_nostros'] : '';?>"
								/>
							</label>

							<div class="options">
								<?php $publico = $args['datos_generales_telefono_con_nostros_publico'] ? $args['datos_generales_telefono_con_nostros_publico'] : '';?>
								<label>
									<p>Teléfono (público)</p>
								</label>
	
								<label>
									<div class="input-radio-wrap">
										<input 
											type="radio" 
											name="telefono_publico" 
											<?php if(!$publico){echo 'checked';} ?>
											
										/>
										<p>Mismo que “Teléfono (contacto con nosotros)”</p>
									</div>
								</label>

								<label>
									<div class="input-radio-wrap">
										<input 
											name="telefono_publico" 
											type="radio" 
											name="telephone" 
											class="other-option" 
											<?php if($publico){echo 'checked';} ?>
										/>
										<p>Otro</p>
									</div>
								</label>
							</div>

							<label>
								<input 
								name="datos_generales_telefono_con_nostros_publico"
								type="tel"  
								placeholder="" 
								maxlength="9" 
								value="<?php echo $publico; ?>" 
								/>
							</label>

						</div>

						<label>
							<p>Email (contacto con nosotros)* <span class="popup-icon">?</span></p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados de TUS cliente
							</span>

							<input 
								name="datos_generales_email_con_nostros" 
								type="email" 
								data-required="true" 
								placeholder="" 
								value="<?php echo $args['datos_generales_email_con_nostros'] ? $args['datos_generales_email_con_nostros'] : '';?>"
							/>
						</label>

						<div class="options">
							<?php $publico_mail = $args['datos_generales_email_con_nostros_publico'] ? $args['datos_generales_email_con_nostros_publico'] : '';?>
							<label>
								<p>Email (público)</p>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										type="radio" 
										name="publico_mail" 
										<?php if(!$publico_mail){echo 'checked';} ?>
									/>
									<p>Mismo que “Email (contacto con nosotros)”</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										type="radio"  
										name="publico_mail" 
										class="other-option" 
										<?php if($publico_mail){echo 'checked';} ?>
									/>
									<p>Otro</p>
								</div>
							</label>
						</div>

						<label>
							<input   
								name="datos_generales_email_con_nostros_publico" 
								type="text"
								placeholder="" 
								value="<?php echo $args['datos_generales_email_con_nostros_publico'] ? $args['datos_generales_email_con_nostros_publico'] : '';?>"
							/>
						</label>

						<div class="buttons">
							<a href="/empresas-y-autonomos/" class="button-cancel">Cancelar</a>
							<button class="button-post">Enviar</button>
						</div>
					</form>
				</div>
			</div>
		</main>

		<button class="arrow-top">
			<span class="arrow-top-img">
				<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/docs-download.svg" alt="arrow" />
			</span>
		</button>

		<div class="modal">
			<div class="modal-container">
				<div class="modal-close">&times;</div>

				<div class="modal-remove-item">
					<h3>¿Estas seguro que quieres borrarlo?</h3>

					<div class="modal-buttons">
						<button class="modal-ok">Sí</button>
						<button class="modal-cancel">No</button>
					</div>
				</div>

				<div class="modal-back">
					<h3>Si no guardas ahora perderás los datos que hayas introducido</h3>

					<div class="modal-buttons">
						<button class="modal-ok">Volver sin guardar</button>
						<button class="modal-cancel">Guardar ahora</button>
					</div>
				</div>
			</div>
		</div>

		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/jquery.min.js"></script>
		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/select2.min.js"></script>
		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/main.js"></script>
	</body>
</html>
