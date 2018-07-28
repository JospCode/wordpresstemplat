<?php 

if (function_exists('register_sidebar')){
	register_sidebar(array(
		'name'			=> 	'MyWidget1',
		'before_widget'			=> 	'<div class="widget">',
		'after_widget'			=> 	'</div>',
		'before_title'			=> 	'<h3>',
		'after_title'			=> 	'</h3>',
	));
}

if (function_exists('register_sidebar')){
	register_sidebar(array(
		'name'			=> 	'MyWidget2',
		'before_widget'			=> 	'<div class="widget">',
		'after_widget'			=> 	'</div>',
		'before_title'			=> 	'<h3>',
		'after_title'			=> 	'</h3>',
	));
}
?>