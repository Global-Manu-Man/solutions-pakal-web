<?php # ---------------------------------------------------------------
# Modal > Idiomas
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="opciones-idioma" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

				<h5 class="modal-title">Elige un idioma y región</h5>
				<p class="">El cambio aplicará en todo el sitio.</p>

				<div class="--cuerpo-overflow-y">
					<ul>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/252-mexico.svg"> <span>Español de México</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/226-united-states.svg"> <span>United States English</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/255-brazil.svg"> <span>Portugues do Brasil</span>
						</li>
					</ul>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Monedas
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="opciones-moneda" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

				<h5 class="modal-title">Elige tu moneda</h5>
				<p class="mb-3">El cambio se aplicará en todo el sitio.</p>

                <div class="--cuerpo-overflow-y">
					<ul>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/252-mexico.svg"> <span>MXN - Peso Mexicano</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/226-united-states.svg"> <span>USD - United States Dollar</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/255-brazil.svg"> <span>BRL - Real Brasileiro</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/259-european-union.svg"> <span>EUR - Unión Europea</span>
						</li>
						<li class="btn btn-sm btn-opciones w-100 d-flex">
							<img src="<?= $_dominio ?>assets/img/international-flags/svg/260-united-kingdom.svg"> <span>GBP - British Pound</span>
						</li>
					</ul>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Cantidad Personas
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="cantidad-personas" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

				<h5 class="modal-title">Cantidad de personas</h5>
				<p class="--p">Elige la cantidad de personas que asistirán a tu evento.</p>
                <div class="--cuerpo-overflow-y">
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Hasta 30 personas</a>
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Hasta 100 personas</a>
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Hasta 200 personas</a>
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Hasta 300 personas</a>
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Más de 300 personas</a>

                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Incluir todas las opciones</a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>

			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Ubicación
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="ubicacion" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

				<h5 class="modal-title">Ubicación</h5>
				<p class="--p">Elige la ubicación para tu evento.</p>
                <div class="--cuerpo-overflow-y">
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100">Ciudad de México (CDMX)</a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Compartir
# ------------------------------------------------------------------ ?>
<?php
    $_facebook = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;margin-right: 8px;" fill="currentColor" class="bi bi-facebook" viewBox="0 0 16 16"><path d="M16 8.049c0-4.446-3.582-8.05-8-8.05C3.58 0-.002 3.603-.002 8.05c0 4.017 2.926 7.347 6.75 7.951v-5.625h-2.03V8.05H6.75V6.275c0-2.017 1.195-3.131 3.022-3.131.876 0 1.791.157 1.791.157v1.98h-1.009c-.993 0-1.303.621-1.303 1.258v1.51h2.218l-.354 2.326H9.25V16c3.824-.604 6.75-3.934 6.75-7.951z"/></svg>';
    $_instagram = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;margin-right: 8px;" fill="currentColor" class="bi bi-instagram" viewBox="0 0 16 16"><path d="M8 0C5.829 0 5.556.01 4.703.048 3.85.088 3.269.222 2.76.42a3.917 3.917 0 0 0-1.417.923A3.927 3.927 0 0 0 .42 2.76C.222 3.268.087 3.85.048 4.7.01 5.555 0 5.827 0 8.001c0 2.172.01 2.444.048 3.297.04.852.174 1.433.372 1.942.205.526.478.972.923 1.417.444.445.89.719 1.416.923.51.198 1.09.333 1.942.372C5.555 15.99 5.827 16 8 16s2.444-.01 3.298-.048c.851-.04 1.434-.174 1.943-.372a3.916 3.916 0 0 0 1.416-.923c.445-.445.718-.891.923-1.417.197-.509.332-1.09.372-1.942C15.99 10.445 16 10.173 16 8s-.01-2.445-.048-3.299c-.04-.851-.175-1.433-.372-1.941a3.926 3.926 0 0 0-.923-1.417A3.911 3.911 0 0 0 13.24.42c-.51-.198-1.092-.333-1.943-.372C10.443.01 10.172 0 7.998 0h.003zm-.717 1.442h.718c2.136 0 2.389.007 3.232.046.78.035 1.204.166 1.486.275.373.145.64.319.92.599.28.28.453.546.598.92.11.281.24.705.275 1.485.039.843.047 1.096.047 3.231s-.008 2.389-.047 3.232c-.035.78-.166 1.203-.275 1.485a2.47 2.47 0 0 1-.599.919c-.28.28-.546.453-.92.598-.28.11-.704.24-1.485.276-.843.038-1.096.047-3.232.047s-2.39-.009-3.233-.047c-.78-.036-1.203-.166-1.485-.276a2.478 2.478 0 0 1-.92-.598 2.48 2.48 0 0 1-.6-.92c-.109-.281-.24-.705-.275-1.485-.038-.843-.046-1.096-.046-3.233 0-2.136.008-2.388.046-3.231.036-.78.166-1.204.276-1.486.145-.373.319-.64.599-.92.28-.28.546-.453.92-.598.282-.11.705-.24 1.485-.276.738-.034 1.024-.044 2.515-.045v.002zm4.988 1.328a.96.96 0 1 0 0 1.92.96.96 0 0 0 0-1.92zm-4.27 1.122a4.109 4.109 0 1 0 0 8.217 4.109 4.109 0 0 0 0-8.217zm0 1.441a2.667 2.667 0 1 1 0 5.334 2.667 2.667 0 0 1 0-5.334z"/></svg>';
    $_whatsapp = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;margin-right: 8px;" fill="currentColor" class="bi bi-whatsapp" viewBox="0 0 16 16"><path d="M13.601 2.326A7.854 7.854 0 0 0 7.994 0C3.627 0 .068 3.558.064 7.926c0 1.399.366 2.76 1.057 3.965L0 16l4.204-1.102a7.933 7.933 0 0 0 3.79.965h.004c4.368 0 7.926-3.558 7.93-7.93A7.898 7.898 0 0 0 13.6 2.326zM7.994 14.521a6.573 6.573 0 0 1-3.356-.92l-.24-.144-2.494.654.666-2.433-.156-.251a6.56 6.56 0 0 1-1.007-3.505c0-3.626 2.957-6.584 6.591-6.584a6.56 6.56 0 0 1 4.66 1.931 6.557 6.557 0 0 1 1.928 4.66c-.004 3.639-2.961 6.592-6.592 6.592zm3.615-4.934c-.197-.099-1.17-.578-1.353-.646-.182-.065-.315-.099-.445.099-.133.197-.513.646-.627.775-.114.133-.232.148-.43.05-.197-.1-.836-.308-1.592-.985-.59-.525-.985-1.175-1.103-1.372-.114-.198-.011-.304.088-.403.087-.088.197-.232.296-.346.1-.114.133-.198.198-.33.065-.134.034-.248-.015-.347-.05-.099-.445-1.076-.612-1.47-.16-.389-.323-.335-.445-.34-.114-.007-.247-.007-.38-.007a.729.729 0 0 0-.529.247c-.182.198-.691.677-.691 1.654 0 .977.71 1.916.81 2.049.098.133 1.394 2.132 3.383 2.992.47.205.84.326 1.129.418.475.152.904.129 1.246.08.38-.058 1.171-.48 1.338-.943.164-.464.164-.86.114-.943-.049-.084-.182-.133-.38-.232z"/></svg>';
    $_sms = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;margin-right: 8px;" fill="currentColor" class="bi bi-envelope" viewBox="0 0 16 16"><path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/></svg>';
