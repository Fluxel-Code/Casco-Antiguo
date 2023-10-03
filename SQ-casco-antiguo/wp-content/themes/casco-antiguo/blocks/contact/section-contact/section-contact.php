<?php
require_once "callback.php";

// Ej: Head
$sBlocName = "Contact";
// Ej: HOME
$sLanding = "Contacto";
// Ej: Seccion cabecera de la home
$sDescription = "Contacto - sección de la landing contacto";
// Ej: casco-antiguo-home
$sCategory = "casco-antiguo-contacto";

// Ej: array('home','SQ','Cabecera','Squembri');
$aKW = array('Contacto','SQ','Casco antiguo','Squembri');
// Ej: array("post", "page")
$aPostType = array("post", "page");

$sCallBack = "FUN_BLOCK_CONTACT_Contacto";

$sRutaStyle = get_template_directory_uri()."/blocks/contact/section-contact/assets/css/style.css";

sq_blocks::Blocks_enqueue($sBlocName,$sLanding,$sDescription,$aKW,$aPostType,$sRutaStyle,$sCategory,$sCallBack);


function FUN_BLOCK_CONTACT_Contacto($block, $content = '', $is_preview = false, $post_id = 0){
    if ($is_preview) {
        
    }
    // Establecer el id de la seccion para el bloque, debe ser único
    $sIdBlock = "Contacto_LandingContacto";
    FUN_BLOCK_CONTCT_SectionContact____Base($sIdBlock);
}

function FUN_BLOCK_CONTCT_SectionContact____Base($sIdBlock){
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
            <?php FUN_BLOCK_CONTACT_Landing_contacto____content(); ?>
        </div>
    </section><!-- #<?php echo $sIdBlock; ?> -->
    <?php
}