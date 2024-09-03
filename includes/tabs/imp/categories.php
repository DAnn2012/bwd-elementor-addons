<?php
/**
 * 
 * @admin ~~// this is widget categories
 * 
 */
if ( ! defined( 'ABSPATH' ) ) exit;

$general_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('General Widgets (<div class="widgetCount"></div>)').'</h3></div>';
$cv_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('CV Builder (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$hero_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Hero Sections (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$blog_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Blog Widgets (<div class="widgetCount"></div>)', BWDEB_PLUGIN_TD).'</h3></div>';
$woo_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('WooCommerce Widgets (<div class="widgetCount"></div>)', BWDEB_PLUGIN_TD).'</h3></div>';
$ext_W = '<div class="bwd-widgets-item-title bwd-widgets-heading"><h3>'.wp_kses_post('Extensions (<div class="widgetCount"></div>) <sup><span>Pro</span></sup>').'</h3></div>';
$all_T = [$general_W,$cv_W,$hero_W,$blog_W,$woo_W,$ext_W];