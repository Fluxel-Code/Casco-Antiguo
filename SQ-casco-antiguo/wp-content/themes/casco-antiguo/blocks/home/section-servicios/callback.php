<?php


function FUN_BLOCK_HOME_SectionServicios____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <div class="wrap px-3">
            <div class="box">
                    <div class="card">
                        <div class="card-header">
                            <?php
                                $image = get_field('ACF_HOME_BLOCK_SERVICES_CARD_FIRST_IMG');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                                if( $image ) {
                                    echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                                }
                            ?>
                        </div>
                        <div class="card-body light-blue">
                            <span class="d-block title-card">
                                <?php echo get_field("ACF_HOME_BLOCK_SERVICES_CARD_FIRST_TITULO"); ?>
                                <!-- Talleres para el
                                <br>
                                mantenimiento
                                <br>
                                de tu equipo
                                <br>
                                de buceo -->
                            </span>
                            <figure class="m-0 d-none text-logo">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="457"
                                    height="240"
                                    viewBox="0 0 457 240"
                                >
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect
                                                id="Rectángulo_313"
                                                data-name="Rectángulo 313"
                                                width="457"
                                                height="240"
                                                transform="translate(944 4446.446)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        id="Enmascarar_grupo_21"
                                        data-name="Enmascarar grupo 21"
                                        transform="translate(-944 -4446.446)"
                                        clip-path="url(#clip-path)"
                                    >
                                        <text
                                            id="Servicio_de_repara-_ciones"
                                            data-name="Servicio 
                                  de repara-
                                  ciones"
                                            transform="translate(1035 4547.446)"
                                            fill="#063e5f"
                                            font-size="69"
                                            font-family="SegoeUI, Segoe UI"
                                            opacity="0.087"
                                        >
                                            <tspan x="0" y="0">Servicio</tspan>
                                            <tspan x="0" y="61">de repara-</tspan>
                                            <tspan x="0" y="122">ciones</tspan>
                                        </text>
                                    </g>
                                </svg>
                            </figure>
                            <a href="#" class="SQ_btn btn">
                                <?php echo get_field("ACF_HOME_BLOCK_SERVICES_CARD_FIRST_BTN"); ?>
                            </a>
                        </div>
                    </div>
                    <!-- card => nº 1 -->
                    <div class="card">
                        <div class="card-header">
                            <?php
                                $image = get_field('ACF_HOME_BLOCK_SERVICES_CARD_SECONDS_IMG');
                                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                                $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                                if( $image ) {
                                    echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                                }
                            ?>
                        </div>
                        <div class="card-body dark-blue">
                            <span class="d-block title-card">
                                <?php echo get_field("ACF_HOME_BLOCK_SERVICES_CARD_SECONDS_TITLE"); ?>
                            </span>
                            <figure class="m-0 d-none text-logo">
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    xmlns:xlink="http://www.w3.org/1999/xlink"
                                    width="457"
                                    height="240"
                                    viewBox="0 0 457 240"
                                >
                                    <defs>
                                        <clipPath id="clip-path">
                                            <rect
                                                id="Rectángulo_313"
                                                data-name="Rectángulo 313"
                                                width="457"
                                                height="240"
                                                transform="translate(944 4446.446)"
                                                fill="#fff"
                                                stroke="#707070"
                                                stroke-width="1"
                                            />
                                        </clipPath>
                                    </defs>
                                    <g
                                        id="Enmascarar_grupo_21"
                                        data-name="Enmascarar grupo 21"
                                        transform="translate(-944 -4446.446)"
                                        clip-path="url(#clip-path)"
                                    >
                                        <text
                                            id="Amplia_tu_equipo_de_buceo"
                                            data-name="Amplia tu equipo de buceo"
                                            transform="translate(1054 4478.446)"
                                            fill="#fff"
                                            font-size="69"
                                            font-family="SegoeUI, Segoe UI"
                                            opacity="0.087"
                                        >
                                            <tspan x="0" y="74">Amplia tu</tspan>
                                            <tspan x="0" y="135">equipo de</tspan>
                                            <tspan x="0" y="196">buceo</tspan>
                                        </text>
                                    </g>
                                </svg>
                            </figure>
                            <a href="#" class="SQ_btn btn">
                                <?php echo get_field("ACF_HOME_BLOCK_SERVICES_CARD_SECONDS_BTN"); ?>
                            </a>
                        </div>
                    </div>
                    <!-- card => nº 2 -->
            </div>
            <!-- .box -->
        </div>
        <!-- .wrap -->
    <?php
}