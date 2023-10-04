<?php


function FUN_BLOCK_HOME_SectionContact____content(){
    //Recuerdar poner esta funcion en "___base"
    ?>
        <figure class="bg-fondo">
            <?php
                $image = get_field('ACF_HOME_BLOCK_CONTACT_BG_IMG');
                $size = 'full'; // (thumbnail, medium, large, full or custom size)
                $sClase = "img-fluid";  // Aqui ponemos las clases de la foto usadas en la maqueta

                if( $image ) {
                    echo wp_get_attachment_image( $image['id'], $size, false, array("class" => $sClase) );
                }
            ?>
            <!-- <img src="https://cascoantiguo.temporalweb.es/wp-content/uploads/2023/09/Imagen-21-scaled.jpg" alt="" class="img-fluid "> -->
        </figure>
        <div class="box">
            <form action="" class="mt-neg-195">
                <div class="formu">
                    <h3 class="title">
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_TITLE_CONTACT"); ?>
                    </h3>
                    <p class="paragraph">
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_PARAGRAPH_CONTACT"); ?>
                    </p>
                    <a href="#" class="email">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16.202"
                                height="12.492"
                                viewBox="0 0 16.202 12.492"
                                >
                                    <path
                                        id="Trazado_606"
                                        data-name="Trazado 606"
                                        d="M.366.246V-6.061A5.793,5.793,0,0,1-.3-5.424C-2.028-4.1-2.843-3.565-3.861-2.715q-.492.416-.8.647A4.351,4.351,0,0,1-5.5-1.6a2.432,2.432,0,0,1-.99.237h-.02A2.421,2.421,0,0,1-7.5-1.6a4.331,4.331,0,0,1-.836-.469c-.207-.154-.473-.37-.8-.647C-10.155-3.565-10.97-4.1-12.7-5.424a5.719,5.719,0,0,1-.667-.637V.246a.3.3,0,0,0,.092.217.293.293,0,0,0,.217.092H.056A.3.3,0,0,0,.274.463.3.3,0,0,0,.366.246m0-9.041v-.238c0-.028,0-.07-.005-.126a.266.266,0,0,0-.029-.12L.279-9.366A.193.193,0,0,0,.191-9.44a.359.359,0,0,0-.135-.024h-13.11a.294.294,0,0,0-.217.093.3.3,0,0,0-.092.217A3.381,3.381,0,0,0-11.942-6.41C-10.7-5.43-9.965-4.966-8.625-3.9c.039.032.153.128.338.285s.336.278.445.363.253.186.43.3a2.657,2.657,0,0,0,.489.266,1.145,1.145,0,0,0,.415.087h.02a1.154,1.154,0,0,0,.415-.087,2.686,2.686,0,0,0,.487-.266c.176-.119.321-.221.431-.3s.258-.2.443-.363l.338-.285C-3.034-4.966-2.3-5.43-1.055-6.41A4.53,4.53,0,0,0-.084-7.527,2.415,2.415,0,0,0,.366-8.8M1.6-9.153v9.4a1.488,1.488,0,0,1-.453,1.091,1.491,1.491,0,0,1-1.092.455h-13.11a1.487,1.487,0,0,1-1.091-.455A1.485,1.485,0,0,1-14.6.246v-9.4a1.487,1.487,0,0,1,.455-1.092,1.487,1.487,0,0,1,1.091-.455H.056a1.491,1.491,0,0,1,1.092.455A1.49,1.49,0,0,1,1.6-9.153"
                                        transform="translate(14.6 10.7)"
                                        fill="#72b0cb"
                                    />
                            </svg>
                        </span>
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_LINK_CONTACT"); ?>
                    </a>
                
                    <div class="inputs"></div>
                </div>
                <!-- .formu -->
            </form>
            <!-- form = formulario -->
            <!-- map -->
            <div class="map">
                <div class="info">
                    <h3 class="title">
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_TITLE_LOCATION"); ?>
                        
                    </h3>
                    <a href="#" class="location-movil">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16.261"
                                height="16.261"
                                viewBox="0 0 16.261 16.261"
                                >
                                    <path
                                    id="Trazado_28312"
                                    data-name="Trazado 28312"
                                    d="M8.131,16.261a8.131,8.131,0,1,1,8.131-8.131,8.132,8.132,0,0,1-8.131,8.131m0-13.419a4.027,4.027,0,0,1,4.027,4.027c0,2.224-4.027,6.55-4.027,6.55S4.1,9.094,4.1,6.869A4.027,4.027,0,0,1,8.131,2.842m0,2.427A1.527,1.527,0,1,1,6.6,6.8,1.527,1.527,0,0,1,8.131,5.269"
                                    fill="#72b0cb"
                                    fill-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_TEXT_MOVIL_LOCATION"); ?>
                        <!-- Estamos en Madrid,
                        <br>
                        en <strong>C. de Jorge Juan, 118</strong> -->
                    </a>
                    <a href="#" class="location-desktop">
                        <span>
                            <svg
                                xmlns="http://www.w3.org/2000/svg"
                                width="16.261"
                                height="16.261"
                                viewBox="0 0 16.261 16.261"
                                >
                                <path
                                    id="Trazado_28312"
                                    data-name="Trazado 28312"
                                    d="M8.131,16.261a8.131,8.131,0,1,1,8.131-8.131,8.132,8.132,0,0,1-8.131,8.131m0-13.419a4.027,4.027,0,0,1,4.027,4.027c0,2.224-4.027,6.55-4.027,6.55S4.1,9.094,4.1,6.869A4.027,4.027,0,0,1,8.131,2.842m0,2.427A1.527,1.527,0,1,1,6.6,6.8,1.527,1.527,0,0,1,8.131,5.269"
                                    fill="#72b0cb"
                                    fill-rule="evenodd"
                                />
                            </svg>
                        </span>
                        <?php echo get_field("ACF_HOME_BLOCK_CONTACT_TEXT_DESKTOP_LOCATION"); ?>
                        <!-- Estamos en Madrid, en
                        <strong>C. de Jorge Juan, 118</strong> -->
                    </a>
                    <a href="#" class="SQ_btn d-block btn-locations">
                    <?php echo get_field("ACF_HOME_BLOCK_CONTACT_BTN_LOCATION"); ?>
                    </a>
                </div>
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12149.493185386187!2d-3.676859922158063!3d40.42273226541802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422890ac9ebf1b%3A0x8acd6a77b2993452!2sCasco%20Antiguo%20Buceo!5e0!3m2!1ses-419!2sve!4v1696354541122!5m2!1ses-419!2sve"
                    style="border:0;"
                    allowfullscreen=""
                    loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"
                    class="w-100 map-location"
                ></iframe>
            </div>
            <!-- map -->
        </div>
    <?php
}