<?php 
if ( ! defined( 'ABSPATH' ) ) {
    die( 'You are not allowed to call this page directly.' );
}
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
		<title><?php the_title(); ?></title>
		<link rel="stylesheet" href="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/css/select2.min.css" />
		<link rel="stylesheet" href="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/css/main.css" />
	</head>

	<body>
		<main>
			<aside></aside>

			<div class="content">
				<header class="header">
					<p class="header-page">Archivos de interés</p>

					<div class="clear-session">Cerrar Sesión</div>
				</header>

				<div class="container">
					<div class="tabs">
						<a href="../empresas-y-autonomos.html" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-1.svg" alt="tab" />
							</span>

							<span class="tabs-name">Datos de la actividad</span>
						</a>

						<a href="../tus-documentos.html" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-2.svg" alt="tab" />
							</span>

							<span class="tabs-name">Tus documentos</span>

							<span class="tabs-"></span>
						</a>

						<a href="./archivos-de-interes.html" class="tabs-item active">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-3.svg" alt="tab" />
							</span>

							<span class="tabs-name">Archivos de interés</span>
						</a>
					</div>

					<h2 class="records-title">Archivos de interés</h2>

					<p class="records-text">
						Incluimos aquí una serie de guías y documentos que pueden ser de su interés, normalmente
						publicados por la Agencia Española de Protección de Datos u otros organismos nacionales
						o internacionales. No es necesario que se los descargue, ni que se los lea. Es
						únicamente material que ponemos a su disposición, que puede ser útil en algún momento.
					</p>

					<p class="records-text"><a href="#">Link 1</a></p>
				</div>
			</div>
		</main>
	</body>
</html>
