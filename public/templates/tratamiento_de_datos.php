<?php 
$user_id = get_current_user_id();
$my_public_plugen = new My_Plugin_Public();
$args = $my_public_plugen->get_users_fields($user_id) ;

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
			<aside></aside>

			<div class="content">
				<header class="header">
					<ul class="breadcrumb">
						<li>
							<a href="/empresas-y-autonomos/">Datos de la actividad</a>
						</li>
						<li>Tratamiento de datos</li>
					</ul>

					<div class="clear-session">Cerrar Sesión</div>
				</header>

				<div class="container">
					<div class="form-header">
						<div class="form-header-left">
							<a href="/empresas-y-autonomos/" class="back-link">Volver </a>
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
						<h2 class="form-title">Tratamiento de datos</h2>
						<input type="hidden" name="user_id" value="<?php echo $user_id; ?>">

						<div class="l-cont">
							<label>
								<p>
									¿Qué datos tratas de Clientes y Proveedores?
									<span class="popup-icon">?</span>
								</p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de
									clientes/empleados de TUS cliente
								</span>
							</label>

							<span class="checkbox-block">
								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_nombre_apellidos =  $args['tratamiento_de_datos_nombre_apellidos'] ? $args['tratamiento_de_datos_nombre_apellidos'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_nombre_apellidos" val="off">
									<input 
										name="tratamiento_de_datos_nombre_apellidos"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_nombre_apellidos): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Nombre y Apellidos</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_firma =  $args['tratamiento_de_datos_firma'] ? $args['tratamiento_de_datos_firma'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_firma" val="off">
									<input 									
										name="tratamiento_de_datos_firma"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_firma): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Firma</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_direction =  $args['tratamiento_de_datos_direction'] ? $args['tratamiento_de_datos_direction'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_direction" val="off">
									<input 
										name="tratamiento_de_datos_direction"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_direction): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Dirección</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_imagen_voz =  $args['tratamiento_de_datos_imagen_voz'] ? $args['tratamiento_de_datos_imagen_voz'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_imagen_voz" val="off">
									<input 
										name="tratamiento_de_datos_imagen_voz"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_imagen_voz): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Imagen/voz</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_telefono =  $args['tratamiento_de_datos_telefono'] ? $args['tratamiento_de_datos_telefono'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_telefono" val="off">
									<input 
										name="tratamiento_de_datos_telefono"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_telefono): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Teléfono/s</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_cuenta_bancaria =  $args['tratamiento_de_datos_cuenta_bancaria'] ? $args['tratamiento_de_datos_cuenta_bancaria'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_cuenta_bancaria" val="off">
									<input 
										name="tratamiento_de_datos_cuenta_bancaria"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_cuenta_bancaria): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Cuenta bancaria</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_email =  $args['tratamiento_de_datos_email'] ? $args['tratamiento_de_datos_email'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_email" val="off">
									<input 
										name="tratamiento_de_datos_email"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_email): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Email</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_salud =  $args['tratamiento_de_datos_salud'] ? $args['tratamiento_de_datos_salud'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_salud" val="off">
									<input 
										name="tratamiento_de_datos_salud"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_salud): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">Salud</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_dni =  $args['tratamiento_de_datos_dni'] ? $args['tratamiento_de_datos_dni'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_dni" val="off">
									<input 
										name="tratamiento_de_datos_dni"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_dni): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text">DNI</span>
								</label>

								<label class="checkbox-wrap">
									<?php $tratamiento_de_datos_biometricos =  $args['tratamiento_de_datos_biometricos'] ? $args['tratamiento_de_datos_biometricos'] : '';?>
									<input type="hidden" name="tratamiento_de_datos_biometricos" val="off">
									<input 
										name="tratamiento_de_datos_biometricos"
										type="checkbox" 
										class="checkbox" 
										<?php if ($tratamiento_de_datos_biometricos): ?>
											checked
										<?php endif ?>
									/>
									<span class="checkbox-text"
										>Biométricos <br />
										(por ejemplo, huella)</span
									>
								</label>
							</span>

							<label>
								<p>Otros (especificar)</p>
								<?php $tratamiento_de_datos_clientes_proveedor_esespecificar =  $args['tratamiento_de_datos_clientes_proveedor_esespecificar'] ? $args['tratamiento_de_datos_clientes_proveedor_esespecificar'] : '';?>
								<textarea name="tratamiento_de_datos_clientes_proveedor_esespecificar"><?php if ($tratamiento_de_datos_clientes_proveedor_esespecificar): ?><?php echo trim($tratamiento_de_datos_clientes_proveedor_esespecificar); ?><?php endif ?></textarea>
							</label>
						</div>

						<label>
							<p>¿Tratas datos de menores? <span class="popup-icon">?</span></p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>
						</label>


						<?php $tratamiento_de_datos_years =  $args['tratamiento_de_datos_years'] ? $args['tratamiento_de_datos_years'] : '';?>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_years" 
									type="radio" 
									value="cualquier_edad" 
									<?php if ($tratamiento_de_datos_years == 'cualquier_edad'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Sí, de menores de cualquier edad</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_years" 
									type="radio" 
									value="entre_14_y_18" 
									<?php if ($tratamiento_de_datos_years == 'entre_14_y_18'): ?>
										checked
									<?php endif ?>
								/>
								<p>Sí, de menores entre 14 y 18 años</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_years" 
									type="radio" 
									value="no" 
									<?php if ($tratamiento_de_datos_years == 'no'): ?>
										checked
									<?php endif ?>
								/>
								<p>No</p>
							</div>
						</label>

						<label class="label-checkbox-switch">
							<p>
								¿Tratas datos de personas relacionadas con TUS clientes?
								<span class="popup-icon">?</span>
							</p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>

							<?php $tratamiento_de_datos_tus_cliente =  $args['tratamiento_de_datos_tus_cliente'] ? $args['tratamiento_de_datos_tus_cliente'] : '';?>
							<input type="hidden" name="tratamiento_de_datos_tus_cliente" value="off">
							<input
								name="tratamiento_de_datos_tus_cliente"
								type="checkbox"
								class="checkbox-switch close-inputs"
								data-block="1"
								value="on"
								<?php if ($tratamiento_de_datos_tus_cliente == 'on'): ?>
									checked
								<?php endif ?>
							/>
						</label>

						<span class="checkbox-block">
							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_clientes =  $args['tratamiento_de_datos_clientes'] ? $args['tratamiento_de_datos_clientes'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_clientes" val="off">
								<input 
									name="tratamiento_de_datos_clientes"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_tus_cliente == 'on' && $tratamiento_de_datos_clientes): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">Clientes</span>
							</label>

							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_empleados =  $args['tratamiento_de_datos_empleados'] ? $args['tratamiento_de_datos_empleados'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_empleados" val="off">
								<input 
									name="tratamiento_de_datos_empleados"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_tus_cliente == 'on' && $tratamiento_de_datos_empleados): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">Empleados</span>
							</label>

							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_usuarios_web =  $args['tratamiento_de_datos_usuarios_web'] ? $args['tratamiento_de_datos_usuarios_web'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_usuarios_web" val="off">
								<input 
									name="tratamiento_de_datos_usuarios_web"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_tus_cliente == 'on' && $tratamiento_de_datos_usuarios_web): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">Usuarios web</span>
							</label>

							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_tus_cliente_otros =  $args['tratamiento_de_datos_tus_cliente_otros'] ? $args['tratamiento_de_datos_tus_cliente_otros'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_tus_cliente_otros" val="off">
								<input 
									name="tratamiento_de_datos_tus_cliente_otros"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_tus_cliente == 'on' && $tratamiento_de_datos_tus_cliente_otros): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">Otros</span>
							</label>

						</span>

						<label>
							<p>
								¿Tratas estos datos de tus empleados?
								<span class="popup-icon">?</span>
							</p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>
						</label>

						<span class="checkbox-block">
							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_geolocalizations =  $args['tratamiento_de_datos_geolocalizations'] ? $args['tratamiento_de_datos_geolocalizations'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_geolocalizations" val="off">
								<input 
									name="tratamiento_de_datos_geolocalizations"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_geolocalizations): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">Geolocalización</span>
							</label>

							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_publ_de_images =  $args['tratamiento_de_datos_publ_de_images'] ? $args['tratamiento_de_datos_publ_de_images'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_publ_de_images" val="off">
								<input 
									name="tratamiento_de_datos_publ_de_images"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_publ_de_images): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text"
									>Publicación de imágenes  (redes sociales, web…)</span
								>
							</label>

							<label class="checkbox-wrap checkbox-wrap-long">
								<?php $tratamiento_de_datos_biometricos =  $args['tratamiento_de_datos_biometricos'] ? $args['tratamiento_de_datos_biometricos'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_biometricos" val="off">
								<input 
									name="tratamiento_de_datos_biometricos"
									type="checkbox" 
									class="checkbox" 
									<?php if ($tratamiento_de_datos_biometricos): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text"
									>Datos biométricos para accesos y presencia (huella dactilar,
									reconocimiento facial…)</span
								>
							</label>
						</span>

						<label>
							<p>Tipo de Tratamiento de Datos <span class="popup-icon">?</span></p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>
						</label>


						<?php $tratamiento_de_datos_tipo_tratamiento =  $args['tratamiento_de_datos_tipo_tratamiento'] ? $args['tratamiento_de_datos_tipo_tratamiento'] : '';?>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_tipo_tratamiento" 
									type="radio" 
									value="automatizado_operator" 
									<?php if ($tratamiento_de_datos_tipo_tratamiento == 'automatizado_operator'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Automatizado (ordenador)</p>
							</div>
						</label>
						
						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_tipo_tratamiento" 
									type="radio" 
									value="manual_papel" 
									<?php if ($tratamiento_de_datos_tipo_tratamiento == 'manual_papel'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Manual (papel)</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_tipo_tratamiento" 
									type="radio" 
									value="mixito" 
									<?php if ($tratamiento_de_datos_tipo_tratamiento == 'mixito'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Mixto (ordenador+papel)</p>
							</div>
						</label>

						<div class="l-cont">
							<div class="options">
								<label>
									<p>¿De dónde se obtienen? <span class="popup-icon">?</span></p>

									<span class="popup">
										Si eres una gestoría, puede que trates datos de
										clientes/empleados de TUS cliente
									</span>
								</label>

								<?php $tratamiento_de_datos_donde_se_obtienen =  $args['tratamiento_de_datos_donde_se_obtienen'] ? $args['tratamiento_de_datos_donde_se_obtienen'] : '';?>
								<label>
									<div class="input-radio-wrap">
										<input 
											name="tratamiento_de_datos_donde_se_obtienen" 
											type="radio" 
											value="misma_persona" 
											<?php if ($tratamiento_de_datos_donde_se_obtienen == 'misma_persona'): ?>
												checked
											<?php endif ?>									
										/>
										<p>De la misma persona o representante legal</p>
									</div>
								</label>

								<label>
									<div class="input-radio-wrap">
										<input 
											name="tratamiento_de_datos_donde_se_obtienen" 
											type="radio" 
											value="otros_persona" 
											 class="other-option"
											<?php if ($tratamiento_de_datos_donde_se_obtienen == 'otros_persona'): ?>
												checked
											<?php endif ?>									
										/>
										<p>Otros</p>
									</div>
								</label>
							</div>

							<label>
								<p>Especificar</p>


								<?php $tratamiento_de_datos_donde_se_obtienen_especificar =  $args['tratamiento_de_datos_donde_se_obtienen_especificar'] ? $args['tratamiento_de_datos_donde_se_obtienen_especificar'] : '';?>
								<textarea name="tratamiento_de_datos_donde_se_obtienen_especificar"><?php if ($tratamiento_de_datos_donde_se_obtienen == 'otros_persona' && $tratamiento_de_datos_donde_se_obtienen_especificar): ?><?php echo trim($tratamiento_de_datos_donde_se_obtienen_especificar); ?><?php endif ?></textarea>
							</label>
						</div>

						<div class="l-cont">
							<label class="label-checkbox-switch">
								<p>
									¿Se ceden los datos a terceros?
									<span class="popup-icon">?</span>
								</p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de
									clientes/empleados de TUS cliente
								</span>



							<?php $tratamiento_de_datos_a_terceros =  $args['tratamiento_de_datos_a_terceros'] ? $args['tratamiento_de_datos_a_terceros'] : '';?>
							<input type="hidden" name="tratamiento_de_datos_a_terceros" value="off">
							<input
								name="tratamiento_de_datos_a_terceros"
								type="checkbox"
								class="checkbox-switch close-inputs"
								data-block="1"
								value="on"
								<?php if ($tratamiento_de_datos_a_terceros == 'on'): ?>
									checked
								<?php endif ?>
							/>

							</label>

							<label>
								<p>Indicar a quiénes</p>

								<?php $tratamiento_de_datos_a_terceros_indicar_quienes =  $args['tratamiento_de_datos_a_terceros_indicar_quienes'] ? $args['tratamiento_de_datos_a_terceros_indicar_quienes'] : '';?>
								<textarea name="tratamiento_de_datos_a_terceros_indicar_quienes"><?php if ($tratamiento_de_datos_a_terceros == 'on' && $tratamiento_de_datos_a_terceros_indicar_quienes): ?><?php echo trim($tratamiento_de_datos_a_terceros_indicar_quienes); ?><?php endif ?></textarea>

							</label>
						</div>

						<div class="l-cont">
							<label class="label-checkbox-switch">
								<p>
									¿Envías boletines/newsletters?
									<span class="popup-icon">?</span>
								</p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de
									clientes/empleados de TUS cliente
								</span>


								<?php $tratamiento_de_datos_boletines_newsletters =  $args['tratamiento_de_datos_boletines_newsletters'] ? $args['tratamiento_de_datos_boletines_newsletters'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_boletines_newsletters" value="off">
								<input
									name="tratamiento_de_datos_boletines_newsletters"
									type="checkbox"
									class="checkbox-switch close-inputs"
									data-block="4"
									value="on"
									<?php if ($tratamiento_de_datos_boletines_newsletters == 'on'): ?>
										checked
									<?php endif ?>
								/>
							</label>

							<?php $tratamiento_de_datos_newsletters =  $args['tratamiento_de_datos_newsletters'] ? $args['tratamiento_de_datos_newsletters'] : '';?>
							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_newsletters" 
										type="radio" 
										value="clientes" 
										<?php if ($tratamiento_de_datos_boletines_newsletters == 'on' && $tratamiento_de_datos_newsletters == 'clientes'): ?>
											checked
										<?php endif ?>									
									/>
									<p>Clientes</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_newsletters" 
										type="radio" 
										value="noclientes" 
										<?php if ($tratamiento_de_datos_boletines_newsletters == 'on' &&  $tratamiento_de_datos_newsletters == 'noclientes'): ?>
											checked
										<?php endif ?>									
									/>
									<p>No clientes</p>
								</div>
							</label>

							
							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_newsletters" 
										type="radio" 
										value="ambos" 
										<?php if ($tratamiento_de_datos_boletines_newsletters == 'on' && $tratamiento_de_datos_newsletters == 'ambos'): ?>
											checked
										<?php endif ?>									
									/>
									<p>Ambos</p>
								</div>
							</label>

							<label>
								<p>¿A través de una empresa externa? ¿Cuál?</p>
								<?php $tratamiento_de_datos_empresa_no_listos =  $args['tratamiento_de_datos_empresa_no_listos'] ? $args['tratamiento_de_datos_empresa_no_listos'] : '';?>
								<?php $tratamiento_de_datos_empresa_externa =  $args['tratamiento_de_datos_empresa_externa'] ? $args['tratamiento_de_datos_empresa_externa'] : '';?>
							<div class="select-wrap">
								<select name="tratamiento_de_datos_empresa_externa" required>
									<?php if (!$tratamiento_de_datos_empresa_externa || $tratamiento_de_datos_empresa_no_listos): ?>
										<option selected disabled></option>
									<?php endif ?>									
									<option <?php if($tratamiento_de_datos_empresa_externa == "example 1"){echo 'selected';} ?> value="example 1">example 1</option>
									<option <?php if($tratamiento_de_datos_empresa_externa == "example 2"){echo 'selected';} ?> value="example 2">example 2</option>
									<option <?php if($tratamiento_de_datos_empresa_externa == "example 3"){echo 'selected';} ?> value="example 3">example 3</option>
								</select>
							</div>
							</label>



							<label class="checkbox-wrap">

								
								<input type="hidden" name="tratamiento_de_datos_empresa_no_listos" val="off">
								<input 
									name="tratamiento_de_datos_empresa_no_listos"
									type="checkbox" 
									class="checkbox check-other"
									<?php if ($tratamiento_de_datos_empresa_no_listos): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">No está en la lista</span>
							</label>

							<label>
								<p>Especificar</p>
								<?php $tratamiento_de_datos_empresa_listos_especificar =  $args['tratamiento_de_datos_empresa_listos_especificar'] ? $args['tratamiento_de_datos_empresa_listos_especificar'] : '';?>
								<input 
									name="tratamiento_de_datos_empresa_listos_especificar"
									type="text" 
									placeholder="" 
									value="<?php echo $tratamiento_de_datos_empresa_listos_especificar?>" 
								/>
							</label>
						</div>

						<div class="options">
							<label>
								<p>¿Cómo obtienes el consentimiento?</p>
							</label>

							<?php $tratamiento_de_datos_consentimiento =  $args['tratamiento_de_datos_consentimiento'] ? $args['tratamiento_de_datos_consentimiento'] : '';?>

							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_consentimiento"
										type="radio"  
										value="traves_de_mi_web" 
										<?php if ($tratamiento_de_datos_consentimiento == 'traves_de_mi_web'): ?>
											checked
										<?php endif ?>	
									/>
									<p>A través de mi web</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_consentimiento"
										class="other-option"
										type="radio"  
										value="manera_presencial" 
										<?php if ($tratamiento_de_datos_consentimiento == 'manera_presencial'): ?>
											checked
										<?php endif ?>	
									/>
									<p>De manera presencial (por ejemplo, un documento)</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										name="tratamiento_de_datos_consentimiento"
										class="other-option"
										type="radio"  
										value="no_los_obtengo" 
										<?php if ($tratamiento_de_datos_consentimiento == 'no_los_obtengo'): ?>
											checked
										<?php endif ?>	
									/>
									<p>No los obtengo</p>
								</div>
							</label>
						</div>

						<div class="l-cont">
							<label class="label-checkbox-switch">
								<p>¿Videovigilancia? <span class="popup-icon">?</span></p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de
									clientes/empleados de TUS cliente
								</span>

								<?php $tratamiento_de_datos_videovigilancia =  $args['tratamiento_de_datos_videovigilancia'] ? $args['tratamiento_de_datos_videovigilancia'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_videovigilancia" value="off">
								<input
									name="tratamiento_de_datos_videovigilancia"
									type="checkbox"
									class="checkbox-switch close-inputs"
									data-block="3"
									value="on"
									<?php if ($tratamiento_de_datos_videovigilancia == 'on'): ?>
									checked
								<?php endif ?>
								/>								
							</label>

							<label>
								<p>Empresa que la gestiona, si procede</p>


								<?php $tratamiento_de_datos_video_empresa_la_gestiona =  $args['tratamiento_de_datos_video_empresa_la_gestiona'] ? $args['tratamiento_de_datos_video_empresa_la_gestiona'] : '';?>
								<div class="select-wrap">
									<select name="tratamiento_de_datos_video_empresa_la_gestiona" required>
										<?php if (!$tratamiento_de_datos_video_empresa_la_gestiona): ?>
											<option selected disabled></option>
										<?php endif ?>									
										<option <?php if($tratamiento_de_datos_video_empresa_la_gestiona == "example 1"){echo 'selected';} ?> value="example 1">example 1</option>
										<option <?php if($tratamiento_de_datos_video_empresa_la_gestiona == "example 2"){echo 'selected';} ?> value="example 2">example 2</option>
										<option <?php if($tratamiento_de_datos_video_empresa_la_gestiona == "example 3"){echo 'selected';} ?> value="example 3">example 3</option>
									</select>
								</div>


							</label>

							<label class="checkbox-wrap">
								<?php $tratamiento_de_datos_video_no_lista =  $args['tratamiento_de_datos_video_no_lista'] ? $args['tratamiento_de_datos_video_no_lista'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_video_no_lista" val="off">
								<input 
									name="tratamiento_de_datos_video_no_lista"
									type="checkbox" 
									class="checkbox check-other" 
									<?php if ($tratamiento_de_datos_video_no_lista): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">No está en la lista</span>
							</label>

							<label>
								<p>Especificar</p>
								<?php $tratamiento_de_datos_video_listos_especificar =  $args['tratamiento_de_datos_video_listos_especificar'] ? $args['tratamiento_de_datos_video_listos_especificar'] : '';?>
								<input 
									name="tratamiento_de_datos_video_listos_especificar"
									type="text" 
									placeholder="" 
									value="<?php echo $tratamiento_de_datos_video_listos_especificar?>" 
								/>
							</label>
						</div>

						<div class="l-cont">
							<label class="label-checkbox-switch">
								<p>
									¿Realizas comunicaciones a través de alguna aplicación de
									mensajería? <span class="popup-icon">?</span>
								</p>

								<span class="popup">
									Si eres una gestoría, puede que trates datos de
									clientes/empleados de TUS cliente
								</span>
								<?php $tratamiento_de_datos_aplicacion_mensajeria =  $args['tratamiento_de_datos_aplicacion_mensajeria'] ? $args['tratamiento_de_datos_aplicacion_mensajeria'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_aplicacion_mensajeria" value="off">
								<input
									name="tratamiento_de_datos_aplicacion_mensajeria"
									type="checkbox"
									class="checkbox-switch close-inputs"
									data-block="3"
									value="on"
									<?php if ($tratamiento_de_datos_aplicacion_mensajeria == 'on'): ?>
									checked
								<?php endif ?>
								/>	
							</label>

							<label>
								<p>A través de qué medio</p>


								<?php $tratamiento_de_datos_aplicacion_mensajeria_medio =  $args['tratamiento_de_datos_aplicacion_mensajeria_medio'] ? $args['tratamiento_de_datos_aplicacion_mensajeria_medio'] : '';?>
								<div class="select-wrap">
									<select name="tratamiento_de_datos_aplicacion_mensajeria_medio" required>
										<?php if (!$tratamiento_de_datos_aplicacion_mensajeria_medio): ?>
											<option selected disabled></option>
										<?php endif ?>									
										<option <?php if($tratamiento_de_datos_aplicacion_mensajeria_medio == "example 1"){echo 'selected';} ?> value="example 1">example 1</option>
										<option <?php if($tratamiento_de_datos_aplicacion_mensajeria_medio == "example 2"){echo 'selected';} ?> value="example 2">example 2</option>
										<option <?php if($tratamiento_de_datos_aplicacion_mensajeria_medio == "example 3"){echo 'selected';} ?> value="example 3">example 3</option>
									</select>
								</div>

							</label>

							<label class="checkbox-wrap">

								<?php $tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista =  $args['tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista'] ? $args['tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista'] : '';?>
								<input type="hidden" name="tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista" val="off">
								<input 
									name="tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista"
									type="checkbox" 
									class="checkbox check-other" 
									<?php if ($tratamiento_de_datos_aplicacion_mensajeria_medio_no_lista): ?>
										checked
									<?php endif ?>
								/>
								<span class="checkbox-text">No está en la lista</span>
							</label>

							<label>
								<p>Especificar</p>

								<?php $tratamiento_de_datos_aplicacion_mensajeria_especificar =  $args['tratamiento_de_datos_aplicacion_mensajeria_especificar'] ? $args['tratamiento_de_datos_aplicacion_mensajeria_especificar'] : '';?>
								<input 
									name="tratamiento_de_datos_aplicacion_mensajeria_especificar"
									type="text" 
									placeholder="" 
									value="<?php echo $tratamiento_de_datos_aplicacion_mensajeria_especificar?>" 
								/>
							</label>
						</div>

						<label class="label-checkbox-switch">
							<p>
								¿Almacenas Currículums físicos?
								<span class="popup-icon">?</span>
							</p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>

							<?php $tratamiento_de_datos_curriculums_fisicos =  $args['tratamiento_de_datos_curriculums_fisicos'] ? $args['tratamiento_de_datos_curriculums_fisicos'] : '';?>
							<input type="hidden" name="tratamiento_de_datos_curriculums_fisicos" value="off">
							<input
								name="tratamiento_de_datos_curriculums_fisicos"
								type="checkbox"
								class="checkbox-switch"
								value="on"
								<?php if ($tratamiento_de_datos_curriculums_fisicos == 'on'): ?>
								checked
							<?php endif ?>
							/>	
						</label>

						<label class="label-checkbox-switch">
							<p>¿Haces grabación de llamadas? <span class="popup-icon">?</span></p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>

							<?php $tratamiento_de_datos_grabacion_llamadas =  $args['tratamiento_de_datos_grabacion_llamadas'] ? $args['tratamiento_de_datos_grabacion_llamadas'] : '';?>
							<input type="hidden" name="tratamiento_de_datos_grabacion_llamadas" value="off">
							<input
								name="tratamiento_de_datos_grabacion_llamadas"
								type="checkbox"
								class="checkbox-switch"
								value="on"
								<?php if ($tratamiento_de_datos_grabacion_llamadas == 'on'): ?>
								checked
							<?php endif ?>
							/>	
						</label>

						<label>
							<p>
								¿Publicas imágenes? <span class="popup-icon">?</span> <br />
								(Redes sociales, página web…)
							</p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>
						</label>

						<?php $tratamiento_de_datos_publicas_imagenes =  $args['tratamiento_de_datos_publicas_imagenes'] ? $args['tratamiento_de_datos_publicas_imagenes'] : '';?>
						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_publicas_imagenes" 
									type="radio" 
									value="no_personas" 
									<?php if ($tratamiento_de_datos_publicas_imagenes == 'no_personas'): ?>
										checked
									<?php endif ?>									
								/>
								<p>No / Sí, pero no aparecen personas</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_publicas_imagenes" 
									type="radio" 
									value="solo_adultos" 
									<?php if ($tratamiento_de_datos_publicas_imagenes == 'solo_adultos'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Sí, pero solo de adultos</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_publicas_imagenes" 
									type="radio" 
									value="si_adultos_menores" 
									<?php if ($tratamiento_de_datos_publicas_imagenes == 'si_adultos_menores'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Sí, de adultos y/o menores</p>
							</div>
						</label>

						<label class="label-checkbox-switch">
							<p>
								¿Tomas decisiones automatizadas?
								<span class="popup-icon">?</span>
							</p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>


							<?php $tratamiento_de_datos_decisiones_automatizadas =  $args['tratamiento_de_datos_decisiones_automatizadas'] ? $args['tratamiento_de_datos_decisiones_automatizadas'] : '';?>
							<input type="hidden" name="tratamiento_de_datos_decisiones_automatizadas" value="off">
							<input
								name="tratamiento_de_datos_decisiones_automatizadas"
								type="checkbox"
								class="checkbox-switch"
								value="on"
								<?php if ($tratamiento_de_datos_decisiones_automatizadas == 'on'): ?>
								checked
							<?php endif ?>
							/>	
						</label>

						<label>
							<p>Perfil de tus clientes <span class="popup-icon">?</span></p>

							<span class="popup">
								Si eres una gestoría, puede que trates datos de clientes/empleados
								de TUS cliente
							</span>
						</label>

						<?php $tratamiento_de_datos_clients_profile =  $args['tratamiento_de_datos_clients_profile'] ? $args['tratamiento_de_datos_clients_profile'] : '';?>
						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_clients_profile" 
									type="radio" 
									value="solo_particulares" 
									<?php if ($tratamiento_de_datos_clients_profile == 'solo_particulares'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Solo particulares</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_clients_profile" 
									type="radio" 
									value="empresas_profesionales" 
									<?php if ($tratamiento_de_datos_clients_profile == 'empresas_profesionales'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Solo empresas y profesionales</p>
							</div>
						</label>

						<label>
							<div class="input-radio-wrap">
								<input 
									name="tratamiento_de_datos_clients_profile" 
									type="radio" 
									value="ambos" 
									<?php if ($tratamiento_de_datos_clients_profile == 'ambos'): ?>
										checked
									<?php endif ?>									
								/>
								<p>Ambos</p>
							</div>
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