?>
<div class="modal fade --div-modal-pakal" id="compartir" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

				<h5 class="modal-title mb-3">Compartir publicación en</h5>

                <div class="--cuerpo-overflow-y">
                    <a href="javascript: location.reload();" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?= $_facebook ?> <span>Facebook</span></div></a>
                    <a href="javascript: location.reload();" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?= $_instagram ?> <span>Instagram</span></div></a>
                    <a href="javascript: location.reload();" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?= $_whatsapp ?> <span>WhatsApp</span></div></a>
                    <a href="javascript: location.reload();" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?= $_sms ?> <span>SMS</span></div></a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Debes iniciar sesión
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="iniciar-sesion" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
	<div class="modal-dialog modal-sm">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px;">

                <i class="mdi mdi-login h1 d-block"></i>
				<h5 class="modal-title">Accede a tu cuenta</h5>
				<p class="--p">Para realizar esta acción primero debes ingresar a tu cuenta.</p>

                <button type="button" class="btn btn-sm btn-transparent" data-dismiss="modal">Ahora no</button>
				<a href="<?= $_dominio ?>login.php" class="btn btn-sm btn-primary">Sí, ingresar</a>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Menú Sesión Iniciada
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="menu-sesion-iniciada" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

                <div class="--cuerpo-overflow-y">
                    <a href="<?= $_dominio ?>u/mensajes.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_send_svg ?> Mensajes</div></a>
                    <a href="<?= $_dominio ?>u/notificaciones.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_bell_svg ?> Notificaciones</div></a>
                    <a href="<?= $_dominio ?>u/guardados.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_bookmark_star_svg ?> Guardados</div></a>
                    <a href="<?= $_dominio ?>u/mi-cuenta.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_person_bounding_box_svg ?> Mi&nbsp;cuenta</div></a>
                    <hr style="border-color: #efefef;">
                    <a href="<?= $_dominio ?>centro-de-ayuda.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_patch_question_svg ?> Ayuda</div></a>
                    <a href="<?= $_dominio ?>logout.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_door_open_svg ?> Cerrar sesión</div></a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>
