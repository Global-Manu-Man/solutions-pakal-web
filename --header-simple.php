<header class="--simple">
    <div class="--header-simple">

        <?php # Lado izquierdo ?>
        <div class="--lado-izquierdo">
            <img src="<?= $_dominio ?>assets/img/logo-naranja.svg" alt="Pakal logo">
        </div>

        <?php # Centro ?>
        <div class="--lado-centro">
            
        </div>

        <?php # Lado derecho ?>
        <div class="--lado-derecho">
            <div class="--nueva-busqueda" data-toggle="modal" data-target="#modal-nueva-busqueda">
                <input type="text" placeholder="Realizar una búsqueda" class="mb-0 form-control" readonly="">
                <a>
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </a>
            </div>
            <div class="position-relative">
                <button type="button" class="btn --profile d-sm-none" data-toggle="modal" data-target="#menu-sesion-iniciada">
                    <img src="<?= $_dominio ?>assets/img/hamburguer.svg" class="--hamburguer" alt="">
                    <img src="<?= $_dominio ?>assets/img/avatar-female-3.jpg" class="--profile-image" alt="">
                </button>
                <button type="button" class="btn --profile d-none d-sm-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= $_dominio ?>assets/img/hamburguer.svg" class="--hamburguer" alt="">
                    <img src="<?= $_dominio ?>assets/img/avatar-female-3.jpg" class="--profile-image" alt="">
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $_dominio ?>u/mensajes.php"><?php echo $_send_svg ?> Mensajes</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>u/notificaciones.php"><?php echo $_bell_svg ?> Notificaciones</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>u/guardados.php"><?php echo $_bookmark_star_svg ?> Guardados</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>u/mi-cuenta.php"><?php echo $_person_bounding_box_svg ?> Mi&nbsp;cuenta</a>
                    <hr class="my-1" style="border-color: #efefef;">
                    <a class="dropdown-item" href="<?= $_dominio ?>centro-de-ayuda.php"><?php echo $_patch_question_svg ?> Ayuda</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>logout.php"><?php echo $_door_open_svg ?> Cerrar sesión</a>
                </div>
            </div>
        </div>

    </div>
</header>