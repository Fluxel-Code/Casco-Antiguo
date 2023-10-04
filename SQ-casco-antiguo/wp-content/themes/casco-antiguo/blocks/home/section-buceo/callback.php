<?php


function FUN_BLOCK_HOME_SectionBuceo____content(){
    ?>
    
        <section id="HOME_BUCEO">
            <div class="square-buceo">
                <figure class="m-0 video-divers">
                    <video src="https://cascoantiguo.temporalweb.es/wp-content/uploads/2023/09/cursobuceo.mp4" muted class="w-100 h-100"></video>
                </figure>
                <div class="box-info">
                    <div class="content">
                        <h2 class="title-divers text-white">
                            <?php echo get_field("ACF_HOME_BLOCK_DIVER_TITLE"); ?>
                            <!-- Tu curso
                            <br>
                            de buceo -->
                        </h2>
                        <p class="paragraph text-white">
                            <?php echo get_field("ACF_HOME_BLOCK_DIVER_DESCRIP"); ?>
                        </p>
                        <div class="boton">
                            <a href="#" class="SQ_btn d-block">
                                <?php echo get_field("ACF_HOME_BLOCK_DIVER_BTN"); ?>
                            </a>
                        </div>
                    </div>
                    <!-- content -->
                </div>
                <!-- box-info -->
            </div>
        </section>
        <!-- #HOME_BUCEO -->
    
    <?php
}