<?php


function FUN_BLOCK_SuperG_DosFotos____content(){
    ?>
    
        <div class="flex-box">
            <div class="box-info">
                <h3 class="m-0 title">
                    <?php echo get_field("ACF_BLOCK_TITLE_TWO_PHOTO_GENERICA"); ?>
                </h3>
                <p class="paragraph">
                    <?php echo get_field("ACF_BLOCK_PARAGRAPH_TWO_PHOTO_GENERICA"); ?>
                </p>
                <a href="#" class="SQ_btn d-block btn">
                    <?php echo get_field("ACF_BLOCK_TEXT_BTN_TWO_PHOTO_GENERICA"); ?>
                </a>
            </div>
            <!-- .box-info -->
            <div class="box-img">
                <figure class="m-0">
                    <?php
                        $image = get_field('ACF_BLOCK_IMG_TOP_TWO_PHOTO_GENERICA');
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
                <figure class="">
                    <?php
                        $image = get_field('ACF_BLOCK_IMG_BOTTON_TWO_PHOTO_GENERICA');
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
        <!-- flex-box -->
    
    <?php
}