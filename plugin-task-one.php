<?php
/*
Plugin Name: Task one Generate UI
Plugin URI:  https://wordpress.org/
Description: This is a custom plugin for task one - WordPress Assignment
Version:     1.0.0
Author:      Hai Tran
Author URI:  https://wordpress.org
License:     GPL2
License URI: https://www.gnu.org/licenses/gpl-2.0.html
Text Domain: task-one
*/

defined( 'ABSPATH' ) || die;

define( 'TASK_ONE_PLUGIN_NAME', 'generate-ui' );
define( 'TASK_ONE_PLUGIN_PATH', plugin_dir_path( __FILE__ ) );
define( 'TASK_ONE_PLUGIN_URL', plugin_dir_url( __FILE__ ) );
define( 'TASK_ONE_VERSION', '1.0.0' );

require untrailingslashit( TASK_ONE_PLUGIN_PATH ) . '/includes/class-plugin-task-one.php';

function run_task_1_generate_ui() {
	$plugin = new Task_1_Generate_Ui();
	$plugin->run();
}

run_task_1_generate_ui();