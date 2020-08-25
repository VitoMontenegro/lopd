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
						<li>Emresas y autónomos externos</li>
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



					<div class="page-radio-wrap page-radio-wrap-externos">
						<label>
							<p>¿Comunicas datos de tus clientes a terceros?</p>
						</label>
						<?php $autonomos_externos_have_employees =  $args['autonomos_externos_have_employees'] ? $args['autonomos_externos_have_employees'] : '';?>
						<div class="page-radio-wrap-body">
							<label>
								<div class="input-radio-wrap input-radio-wrap-yes">
									<input 
										name="autonomos_externos_have_employees" 
										type="radio"    
										value="si" 
										<?php if ($autonomos_externos_have_employees == 'si'): ?>
											checked
										<?php endif ?>	
									/>
									<p>Sí</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input 
										name="autonomos_externos_have_employees" 
										type="radio"   
										value="no" 
										<?php if ($autonomos_externos_have_employees == 'no'): ?>
											checked
										<?php endif ?>	
									/>
									<p>No</p>
								</div>
							</label>
						</div>
					</div>

					<div class="forms-container">
						<div class="buttons-panel">
							<div class="buttons-panel-left">
								<button class="button-upload">Subir</button>
								<button class="button-download">Descargar</button>
							</div>
						</div>

						<div class="form-tab form-tab-add">
							<div class="form-tab-header">
								<p class="form-tab-header-name">
									<span class="count-number">1</span><span>.</span>
									<span class="editable-name" data-base-name="Empresa"
										>Empresa</span
									>
								</p>

								<button class="button-add">Añadir</button>

								<div class="form-tab-icons">
									<span class="form-tab-edit"></span>

									<span class="form-tab-remove">
										<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/icon-remove.svg" alt="remove" />
									</span>
								</div>
							</div>

							<form class="form" id="autonomos_externos">
								<label>
									<p>Razón social o nombre completo *</p>

									<input
										name="autonomos_externos_nombre_completo"
										type="text"
										placeholder=""
										data-required="true"
										class="input-edit-name"
										value="<?php echo $args['autonomos_externos_nombre_completo'] ? $args['autonomos_externos_nombre_completo'] : '';?>"
									/>
								</label>

								<label>
									<p>C.I.F./N.I.F.</p>

									<input
										name="autonomos_externos_nif"
										type="text"
										placeholder=""
										maxlength="9"
										spaces-and-points="disabled"
										value="<?php echo $args['autonomos_externos_nif'] ? $args['autonomos_externos_nif'] : '';?>"
									/>
								</label>

								<label>
									<p>Dirección completa *</p>

									<input 
										name="autonomos_externos_direction_completa"
										type="text" placeholder="" 
										data-required="true" 
										value="<?php echo $args['autonomos_externos_direction_completa'] ? $args['autonomos_externos_direction_completa'] : '';?>"
									/>
								</label>

								<label>
									<p>Teléfono</p>

									<input 
										name="autonomos_externos_direction_telefono"
										type="text" placeholder="" 
										maxlength="9" 
										value="<?php echo $args['autonomos_externos_direction_telefono'] ? $args['autonomos_externos_direction_telefono'] : '';?>"
									/>
								</label>

								<label>
									<p>Email</p>

									<input 
										name="autonomos_externos_direction_email"
										type="email" 
										placeholder="" 
										value="<?php echo $args['autonomos_externos_direction_email'] ? $args['autonomos_externos_direction_email'] : '';?>"
									/>
								</label>

								<div class="l-cont">
									<label>
										<p>Servicio Prestado</p>
									</label>

									<span class="checkbox-block">
										<label class="checkbox-wrap">
											<?php $autonomos_externos_servico_prestado =  $args['autonomos_externos_servico_prestado'] ? $args['autonomos_externos_servico_prestado'] : '';?>
											<input type="hidden" name="autonomos_externos_servico_prestado" val="off">
											<input 
												name="autonomos_externos_servico_prestado"
												type="checkbox" 
												class="checkbox" 
												<?php if ($autonomos_externos_servico_prestado): ?>
													checked
												<?php endif ?>
											/>
											<span class="checkbox-text"
												>Gestoría/Asesoría Laboral</span
											>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"
												>Gestoría/Asesoría Fiscal y/o contable</span
											>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Informático</span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"
												>Empresa de transportes</span
											>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">DPD</span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Despacho legal</span>
										</label>

										<label class="checkbox-wrap">
											<input
												type="checkbox"
												class="checkbox check-textarea"
											/>
											<span class="checkbox-text">Otros servicios</span>
										</label>
									</span>

									<label>
										<p>Especificar</p>

										<input disabled type="text" />
									</label>
								</div>

								<div class="buttons">
									<button class="button-cancel-formtab">Cancelar</button>
									<input type="submit" value="Guardar" class="button-post" />
								</div>
							</form>
						</div>
					</div>

					<button class="button-post button-post-outer">Enviar</button>
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
