<?php


function FUN_BLOCK_SuperG_Consutanos____content(){
    ?>
    
        <div class="box-border">
            <h3 class="title-consult">
                <?php echo get_field("ACF_BLOCK_TITLE_CONSULTATION_GENERICA"); ?>
            </h3>
            <div class="box-btn">
                <a href="#" class="SQ_btn btn">
                    <?php echo get_field("ACF_BLOCK_TEXT_BTN_CONSULTATION_GENERICA"); ?>
                </a>
            </div>
        </div>
    
    <?php
}