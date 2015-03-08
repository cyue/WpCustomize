<?php
	function wpbootstrap_script_with_jquery() {
		// 为一个主题注册一个script
		//wp_register_script('custom-script', get_template_directory_uri() . '/bootstrap/js/bootstrap.min.js', array('jquery'));
		wp_register_script('custom-script', get_template_directory_uri() . 'http://cdn.bootcss.com/bootstrap/3.3.2/js/bootstrap.min.js', array('jquery'));
		// 把一个插件或者脚本script放入加载队列
		wp_enqueue_script('custom-script');
	}
	add_action('wp_enqueue_scripts', 'wpbootstrap_script_with_jquery');
?>
