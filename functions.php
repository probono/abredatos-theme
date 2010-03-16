<?php
if ( function_exists('register_sidebar') )
	register_sidebar(array(
		'before_widget' => '<div class="sidepanel">',
		'after_widget' => '</div>',
		'before_title' => '<h3>',
		'after_title' => '</h3>',
	));
?>