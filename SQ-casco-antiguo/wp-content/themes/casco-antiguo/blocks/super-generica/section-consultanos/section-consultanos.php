<?php
require_once "callback.php";

// Ej: Head
$sBlocName = "Súper Genérica - Consúltanos";
// Ej: HOME
$sLanding = "SÚPER-GENÉRICA";
// Ej: Seccion cabecera de la home
$sDescription = "SÚPER-GENÉRICA - Consúltanos";
// Ej: casco-antiguo-home
$sCategory = "casco-antiguo-super-generica";

// Ej: array('home','SQ','Cabecera','Squembri');
$aKW = array('SQ','generica', 'Consúltanos', 'Squembri');
// Ej: array("post", "page") 
$aPostType = array("post", "page");

$sCallBack = "FUN_BLOCK_SuperG_Consutanos";

$sRutaBloque = "/super-generica/section-consultanos/";

$sRutaStyle = get_template_directory_uri()."/blocks".$sRutaBloque."assets/css/style.css";

sq_blocks::Blocks_enqueue($sBlocName,$sLanding,$sDescription,$aKW,$aPostType,$sRutaStyle,$sCategory,$sCallBack);




function FUN_BLOCK_SuperG_Consutanos($block, $content = '', $is_preview = false, $post_id = 0){
    $sRutaBloque = "/super-generica/section-consultanos/";

    if( !isset($block["data"]['field_650f683ccacfb']) && !isset($block["data"]['ACF_BLOCK_GEN_Contenedor_tipo'])) { 
        ?>
        <div class="AdminPreview">
            <img src="<?php echo get_template_directory_uri()."/blocks".$sRutaBloque."assets/capture.jpg"; ?>" alt="" style="max-width:100%;">
        </div>
        <?php
    }else{
        // Establecer el id de la seccion para el bloque, debe ser único
        $sIdBlock = "BlocSuperGConsultanos";
        // Código para el frontend: cómo se mostrará el bloque en el sitio en vivo
        FUN_BLOCK_SuperG_Consutanos____Base($sIdBlock);
    }

    
    
}

function FUN_BLOCK_SuperG_Consutanos____Base($sIdBlock){
    // AJUSTES AUTOMÁTICOS!!!!!!!
    /**
     * 
     * Obtenemos ancho del contenedor del bloque.
     * 
     * En caaso de ser custom se establece el ancho personalizado 
     * y se añade la clase wrap para que se centre el contenedor.
     * 
     */
    $sContenedor = sq_blocks::GEN_Contenedor();
    $sCustomBox = "";
    if ($sContenedor=="custom"){
        $sCustomBox = sprintf(" style='max-width:%spx;' ", get_field("ACF_BLOCK_GEN_Contenedor")['ancho']);
        $sContenedor = "wrap";
    }
        
    /**
     * Generamos clases dinámicas para establecer margen y relleno del bloque
     */
    $sClass = sq_blocks::GEN_Clases();

    ?>
    <section class="<?php echo $sClass; ?>" id="<?php echo $sIdBlock; ?>" >
        <div class="contenedor <?php echo $sContenedor; ?>" <?php echo $sCustomBox; ?>>
            <?php FUN_BLOCK_SuperG_Consutanos____content(); ?>
        </div>
    </section><!-- #<?php echo $sIdBlock; ?> -->
    <?php
}