<?php # ---------------------------------------------------------------
# Modal > Menú Sesión  NO  Iniciada
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="menu-sesion-no-iniciada" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

                <div class="--cuerpo-overflow-y">
                    <a href="<?= $_dominio ?>login.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_door_open_svg ?> Inicia sesión</div></a>
                    <a href="<?= $_dominio ?>login-proveedores.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_door_open_fill_svg ?> Acceso proveedor</div></a>
                    <a href="<?= $_dominio ?>registro.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_stars_svg ?> Regístrate</div></a>
                    <hr style="border-color: #efefef;">
                    <a href="<?= $_dominio ?>centro-de-ayuda.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center"><?php echo $_patch_question_svg ?> Ayuda</div></a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Menú Header Breve (registro, login, recuperar-password)
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="menu-header-breve" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog modal-sm  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

                <div class="--cuerpo-overflow-y">
                    <a href="<?= $_dominio ?>registro.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center">Regístrate</div></a>
                    <a href="<?= $_dominio ?>login.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center">Ingresa</div></a>
                    <a href="<?= $_dominio ?>recuperar-password.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center">Olvidé mi contraseña</div></a>
                    <hr style="border-color: #efefef;">
                    <a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100  --seleccionar-idioma-mobile" status="close">
						<div class="d-flex align-items-center">Idioma: Español (MX)</div>
					</a>
                    <div class="--idioma-mobile d-none">
						<ul>
							<li class="btn btn-sm btn-opciones w-100  --active">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/252-mexico.svg"> <span>Español de México</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/226-united-states.svg"> <span>United States English</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/255-brazil.svg"> <span>Portugues do Brasil</span>
							</li>
						</ul>
					</div>
					<a href="javascript: void(0);" class="btn btn-sm btn-opciones w-100  --seleccionar-moneda-mobile" status="close">
						<div class="d-flex align-items-center">Moneda: Peso mexicano (MXN)</div>
					</a>
					<div class="--moneda-mobile d-none">
						<ul>
							<li class="btn btn-sm btn-opciones w-100  --active">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/252-mexico.svg"> <span>MXN - Peso Mexicano</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/226-united-states.svg"> <span>USD - United States Dollar</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/255-brazil.svg"> <span>BRL - Real Brasileiro</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/259-european-union.svg"> <span>EUR - Unión Europea</span>
							</li>
							<li class="btn btn-sm btn-opciones w-100">
								<img src="<?= $_dominio ?>assets/img/international-flags/svg/260-united-kingdom.svg"> <span>GBP - British Pound</span>
							</li>
						</ul>
					</div>
                    <a href="<?= $_dominio ?>centro-de-ayuda.php" class="btn btn-sm btn-opciones w-100"><div class="d-flex align-items-center">Centro de ayuda</div></a>
                </div>

				<button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button>
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Filtros
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="modal-filtros" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

                <div class="--cuerpo-overflow-y pt-2 pt-sm-0">

					<div class="--input" style="justify-content: space-between;">
						<div style="width: calc(50% - 5px);position: relative;">
							<div class="--badge mb-2">Ingreso</div>
							<input type="text" class="form-control  --check-in-modal" style="border: 2px solid #D8D9DD66;"
								id="--outward-date" value="12/08/2022" type="text"
								data-dd-opt-lang="es"
								data-dd-opt-overlay="true"
								data-dd-opt-double-view="true"
								data-dd-opt-expanded-default="true"
								data-dd-opt-expanded-only="true"
								data-dd-opt-min-date="2022/08/12"
								data-dd-opt-min-year="2022"
								data-dd-opt-max-year="2023"
								data-dd-opt-max-date="2023/08/12"
								data-dd-opt-jump="1"
								data-dd-opt-start-from-monday="true"
								data-dd-opt-disabled-days="2022/08/17"
								data-dd-opt-min-range="1" data-dd-opt-max-range="60"
								data-dd-opt-auto-fill="false"
								data-dd-opt-loop-all="false"
								data-dd-opt-loop-years="false"
								data-dd-opt-format="dd/mm/y"
								data-dd-opt-custom-class="pakalstyle">
						</div>
						<div style="width: calc(50% - 5px);position: relative;">
							<div class="--badge mb-2">Salida</div>
							<input type="text" class="form-control  --check-in-modal" style="border: 2px solid #D8D9DD66;"
								id="--return-date" value="12/08/2022" type="text"
								data-dd-opt-lang="es"
								data-dd-opt-overlay="true"
								data-dd-opt-double-view="true"
								data-dd-opt-expanded-default="true"
								data-dd-opt-expanded-only="true"
								data-dd-opt-min-date="2022/08/12"
								data-dd-opt-min-year="2022"
								data-dd-opt-max-year="2023"
								data-dd-opt-max-date="2023/08/12"
								data-dd-opt-jump="1"
								data-dd-opt-start-from-monday="true"
								data-dd-opt-disabled-days="2022/08/17"
								data-dd-opt-min-range="1" data-dd-opt-max-range="60"
								data-dd-opt-auto-fill="false"
								data-dd-opt-loop-all="false"
								data-dd-opt-loop-years="false"
								data-dd-opt-format="dd/mm/y"
								data-dd-opt-custom-class="pakalstyle">
						</div>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Tipo de evento</div>
						<select class="form-control" name="..." id="">
							<option value="Todas las opciones">Todas las opciones</option>
							<option value="Cumpleaños">Cumpleaños</option>
							<option value="Boda">Boda</option>
							<option value="Bautizo">Bautizo</option>
							<option value="Reunión">Reunión</option>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Cantidad de personas</div>
						<select class="form-control" name="..." id="">
							<option value="Hasta 30 personas">Hasta 30 personas</a>
							<option value="Hasta 100 personas">Hasta 100 personas</a>
							<option value="Hasta 200 personas">Hasta 200 personas</a>
							<option value="Hasta 300 personas">Hasta 300 personas</a>
							<option value="+ de 300 personas">+ de 300 personas</a>

							<option value="Todas las opciones">Todas las opciones</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Estado</div>
						<select class="form-control" name="..." id="">
							<option value="Ciudad de México (CDMX)">Ciudad de México (CDMX)</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Municipio</div>
						<select class="form-control" name="..." id="">
							<option value="Ciudad de México (CDMX)">Ciudad de México (CDMX)</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Calificación</div>
						<select class="form-control" name="..." id="">
							<option value="5 estrellas o más">5 estrellas o más</a>
							<option value="4 estrellas o más">4 estrellas o más</a>
							<option value="3 estrellas o más">3 estrellas o más</a>

							<option value="Todas las opciones">Todas las opciones</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Tamaño</div>
						<select class="form-control" name="..." id="">
							<option value="Salón pequeño">Salón pequeño</a>
							<option value="Salón grande">Salón grande</a>

							<option value="Ambas opciones">Ambas opciones</a>
						</select>
					</div>

                </div>

				<button class="btn w-100 btn-primary mb-0 mt-3" style="height: 48px;border-radius: 7px;">Aplicar filtros</button>
				<!-- <button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button> -->
			</div>
		</div>
	</div>
