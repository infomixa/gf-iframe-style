<?php
/*
Plugin Name: GF Iframe Style
*/

function gfIframeStyle($form_id) { ?>
<!-- this is HTML -->
<style>
input[type="submit"].gform_button {
    background: #f16334;
    color: #fff;
    font-size: 18px !important;
    height: 60px;
    width: 100% !important;
}
   
@media (max-width: 641px) {
input[type="submit"].gform_button {
    background: #f16334;
    color: #fff;
    font-size: 18px !important;
    height: 60px;
    width: 100% !important;
    -webkit-appearance: none;
    }
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
    
.gfield_label, .ginput_complex label {
    display: none !important;
}
    
</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<?php }
add_action('gfiframe_head', 'gfIframeStyle');
