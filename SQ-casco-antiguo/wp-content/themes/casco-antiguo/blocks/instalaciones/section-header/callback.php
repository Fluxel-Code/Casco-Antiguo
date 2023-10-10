<?php


function FUN_BLOCK_INST_SectionHead_instalaciones____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <figure class="bg-img">
            <!-- movil -->
            <?php
                $image = get_field('ACF_BLOCK_BACKGROUND_HEADER_MOVIL_INSTALL');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                $sClase = "img-fluid img-movil";  // Aqui ponemos las clases de la foto usadas en la maqueta

                if( $image ) {
                    echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                }
            ?>
            <!-- desktop -->
            <?php
                $image = get_field('ACF_BLOCK_BACKGROUND_HEADER_DESKTOP_INSTALL');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                $sClase = "img-fluid img-desktop";  // Aqui ponemos las clases de la foto usadas en la maqueta

                if( $image ) {
                    echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                }
            ?>
        </figure>
        <div class="container-info">
            <ul class="links">
                <li>
                    <a href="#" class="link">
                        <?php echo get_field("ACF_BLOCK_FIRST_TEXT_START_HEADER_INSTALL"); ?>
                    </a>
                </li>
                <li>
                    <a href="#" class="link">
                        <?php echo get_field("ACF_BLOCK_SECONDS_TEXT_INSTALL_HEADER_INSTALL"); ?>
                    </a>
                </li>
            </ul>
            <div class="title-box">
                <h1 class="title"><?php echo get_field("ACF_BLOCK_TITLE_HEADER_INSTALL"); ?></h1>
            </div>
        </div>
        <!-- .container-info -->
    <?php
}