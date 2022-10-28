<header class="--breve">
    <div class="--header-breve">
        <?php # Lado izquierdo ?>
        <div class="--lado-izquierdo">
            <ul>
                <?php # -------------------------------------------------------------------
                # La class "--active" hace que la palabra esté subrayada en naranja
                # ---------------------------------------------------------------------- ?>
                <li><a href="<?= $_dominio ?>registro.php">Regístrate</a></li>
                <li><a href="<?= $_dominio ?>login.php" class="--active">Ingresa</a></li>
                <li><a href="<?= $_dominio ?>recuperar-password.php">Olvidé&nbsp;mi&nbsp;contraseña</a></li>
            </ul>
        </div>

        <?php # Centro ?>
        <div class="--lado-centro">
            <img src="<?= $_dominio ?>assets/img/logo-naranja.svg" alt="Pakal logo">
        </div>

        <?php # Lado derecho ?>
        <div class="--lado-derecho">
            <ul class="d-none d-lg-flex">
                <li><a class="--dropdown" data-toggle="modal" data-target="#opciones-idioma">Español (MX)</a></li>
                <li><a data-toggle="modal" data-target="#opciones-moneda">MXN</a></li>
                <li><a href="<?= $_dominio ?>centro-de-ayuda.php">Centro&nbsp;de&nbsp;ayuda</a></li>
            </ul>
            <button type="button" class="btn d-lg-none --profile" data-toggle="modal" data-target="#menu-header-breve">
                <img src="<?= $_dominio ?>assets/img/hamburguer.svg" class="--hamburguer" alt="">
            </button>
        </div>
    </div>
</header>