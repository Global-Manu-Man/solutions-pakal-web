<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-breve.php'); ?>

<main id="login" class="--registro-login-recuperar">

    <section class="py-0">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php # ---------------------------------------------------------------------
                # Formulario
                # ------------------------------------------------------------------------ ?>
                <div class="col-12 d-flex --min-height-breve">

                    <div class="m-auto">
                        <h2>¡Bienvenido a Penta!</h2>
                        <br>
                        <br>
                        <h5 class="mb-3">Ingresa tus credenciales para acceder a tu cuenta.</h5>
                        <form action="#" method="post" class="mb-5">

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Correo electrónico</p>
                                    <span class="form-group">
                                        <input type="text" class="form-control" placeholder="Ej. juanperez@gmail.com" name="..." />
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
                                        <input type="password" class="form-control mb-0  --password" placeholder="*********" name="..." />
                                    </span>
                                    <small class="d-block text-right mt-2"><a href="<?= $_dominio ?>recuperar-password.php" class="--olvide-mi-contrasena">Olvidé mi contraseña</a></small>
                                </div>
                            </div>

                            <div class="d-flex mt-3 align-items-center">
                                <div class="col-6 pl-0" style="color: #454545;line-height: 1.4;">
                                    ¿No tienes una cuenta? <a href="<?= $_dominio ?>registro.php">Regístrate</a>
                                </div>
                                <div class="col-6 pr-0 text-right">
                                    <a class="btn btn-primary mb-0" style="min-width: 150px;">Ingresa ahora</a>
                                </div>
                            </div>

                            <div class="divider my-3"><span class="p-3">o ingresa usando</span></div>

                            <div class="d-flex mt-3 align-items-center  --buttons-auth">
                                <div class="col-md-4 text-left px-0">
                                    <a href="javascript: void(0);" class="btn btn-google mb-0">Google</a>
                                </div>
                                <div class="col-md-4 text-center px-0">
                                    <a href="javascript: void(0);" class="btn btn-facebook mb-0">Facebook</a>
                                </div>
                                <div class="col-md-4 text-right px-0">
                                    <a href="javascript: void(0);" class="btn btn-amazon mb-0">Amazon</a>
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