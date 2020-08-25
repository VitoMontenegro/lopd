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
						<li><a href="/tus-documentos/">Tus documento</a></li>
						<li>Firma</li>
					</ul>

					<div class="clear-session">Cerrar Sesión</div>
				</header>

				<div class="container">
					<div class="tabs">
						<a href="/empresas-y-autonomos/" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-1.svg" alt="tab" />
							</span>

							<span class="tabs-name">Datos de la actividad</span>
						</a>

						<a href="/tus-documentos/" class="tabs-item active">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-2.svg" alt="tab" />
							</span>

							<span class="tabs-name">Tus documentos</span>
						</a>

						<a href="/archivos-de-interes/" class="tabs-item">
							<span class="tabs-icon-wrap">
								<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/tabs-3.svg" alt="tab" />
							</span>

							<span class="tabs-name">Archivos de interés</span>
						</a>
					</div>

					<div class="paint-text">
						<h2 class="paint-title">Acuse de recibo Entrega de Documentación</h2>

						<p>
							Yo, #nombre, con NIF XXXXXX, en calidad de Representante de la entidad XXXXXXX, con
							CIF XXXXXXX, y domicilio social en XXXXXXX, por medio de la presente, declaro:
						</p>

						<p>
							a) Haber recibido la documentación, formación online e información necesaria para la
							adaptación de la citada entidad a la Ley Orgánica 3/2018, de 5 de diciembre, de
							Protección de Datos de Carácter Personal y Garantía de los Derechos Digitales (LOPD y
							GDD), al Reglamento General de Protección de Datos (UE) 2016/679 y, en su caso, a la
							Ley 34/2002, de 11 de julio, de Servicios de la Sociedad de la Información y Comercio
							Electrónico (LSSICE), consistente en:
						</p>

						<ul>
							<li>
								Documento de Seguridad con modelos de contrato, de registros, de cláusulas e
								información sobre usos, recomendaciones y protocolos, entre otros documentos.
							</li>

							<li>Registro de Tratamientos.</li>

							<li>Documento explicativo de la citada documentación.</li>

							<li>Certificado de adaptación.</li>

							<li>Documento para página web (si es el caso).</li>
						</ul>

						<p>b) Me comprometo a:</p>

						<ul>
							<li>
								Cumplir con todas mis obligaciones en relación a la normativa aplicable en materia
								de protección de datos de carácter personal.
							</li>

							<li>
								Cumplir con el deber de información, el principio del consentimiento y de calidad de
								los datos establecido en las diferentes normativas de protección de datos.
							</li>

							<li>
								Firmar los correspondientes contratos de Encargados del Tratamiento, establecidos en
								el Documento de Seguridad.
							</li>

							<li>
								Adoptar las medidas de índole técnica y organizativas necesarias que garanticen la
								seguridad de los datos de carácter personal y eviten su alteración, pérdida,
								tratamiento o acceso no autorizado, habida cuenta del estado de la tecnología, la
								naturaleza de los datos almacenados y los riesgos a que estén expuestos, ya
								provengan de la acción humana o del medio físico o natural.
							</li>

							<li>
								Cumplir con el régimen de consentimiento previo en el envío de comunicaciones
								comerciales por correo electrónico o medios de comunicación electrónica.
							</li>

							<li>
								Avisar a la empresa de los posibles ejercicios de derechos por parte de los
								afectados, con un plazo máximo de 3 días naturales desde la recepción de los mismos
								por su parte.
							</li>

							<p>
								c) Comprendo que una documentación desactualizada es ineficaz, y que la única
								responsable por incumplimientos de la normativa, inexactitudes en la documentación
								presentada y falta de actualización de las personas, equipos y procesos que
								intervienen en el tratamiento de los datos, soy yo mismo/a o la Entidad a la que
								represento.
							</p>

							<p>
								Y para que así conste, firmo la presente en XXXXXXX a 22 de junio de 2020 <br />
								&emsp;&emsp;Fdo. #nombre
							</p>
						</ul>
					</div>

					<div class="paint-wrap">
						<canvas id="paint-canvas" height="400" width="640"></canvas>
					</div>

					<div class="paint-buttons">
						<button type="button" id="clear" class="button-cancel">Borrar</button>
						<button type="button" id="save" class="button-post">Enviar</button>
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

		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/jquery.min.js"></script>
		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/select2.min.js"></script>
		<script src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/js/main.js"></script>
	</body>
</html>
