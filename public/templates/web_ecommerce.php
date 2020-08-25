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
						<li>Web / Ecommerce</li>
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

					<div class="page-radio-wrap page-radio-wrap-web">
						<label>
							<p>¿Tienes una web/tienda online?</p>
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
									<span class="editable-name" data-base-name="URL">URL</span>
								</p>

								<button class="button-add">Añadir</button>

								<div class="form-tab-icons">
									<span class="form-tab-edit"></span>

									<span class="form-tab-remove">
										<img src="/wp-content/plugins/WordPress-Plugin-Boilerplate-Example-master/public/images/icon-remove.svg" alt="remove" />
									</span>
								</div>
							</div>

							<div class="form">
								<h2 class="form-title">Datos generales</h2>

								<div class="radio-form-choose">
									<label>
										<p>Tipo de web *</p>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="web" value="corporate" />
											<p>Web corporativa</p>
										</div>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="web" value="store" />
											<p>Tienda online</p>
										</div>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="web" value="platform" />
											<p>Plataforma web</p>
										</div>
									</label>
								</div>

								<form class="radio-form" data-form="corporate">
									<label>
										<p>URL web corporativa *</p>

										<input
											type="text"
											placeholder=""
											data-required="true"
											class="input-edit-name"
										/>
									</label>

									<div class="l-cont">
										<label>
											<p>Proveedor de alojamiento web *</p>

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
									</div>

									<div class="l-cont">
										<label>
											<p>Proveedor email *</p>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="3"
											/>
											<span class="checkbox-text"
												>Mismo que “Alojamiento Web”</span
											>
										</label>

										<label>
											<p>Otro</p>

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

											<input type="text" placeholder="" />
										</label>
									</div>

									<label>
										<p>
											Autorización administrativa
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="text" placeholder="" />
									</label>

									<label class="label-checkbox-switch">
										<p>La web, ¿tiene blog o similar?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<div class="l-cont">
										<label>
											<p>Los usuarios, ¿pueden dejar comentarios?</p>
										</label>

										<div class="radio-open-wrap">
											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>No</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>Sí, a través de la propia web</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input
														type="radio"
														name="comments"
														class="radio-open"
													/>
													<p>Sí, a través de un módulo externo</p>
												</div>
											</label>
										</div>

										<label>
											<p>Especificar</p>

											<input type="text" />
										</label>
									</div>

									<label>
										<p>¿Hay afiliados? <span class="popup-icon">?</span></p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>No</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												No, pero sí recomiendamos servicios relacionados de
												otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, añadimos enlaces de afiliados de otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, disponemos de un programa interno de afiliación
												para que nos recomienden
											</p>
										</div>
									</label>

									<label class="label-checkbox-switch">
										<p>
											¿Se recogen datos de salud o especialmente protegidos en
											la web?
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<!--									<label class="label-checkbox-switch">-->
									<!--										<p>¿Tiene instalado certificado SSL? <span class="popup-icon">?</span></p>-->

									<!--										<span class="popup">-->
									<!--											Si eres una gestoría, puede que trates datos de clientes/empleados de TUS-->
									<!--											cliente-->
									<!--										</span>-->

									<!--										<input type="checkbox" class="checkbox-switch" />-->
									<!--									</label>-->

									<label class="label-checkbox-switch">
										<p>¿Se reciben CVs a través de la web?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Tienes redes sociales?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<span class="checkbox-block">
										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Facebook </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Instagram </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Twitter </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> LinkedIn</span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> Otras</span>
										</label>
									</span>

									<div class="buttons">
										<button class="button-cancel-formtab">Cancelar</button>
										<input type="submit" value="Guardar" class="button-post" />
									</div>
								</form>

								<form class="radio-form" data-form="store">
									<label>
										<p>URL tienda online *</p>

										<input
											type="text"
											placeholder=""
											data-required="true"
											class="input-edit-name"
										/>
									</label>

									<div class="l-cont">
										<label>
											<p>Proveedor de alojamiento web *</p>

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
									</div>

									<div class="l-cont">
										<label>
											<p>Proveedor email *</p>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="3"
											/>
											<span class="checkbox-text"
												>Mismo que “Alojamiento Web”</span
											>
										</label>

										<label>
											<p>Otro</p>

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

											<input type="text" placeholder="" />
										</label>
									</div>

									<label>
										<p>
											Autorización administrativa
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="text" placeholder="" />
									</label>

									<label class="label-checkbox-switch">
										<p>La tienda, ¿tiene blog o similar?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<div class="l-cont">
										<label>
											<p>Los usuarios, ¿pueden dejar comentarios?</p>
										</label>

										<div class="radio-open-wrap">
											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>No</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>Sí, a través de la propia web</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input
														type="radio"
														name="comments"
														class="radio-open"
													/>
													<p>
														Sí, a través de un módulo externo (por
														ejemplo, Disqus)
													</p>
												</div>
											</label>
										</div>

										<label>
											<p>Especificar</p>

											<input type="text" />
										</label>
									</div>

									<label>
										<p>¿Hay afiliados? <span class="popup-icon">?</span></p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>No</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												No, pero sí recomiendamos servicios relacionados de
												otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, añadimos enlaces de afiliados de otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, disponemos de un programa interno de afiliación
												para que nos recomienden
											</p>
										</div>
									</label>

									<label class="label-checkbox-switch">
										<p>
											¿Se recogen datos de salud o especialmente protegidos en
											la web?
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<!--									<label class="label-checkbox-switch">-->
									<!--										<p>¿Tiene instalado certificado SSL? <span class="popup-icon">?</span></p>-->

									<!--										<span class="popup">-->
									<!--											Si eres una gestoría, puede que trates datos de clientes/empleados de TUS-->
									<!--											cliente-->
									<!--										</span>-->

									<!--										<input type="checkbox" class="checkbox-switch" />-->
									<!--									</label>-->

									<label class="label-checkbox-switch">
										<p>¿Se reciben CVs a través de la web?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Tienes redes sociales?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<span class="checkbox-block">
										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Facebook </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Instagram </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Twitter </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> LinkedIn</span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> Otras</span>
										</label>
									</span>

									<label class="label-checkbox-switch">
										<p>¿Vendes productos artesanales?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<h2 class="form-title">Datos proceso de compra y contacto</h2>

									<div class="l-cont">
										<label>
											<p>
												Email de pedidos * <span class="popup-icon">?</span>
											</p>

											<span class="popup">
												Si eres una gestoría, puede que trates datos de
												clientes/empleados de TUS cliente
											</span>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="1"
											/>
											<span class="checkbox-text"
												>Mismo que “Email (público)”</span
											>
										</label>

										<label>
											<p>Otro</p>

											<input type="email" placeholder="" />
										</label>
									</div>

									<div class="l-cont">
										<label>
											<p>Otros Emails (p.e., reclamaciones) *</p>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="1"
											/>
											<span class="checkbox-text"
												>Mismo que “Email de pedidos”</span
											>
										</label>

										<label>
											<p>Otro</p>

											<input type="email" placeholder="" />
										</label>
									</div>

									<div class="l-cont">
										<label>
											<p>
												Teléfono/s contacto *
												<span class="popup-icon">?</span>
											</p>

											<span class="popup">
												Si eres una gestoría, puede que trates datos de
												clientes/empleados de TUS cliente
											</span>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="1"
											/>
											<span class="checkbox-text"
												>Mismo que “Teléfono (público)</span
											>
										</label>

										<label>
											<p>Otro</p>

											<input type="text" placeholder="" maxlength="9" />
										</label>
									</div>

									<label class="label-checkbox-switch">
										<p>¿Registro de usuarios?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="2"
										/>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="email" />
											<p>Opcional</p>
										</div>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="email" />
											<p>Obligatorio</p>
										</div>
									</label>

									<label>
										<p>
											Nombre botón “Añadir al carrito”
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="text" placeholder="" />
									</label>

									<label>
										<p>
											Nombre botón “Procesar pedido”
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="text" placeholder="" />
									</label>

									<div class="l-cont">
										<label>
											<p>Domicilio devoluciones</p>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="1"
											/>
											<span class="checkbox-text">Mismo que “Dirección”</span>
										</label>

										<label>
											<p>Otro</p>

											<input type="text" placeholder="" />
										</label>
									</div>

									<h2 class="form-title">Pagos</h2>

									<label class="label-checkbox-switch">
										<p>¿Pedido mínimo? * <span class="popup-icon">?</span></p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<p>¿Cuánto? *</p>

										<input type="text" placeholder="" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Pago con Paypal?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Transferencia/ingreso?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Pago Contrarreembolso?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label>
										<p>¿Cliente paga comisión, cuánto?</p>

										<input type="text" placeholder="" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Pago con Tarjeta?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<p>Indicar banco: *</p>

										<input type="text" placeholder="" data-required="true" />
									</label>

									<label>
										<p>Otros medios de pago</p>

										<textarea></textarea>
									</label>

									<h2 class="form-title">Envíos</h2>

									<div class="l-cont">
										<label>
											<p>Zonas de Envío *</p>
										</label>

										<span class="checkbox-block">
											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Península</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Islas Baleares</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Islas Canarias</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Ceuta y Melilla</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Europa</span>
											</label>

											<label class="checkbox-wrap">
												<input
													type="checkbox"
													class="checkbox check-textarea"
												/>
												<span class="checkbox-text">Otras</span>
											</label>
										</span>

										<label>
											<p>Especificar</p>

											<textarea disabled></textarea>
										</label>
									</div>

									<label class="label-checkbox-switch">
										<p>¿Portes Gratis?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<p>¿A partir de qué importe?: *</p>

										<input type="text" placeholder="" data-required="true" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Entrega Física en Tienda?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="2"
										/>
									</label>

									<label>
										<p>
											Empresas de Mensajería <span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<textarea></textarea>
									</label>

									<label>
										<p>
											Precios y condiciones para portes por zona
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<textarea></textarea>
									</label>

									<label>
										<p>Observaciones</p>

										<textarea></textarea>
									</label>

									<h2 class="form-title">Devoluciones</h2>

									<label>
										<p>Devoluciones por desperfectos o defectos</p>

										<textarea></textarea>
									</label>

									<div class="options">
										<label>
											<p>Desistimiento *</p>
										</label>

										<label>
											<div class="input-radio-wrap">
												<input type="radio" name="withdrawal" />
												<p>Plazo mínimo legal (14 días)</p>
											</div>
										</label>

										<label>
											<div class="input-radio-wrap">
												<input
													type="radio"
													name="withdrawal"
													class="other-option"
												/>
												<p>Otro</p>
											</div>
										</label>
									</div>

									<label>
										<textarea></textarea>
									</label>

									<label>
										<p>Pedidos aun no enviados</p>

										<textarea></textarea>
									</label>

									<label>
										<p>Garantías</p>

										<textarea></textarea>
									</label>

									<label>
										<p>Observaciones</p>

										<textarea></textarea>
									</label>

									<h2 class="form-title">Otros</h2>

									<label class="label-checkbox-switch">
										<p>
											Registro sanitario o nº de licencia a mostrar en la web
										</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<textarea></textarea>
									</label>

									<label class="label-checkbox-switch">
										<p>Observaciones en general</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<textarea></textarea>
									</label>

									<div class="buttons">
										<button class="button-cancel-formtab">Cancelar</button>
										<input type="submit" value="Guardar" class="button-post" />
									</div>
								</form>

								<form class="radio-form" data-form="platform">
									<label>
										<p>URL platform corporativa *</p>

										<input
											type="text"
											placeholder=""
											data-required="true"
											class="input-edit-name"
										/>
									</label>

									<div class="l-cont">
										<label>
											<p>Proveedor de alojamiento web *</p>

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
									</div>

									<div class="l-cont">
										<label>
											<p>Proveedor email *</p>
										</label>

										<label class="checkbox-wrap checkbox-wrap-long">
											<input
												type="checkbox"
												class="checkbox close-inputs-reverse"
												data-block="3"
											/>
											<span class="checkbox-text"
												>Mismo que “Alojamiento Web”</span
											>
										</label>

										<label>
											<p>Otro</p>

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

											<input type="text" placeholder="" />
										</label>
									</div>

									<label>
										<p>Email de gestión *</p>
									</label>

									<label class="checkbox-wrap checkbox-wrap-long">
										<input
											type="checkbox"
											class="checkbox close-inputs-reverse"
											data-block="1"
										/>
										<span class="checkbox-text"
											>Mismo que “Email (público)”</span
										>
									</label>

									<label>
										<p>Otro</p>

										<input type="text" placeholder="" />
									</label>

									<label>
										<p>Otros Emails (p.e., reclamaciones) *</p>
									</label>

									<label class="checkbox-wrap checkbox-wrap-long">
										<input
											type="checkbox"
											class="checkbox close-inputs-reverse"
											data-block="1"
										/>
										<span class="checkbox-text"
											>Mismo que “Email de pedidos”</span
										>
									</label>

									<label>
										<p>Otro</p>

										<input type="text" placeholder="" />
									</label>

									<label>
										<p>
											Teléfono/s contacto * <span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>
									</label>

									<label class="checkbox-wrap checkbox-wrap-long">
										<input
											type="checkbox"
											class="checkbox close-inputs-reverse"
											data-block="1"
										/>
										<span class="checkbox-text"
											>Mismo que “Teléfono (público)</span
										>
									</label>

									<label>
										<p>Otro</p>

										<input type="text" placeholder="" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Registro de usuarios?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="2"
										/>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="user-reg" />
											<p>Opcional</p>
										</div>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="user-reg" />
											<p>Obligatorio</p>
										</div>
									</label>

									<label>
										<p>
											Autorización administrativa
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="text" placeholder="" />
									</label>

									<label>
										<p>Descripción actividad</p>

										<textarea></textarea>
									</label>

									<div class="l-cont">
										<label>
											<p>Los usuarios, ¿pueden dejar comentarios?</p>
										</label>

										<div class="radio-open-wrap">
											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>No</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input type="radio" name="comments" />
													<p>Sí, a través de la propia web</p>
												</div>
											</label>

											<label>
												<div class="input-radio-wrap">
													<input
														type="radio"
														name="comments"
														class="radio-open"
													/>
													<p>Sí, a través de un módulo externo</p>
												</div>
											</label>
										</div>

										<label>
											<p>Especificar</p>

											<input type="text" />
										</label>
									</div>

									<label>
										<p>¿Hay afiliados? <span class="popup-icon">?</span></p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>
									</label>

									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>No</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												No, pero sí recomiendamos servicios relacionados de
												otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, añadimos enlaces de afiliados de otras empresas
											</p>
										</div>
									</label>
									<label>
										<div class="input-radio-wrap">
											<input type="radio" name="affiliates" />
											<p>
												Sí, disponemos de un programa interno de afiliación
												para que nos recomienden
											</p>
										</div>
									</label>

									<label class="label-checkbox-switch">
										<p>
											¿Se recogen datos de salud o especialmente protegidos en
											la web?
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<!--									<label class="label-checkbox-switch">-->
									<!--										<p>¿Tiene instalado certificado SSL? <span class="popup-icon">?</span></p>-->

									<!--										<span class="popup">-->
									<!--											Si eres una gestoría, puede que trates datos de clientes/empleados de TUS-->
									<!--											cliente-->
									<!--										</span>-->

									<!--										<input type="checkbox" class="checkbox-switch" />-->
									<!--									</label>-->

									<label class="label-checkbox-switch">
										<p>¿Se reciben CVs a través de la web?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Tienes redes sociales?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<span class="checkbox-block">
										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Facebook </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Instagram </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text">Twitter </span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> LinkedIn</span>
										</label>

										<label class="checkbox-wrap">
											<input type="checkbox" class="checkbox" />
											<span class="checkbox-text"> Otras</span>
										</label>
									</span>

									<label>
										<p>Observaciones</p>

										<textarea></textarea>
									</label>

									<h2 class="form-title">Registro</h2>

									<label class="label-checkbox-switch">
										<p>El usuario, ¿se puede registrar?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="9"
										/>
									</label>

									<label>
										<p>Descripción del proceso</p>

										<textarea></textarea>
									</label>

									<label>
										<p>
											Características contraseñas
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<textarea></textarea>
									</label>

									<label class="label-checkbox-switch">
										<p>
											¿Hay perfiles de usuario?
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<p>¿Cuáles y con qué permisos?</p>

										<textarea></textarea>
									</label>

									<div class="l-cont">
										<label>
											<p>¿Qué notificaciones recibe el cliente?</p>
										</label>

										<span class="checkbox-block">
											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Alta</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text"
													>Recordar contraseña</span
												>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Baja</span>
											</label>

											<label class="checkbox-wrap">
												<input
													type="checkbox"
													class="checkbox check-textarea"
												/>
												<span class="checkbox-text">Otras</span>
											</label>
										</span>

										<label>
											<p>Especificar</p>

											<textarea></textarea>
										</label>
									</div>

									<label>
										<p>
											Funciones Área Privada <span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<textarea></textarea>
									</label>

									<label>
										<p>
											Bloqueo, Suspensión y Baja
											<span class="popup-icon">?</span>
										</p>

										<span class="popup">
											Si eres una gestoría, puede que trates datos de
											clientes/empleados de TUS cliente
										</span>

										<textarea></textarea>
									</label>

									<h2 class="form-title">Pagos</h2>

									<label class="label-checkbox-switch">
										<p>¿Se realizan pagos en la web?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="10"
										/>
									</label>

									<label class="label-checkbox-switch">
										<p>¿Pago con Paypal?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Transferencia/ingreso?</p>

										<input type="checkbox" class="checkbox-switch" />
									</label>

									<label class="label-checkbox-switch">
										<p>¿Pago con Tarjeta?</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="2"
										/>
									</label>

									<label>
										<p>Indicar banco: *</p>

										<input type="text" placeholder="" />
									</label>

									<label>
										<p>Otros medios de pago</p>

										<textarea></textarea>
									</label>

									<div class="l-cont">
										<label class="label-checkbox-switch">
											<p>¿Hay pagos recurrentes?</p>

											<input
												type="checkbox"
												class="checkbox-switch close-inputs"
												data-block="2"
											/>
										</label>

										<span class="checkbox-block">
											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Mensual</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Anual</span>
											</label>

											<label class="checkbox-wrap">
												<input type="checkbox" class="checkbox" />
												<span class="checkbox-text">Trimestral</span>
											</label>

											<label class="checkbox-wrap">
												<input
													type="checkbox"
													class="checkbox check-textarea"
												/>
												<span class="checkbox-text">Otras</span>
											</label>
										</span>

										<label>
											<p>Especificar</p>

											<input type="text" />
										</label>
									</div>

									<label class="label-checkbox-switch">
										<p>
											¿Hay packs de servicios?
											<span class="popup-icon">?</span>
										</p>

										<input
											type="checkbox"
											class="checkbox-switch close-inputs"
											data-block="1"
										/>
									</label>

									<label>
										<p>Descripción</p>

										<textarea></textarea>
									</label>

									<div class="buttons">
										<button class="button-cancel-formtab">Cancelar</button>
										<input type="submit" value="Guardar" class="button-post" />
									</div>
								</form>
							</div>
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
