<?php include_once(__DIR__.'/--head.php'); ?>
<?php include_once(__DIR__.'/--header-simple.php'); ?>

<?php
    $_star_svg = '<svg xmlns="http://www.w3.org/2000/svg" style="width: 12px;height: 12px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';
    $_star_svg_bottom = '<svg xmlns="http://www.w3.org/2000/svg" style="height: 17px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';
    $_star_svg_right = '<svg xmlns="http://www.w3.org/2000/svg" style="height: 12px;" fill="currentColor" class="bi bi-star-fill" viewBox="0 0 16 16"><path d="M3.612 15.443c-.386.198-.824-.149-.746-.592l.83-4.73L.173 6.765c-.329-.314-.158-.888.283-.95l4.898-.696L7.538.792c.197-.39.73-.39.927 0l2.184 4.327 4.898.696c.441.062.612.636.282.95l-3.522 3.356.83 4.73c.078.443-.36.79-.746.592L8 13.187l-4.389 2.256z"/></svg>';

    $_compartir = '<svg xmlns="http://www.w3.org/2000/svg" style="height: 12px;margin-right: 4px;" fill="currentColor" class="bi bi-share" viewBox="0 0 16 16"><path d="M13.5 1a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zM11 2.5a2.5 2.5 0 1 1 .603 1.628l-6.718 3.12a2.499 2.499 0 0 1 0 1.504l6.718 3.12a2.5 2.5 0 1 1-.488.876l-6.718-3.12a2.5 2.5 0 1 1 0-3.256l6.718-3.12A2.5 2.5 0 0 1 11 2.5zm-8.5 4a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3zm11 5.5a1.5 1.5 0 1 0 0 3 1.5 1.5 0 0 0 0-3z"/></svg>';
    $_guardar = '<svg xmlns="http://www.w3.org/2000/svg" style="height: 12px;margin-right: 4px;" fill="currentColor" class="bi bi-bookmark-star" viewBox="0 0 16 16"><path d="M7.84 4.1a.178.178 0 0 1 .32 0l.634 1.285a.178.178 0 0 0 .134.098l1.42.206c.145.021.204.2.098.303L9.42 6.993a.178.178 0 0 0-.051.158l.242 1.414a.178.178 0 0 1-.258.187l-1.27-.668a.178.178 0 0 0-.165 0l-1.27.668a.178.178 0 0 1-.257-.187l.242-1.414a.178.178 0 0 0-.05-.158l-1.03-1.001a.178.178 0 0 1 .098-.303l1.42-.206a.178.178 0 0 0 .134-.098L7.84 4.1z"/><path d="M2 2a2 2 0 0 1 2-2h8a2 2 0 0 1 2 2v13.5a.5.5 0 0 1-.777.416L8 13.101l-5.223 2.815A.5.5 0 0 1 2 15.5V2zm2-1a1 1 0 0 0-1 1v12.566l4.723-2.482a.5.5 0 0 1 .554 0L13 14.566V2a1 1 0 0 0-1-1H4z"/></svg>';
?>

