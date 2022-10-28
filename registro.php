<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-breve.php'); ?>

<main id="registro" class="--registro-login-recuperar">

    <section class="py-0">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php # ---------------------------------------------------------------------
                # Formulario
                # ------------------------------------------------------------------------ ?>
                <div class="col-12 d-flex --min-height-breve mt-4 mt-lg-5 mb-5">

                    <div class="m-auto" style="max-width: 490px;width: 100%;">
                        <h2><strong>Únete ahora a Pakal</strong></h2>
                        <h5 class="mb-3">Líder en alquiler de salones para eventos en México.</h5>

                        <form action="#" method="post">

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Nombre completo</p>
                                    <span class="form-group">
                                        <input type="text" class="form-control" placeholder="Ej. Juan Ignacio Pérez" name="..." />
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Correo electrónico</p>
                                    <span class="form-group">
                                        <input type="email" class="form-control" placeholder="Ej. juanperez@gmail.com" name="..." />
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Contraseña</p>
                                    <span class="form-group">
                                        <div class="--div-password-eye" status="password">
                                            <a><span class="mdi mdi-eye text-body"></span></a>
                                        </div>
                                        <input type="password" class="form-control  --password" placeholder="*********" name="..." />
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Alias</p>
                                    <span class="form-group">
                                        <div class="--alias-message">
                                            <a><span class="mdi mdi-information-outline text-body"></span></a>
                                        </div>
                                        <select class="form-control" name="..." id="" style="height: 41.6px;padding-left: 11px;margin-bottom: 8px;">
                                            <option value="">Selecciona una opción</option>
                                            <option value="proveedor">Proveedor</option>
                                            <option value="cliente">Cliente</option>
                                        </select>
                                    </span>
                                </div>
                            </div>

                            <?php
                                $svg_info = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 12px;height: 12px;vertical-align: -1px;" fill="#FF8A15" class="bi bi-info-circle-fill" viewBox="0 0 16 16">
                                    <path d="M8 16A8 8 0 1 0 8 0a8 8 0 0 0 0 16zm.93-9.412-1 4.705c-.07.34.029.533.304.533.194 0 .487-.07.686-.246l-.088.416c-.287.346-.92.598-1.465.598-.703 0-1.002-.422-.808-1.319l.738-3.468c.064-.293.006-.399-.287-.47l-.451-.081.082-.381 2.29-.287zM8 5.5a1 1 0 1 1 0-2 1 1 0 0 1 0 2z"/>
                                </svg>';
                                $svg_info = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 12px;height: 12px;vertical-align: -1px;" fill="#FF8A15" class="bi bi-info-circle" viewBox="0 0 16 16">
                                    <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                    <path d="m8.93 6.588-2.29.287-.082.38.45.083c.294.07.352.176.288.469l-.738 3.468c-.194.897.105 1.319.808 1.319.545 0 1.178-.252 1.465-.598l.088-.416c-.2.176-.492.246-.686.246-.275 0-.375-.193-.304-.533L8.93 6.588zM9 4.5a1 1 0 1 1-2 0 1 1 0 0 1 2 0z"/>
                                </svg>';
                            ?>

                            <div class="d-flex mb-4 mb-lg-0">
                                <div class="col-12 px-0">
                                    <p class="mb-2  --p-alias d-none">
                                        Elige <span style="text-decoration: underline solid #FF8A15;">proveedor</span> si quieres anunciar tu salón o elige <span style="text-decoration: underline solid #FF8A15;">cliente</span> si buscas alquilar uno.
                                    </p>
                                </div>
                            </div>                            

                            <div class="d-flex mt-2 align-items-center">
                                <div class="col-6 pl-0" style="color: #454545;line-height: 1.4;">
                                    ¿Tienes una cuenta? <a href="<?= $_dominio ?>login.php">Ingresa</a>
                                </div>
                                <div class="col-6 pr-0 text-right">
                                    <a href="javascript: void(0);" class="btn btn-primary mb-0" style="min-width: 150px;">Crear cuenta</a>
                                </div>
                            </div>

                            <div class="divider my-3"><span class="p-3">o regístrate usando</span></div>

                            <div class="d-flex mt-3 align-items-center  --buttons-auth">
                                <div class="col-md-4 text-left px-0">
                                    <a href="#!" class="btn btn-google mb-0">Google</a>
                                </div>
                                <div class="col-md-4 text-center px-0">
                                    <a href="#!" class="btn btn-facebook mb-0">Facebook</a>
                                </div>
                                <div class="col-md-4 text-right px-0">
                                    <a href="#!" class="btn btn-amazon mb-0">Amazon</a>
                                </div>
                            </div>

                            <div class="d-flex" style="margin-top: 0.6rem;">
                                <div class="col-12 px-0">
                                    <p class="mt-2" style="font-size: 11.5px;"><i class="mdi mdi-check-circle-outline"></i> Al registrarte aceptas nuestros <a href="<?= $_dominio ?>terminos-y-condiciones-de-uso" target="_blank">Términos</a> y <a href="<?= $_dominio ?>politicas-de-privacidad" target="_blank">Políticas de Privacidad</a>.</p>
                                </div>
                            </div>

                        </form>

                    </div>

                </div>

            </div>
        </div>
    </section>
    
</main>

<?php include_once(__DIR__.'/--modales.php'); ?>
<?php include_once(__DIR__.'/--scripts.php'); ?>

</html>