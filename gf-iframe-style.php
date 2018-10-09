<?php
/*
Plugin Name: GF Iframe Style
*/

function gfIframeStyle($form_id) { ?>
<!-- this is HTML -->
<style>
input[type="submit"].gform_button {
    background: #2b5e7c;
    color: #fff;
    font-size: 18px !important;
    height: 60px;
    width: 100% !important;
}

.gform_wrapper input[type=text] {
    height: 50px;
    border: 3px solid #dbdbdb;
    border-radius: 5px;
    outline: none; 
    color: #000;
}

.gform_wrapper textarea {
    border: 3px solid #dbdbdb;
    border-radius: 5px;
    outline: none; 
    color: #000;
}
    
gfield_label, ginput_complex label {
    display: none !important;
}
    
</style>
<?php }
add_action('gfiframe_head', 'gfIframeStyle');