<main id="--publicacion">

    <section class="pt-0 pb-5 pb-sm-4">
        <div class="container">
            
            <?php # --------------------------------------------------------
            # Top Datos
            # ----------------------------------------------------------- ?>
            <div class="row">
                <div class="col-12">
                    <h1 class="--titulo">Centro Veracruzano Coyoacán</h1>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div clasS="--top-datos">
                        <span class="--promedio-estrellas"><?= $_star_svg ?> <span>4.7</span></span>
                        <a href="#--resenas" class="--ver-resenas scroll_50" data-toggle="tooltip" data-placement="bottom" title="Ver reseñas">32 reseñas</a>
                        <span>Ciudad de México (CDMX)</span>
                    </div>
                </div>
            </div>

            <?php # --------------------------------------------------------
            # 5 Imágenes
            # ----------------------------------------------------------- ?>
            <div class="row mt-3 position-relative  --row-5-imagenes">
                <div class="col-md-6">
                    <img class="h-100" src="<?= $_dominio ?>assets/img/celebration-hall-with-full-guests_8353-10399.jpg" alt="" 
                        data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/celebration-hall-with-full-guests_8353-10399.jpg">
                </div>
                <div class="col-md-6 pl-md-0">
                    <div class="--4-imagenes">
                        <div style="margin-bottom: 8px;">
                            <img style="margin-right: 8px;" src="<?= $_dominio ?>assets/img/people-festival_1160-736.jpg" alt=""
                                data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/people-festival_1160-736.jpg">
                            <img style="margin-left: 8px;" src="<?= $_dominio ?>assets/img/bouquet-with-flowers-greenery-decorated-stand-feast-table_8353-11471.jpg" alt=""
                                data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/bouquet-with-flowers-greenery-decorated-stand-feast-table_8353-11471.jpg">
                        </div>
                        <div style="margin-top: 8px;">
                            <img style="margin-right: 8px;" src="<?= $_dominio ?>assets/img/beautiful-photozone-with-big-wreath-decorated-with-greenery-roses-centerpiece-candles-sides-garland-hanged-trees_8353-11019.jpg" alt=""
                                data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/beautiful-photozone-with-big-wreath-decorated-with-greenery-roses-centerpiece-candles-sides-garland-hanged-trees_8353-11019.jpg">
                            <img style="margin-left: 8px;" src="<?= $_dominio ?>assets/img/rose-petals-cover-green-garden-ready-traditional-hindu-weddi_8353-8879.jpg" alt=""
                                data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/rose-petals-cover-green-garden-ready-traditional-hindu-weddi_8353-8879.jpg">
                        </div>
                        <?php # -------------------------------------------------------------------------
                        # Estas imágenes permanecen ocultas; no cargan hasta que el usuario abre
                        # la galería de imágenes y empieza a cargarlas a medida que las va viendo
                        # ---------------------------------------------------------------------------- ?>
                        <div class="d-none">
                            <a data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/front-view-wedding-couple-s-hands-with-champagne-glasses-wedding-bouquet_8353-11126.jpg"></a>
                            <a data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/decorated-wedding-hall-with-candles-round-tables-centerpieces_8353-10057.jpg"></a>
                            <a data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/silhouette-young-lady-crowd-during-concert_181624-27673.jpg"></a>
                            <a data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/decorated-banquet-hall-with-served-round-table-with-hydrangea-centerpiece-chiavari-chairs_8353-10059.jpg"></a>
                        </div>
                    </div>
                </div>
                <button class="btn align-items-center --button-ver-todas-las-imagenes d-none" data-fancybox="imagenes" data-src="<?= $_dominio ?>assets/img/candy-bar-with-variety-sweets-holiday_8353-11473.jpg">
                    <span class="d-flex mr-2">
                        <!-- <svg xmlns="http://www.w3.org/2000/svg" style="height: 12px;stroke: black;" fill="currentColor" class="bi bi-arrows-angle-expand" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707z"/>
                        </svg> -->
                        <svg xmlns="http://www.w3.org/2000/svg" style="height: 12px;stroke: black;" fill="currentColor" class="bi bi-arrows-fullscreen" viewBox="0 0 16 16">
                        <path fill-rule="evenodd" d="M5.828 10.172a.5.5 0 0 0-.707 0l-4.096 4.096V11.5a.5.5 0 0 0-1 0v3.975a.5.5 0 0 0 .5.5H4.5a.5.5 0 0 0 0-1H1.732l4.096-4.096a.5.5 0 0 0 0-.707zm4.344 0a.5.5 0 0 1 .707 0l4.096 4.096V11.5a.5.5 0 1 1 1 0v3.975a.5.5 0 0 1-.5.5H11.5a.5.5 0 0 1 0-1h2.768l-4.096-4.096a.5.5 0 0 1 0-.707zm0-4.344a.5.5 0 0 0 .707 0l4.096-4.096V4.5a.5.5 0 1 0 1 0V.525a.5.5 0 0 0-.5-.5H11.5a.5.5 0 0 0 0 1h2.768l-4.096 4.096a.5.5 0 0 0 0 .707zm-4.344 0a.5.5 0 0 1-.707 0L1.025 1.732V4.5a.5.5 0 0 1-1 0V.525a.5.5 0 0 1 .5-.5H4.5a.5.5 0 0 1 0 1H1.732l4.096 4.096a.5.5 0 0 1 0 .707z"/>
                        </svg>
                    </span>
                    <span>Ver todas las imágenes</span>
                </button>

                
            </div>

            <?php # --------------------------------------------------------
            # Left y Right
            # ----------------------------------------------------------- ?>
            <div class="row">

                <?php # --------------------------------------------------------
                # Left
                # ----------------------------------------------------------- ?>
                <div class="col-md-12 col-lg-7 align-self-start">

                    <?php # --------------------------------------------------------
                    # Info section 1
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-1">
                        <div class="--div-1">
                            <div class="--pretitle">Líder del Evento</div>
                            <h2 class="--lider-nombre">María Esmeralda Ramirez Salgado</h2>
                            <div class="--datos">Casamiento · Salón pequeño · Hasta 150 personas</div>
                        </div>
                        <div class="--div-2">
                            <img src="<?= $_dominio ?>assets/img/avatar-female-3.jpg" alt="">
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 2
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-2">
                        <div class="--div-1">
                            <div class="---div-1">
                                <img src="<?= $_dominio ?>assets/img/badge-star-1a.svg" alt="">
                            </div>
                            <div class="---div-2">
                                <h4>María Esmeralda lleva 11 meses en nuestro sitio</h4>
                                <p>En estos meses ha alquilado, a través de PakalApp, salones para 35 eventos y tiene a la fecha una calificación promedio de 4.7 estrellas entre las 32 reseñas que dejaron sus clientes.</p>
                            </div>
                        </div>

                        <div class="--div-2">
                            <div class="---div-1">
                                <img src="<?= $_dominio ?>assets/img/pin-location.svg" alt="">
                            </div>
                            <div class="---div-2">
                                <h4>Lugar fantástico</h4>
                                <p>El 87% de los últimos clientes calificaron este lugar con 5 estrellas.</p>
                            </div>
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 3
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-3">
                        <div class="--div-1">
                            <h3>Información</h3>
                            <p>Centro Veracruzano Coyoacán (antes Centro Cultural y Social Veracruzano) es un espacio que desde algunos años ofrece sus increíbles instalaciones y sus excelentes servicios para la celebración de eventos especiales como su boda, contando con una ubicación privilegiada, a dos cuadras del Centro de Coyoacán. A su disposición pondrán un portafolio que se ajustará a sus necesidades y presupuesto.</p>
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 4
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-4">
                        <div class="--div-1">
                            <h3>Capacidades</h3>
                            <ul>
                                <li>· 1 a 100 personas</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 4 - "B"
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-4-b">
                        <div class="--div-1">
                            <h3>Espacios extras</h3>
                            <ul>
                                <li>· Estacionamiento</li>
                                <li>· Cocina</li>
                                <li>· Jardín</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 5
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-5">
                        <div class="--div-1">
                            <h3>Servicios que ofrece</h3>
                            <ul>
                                <li>· Banquetes</li>
                                <li>· Música</li>
                                <li>· Fotografía</li>
                                <li>· Montaje</li>
                                <li>· Menaje y material</li>
                                <li>· Celebración</li>
                                <li>· Decoración</li>
                                <li>· Salón</li>
                                <li>· Pista de baile</li>
                            </ul>
                        </div>
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 6
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-6">
                        <div class="--div-1">
                            <h3>Ubicación</h3>
                            <p>Está ubicado en Coyoacán, Ciudad de México, ubicación privilegiada contando con estacionamiento propio. El objetivo el Centro Veracruzano Coyoacán es satisfacer sus necesidades para llevar a cabo un evento de calidad.</p>
                            
                            <ul>
                                <li style="background: #F7F7F84A;">
                                    <div class="--caja-1"><img src="<?= $_dominio ?>assets/img/ubicacion-icon1.svg" alt=""></div>
                                    <div class="--caja-2">Salones de fiesta pequeño</div>
                                    <div class="--caja-3">(x1)</div>
                                    <div class="--caja-4">$15,000</div>
                                </li>
                                <li style="background: #F7F7F88F;">
                                    <div class="--caja-1"><img src="<?= $_dominio ?>assets/img/ubicacion-icon2.svg" alt=""></div>
                                    <div class="--caja-2">Personas en el evento</div>
                                    <div class="--caja-3">(x40)</div>
                                    <div class="--caja-4">$30,000</div>
                                </li>
                                <li style="background: #F7F7F84A;">
                                    <div class="--caja-1"><img src="<?= $_dominio ?>assets/img/ubicacion-icon3.svg" alt=""></div>
                                    <div class="d-flex --caja-2">Banquetes
                                    
                                    </div>
                                    <div class="--caja-3">(x1)</div>
                                    <div class="--caja-4">$10,000
                                    <a><span class="mdi mdi-information-outline text-body"></span></a>
                                    </div>
                                </li>
                                    <div class="--banquetes mb-3">
                                        <div class="d-flex my-2"><span class="--1">· Campiñones, queso fetta y espinaca servido en focaccia</span> <span class="--2">985,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Queso Cheddar, queso mozzarella y tocineta servido en pan brioche</span> <span class="--2">940,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Huevo con queso mozzarella y tocineta servido en pan de masa madre</span> <span class="--2">850,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Jamón con queso cheddar y tocineta servido en pan pullman</span> <span class="--2">1.069,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Croissant de mantequilla</span> <span class="--2">250,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Amojábana rellena de arequipe</span> <span class="--2">209,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Porción de torta</span> <span class="--2">370,00</span></div>
                                        <div class="d-flex my-2"><span class="--1">· Empanada rellena de queso y arequipe</span> <span class="--2">265,00</span></div>
                                    </div>
                                <li style="background: #F7F7F88F;">
                                    <div class="--caja-1"><img src="<?= $_dominio ?>assets/img/ubicacion-icon4.svg" alt=""></div>
                                    <div class="--caja-2">Música</div>
                                    <div class="--caja-3">(x1)</div>
                                    <div class="--caja-4">$15,000</div>
                                </li>
                                <li style="background: #F7F7F84A;">
                                    <div class="--caja-1"><img src="<?= $_dominio ?>assets/img/ubicacion-icon5.svg" alt=""></div>
                                    <div class="--caja-2">Fotografía</div>
                                    <div class="--caja-3">(x1)</div>
                                    <div class="--caja-4">$8,000</div>
                                </li>
                            </ul>
                            <div class="--total">
                                <div class="--texto-1">Total</div>
                                <div class="--texto-2">$78,000</div>
                            </div>
                        </div>
                    </div>

                    

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 7
                    # ----------------------------------------------------------- ?>
                    <div id="--resenas" class="--info-section-7">

                        <h3><?= $_star_svg_bottom ?> <span>4.7 · 32 reseñas</span></h3>

                        <div class="row">
                        
                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-female-4.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Cinzia</span>
                                            <span class="--fecha">febrero de 2022</span>
                                        </div>
                                    </div>
                                    <p>Uno de los mejores finde de mi vida, todo perfecto: ubicación, comodidades, atención de la líder del evento. Espacio perfecto para grupos grandes.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-male-1.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Jordi</span>
                                            <span class="--fecha">marzo de 2020</span>
                                        </div>
                                    </div>
                                    <p>Una sola palabra define mi estancia. “Encantado”.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-male-2.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Salva</span>
                                            <span class="--fecha">septiembre de 2020</span>
                                        </div>
                                    </div>
                                    <p>El salón es maravilloso, es un no parar de sensaciones desde que lo ves por primera vez. Empieza a ser una experiencia inolvidable nada más entrar, tanto por el paisaje como por su estructura.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-female-1.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Jacqueline</span>
                                            <span class="--fecha">agosto de 2020</span>
                                        </div>
                                    </div>
                                    <p>Recomiendo el salón como una experiencia única, valió la pena. Todo el lugar es grandioso.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-female-3.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Isabel</span>
                                            <span class="--fecha">julio de 2020</span>
                                        </div>
                                    </div>
                                    <p>Lugar perfecto!! Repetiríamos sin ninguna duda! Y Esmeralda y su hermana son excelentes, la atención fue de 10.</p>
                                </div>
                            </div>

                            <div class="col-12">
                                <div class="--comentario">
                                    <div class="--profile">
                                        <div class="--1">
                                            <img src="<?= $_dominio ?>assets/img/avatar-female-2.jpg" alt="">
                                        </div>
                                        <div class="--2">
                                            <span class="--nombre">Marga</span>
                                            <span class="--fecha">diciembre de 2017</span>
                                        </div>
                                    </div>
                                    <p>Es un sitio muy tranquilo y muy espectacular para repetir. Definitivamente lo recomiendo.</p>
                                </div>
                            </div>

                            <div class="col-12 text-center">
                                <button class="btn btn-sm btn-outline-dark mb-0">Mostrar las 32 reseñas</button>
                            </div>
                            
                        </div>
                    
                    </div>

                    <hr class="--publicacion-hr">

                    <?php # --------------------------------------------------------
                    # Info section 8
                    # ----------------------------------------------------------- ?>
                    <div class="--info-section-8">

                        <h3>Ubicación en el mapa</h3>

                        <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m12!1m3!1d7527.311275289894!2d-99.1244072304201!3d19.384057960761375!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!5e0!3m2!1ses!2sar!4v1660620106373!5m2!1ses!2sar" style="width: 100%;min-height: 320px;border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>

                        <div class="col-12 text-right mt-2 pr-0">
                            <a href="https://www.google.com/maps?saddr=Current+Location&dirflg=w&daddr=19.419799,-99.182666" target="_blank" class="btn btn-sm btn-outline-dark mb-0">Ver trayecto hasta el lugar</a>
                        </div>

                    </div>

                </div>

                <?php # --------------------------------------------------------
                # Right
                # ----------------------------------------------------------- ?>
                <div id="--publicacion-right" class="col-12 col-lg-5 mt-5 mt-lg-4 mx-md-auto align-self-start">
                    <div class="--div-main">

                        <div class="--cuadro">
                            <div class="--div-1">
                                <div class="---div-1">
                                    <div class="--total">Total</div>
                                    <div class="--total-numero">$15,000</div>
                                </div>
                                <div class="---div-2">
                                    <div><?= $_star_svg_right ?> <span>4.7 · <a href="#--resenas" class="scroll_50">32 reseñas</a></span></div>
                                </div>
                            </div>

                            <div class="--div-2">
                                <div class="---div-1">
                                    <div class="----div-1">
                                        <span>Ingreso</span>
                                        <input type="text" class="--check-in-variable" id="outward-date" value="05/08/2022"
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
                                            data-dd-opt-custom-class="pakalstyle"
                                            data-dd-opt-show-arrows-on-hover="false"
                                        >
                                    </div>
                                    <div class="--barra-divisoria"></div>
                                    <div class="----div-2">
                                        <span>Salida</span>
                                        <input type="text" class="--check-in-variable" id="return-date" value="06/08/2022"
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
                                            data-dd-opt-custom-class="pakalstyle"
                                            data-dd-opt-show-arrows-on-hover="false"
                                        >
                                    </div>
                                </div>

                                <div class="--border-top"></div>

                                <div class="---div-2">
                                    <div>
                                        <span>Tipo de evento</span>
                                        <select class="form-control" name="..." id="">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Cumpleaños">Cumpleaños</option>
                                            <option value="Boda">Boda</option>
                                            <option value="Bautizo">Bautizo</option>
                                            <option value="Reunión">Reunión</option>
                                        </select>
                                        <i class="mdi mdi-chevron-down"></i>
                                    </div>
                                </div>

                                <div class="--border-top"></div>

                                <div class="---div-3">
                                    <div>
                                        <span>Cantidad invitados</span>
                                        <select class="form-control" name="..." id="">
                                            <option value="">Selecciona una opción</option>
                                            <option value="Hasta 30 personas">Hasta 30 personas</option>
                                            <option value="Hasta 100 personas">Hasta 100 personas</option>
                                            <option value="Hasta 200 personas">Hasta 200 personas</option>
                                            <option value="Hasta 300 personas">Hasta 300 personas</option>
                                            <option value="+ de 300 personas">+ de 300 personas</option>
                                        </select>
                                        <i class="mdi mdi-chevron-down"></i>
                                    </div>
                                </div>
                            </div>

                            <button class="btn w-100 btn-primary mb-0 mt-3">Reservar ahora</button>
                            <p class="small text-center mb-0 mt-3">Para proteger tus pagos, nunca transfieras dinero ni te comuniques fuera del sitio o la app de Pakal.</p>
                        </div>

                        <div class="d-flex" style="justify-content: space-around;">
                            <div class="d-flex justify-content-center">
                                <div class="--compartir" data-toggle="modal" data-target="#compartir"><?= $_compartir ?> Compartir</div>
                                <div class="--guardar" data-toggle="modal" data-target="#iniciar-sesion"><?= $_guardar ?> Guardar</div>
                            </div>

                            <div>
                                <a data-toggle="modal" data-target="#iniciar-sesion" class="--reportar-este-anuncio">Reportar este anuncio</a>
                            </div>
                        </div>
                        
                    </div>
                </div>

            </div>

        </div>
    
    </section>

</main>

<?php include_once(__DIR__.'/--modales.php'); ?>
<?php include_once(__DIR__.'/--scripts.php'); ?>

</html>