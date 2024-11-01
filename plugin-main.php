<?php
/*
Plugin Name: Wm Accordion
Plugin URI: http://websitebuilderbd.com/category/plugins/
Description: World Markerter Accordion is awesome. It permits you to add much more accordions in your WordPress website. It can be in posts, in pages, in sidebars, or anywhere you want.Four attractive designs and can change Border color, hover color,open accordion active color, icon color, font color. Must need to buy it and in plugin folder you will get documentasion just read it and set it your own website.
Author: MD. Mamunur Roshid
Version: 1.0
Author URI:  http://websitebuilderbd.com/
*/



/*Some Set-up*/
define('WM_ACCORDION_PLUGIN_PATH', WP_PLUGIN_URL . '/' . plugin_basename( dirname(__FILE__) ) . '/' );


/* Adding Latest jQuery from Wordpress */
function WM_accordion_latest_jquery() {
	wp_enqueue_script('jquery');
}
add_action('init', 'WM_accordion_latest_jquery');





/* Adding plugin javascript Main file */
wp_enqueue_script('ppm-accordion-plugin-main', WM_ACCORDION_PLUGIN_PATH.'js/jquery.collapse.js', array('jquery'),'1.0', true);

/* Adding plugin javascript active file */
wp_enqueue_script('wm-accordion-plugin-script-active', WM_ACCORDION_PLUGIN_PATH.'js/collapse-active.js', array('jquery'),'2.0', true);

/* Adding Plugin custm CSS file */
wp_enqueue_style('wm-accordion-plugin-style', WM_ACCORDION_PLUGIN_PATH.'css/collapse-css.css');









function wm_accordion_toggles($atts, $content = null) {
	extract(shortcode_atts(array(
        'title_one'      => '',
        'title_two'      => '',
        'title_three'      => '',
        'des_one'      => '',
        'des_two'      => '',
        'des_three'      => ''
    ), $atts));
	
	return '<div class="accordion-Latest wm-tabs-default style_latest style_latest7" id="wm-tabs">
						
							<h3><a href=""><span class="wm-accordion-icon"></span><span class="wm_accordion_bottom_icon"></span> '.$title_one.'
							</a></h3>
							<div>
							<div class="tab_content">
							'.$des_one.'
							
							</div>
							</div>
							<h3>
							<a href="">
							<span class="wm-accordion-icon"></span><span class="wm_accordion_bottom_icon"></span>'.$title_two.'
							</a>
							</h3>
							
							<div>
							<div class="tab_content">
							'.$des_two.'
							
							</div>
							</div>
							<h3>
							<a href="">
							<span class="wm-accordion-icon"></span><span class="wm_accordion_bottom_icon"></span>'.$title_three.'
							</a>
							</h3>
							<div>
							<div class="tab_content">
							'.$des_three.'
							
							</div>
							</div>
							
						</div>';
}
add_shortcode ("wm_accordion_one", "wm_accordion_toggles");

function wm_accordion_latest($atts, $content = null) {
	extract(shortcode_atts(array(
        'title_one'      => '',
        'title_two'      => '',
        'title_three'      => '',
        'des_one'      => '',
        'des_two'      => '',
        'des_three'      => ''
    ), $atts));
	
	return '<div class="accordion-collapse">
							<h3>'.$title_one.'</h3>
							<div>
							'.$des_one.'
							</div>
							<h3>'.$title_two.'</h3>
							<div>
							'.$des_two.'
							</div>
							<h3>'.$title_three.'</h3>
							<div>
							'.$des_three.'
							</div>
							
						</div>';
}
add_shortcode ("wm_accordion_two", "wm_accordion_latest");


function wm_accordion_another($atts, $content = null) {
	extract(shortcode_atts(array(
         'title_one'      => '',
        'title_two'      => '',
        'title_three'      => '',
        'des_one'      => '',
        'des_two'      => '',
        'des_three'      => ''
    ), $atts));
	
	return '<div class="accordion-another">
							<h3><span class="minus-plus"><i class="fa fa-plus fa-plus"></i><i class="fa fa-minus"></i></span>'.$title_one.'</h3>
							<div>
							'.$des_one.'
							</div>
							<h3><span class="minus-plus"><i class="fa fa-plus fa-plus"></i><i class="fa fa-minus"></i></span>'.$title_two.'</h3>
							<div>
							'.$des_two.'
							</div>
							<h3><span class="minus-plus"><i class="fa fa-plus fa-plus"></i><i class="fa fa-minus"></i></span>'.$title_three.'</h3>
							<div>
							'.$des_three.'
							</div>
							
						</div>';
}
add_shortcode ("wm_accordion_three", "wm_accordion_another");

function accordion_collapse_nested($atts, $content = null) {
	extract(shortcode_atts(array(
        'title_one'      => '',
        'title_two'      => '',
        'title_three'      => '',
        'des_one'      => '',
        'des_two'      => '',
        'des_three'      => ''
    ), $atts));
	
	return '<div class="accordion-collapse accordion-collapse_nested">
							<h3>'.$title_one.'</h3>
							<div>
							'.$des_one.'
							</div>
							<h3>'.$title_two.'</h3>
							<div>
							'.$des_two.'
							</div>
							<h3>'.$title_three.'</h3>
							<div>
							'.$des_three.'
							</div>
							
						</div>';
}
add_shortcode ("wm_accordion_four", "accordion_collapse_nested");

?>