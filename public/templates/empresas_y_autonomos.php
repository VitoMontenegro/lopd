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
	</head>

	<body>
		<main>
			<aside></aside>

			<div class="content">
				<header class="header">
					<p class="header-page">Datos de la actividad</p>

					<div class="clear-session">Cerrar Sesión</div>

				</header>

				<div class="container">
					<div class="tabs">
						<a href="/empresas-y-autonomos/" class="tabs-item active">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-1.svg" alt="tab" />
							</span>

							<span class="tabs-name">Datos de la actividad</span>
						</a>

						<a href="/tus-documentos/" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-2.svg" alt="tab" />
							</span>

							<span class="tabs-name">Tus documentos</span>

							<span class="tabs-"></span>
						</a>

						<a href="/archivos-de-interes/" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-3.svg" alt="tab" />
							</span>

							<span class="tabs-name">Archivos de interés</span>
						</a>
					</div>

					<div class="progress">
						<p class="progress-title">Su progreso: <span>39% para completar</span></p>

						<div class="progress-bar">
							<span class="progress-bar-fill" style="width: 39%;"></span>
						</div>
					</div>

					<div class="docs">
						<a href="/datos-generales/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Datos-generales.svg" alt="doc" />
							</span>

							<span class="docs-title">Datos generales</span>
							<?php if ($args['datos_generales_gerente'] && $args['datos_generales_nie_gerente'] && $args['datos_generales_razon_social'] && $args['datos_generales_nif'] && $args['datos_generales_sector_de_activaded'] && $args['datos_generales_reg_mercantil'] && $args['datos_generales_calle'] && $args['datos_generales_codigo_postal'] && $args['datos_generales_localidad'] && $args['datos_generales_provincia'] && $args['datos_generales_telefono_con_nostros'] && $args['datos_generales_email_con_nostros']): ?>
								<span class="docs-status docs-status-completed">Completado</span>
							<?php else: ?>	
								<span class="docs-status docs-status-pending">Pendiente</span>
							<?php endif ?>
							
						</a>

						<a href="/tratamiento-de-datos/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Tratamiento-de-datos.svg" alt="doc" />
							</span>

							<span class="docs-title">Tratamiento de datos</span>
							<?php 
							$validKeys = [];
							foreach ($args as $key => $value) {
							    if (strpos($key, 'atamiento_de_datos') != 0) {
							        $validKeys[] = $value;
							    }
							        
							}
          					?>
							<?php if (!empty($validKeys)): ?>
								<span class="docs-status docs-status-completed">Pendiente</span>
							<?php else: ?>	
								<span class="docs-status docs-status-pending">Pendiente</span>
							<?php endif ?>

							
						</a>

						<a href="/personal/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Personal.svg" alt="doc" />
							</span>

							<span class="docs-title">Personal</span>

							<span class="docs-status docs-status-pending">Pendiente</span>
						</a>

						<a href="/emresas-y-autonomos-externos/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Empresas-y-autonomos-externos.svg" alt="" />
							</span>

							<span class="docs-title">Empresas y autónomos externos</span>

							<span class="docs-status docs-status-pending">Pendiente</span>
						</a>

						<a href="/locales/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Locales.svg" alt="" />
							</span>

							<span class="docs-title">Locales</span>

							<span class="docs-status docs-status-completed">Completado</span>
						</a>

						<a href="/equipos-informaticos/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Equipos-informaticos.svg" alt="" />
							</span>

							<span class="docs-title">Equipos informáticos</span>

							<span class="docs-status docs-status-pending">Pendiente</span>
						</a>

						<a href="/software-y-backups/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/software-y-backups.svg" alt="doc" />
							</span>

							<span class="docs-title">Software y backups</span>

							<span class="docs-status docs-status-pending">Pendiente</span>
						</a>

						<a href="/web-ecommerce/" class="docs-item">
							<span class="docs-icon">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/Web-Ecommerce.svg" alt="" />
							</span>

							<span class="docs-title">Web / Ecommerce</span>

							<span class="docs-status docs-status-pending">Pendiente</span>
						</a>
					</div>
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
	</body>
</html>
