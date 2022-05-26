<?php
$NUMBER_IMAGES = 10;

/**
 * imageCaptchaGallery : generate a gallery of captcha images
 */
function imageCaptchaGallery() {
    global $NUMBER_IMAGES;
    global $img;

    for ($i=1 ; $i <= $NUMBER_IMAGES ; $i++) {
        $name = 'captcha'.$i;
        $src = $img.'/captcha/'.$name.'.jpg';
        echo '<div id="'.$name.'" class="hidden">';
        echo '<img src="'.$src.'">';
        echo '</div>';
    }
}