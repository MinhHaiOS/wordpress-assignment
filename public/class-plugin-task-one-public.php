<?php

class Plugin_Task_One_Ui_Public {
	public function enqueue_styles(): void {
		wp_enqueue_style( untrailingslashit( TASK_ONE_PLUGIN_NAME ), untrailingslashit( TASK_ONE_PLUGIN_URL ) . '/public/assets/css/style-public.css', array(), untrailingslashit( TASK_ONE_VERSION ), 'all' );
	}

	public function enqueue_scripts(): void {
		wp_enqueue_script( untrailingslashit( TASK_ONE_PLUGIN_NAME ), untrailingslashit( TASK_ONE_PLUGIN_URL ) . '/public/assets/js/main.js', array( 'jquery' ), untrailingslashit( TASK_ONE_VERSION ) );
	}

	public function output_content(): void {
		$content = '<div class="box">';
		$content .= '<button>' . esc_html__( 'Start Animation', 'task-one' ) . '</button>';
		$content .= '<p>' . esc_html__( 'By default, all HTML elements have a static position, and cannot be moved. To manipulate the position, remember to first set the CSS position property of the element to relative, fixed, or absolute!', 'task-one' ) . '</p>';
		$content .= '<div class="hello-text">' . esc_html__( 'HELLO', 'task-one' ) . '</div>';
		$content .= '</div>';

		echo $content;
	}

	public function remove_admin_bar(): string {
		return '__return_false';
	}
}