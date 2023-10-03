<?php


function FUN_BLOCK_CONTACT_Landing_contacto____content(){
    echo "****";
    ?>
        <section id="CONTACT_FORM" class="wrap-small">
            <form action="" class="w-100">
                <div class="content-form">
                    <div class="info">
                        <h1 class="title-contact">
                            <?php echo get_field("ACF_CONTACT_TITLE"); ?>
                        </h1>
                        <div class="text-icon">
                            <span>
                            
                                <svg
                                    xmlns="http://www.w3.org/2000/svg"
                                    width="22.365"
                                    height="17.473"
                                    viewBox="0 0 22.365 17.473"
                                    >
                                        <g id="Grupo_1223" data-name="Grupo 1223" transform="translate(0.5 0.5)">
                                            <path
                                                id="Trazado_606"
                                                data-name="Trazado 606"
                                                d="M5.134,3.734V-4.583a7.639,7.639,0,0,1-.878.84C1.979-1.994.9-1.291-.44-.171Q-1.088.377-1.5.682A5.737,5.737,0,0,1-2.6,1.3,3.207,3.207,0,0,1-3.9,1.613H-3.93A3.192,3.192,0,0,1-5.236,1.3a5.712,5.712,0,0,1-1.1-.618C-6.611.48-6.962.195-7.4-.171c-1.341-1.12-2.417-1.823-4.693-3.572a7.541,7.541,0,0,1-.879-.84V3.734a.394.394,0,0,0,.121.287.386.386,0,0,0,.287.121H4.727a.413.413,0,0,0,.408-.408m0-11.922V-8.5c0-.037,0-.092-.007-.166a.35.35,0,0,0-.038-.158L5.02-8.941a.255.255,0,0,0-.116-.1.474.474,0,0,0-.178-.031H-12.561a.388.388,0,0,0-.287.122.391.391,0,0,0-.121.287,4.458,4.458,0,0,0,1.874,3.616c1.639,1.292,2.607,1.9,4.374,3.306.052.042.2.169.446.376s.443.367.587.478.333.245.567.4a3.5,3.5,0,0,0,.644.351,1.51,1.51,0,0,0,.548.114H-3.9a1.521,1.521,0,0,0,.548-.114,3.541,3.541,0,0,0,.643-.351c.232-.156.423-.291.568-.4s.34-.269.584-.478l.446-.376c1.767-1.4,2.738-2.013,4.377-3.306a5.974,5.974,0,0,0,1.28-1.472,3.185,3.185,0,0,0,.593-1.673M6.765-8.66V3.734a1.962,1.962,0,0,1-.6,1.439,1.966,1.966,0,0,1-1.441.6H-12.561A1.961,1.961,0,0,1-14,5.173a1.958,1.958,0,0,1-.6-1.439V-8.66A1.961,1.961,0,0,1-14-10.1a1.961,1.961,0,0,1,1.439-.6H4.727a1.966,1.966,0,0,1,1.441.6,1.965,1.965,0,0,1,.6,1.441"
                                                transform="translate(14.6 10.7)"
                                                fill="#72b0cb"
                                                stroke="#72b0cc"
                                                stroke-width="1"
                                            />
                                        </g>
                                </svg>
                            </span>
                            <?php echo get_field("ACF_CONTACT_TEXT_ICON_MESSENGER"); ?>
                        </div>
                        <p class="paragraph">
                            <?php echo get_field("ACF_CONTACT_DESCRIP_BLOCK_CONTACT"); ?>
                        </p>
                        </div>
                        <!-- .info -->
                    <div class="part-form"></div>
                    <!-- part-form -->
                 </div>
                <!-- .content-form-->
            </form>

            <div class="content-map">
                <div class="info">
                    <div class="part-upper">
                        <h2 class="title-contact">
                            <?php echo get_field("ACF_CONTACT_TITLE_MAP_BLOCK"); ?>
                        </h2>
                        <div class="location">
                            <i class="icon-location">
                                <svg
                                        xmlns="http://www.w3.org/2000/svg"
                                        width="21.443"
                                        height="21.443"
                                        viewBox="0 0 21.443 21.443"
                                    >
                                        <path
                                            id="Trazado_1014"
                                            data-name="Trazado 1014"
                                            d="M10.721,21.443A10.722,10.722,0,1,1,21.443,10.722,10.723,10.723,0,0,1,10.721,21.443m0-17.7a5.31,5.31,0,0,1,5.311,5.311c0,2.933-5.311,8.637-5.311,8.637s-5.311-5.7-5.311-8.637a5.31,5.31,0,0,1,5.311-5.311m0,3.2A2.014,2.014,0,1,1,8.708,8.962a2.014,2.014,0,0,1,2.014-2.014"
                                            fill="#72b0cb"
                                            fill-rule="evenodd"
                                        />
                                    </svg>
                            </i>
                            <a href="#">
                                <?php echo get_field("ACF_CONTACT_TEXT_LOCACTION_CONTACT"); ?>
                                <!-- Estamos en Madrid,
                                <br>
                                en
                                <strong>C. de Jorge Juan, 118</strong> -->
                            </a>
                        </div>
                        <!-- .location -->
                    </div>
                    <!-- .part-upper -->
                    <div class="part-bottom">
                        <a href="#" class="SQ_btn btn formatier-btn d-block">
                            <?php echo get_field("ACF_CONTACT_BTN_TEXT_LOCACTION_CONTACT"); ?>
                        </a>
                    </div>
                    <!-- .part-bottom -->
                </div>
                <!-- .info -->
                <div class="direction">
                    <iframe
                        src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d12149.493185386187!2d-3.676859922158063!3d40.42273226541802!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xd422890ac9ebf1b%3A0x8acd6a77b2993452!2sCasco%20Antiguo%20Buceo!5e0!3m2!1ses-419!2sve!4v1696354541122!5m2!1ses-419!2sve"
                        height="461"
                        style="border:0;"
                        allowfullscreen=""
                        loading="lazy"
                        referrerpolicy="no-referrer-when-downgrade"
                        class="w-100"
                    ></iframe>
                </div>
                <!-- .direction -->
            </div>
            <!-- .content-map -->
        </section>
    <?php
}