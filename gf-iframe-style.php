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

label {
	font-size: 13px !important;
}

.section-title {
	font-weight: bold;
	font-size: 14px !important;
}

.gform_page_footer {
	text-align: center;
}

.gform_page_footer input[type=button], .gform_page_footer input.gform_next_button {
	font-size: 16px !important;
	border: none;
	border-radius: 3px;
	color: white;
	padding: 10px 0;
	width: 108px !important;
	background-color: #0e85bf;
	cursor: pointer;
}

input[type=submit].gform_button {
	margin-top: 12px !important;
	border-radius: 3px;
	border: none;
}

.gform_wrapper .gfield_radio li label {
	margin-top: 7px !important;
}

.gfield_label, .ginput_complex label {
    display: none !important;
}

h3.gf_progressbar_title {
	font-size: 13px !important;
}

.gform_wrapper .gf_progressbar_percentage span {
	font-size: 12px !important;
	margin-top: 2px !important;
	margin-right: 8px !important;
}

</style>
<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.4.1/css/all.css" integrity="sha384-5sAR7xN1Nv6T6+dT2mhtzEpVJvfS3NScPQTrOxhwjIuvcA67KV2R5Jz6kr4abQsz" crossorigin="anonymous">
<?php }
add_action('gfiframe_head', 'gfIframeStyle');

