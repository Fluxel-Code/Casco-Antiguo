<?php


function FUN_BLOCK_INST_SectionDescrip____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <div class="flex-box">
            <div class="box-info">
                <h3 class="m-0 title"> 
                    <?php echo get_field("ACF_BLOCK_TITLE_DESCRIPCION_INSTALL"); ?>
                </h3>
                <p class="paragraph">
                    <?php echo get_field("ACF_BLOCK_TEXT_DESCRIPCION_INSTALL"); ?>
                </p>
            </div>
            <!-- .box-info -->
            <div class="box-img">
                <figure class="m-0">
                    <?php
                        $image = get_field('ACF_BLOCK_IMG_FIRST_DESCRIPCION_INSTALL');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                    <div class="layer">
                        <div class="border"></div>
                    </div>
                    <!-- layer -->
                </figure>
                <figure class="m-0">
                    <?php
                        $image = get_field('ACF_BLOCK_IMG_SECONDS_DESCRIPCION_INSTALL');
                        $size = 'full'; // (thumbnail, medium, large, full or custom size)
                        $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                        if( $image ) {
                            echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                        }
                    ?>
                    <div class="layer">
                        <div class="border"></div>
                    </div>
                    <!-- layer -->
                </figure>
            </div>
            <!-- .box-img -->
        </div>
    <?php
}