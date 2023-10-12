<?php
require_once "callback.php";

// Ej: Head
$sBlocName = "Horarios cursos relacionados";
// Ej: HOME
$sLanding = "HORARIOS";
// Ej: Seccion cabecera de la home
$sDescription = "HORARIOS - cursos relacionados";
// Ej: casco-antiguo-home
$sCategory = "casco-antiguo-horarios";

// Ej: array('home','SQ','Cabecera','Squembri');
$aKW = array('SQ','horarios', 'relacionados', 'Squembri');
// Ej: array("post", "page") 
$aPostType = array("post", "page");

$sCallBack = "FUN_BLOCK_Horarios_related";

$sRutaStyle = get_template_directory_uri()."/blocks/horarios/section-related/assets/css/style.css";

sq_blocks::Blocks_enqueue($sBlocName,$sLanding,$sDescription,$aKW,$aPostType,$sRutaStyle,$sCategory,$sCallBack);


function FUN_BLOCK_Horarios_related(){
    // Establecer el id de la seccion para el bloque, debe ser único
    $sIdBlock = "BlocHorariosRelated";
    FUN_BLOCK_Horarios_related____Base($sIdBlock);
}

function FUN_BLOCK_Horarios_related____Base($sIdBlock){
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
            <?php FUN_BLOCK_Horarios_related____content(); ?>
        </div>
    </section><!-- #<?php echo $sIdBlock; ?> -->
    <?php
}