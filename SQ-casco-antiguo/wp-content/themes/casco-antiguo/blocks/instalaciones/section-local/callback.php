<?php


function FUN_BLOCK_INST_SectionLocal____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <div class="square-locations">
            <figure class="video-location">
                <?php
                    $image = get_field('ACF_BLOCK_IMG_LOCAL_INSTALL');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                    if( $image ) {
                        echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                    }
                ?>
                <div class="btn-play">
                    <svg
                        xmlns="http://www.w3.org/2000/svg"
                        width="79"
                        height="79"
                        viewBox="0 0 79 79"
                    >
                        <g id="Grupo_1301" data-name="Grupo 1301" transform="translate(-576 -1383)">
                            <circle
                                id="Elipse_11"
                                data-name="Elipse 11"
                                cx="39.5"
                                cy="39.5"
                                r="39.5"
                                transform="translate(576 1383)"
                                fill="#72b0cb"
                            />
                            <path
                                id="Polígono_2"
                                data-name="Polígono 2"
                                d="M16.5,0,33,29H0Z"
                                transform="translate(633 1406) rotate(90)"
                                fill="#063e5f"
                            />
                        </g>
                    </svg>
                </div>
                <!-- btn-play -->
            </figure>
            <div class="box-info">
                <div class="content">
                    <h2 class="title-locations text-white">
                        <?php echo get_field("ACF_BLOCK_TITLE_LOCAL_INSTALL"); ?>
                    </h2>
                    <p class="paragraph text-white">
                        <?php echo get_field("ACF_BLOCK_PARAGRAPH_LOCAL_INSTALL"); ?>
                    </p>
                </div>
                <!-- .content -->
            </div>
            <!-- .box-info -->
        </div>
        <!-- .square-locations -->
    <?php
}