<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-breve.php'); ?>

<main id="password-nuevo" class="--registro-login-recuperar">

    <section class="py-0">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php # ---------------------------------------------------------------------
                # Formulario
                # ------------------------------------------------------------------------ ?>
                <div class="col-12 d-flex --min-height-breve">

                    <div class="m-auto" style="max-width: 490px;width: 100%;">
                        <h2 class="mb-3"><strong>Ingresa una nueva contraseña</strong></h2>

                        <form action="#" method="post" class="mb-5">

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Contraseña</p>
                                    <span class="form-group">
                                        <div class="--div-password-eye" status="password">
                                            <a><span class="mdi mdi-eye text-body"></span></a>
                                        </div>
                                        <input type="password" class="form-control  --password" placeholder="*********" name="..."/>
                                    </span>
                                </div>
                            </div>

                            <?php # ----------------------------------------------------------------------
                            # Como ya tiene el ojo, este campo mejor lo saco porque es excesivo
                            # ------------------------------------------------------------------------- ?>
                            <?php /*
                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Repetir contraseña</p>
                                    <span class="form-group">
                                        <div class="--div-password-eye" status="password">
                                            <a><span class="mdi mdi-eye text-body"></span></a>
                                        </div>
                                        <input type="password" class="form-control mb-0  --password" placeholder="*********" name="..."/>
                                    </span>
                                </div>
                            </div> */ ?>

                            <div class="d-flex align-items-center">
                                <div class="col-6 pl-0 pr-0">
                                    <div style="color: #454545;font-size: 13px;line-height: 1.4;"><i class="mdi mdi-information-outline text-warning"></i> Accederás a tu cuenta con esta contraseña.</div>
                                </div>
                                <div class="col-6 pr-0 text-right">
                                    <a href="javascript: void(0);" class="btn btn-primary mb-0" style="min-width: 150px;">Actualizar</a>
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