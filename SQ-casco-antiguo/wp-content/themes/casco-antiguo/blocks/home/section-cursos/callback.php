<?php


function FUN_BLOCK_HOME_SectionCursos____content(){
    ?>

        <h2 class="m-bottom-20 mt-0">
            <?php echo get_field("ACF_HOME_COURSES_TITLE"); ?>
        </h2>
        <p class="paragraph"><?php echo get_field("ACF_HOME_COURSES_DESCRIP"); ?></p>
        <div class="box-grid">
            <div class="item" data-video_cursos="#firstVideo">
                <figure class="m-0">
                    <video src="https://cascoantiguo.temporalweb.es/wp-content/uploads/2023/09/1.mp4" id="firstVideo" muted></video>
                </figure>
                <div class="layer">
                    <h3><?php echo get_field("ACF_HOME_COURSES_TITLE_VIDEO_FIRST"); ?></h3>
                    <a href="#" class="url-item">
                        <?php echo get_field("ACF_HOME_COURSES_TEXT_LINK"); ?>
                        <span>
                            <?php echo file_get_contents(wp_get_attachment_image_url(377, "full" )); ?>
                        </span>
                    </a>
                </div>
                <!-- .layer -->
            </div>
            <!-- .item -->

            <div class="item" data-video_cursos="#secondsVideo">
                <figure class="m-0">
                    <video src="https://cascoantiguo.temporalweb.es/wp-content/uploads/2023/09/2.mp4" id="secondsVideo" muted></video>
                </figure>
                <div class="layer">
                    <h3><?php echo get_field("ACF_HOME_COURSES_TITLE_VIDEO_SECONDS"); ?></h3>
                    <a href="#" class="url-item">
                        <?php echo get_field("ACF_HOME_COURSES_TEXT_LINK"); ?>
                        <span>
                            <?php echo file_get_contents(wp_get_attachment_image_url(377, "full" )); ?>
                        </span>
                    </a>
                </div>
                <!-- .layer -->
            </div>
            <!-- .item -->

            <div class="item" data-video_cursos="#thirdVideo">
                <figure class="m-0">
                    <video src="https://cascoantiguo.temporalweb.es/wp-content/uploads/2023/09/video-output-302141FF-E4A3-438F-B31D-70FD1048DB5B_3.mp4" id="thirdVideo" muted></video>
                </figure>
                <div class="layer">
                    <h3><?php echo get_field("ACF_HOME_COURSES_TITLE_VIDEO_THIRD"); ?></h3>
                    <a href="#" class="url-item">
                        <?php echo get_field("ACF_HOME_COURSES_TEXT_LINK"); ?>
                        <span>
                            <?php echo file_get_contents(wp_get_attachment_image_url(377, "full" )); ?>
                        </span>
                    </a>
                </div>
                <!-- .layer -->
            </div>
            <!-- .item -->
        </div>
        <!-- .box-grid -->
        <div class="d-none d-md-block m-top-75 mx-auto square-botton">
            <a href="#" class="SQ_btn d-block"><?php echo get_field("ACF_HOME_COURSES_BTN"); ?></a>
        </div>
        <!-- .square-botton -->



        
    <?php
    FUN_BLOCK_HOME_SectionCursos____content_JS();
}


function FUN_BLOCK_HOME_SectionCursos____content_JS(){
    ?>
    <!-- scrip del video -->
    <script>

        jQuery(document).ready(function (){
            const arrVideo = Array.from(document.querySelectorAll("[data-video_cursos]"));
            arrVideo.forEach(element => {
                element.addEventListener('mouseenter', e => {
                   const videoPlay = document.querySelector(element.dataset.video_cursos);
                   videoPlay.play();
                })

                element.addEventListener('mouseleave', e => {
                   const videoPause = document.querySelector(element.dataset.video_cursos);
                   videoPause.pause();
                })
            });
        });
            
        </script>
    <?php
}