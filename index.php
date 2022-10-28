<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-principal.php'); ?>

<?php
    $_star_svg = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 14px;height: 14px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';
    // $_filter_svg = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;height: 16px;" fill="currentColor" class="bi bi-filter-right" viewBox="0 0 16 16"><path d="M14 10.5a.5.5 0 0 0-.5-.5h-3a.5.5 0 0 0 0 1h3a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-7a.5.5 0 0 0 0 1h7a.5.5 0 0 0 .5-.5zm0-3a.5.5 0 0 0-.5-.5h-11a.5.5 0 0 0 0 1h11a.5.5 0 0 0 .5-.5z"/></svg>';
    $_filter_svg = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 16px;height: 16px;" fill="currentColor" class="bi bi-filter" viewBox="0 0 16 16"><path d="M6 10.5a.5.5 0 0 1 .5-.5h3a.5.5 0 0 1 0 1h-3a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 0 1h-7a.5.5 0 0 1-.5-.5zm-2-3a.5.5 0 0 1 .5-.5h11a.5.5 0 0 1 0 1h-11a.5.5 0 0 1-.5-.5z"/></svg>';
?>
<main id="--home">

<section class="pt-0">
    <div class="container" style="max-width: 1360px;">
        
        <?php # -----------------------------------------------------------------------
        # Filtros
        # -------------------------------------------------------------------------- ?>
        <div class="--div-filtros mb-4 mt-3">
            <div class="--filtros-desplegables">

                <div class="btn-group">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownTipoDeEvento" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Reuniones
                    </button>
                    <span class="--badge-filtro">Tipo de evento</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownTipoDeEvento">
                        <a class="dropdown-item" href="javascript: void(0);">Cumpleaños</a>
                        <a class="dropdown-item" href="javascript: void(0);">Boda</a>
                        <a class="dropdown-item" href="javascript: void(0);">Bautizo</a>
                        <a class="dropdown-item" href="javascript: void(0);">Reuniones</a>

                        <a class="dropdown-item" href="javascript: void(0);">Todas las opciones</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownMotivoDeLaCelebracion" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        Cumpleaños
                    </button>
                    <span class="--badge-filtro">Motivo de la celebración</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownMotivoDeLaCelebracion">
                        <a class="dropdown-item" href="javascript: void(0);">Cumpleaños</a>
                        <a class="dropdown-item" href="javascript: void(0);">Reuniones</a>
                        <a class="dropdown-item" href="javascript: void(0);">Bodas</a>

                        <a class="dropdown-item" href="javascript: void(0);">Todas las opciones</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownCantidadDePersonas" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        Más de 300 personas
                    </button>
                    <span class="--badge-filtro">Cantidad de personas</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownCantidadDePersonas">
                        <a class="dropdown-item" href="javascript: void(0);">Hasta 30 personas</a>
                        <a class="dropdown-item" href="javascript: void(0);">Hasta 100 personas</a>
                        <a class="dropdown-item" href="javascript: void(0);">Hasta 200 personas</a>
                        <a class="dropdown-item" href="javascript: void(0);">Hasta 300 personas</a>
                        <a class="dropdown-item" href="javascript: void(0);">+ de 300 personas</a>

                        <a class="dropdown-item" href="javascript: void(0);">Todas las opciones</a>
                    </div>
                </div>

                <div class="btn-group">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownEstado" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        Ciudad de México (CDMX)
                    </button>
                    <span class="--badge-filtro">Estado</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownEstado">
                        <a class="dropdown-item" href="javascript: void(0);">Ciudad de México (CDMX)</a>
                    </div>
                </div>

                <?php /* <div class="btn-group">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownMunicipio" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        Incluir todos
                    </button>
                    <span class="--badge-filtro">Municipio</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownMunicipio">
                        <a class="dropdown-item" href="javascript: void(0);">...</a>
                        <a class="dropdown-item" href="javascript: void(0);">...</a>
                        <a class="dropdown-item" href="javascript: void(0);">...</a>
                    </div>
                </div> */ ?>

                <div class="btn-group --btn-group-dropdownCalificacion">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownCalificacion" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        4 estrellas o más
                    </button>
                    <span class="--badge-filtro">Calificación</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownCalificacion">
                        <a class="dropdown-item" href="javascript: void(0);">5 estrellas o más</a>
                        <a class="dropdown-item" href="javascript: void(0);">4 estrellas o más</a>
                        <a class="dropdown-item" href="javascript: void(0);">3 estrellas o más</a>

                        <a class="dropdown-item" href="javascript: void(0);">Todas las opciones</a>
                    </div>
                </div>

                <div class="btn-group --btn-group-dropdownTamano">
                    <button class="btn --btn-filtro-dropdown dropdown-toggle" id="dropdownTamano" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false"  style="min-width: 150px;">
                        Salón pequeño
                    </button>
                    <span class="--badge-filtro">Tamaño</span>
                    <div class="dropdown-menu --arrow-top" aria-labelledby="dropdownTamano">
                        <a class="dropdown-item" href="javascript: void(0);">Salón pequeño</a>
                        <a class="dropdown-item" href="javascript: void(0);">Salón grande</a>

                        <a class="dropdown-item" href="javascript: void(0);">Ambas opciones</a>
                    </div>
                </div>

            </div>
            <div class="--div-btn-filtros">
                <button class="btn --btn-filtros" data-toggle="modal" data-target="#modal-filtros"><?= $_filter_svg ?> <span>Filtros</span></button>
            </div>
        </div>

        <?php # -----------------------------------------------------------------------
        # Row Cards
        # -------------------------------------------------------------------------- ?>
        <div class="row  --home-row-cards">
        
            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/prepared-wedding-hall_8353-9873.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>5.0</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">185 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$8,500 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/close-up-shiny-glassware-standing-dinner-plate_8353-664.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salón de Eventos Monterrey</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>3.8</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">64 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$8,300 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/beautiful-view-restaurant-with-tables_8353-9878.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$26,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/table-decorated-candles-romantic-party_8353-3332.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$34,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/luxurious-dinner-hall-with-large-crystal-chandelier_8353-565.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$17,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/decorated-hall-event_8353-10238.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$9,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/decorated-wedding-hall-with-candles-round-tables-centerpieces_8353-10057.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salón de Eventos Juan Pérez</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>4.7</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">100 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$15,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/beautiful-photozone-with-big-wreath-decorated-with-greenery-roses-centerpiece-candles-sides-garland-hanged-trees_8353-11019.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salón de Eventos Monterrey</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>3.8</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">64 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$8,300 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/decorated-banquet-hall-with-served-round-table-with-hydrangea-centerpiece-chiavari-chairs_8353-10059.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>5.0</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">185 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$17,500 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/front-view-wedding-couple-s-hands-with-champagne-glasses-wedding-bouquet_8353-11126.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$34,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/silhouette-young-lady-crowd-during-concert_181624-27673.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$34,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/waiting-room-with-monitors_1232-1390.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salón de Eventos Juan Pérez</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>4.7</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">100 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$15,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/people-having-fun-wedding-hall_1303-19593.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salón de Eventos Monterrey</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>3.8</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">64 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$8,300 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/bows-rope-twine-pink-bouquets-white-chairs_8353-793.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>5.0</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">185 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$17,500 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/abstract-blurred-people-seminar-event-background_1439-7.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$34,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>

            <div class="--col-card col-sm-6 col-lg-4 col-xl-3">
                <div class="--card">
                    <a href="<?= $_dominio ?>publicacion.php" class="--img">
                        <img src="<?= $_dominio ?>assets/img/people-concert_1160-737.jpg">
                    </a>
                    <div class="--textos">
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-1">
                            <div class="--titulo">Salon De Fiestas Eventos</div>
                            <div class="--calificacion-promedio"><?= $_star_svg ?> <span>Nuevo</span></div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-2">
                            <div class="--ubicacion">Monterrey, Nueva León</div>
                            <div class="--cantidad-personas">270 pers.</div>
                        </a>
                        <a href="<?= $_dominio ?>publicacion.php" class="--linea-3">
                            <div>$34,000 en adelante</div>
                        </a>
                    </div>
                </div>
            </div>



            


            
            

        </div>
    </div>
    


    
</section>

</main>
<?php include_once(__DIR__.'/--header-principal.php'); ?>
<?php include_once(__DIR__.'/--footer.php'); ?>

</html>