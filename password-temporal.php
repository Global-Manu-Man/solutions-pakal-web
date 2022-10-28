<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-breve.php'); ?>

<main id="password-temporal" class="--registro-login-recuperar">

    <section class="py-0">
        <div class="container-fluid">
            <div class="row align-items-center">

                <?php # ---------------------------------------------------------------------
                # Formulario
                # ------------------------------------------------------------------------ ?>
                <div class="col-12 d-flex --min-height-breve">

                    <div class="m-auto" style="max-width: 490px;width: 100%;">
                        <h2><strong>Ya casi terminamos</strong></h2>
                        <h5 class="mb-3">Ingresa la contraseña provisoria que enviamos a tu correo.</h5>

                        <form action="#" method="post" class="mb-5">

                            <div class="d-flex">
                                <div class="col-12 px-0">
                                    <p class="mb-2">Contraseña</p>
                                    <span class="form-group">
                                        <div class="--div-password-eye" status="password">
                                            <a><span class="mdi mdi-eye text-body"></span></a>
                                        </div>
                                        <input type="password" class="form-control mb-0  --password" placeholder="*********" name="..."/>
                                    </span>
                                </div>
                            </div>

                            <div class="d-flex mt-3 align-items-center">
                                <div class="col-6 col-sm-8 pl-0">
                                    <div style="color: #454545;font-size: 13px;line-height: 1.4;"><i class="mdi mdi-information-outline text-warning"></i> Escribe la contraseña y luego toca el botón</div>
                                </div>
                                <div class="col-6 col-sm-4 pr-0 text-right">
                                    <a href="javascript: void(0);" class="btn btn-primary mb-0" style="min-width: 150px;">Continuar</a>
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