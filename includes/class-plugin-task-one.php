<?php

class Task_1_Generate_Ui {

	protected $loader;

	public function __construct() {
		$this->load_dependencies();
		$this->define_public_hooks();

	}

	private function load_dependencies(): void {
		require_once untrailingslashit( TASK_ONE_PLUGIN_PATH ) . '/public/class-plugin-task-one-public.php';
		require_once untrailingslashit( TASK_ONE_PLUGIN_PATH ) . '/includes/class-plugin-task-one-loader.php';

		$this->loader = new Plugin_Task_One_Loader();
	}

	private function define_public_hooks(): void {
		$plugin_public = new Plugin_Task_One_Ui_Public();

		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_styles' );
		$this->loader->add_action( 'wp_enqueue_scripts', $plugin_public, 'enqueue_scripts' );
		$this->loader->add_action( 'wp_head', $plugin_public, 'output_content' );
		$this->loader->add_filter( '', $plugin_public, 'remove_admin_bar' );
	}

	public function run(): void {
		$this->loader->run();
	}

	public function get_loader(): Plugin_Task_One_Loader {
		return $this->loader;
	}
}