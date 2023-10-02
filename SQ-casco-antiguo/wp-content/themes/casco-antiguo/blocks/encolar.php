<?php
/*
 * Utilidades Bloques Squembri
 * version: 1.0
*/

class sq_blocks {

    public static function GEN_Clases(){
        $sClass = "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['superior'] > 0) ? " p-top-".get_field("ACF_BLOCK_GEN_Relleno")['superior']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['derecha'] > 0) ? " p-right-".get_field("ACF_BLOCK_GEN_Relleno")['derecha']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['inferior'] > 0) ? " p-bottom-".get_field("ACF_BLOCK_GEN_Relleno")['inferior']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['izquierda'] > 0) ? " p-left-".get_field("ACF_BLOCK_GEN_Relleno")['izquierda']." " : "";
    
        $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['superior'] > 0) ? " m-top-".get_field("ACF_BLOCK_GEN_Margen")['superior']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['derecha'] > 0) ? " m-right-".get_field("ACF_BLOCK_GEN_Margen")['derecha']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['inferior'] > 0) ? " m-bottom-".get_field("ACF_BLOCK_GEN_Margen")['inferior']." " : "";
        $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['izquierda'] > 0) ? " m-left-".get_field("ACF_BLOCK_GEN_Margen")['izquierda']." " : "";
    
        return $sClass;
    }
    
    public static function GEN_Contenedor(){
        $sContenedor = get_field("ACF_BLOCK_GEN_Contenedor")['tipo'];
        return $sContenedor;
    }

    public static function Blocks_enqueue($sBlocName,$sLanding,$sDescription,$aKW,$aPostType,$sRutaStyle,$sCategory,$sCallBack){
        acf_register_block_type(array(
            'name' => strtolower($sBlocName),
            'title' => sprintf("%s - %s",$sBlocName , $sLanding),
            'active' => true,
            'description' => $sDescription,
            'category' => $sCategory,
            'icon' => '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.008" height="24.008" viewBox="0 0 587 587"><image id="Capa_1" data-name="Capa 1" x="2" y="67" width="583" height="453" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAADAUlEQVQ4jZWUX0hacRTHv945TSlikyJTEylKlkmuhGZdwVGNwdyTiM/7IwQ5iEKyEYygaINGJFZuD8OH+RJ7CHQD2UNIPUT0EG6NITF6iTGGWw95yy3u+N2pXG/X6Q4c8J7zO+fj75zfOWBZFul0GkajEXq9Xmu3270KheINgL3W1tbXAwMDCQAsgG0ALwDcB3AN1QoBpFIpNDU1BQHk8smIur1eL/FTwWAwxLMTPfgvgM1mSwoSPCQ+j8fD+Yl6vd4oz/+2akA4HPYJkhN1El9jYyOi0WgRYjab03n/k0p56+vr4ff7gZ6enj0RALFdLhwOBAIcgGGYFplMRvyTlQAmk4mLIbX/KgIg+hHA9UKA2+3mAg4PD10AbGJJJRJJ8Xd7ezvOzs4Ai8XyoQygoM8BqEmQw+FANpvlgoWiUChQU1NTAjg9PQUWFxcfVwAQzQJ4CuCqUqlEQ0PDhXJ0d3eDoqiLAJZlpSaT6aAKCNEMgAfCf2+322G1WktsBQBB/k6lUjd6e3v3KzUOwBUAL/NlK8rJyQnOz89FAyiGYZDJZL7t7OyYR0dHX1UBITIG4F7hQ6VScT0QlVwuR1YE5ufnuVeytbV10+l0vquiXAwArqszMzPo7+8vSU9WD/eKWJZV6fX628S4srJSHKpkMkkPDg4KJ1yoDpqmuZel0WgMAGYBRAizo6NDx83B8fGxsba2lhy2EMjy8nIRQnR1dXXsHwDXxMQE4vF4n2CPsTKZjFlfX+9DIpG4lTd+KlxvamqqBBKLxTwURYkBdC6XC0qlstwsfSb1m+UZHhUg5Opra2v8PbQvCH5PzjU3N0sB/Cp7y7a2ti8Co4HfrHA4zAF0Ot0R78x3sgtJI0dGRi4B+Fl2QIeHhzdEHHd4jBar1VpstkQiiQHQEEckEuHg09PTfjHA3Nzc31pvbm4aQ6HQXZ/PNzk0NBTv6uraUKvVz+rq6pbkcvm2VCo9oml6qbOzk+avg93d3WIJA4HAuFar3ZfL5T8MBsPHhYWFcZZl8Qe61aF+6QdpTAAAAABJRU5ErkJggg=="/></svg>',
            'keywords' => $aKW,
            'post_types' => $aPostType,
            'mode' => 'preview',
            'align' => '',
            'align_text' => '',
            'align_content' => 'top',
            'render_template' => '',
            'render_callback' => $sCallBack,
            'enqueue_style' => $sRutaStyle,
            'enqueue_script' => '',
            /* 'enqueue_assets' => 'enqueue_gen', */
            'example'  => array(
                'attributes' => array(
                    'mode' => 'preview',
                ),
            ),
            'supports' => array(
                'anchor' => false,
                'align' => true,
                'align_text' => false,
                'align_content' => false,
                'full_height' => false,
                'mode' => true,
                'multiple' => true,
                
                'jsx' => false,
            ),
        ));
    }

}
function mi_categoria_personalizada_para_bloques( $categories, $post ) {
    $sIcon = '<svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" width="24.008" height="24.008" viewBox="0 0 587 587"><image id="Capa_1" data-name="Capa 1" x="2" y="67" width="583" height="453" xlink:href="data:img/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAATCAYAAACKsM07AAADAUlEQVQ4jZWUX0hacRTHv945TSlikyJTEylKlkmuhGZdwVGNwdyTiM/7IwQ5iEKyEYygaINGJFZuD8OH+RJ7CHQD2UNIPUT0EG6NITF6iTGGWw95yy3u+N2pXG/X6Q4c8J7zO+fj75zfOWBZFul0GkajEXq9Xmu3270KheINgL3W1tbXAwMDCQAsgG0ALwDcB3AN1QoBpFIpNDU1BQHk8smIur1eL/FTwWAwxLMTPfgvgM1mSwoSPCQ+j8fD+Yl6vd4oz/+2akA4HPYJkhN1El9jYyOi0WgRYjab03n/k0p56+vr4ff7gZ6enj0RALFdLhwOBAIcgGGYFplMRvyTlQAmk4mLIbX/KgIg+hHA9UKA2+3mAg4PD10AbGJJJRJJ8Xd7ezvOzs4Ai8XyoQygoM8BqEmQw+FANpvlgoWiUChQU1NTAjg9PQUWFxcfVwAQzQJ4CuCqUqlEQ0PDhXJ0d3eDoqiLAJZlpSaT6aAKCNEMgAfCf2+322G1WktsBQBB/k6lUjd6e3v3KzUOwBUAL/NlK8rJyQnOz89FAyiGYZDJZL7t7OyYR0dHX1UBITIG4F7hQ6VScT0QlVwuR1YE5ufnuVeytbV10+l0vquiXAwArqszMzPo7+8vSU9WD/eKWJZV6fX628S4srJSHKpkMkkPDg4KJ1yoDpqmuZel0WgMAGYBRAizo6NDx83B8fGxsba2lhy2EMjy8nIRQnR1dXXsHwDXxMQE4vF4n2CPsTKZjFlfX+9DIpG4lTd+KlxvamqqBBKLxTwURYkBdC6XC0qlstwsfSb1m+UZHhUg5Opra2v8PbQvCH5PzjU3N0sB/Cp7y7a2ti8Co4HfrHA4zAF0Ot0R78x3sgtJI0dGRi4B+Fl2QIeHhzdEHHd4jBar1VpstkQiiQHQEEckEuHg09PTfjHA3Nzc31pvbm4aQ6HQXZ/PNzk0NBTv6uraUKvVz+rq6pbkcvm2VCo9oml6qbOzk+avg93d3WIJA4HAuFar3ZfL5T8MBsPHhYWFcZZl8Qe61aF+6QdpTAAAAABJRU5ErkJggg=="/></svg>';


    $aThemeHome = array(
        array(
            'slug'  => 'casco-antiguo-home',
            'title' => __( 'Theme Casco Antiguo - HOME', '_NOMBRE_PROYECTO' ),
            'icon'  => $sIcon, 
        ),
    );
    return array_merge(
        $aThemeHome,
        $categories
    );
}
add_filter( 'block_categories_all', 'mi_categoria_personalizada_para_bloques', 10, 2 );

