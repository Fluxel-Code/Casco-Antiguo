<?php


function FUN_BLOCK_HOME_SectionPorque____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <div class="box-flex">
            <div class="info">
                <h3 class="title"><?php echo get_field("ACF_HOME_BLOCK_BECAUSE_TITLE"); ?></h3>
                <!-- <h3 class="title">¿Por qué <br>Casco Antiguo?</h3> -->
                <p class="paragraph">
                    <?php echo get_field("ACF_HOME_BLOCK_BECAUSE_DESCRIP"); ?>
                </p>
                <div class="link">
                    <a href="#">
                        <?php echo get_field("ACF_HOME_BLOCK_BECAUSE_LINK"); ?>
                        <span class="d-inline-block ms-3">
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
                                    stroke="#265575"
                                    stroke-width="3"
                                />
    
                            </g>
                            </svg>
                        </span>
                    </a>
                </div>
                <!-- link -->
            </div>
            <!-- .info -->
            <div class="box-imagen-movil">
                <div class="left-img">
                    <?php
                        $image = get_field('ACF_HOME_BLOCK_BECAUSE_IMG_LEFT_MOVIL');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta
    
                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                </div>
                <div class="right-img">
                    <?php
                        $image = get_field('ACF_HOME_BLOCK_BECAUSE_IMG_RIGHT_MOVIL');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta
    
                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                </div>
            </div>
            <!-- .box-imagen-movil -->
            <!-- imagenes en desktop -->
            <figure class="first-img mb-0">
                <?php
                    $image = get_field('ACF_HOME_BLOCK_BECAUSE_IMG_FIRST_DESKTOP');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta
    
                    if( $image ) {
                        echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                    }
                ?>
            </figure>
            <figure class="seconds-img mb-0">
                <?php
                    $image = get_field('ACF_HOME_BLOCK_BECAUSE_IMG_SECONDS_DESKTOP');
                    $size = 'full'; // (thumbnail, medium, large, full or custom size)
                    $sClase = "img-fluid ";  // Aqui ponemos las clases de la foto usadas en la maqueta
    
                    if( $image ) {
                        echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                    }
                ?>
            </figure>
            <!-- imagenes en desktop -->
            <!-- .box-imagen-desktop -->
            <div class="title-grey">
                <h3><?php echo get_field("ACF_HOME_BLOCK_BECAUSE_TITLE_BIG_GREY"); ?></h3>
            </div>
        </div>
        <!-- box-flex -->
    <?php
}