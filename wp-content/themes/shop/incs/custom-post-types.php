<?php
add_action( 'init', 'register_post_types' );

function register_post_types(){

	register_post_type( 'slider', [
		'labels' => [
			'name'               => __('Slider', 'shop'), // основное название для типа записи
			'singular_name'      => __('Slider', 'shop'), // название для одной записи этого типа
			'add_new'            => __('Add new slide', 'shop'), // для добавления новой записи
			'add_new_item'       => __('New slide', 'shop'), // заголовка у вновь создаваемой записи в админ-панели.
			'edit_item'          => __('Edit', 'shop'), // для редактирования типа записи
			'new_item'           => __('New slide', 'shop'), // текст новой записи
			'view_item'          => __('View', 'shop'), // для просмотра записи этого типа.
			'menu_name'          => __('Slider', 'shop'), // название меню
            'all_items'         => __('All slides', 'shop')
		],
		'public'                 => true,
		'menu_icon'           => 'dashicons-format-gallery',
		'supports'            => array('title', 'editor', 'thumbnail'),
        'show_in_rest'         => true
	] );

}