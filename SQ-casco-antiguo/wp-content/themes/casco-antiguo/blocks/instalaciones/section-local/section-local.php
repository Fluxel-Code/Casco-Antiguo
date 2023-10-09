<?php
require_once "callback.php";

// Ej: Head
$sBlocName = "Local";
// Ej: HOME
$sLanding = "INSTALACIONES";
// Ej: Seccion cabecera de la home
$sDescription = "INSTALACIONES - Local con piscina";
// Ej: casco-antiguo-home
$sCategory = "casco-antiguo-instalaciones";

// Ej: array('home','SQ','Cabecera','Squembri');
$aKW = array('home','SQ','local','Squembri');
// Ej: array("post", "page")
$aPostType = array("post", "page");

$sCallBack = "FUN_BLOCK_INSTALACIONES_LOCAL";

$sRutaStyle = get_template_directory_uri()."/blocks/instalaciones/section-local/assets/css/style.css";

sq_blocks::Blocks_enqueue($sBlocName,$sLanding,$sDescription,$aKW,$aPostType,$sRutaStyle,$sCategory,$sCallBack);


function FUN_BLOCK_INSTALACIONES_LOCAL(){
    // Establecer el id de la seccion para el bloque, debe ser único
    $sIdBlock = "BlocInstaSectionLocal";
    FUN_BLOCK_INST_SectionLocal____Base($sIdBlock);
}

function FUN_BLOCK_INST_SectionLocal____Base($sIdBlock){
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
            <?php FUN_BLOCK_INST_SectionLocal____content(); ?>
        </div>
    </section><!-- #<?php echo $sIdBlock; ?> -->
    <?php
}