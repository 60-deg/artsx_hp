<?php
add_action( 'wp_enqueue_scripts', 'theme_enqueue_styles' );
function theme_enqueue_styles() {
  wp_enqueue_style( 'parent-style', get_template_directory_uri() . '/style.css' );
  wp_enqueue_style( 'child-style', get_stylesheet_directory_uri() . '/style.css', array('parent-style')
);
}

// 子テーマ用の関数
if (function_exists('register_sidebar')){
	register_sidebar(array(
			'before_widget' => '<div class="top_main_widget" id="%1$s">'."\n",
			'after_widget' => '</div>'."\n",
			'before_title' => '<h3>',
			'after_title' => '</h3>',
			'name' => 'トップメイン',
			'id' => 'top_main_widget'
	));
}

?>