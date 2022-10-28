<header class="--principal">
    <div class="--header-principal">
        <?php # Lado izquierdo ?>
        <div class="--lado-izquierdo">
            <img src="<?= $_dominio ?>assets/img/logo-naranja.svg" alt="Pakal logo">
        </div>

        <?php # Centro ?>
        <div class="--lado-centro">
            <div class="d-flex align-items-center">
                <div class="--item-busqueda  --ubicacion">
                    <div class="--fijo" style="left: 0;">México</div>
                    <div class="--variable pl-0" data-toggle="tooltip" data-placement="bottom" title="No hay más opciones">Ciudad de México (CDMX)</div>
                    <!-- <div class="--variable pl-0" data-toggle="modal" data-target="#ubicacion">Ciudad de México (CDMX)</div> -->
                </div>
                <div class="--item-busqueda  --check-in">
                    <div class="--fijo">Ingreso</div>
                    <input data-toggle="tooltip" data-placement="bottom" title="Fecha de ingreso" 
                        class="--variable --check-in-variable" id="outward-date" value="12/08/2022" type="text"
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
                <div class="--item-busqueda  --check-out">
                    <div class="--fijo">Salida</div>
                    <input data-toggle="tooltip" data-placement="bottom" title="Fecha de salida" 
                        class="--variable --check-in-variable" id="return-date" value="12/08/2022" type="text"
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
                <div class="--item-busqueda  --cantidad-personas">
                    <div class="--fijo">Hasta</div>
                    <div class="--variable" data-toggle="modal" data-target="#cantidad-personas">200 personas</div>
                </div>
                <a class="--search-button">
                    <svg xmlns="http://www.w3.org/2000/svg" style="height: 14px;" fill="#fff" class="bi bi-search" viewBox="0 0 16 16">
                        <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                    </svg>
                </a>
            </div>
        </div>

        <?php # Lado derecho ?>
        <div class="--lado-derecho">
            <button type="button" class="btn mb-0 d-lg-none" data-toggle="modal" data-target="#modal-filtros">
                <svg xmlns="http://www.w3.org/2000/svg" style="height: 20px;" fill="#ff8a15" class="bi bi-search" viewBox="0 0 16 16">
                    <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                </svg>
            </button>
            <div class="position-relative">
                <button type="button" class="btn --profile d-sm-none" data-toggle="modal" data-target="#menu-sesion-no-iniciada">
                    <img src="<?= $_dominio ?>assets/img/hamburguer.svg" class="--hamburguer" alt="">
                    <img src="<?= $_dominio ?>assets/img/003i.svg" class="--profile-image" alt="">
                </button>
                <button type="button" class="btn --profile d-none d-sm-block" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img src="<?= $_dominio ?>assets/img/hamburguer.svg" class="--hamburguer" alt="">
                    <img src="<?= $_dominio ?>assets/img/003i.svg" class="--profile-image" alt="">
                </button>

                <div class="dropdown-menu">
                    <a class="dropdown-item" href="<?= $_dominio ?>login.php"><?php echo $_door_open_svg ?> Inicia sesión</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>login-proveedor.php"><?php echo $_door_open_fill_svg ?> Acceso proveedor</a>
                    <a class="dropdown-item" href="<?= $_dominio ?>registro.php"><?php echo $_stars_svg ?> Regístrate</a>
                    <hr class="my-1" style="border-color: #efefef;">
                    <a class="dropdown-item" href="<?= $_dominio ?>centro-de-ayuda.php"><?php echo $_patch_question_svg ?> Ayuda</a>
                </div>
            </div>
        </div>
    </div>
</header>