<?php
/**
 * Plugin Name: Read Meter - Reading Time & Progress Bar for WordPress.
 * Description:  To display Reading Time for a particular post.
 * Version:     1.0.5
 * Author:      Brainstorm Force
 * Author URI:  https://brainstormforce.com
 * Text Domain: read-meter.
 * Main
 *
 * PHP version 7
 *
 * @category PHP
 * @package  BSF ReadTime
 * @author   Display Name <username@brainstormforce.com>
 * @license  https://brainstormforce.com
 * @link     https://brainstormforce.com
 */

define('BSF_RT_PATH', __FILE__);

define('BSF_RT_VER', '1.0.5');

define('BSF_RT_ABSPATH', plugin_dir_path(__FILE__));

define('BSF_RT_PLUGIN_DIR', untrailingslashit(plugin_dir_path(__FILE__)));

define('BSF_RT_PLUGIN_URL', untrailingslashit(plugins_url('', __FILE__)));

// var_dump(__FILE__);print_r('<br>');
// var_dump(plugin_dir_path( __FILE__ ));print_r('<br>');
// var_dump(untrailingslashit( plugin_dir_path( __FILE__ ) ));print_r('<br>');
// var_dump(untrailingslashit( plugins_url( '', __FILE__ ) ));die();

require_once plugin_dir_path(__FILE__) . 'classes/class-bsfrt-loader.php';
require_once plugin_dir_path(__FILE__) . 'classes/class-bsfrt-readtime.php';
        
// print_r('expression');