</div>

<?php # ---------------------------------------------------------------
# Modal > Filtros (publicacion.php)
# ------------------------------------------------------------------ ?>
<div class="modal fade --div-modal-pakal" id="modal-nueva-busqueda" tabindex="-1" role="dialog" aria-hidden="true" style="display: none;">
    <div class="modal-dialog  --modal-mobile-bottom">
		<div class="modal-content">
			<div class="modal-body text-center" style="padding: 36px 20px 20px 20px;">

                <div class="--cuerpo-overflow-y pt-2 pt-sm-0">

					<div class="--input" style="justify-content: space-between;">
						<div style="width: calc(50% - 5px);position: relative;">
							<div class="--badge mb-2">Ingreso</div>
							<input type="text" class="form-control  --check-in-modal" style="border: 2px solid #D8D9DD66;"
								id="--outward-date" value="12/08/2022" type="text"
								data-dd-opt-lang="es"
								data-dd-opt-overlay="true"
								data-dd-opt-double-view="true"
								data-dd-opt-expanded-default="true"
								data-dd-opt-expanded-only="true"
								data-dd-opt-min-date="2022/08/12"
								data-dd-opt-min-year="2022"
								data-dd-opt-max-year="2023"
								data-dd-opt-max-date="2023/08/12"
								data-dd-opt-jump="1"
								data-dd-opt-start-from-monday="true"
								data-dd-opt-disabled-days="2022/08/17"
								data-dd-opt-min-range="1" data-dd-opt-max-range="60"
								data-dd-opt-auto-fill="false"
								data-dd-opt-loop-all="false"
								data-dd-opt-loop-years="false"
								data-dd-opt-format="dd/mm/y"
								data-dd-opt-custom-class="pakalstyle">
						</div>
						<div style="width: calc(50% - 5px);position: relative;">
							<div class="--badge mb-2">Salida</div>
							<input type="text" class="form-control  --check-in-modal" style="border: 2px solid #D8D9DD66;"
								id="--return-date" value="12/08/2022" type="text"
								data-dd-opt-lang="es"
								data-dd-opt-overlay="true"
								data-dd-opt-double-view="true"
								data-dd-opt-expanded-default="true"
								data-dd-opt-expanded-only="true"
								data-dd-opt-min-date="2022/08/12"
								data-dd-opt-min-year="2022"
								data-dd-opt-max-year="2023"
								data-dd-opt-max-date="2023/08/12"
								data-dd-opt-jump="1"
								data-dd-opt-start-from-monday="true"
								data-dd-opt-disabled-days="2022/08/17"
								data-dd-opt-min-range="1" data-dd-opt-max-range="60"
								data-dd-opt-auto-fill="false"
								data-dd-opt-loop-all="false"
								data-dd-opt-loop-years="false"
								data-dd-opt-format="dd/mm/y"
								data-dd-opt-custom-class="pakalstyle">
						</div>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Tipo de evento</div>
						<select class="form-control" name="..." id="">
							<option value="Todas las opciones">Todas las opciones</option>
							<option value="Cumpleaños">Cumpleaños</option>
							<option value="Boda">Boda</option>
							<option value="Bautizo">Bautizo</option>
							<option value="Reunión">Reunión</option>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Cantidad de personas</div>
						<select class="form-control" name="..." id="">
							<option value="Hasta 30 personas">Hasta 30 personas</a>
							<option value="Hasta 100 personas">Hasta 100 personas</a>
							<option value="Hasta 200 personas">Hasta 200 personas</a>
							<option value="Hasta 300 personas">Hasta 300 personas</a>
							<option value="+ de 300 personas">+ de 300 personas</a>

							<option value="Todas las opciones">Todas las opciones</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Estado</div>
						<select class="form-control" name="..." id="">
							<option value="Ciudad de México (CDMX)">Ciudad de México (CDMX)</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Municipio</div>
						<select class="form-control" name="..." id="">
							<option value="Ciudad de México (CDMX)">Ciudad de México (CDMX)</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Calificación</div>
						<select class="form-control" name="..." id="">
							<option value="5 estrellas o más">5 estrellas o más</a>
							<option value="4 estrellas o más">4 estrellas o más</a>
							<option value="3 estrellas o más">3 estrellas o más</a>

							<option value="Todas las opciones">Todas las opciones</a>
						</select>
					</div>

					<div class="--select">
						<div class="--badge mb-2">Tamaño</div>
						<select class="form-control" name="..." id="">
							<option value="Salón pequeño">Salón pequeño</a>
							<option value="Salón grande">Salón grande</a>

							<option value="Ambas opciones">Ambas opciones</a>
						</select>
					</div>

                </div>

				<button class="btn w-100 btn-primary mb-0 mt-3" style="height: 48px;border-radius: 7px;">Iniciar búsqueda</button>
				<!-- <button type="button" class="btn btn-sm btn-transparent mt-2 mb-0" data-dismiss="modal">Cerrar ventana</button> -->
			</div>
		</div>
	</div>
</div>