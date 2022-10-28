<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-breve.php'); ?>

<main id="recuperar-password" class="--registro-login-recuperar">

    <section class="py-0">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php # ---------------------------------------------------------------------
                # Formulario
                # ------------------------------------------------------------------------ ?>
                <div class="col-12 d-flex --min-height-breve">

                    <div class="m-auto" style="max-width: 490px;width: 100%;">
                        <h2><strong>Olvidé mi contraseña</strong></h2>
                        <h5 class="mb-3">Ingresa tu email y te enviaremos una nueva contraseña.</h5>

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
                                    <p class="mb-2"><i class="mdi mdi-alert text-warning"></i> No olvides revisar la <span style="text-decoration: underline solid #ffc107;">bandeja de spam</span> de tu correo electrónico.</p>
                                </div>
                            </div>

                            <div class="d-flex mt-2 align-items-center">
                                <div class="col-6 col-sm-8 pl-0" style="color: #454545;line-height: 1.4;">
                                    ¿Ya recordaste tu contraseña? <a href="<?= $_dominio ?>login.php">Ingresa</a>
                                </div>
                                <div class="col-6 col-sm-4 pr-0 text-right">
                                    <a href="javascript: void(0);" class="btn btn-primary mb-0" style="min-width: 150px;">Recuperar cuenta</a>
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