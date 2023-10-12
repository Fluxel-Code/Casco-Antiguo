<?php


function FUN_BLOCK_Horarios_related____content(){
    ?>
    
        <h2 class="title-courses">
            <?php echo get_field("ACF_BLOCK_COURSES_TITLE_HORARIO"); ?>
        </h2>
        <div class="box-grid">
            <div class="item">
                <figure class="head-img">
                    <?php
                        $image = get_field('ACF_BLOCK_COURSES_CARD_IMG_FIRST_HORARIO');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid img-first";  // Aqui ponemos las clases de la foto usadas en la maqueta

                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                </figure>
                <!-- .figure -->
                <div class="body">
                    <div class="box-btn">
                        <button class="btn card-btn">
                            <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_FIRST_HORARIO"); ?>
                        </button>
                        <button class="icon-letter SQ_btn">
                            <span>
                                <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_ESTANDAR_E"); ?>
                            </span>
                        </button>
                    </div>
                    <!-- .box-btn -->
                    <h3>
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_TITLE_FIRST_HORARIO"); ?>
                    </h3>
                    <a href="#" class="link">
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_LINK_FIRST_HORARIO"); ?>
                        <span class="m-left-10">
                            <svg
                            xmlns="http://www.w3.org/2000/svg"
                            width="8.418"
                            height="12.593"
                            viewBox="0 0 8.418 12.593"
                            >
                                <g id="Grupo_899" data-name="Grupo 899" transform="translate(1.061 1.061)">
                                    <path
                                        id="Trazado_748"
                                        data-name="Trazado 748"
                                        d="M0,0,5.236,5.236,0,10.472"
                                        fill="none"
                                        stroke="#72b0cb"
                                        stroke-width="3"
                                    />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- .body -->
            </div>
            <!-- .item -->
            <div class="item">
                <figure class="head-img">
                    <?php
                        $image = get_field('ACF_BLOCK_COURSES_CARD_IMG_SECONDS_HORARIO');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid img-seconds";  // Aqui ponemos las clases de la foto usadas en la maqueta

                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                </figure>
                <div class="body">
                    <div class="box-btn">
                        <button class="btn card-btn">
                            <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_SECONDS_HORARIO"); ?>
                        </button>
                        <button class="icon-letter SQ_btn">
                            <span>
                                <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_ESTANDAR_E"); ?>
                            </span>
                        </button>
                    </div>
                    <!-- .box-btn -->
                    <h3>
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_TITLE_SECONDS_HORARIO"); ?>
                    </h3>
                    <a href="#" class="link">
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_LINK_SECONDS_HORARIO"); ?>
                        <span class="m-left-10">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="8.418"
                                height="12.593"
                                viewBox="0 0 8.418 12.593"
                            >
                                <g id="Grupo_899" data-name="Grupo 899" transform="translate(1.061 1.061)">
                                    <path
                                        id="Trazado_748"
                                        data-name="Trazado 748"
                                        d="M0,0,5.236,5.236,0,10.472"
                                        fill="none"
                                        stroke="#72b0cb"
                                        stroke-width="3"
                                    />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- .body -->
            </div>
            <!-- .item -->
            <div class="item">
                <figure class="head-img">
                    <?php
                        $image = get_field('ACF_BLOCK_COURSES_CARD_IMG_THIRD_HORARIO');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid img-last";  // Aqui ponemos las clases de la foto usadas en la maqueta

                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                </figure>
                <div class="body">
                    <div class="box-btn">
                        <button class="btn card-btn">
                            <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_THIRD_HORARIO"); ?>
                        </button>
                        <button class="icon-letter SQ_btn">
                            <span>
                                <?php echo get_field("ACF_BLOCK_COURSES_CARD_BTN_ESTANDAR_E"); ?>
                            </span>
                        </button>
                    </div>
                    <!-- .box-btn -->
                    <h3>
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_TITLE_THIRD_HORARIO"); ?>
                    </h3>
                    <a href="#" class="link">
                        <?php echo get_field("ACF_BLOCK_COURSES_CARD_LINK_THIRD_HORARIO_"); ?>
                        <span class="m-left-10">
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="8.418"
                                height="12.593"
                                viewBox="0 0 8.418 12.593"
                            >
                                <g id="Grupo_899" data-name="Grupo 899" transform="translate(1.061 1.061)">
                                    <path
                                        id="Trazado_748"
                                        data-name="Trazado 748"
                                        d="M0,0,5.236,5.236,0,10.472"
                                        fill="none"
                                        stroke="#72b0cb"
                                        stroke-width="3"
                                    />
                                </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- .body -->
            </div>
            <!-- .item -->
        </div>
    
    <?php
}