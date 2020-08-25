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
	</head>

	<body>
		<main>
			<aside></aside>

			<div class="content">
				<header class="header">
					<ul class="breadcrumb">
						<li><a href="/empresas-y-autonomos/">Datos de la actividad</a></li>
						<li>Software y backups</li>
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

					<div class="forms-container active">
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
									<span class="editable-name" data-base-name="Programa/Aplicación"
										>Programa/Aplicación</span
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

							<form class="form">
								<label>
									<p>Nombre Programa *</p>

									<div class="select-wrap">
										<select required class="input-edit-name">
											<option selected disabled></option>
											<option value="example 1">example 1</option>
											<option value="example 2">example 2</option>
											<option value="example 3">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" class="input-edit-name" />
								</label>

								<label>
									<p>Finalidad *</p>

									<div class="select-wrap">
										<select required>
											<option selected disabled></option>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" />
								</label>

								<label>
									<p>¿En qué equipo/s está instalado? *</p>

									<div class="select-wrap select-wrap-multiple">
										<select multiple required>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<div class="buttons">
									<button class="button-cancel-formtab">Cancelar</button>
									<input type="submit" value="Guardar" class="button-post">
								</div>
							</form>
						</div>
					</div>

					<div class="page-radio-wrap page-radio-wrap-backup">
						<label>
							<p>¿Haces copias de seguridad?</p>
						</label>

						<div class="page-radio-wrap-body">
							<label>
								<div class="input-radio-wrap input-radio-wrap-yes">
									<input type="radio" name="have-employees" />
									<p>Sí</p>
								</div>
							</label>

							<label>
								<div class="input-radio-wrap">
									<input type="radio" name="have-employees" />
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
									<span class="editable-name" data-base-name="Copias de seguridad"
										>Copias de seguridad</span
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

							<form class="form">
								<label>
									<p>¿Cómo se hacen? *</p>

									<div class="select-wrap">
										<select required>
											<option selected disabled></option>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" />
								</label>

								<label>
									<p>¿Cada cuánto se hacen?</p>

									<div class="select-wrap">
										<select>
											<option selected disabled></option>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" />
								</label>

								<label>
									<p>¿En qué soportes?</p>

									<div class="select-wrap">
										<select>
											<option selected disabled></option>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" />
								</label>

								<label>
									<p>¿Dónde se guardan éstos?</p>

									<div class="select-wrap">
										<select>
											<option selected disabled></option>
											<option value="">example 1</option>
											<option value="">example 2</option>
											<option value="">example 3</option>
										</select>
									</div>
								</label>

								<label class="checkbox-wrap">
									<input type="checkbox" class="checkbox check-other" />
									<span class="checkbox-text">No está en la lista</span>
								</label>

								<label>
									<p>Especificar</p>

									<input type="text" />
								</label>

								<div class="buttons">
									<button class="button-cancel-formtab">Cancelar</button>
									<input type="submit" value="Guardar" class="button-post">
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