function FUN_BLOCK_GEN_Clases(){
    $sClass = "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['superior'] > 0) ? " p-top-".get_field("ACF_BLOCK_GEN_Relleno")['superior']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['derecha'] > 0) ? " p-right-".get_field("ACF_BLOCK_GEN_Relleno")['derecha']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['inferior'] > 0) ? " p-bottom-".get_field("ACF_BLOCK_GEN_Relleno")['inferior']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Relleno")['izquierda'] > 0) ? " p-left-".get_field("ACF_BLOCK_GEN_Relleno")['izquierda']." " : "";

    $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['superior'] > 0) ? " m-top-".get_field("ACF_BLOCK_GEN_Margen")['superior']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['derecha'] > 0) ? " m-right-".get_field("ACF_BLOCK_GEN_Margen")['derecha']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['inferior'] > 0) ? " m-bottom-".get_field("ACF_BLOCK_GEN_Margen")['inferior']." " : "";
    $sClass .= (get_field("ACF_BLOCK_GEN_Margen")['izquierda'] > 0) ? " m-left-".get_field("ACF_BLOCK_GEN_Margen")['izquierda']." " : "";

    return $sClass;
}

function FUN_BLOCK_GEN_Contenedor(){
    $sContenedor = get_field("ACF_BLOCK_GEN_Contenedor")['tipo'];
    return $sContenedor;
}

/* HOME */
include "home/section-header/section-header.php";
include "home/section-cursos/section-cursos.php";
include "home/section-learning/section-learning.php";
include "home/section-buceo/section-buceo.php";