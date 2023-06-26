<?php 
function sugar_register_post_type() {
    // Register custom post type
    register_post_type( 'promo', array(
      'labels'             => array(
          'name'               => __( 'Акции'),
          'singular_name'      => __( 'Акция'),
          'add_new'            => __( 'Добавить новую акциию' ),
          'add_new_item'       => __( 'Добавить новую акциию' ),
          'edit_item'          => __( 'Редактировать акциию' ),
          'new_item'           => __( 'Новая акциия' ),
          'view_item'          => __( 'Посмотреть акциию' ),
          'search_items'       => __( 'Найти акциию' ),
          'not_found'          => __( 'Акциия не найдена' ),
          'not_found_in_trash' => __( 'В корзине акций не найдено'),
          'menu_name'          => __( 'Акции' ),
          'parent_item_colon' => 'parent' ,
        ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'show_in_rest'       => true,
      'show_in_nav_menus'  => true,
      'query_var'          => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'menu_position'      => 4,
      'menu_icon'          => 'dashicons-tag',
      'supports'           => array( 'title' , 'thumbnail', 'editor'), 
      'hierarchical'       => true,
  ) );
		
	register_post_type( 'brands', array(
      'labels'             => array(
          'name'               => __( 'Бренды'),
          'singular_name'      => __( 'Бренд'),
          'add_new'            => __( 'Добавить новый бренд' ),
          'add_new_item'       => __( 'Добавить новый бренд' ),
          'edit_item'          => __( 'Редактировать бренд' ),
          'new_item'           => __( 'Новый бренд' ),
          'view_item'          => __( 'Посмотреть бренд' ),
          'search_items'       => __( 'Найти бренд' ),
          'not_found'          => __( 'Бренд не найден' ),
          'not_found_in_trash' => __( 'В корзине бренд не найден'),
          'menu_name'          => __( 'Бренды' ),
          'parent_item_colon' => 'parent' ,
        ),
      'public'             => true,
      'publicly_queryable' => true,
      'show_ui'            => true,
      'show_in_menu'       => true,
      'show_in_rest'       => true,
      'show_in_nav_menus'  => true,
      'query_var'          => true,
      'capability_type'    => 'post',
      'has_archive'        => true,
      'menu_position'      => 4,
      'menu_icon'          => 'dashicons-amazon',
      'supports'           => array( 'title' , 'thumbnail', 'editor'), 
      'hierarchical'       => true,
  ) );

  register_post_type( 'video-review', array(
    'labels'             => array(
        'name'               => __( 'Видеообзоры'),
        'singular_name'      => __( 'Видеообзор'),
        'add_new'            => __( 'Добавить новый видеообзор' ),
        'add_new_item'       => __( 'Добавить новый видеообзор' ),
        'edit_item'          => __( 'Редактировать видеообзор' ),
        'new_item'           => __( 'Новый видеообзор' ),
        'view_item'          => __( 'Посмотреть видеообзор' ),
        'search_items'       => __( 'Найти видеообзор' ),
        'not_found'          => __( 'Видеообзор не найден' ),
        'not_found_in_trash' => __( 'В корзине видеообзор не найден'),
        'menu_name'          => __( 'Видеообзоры' ),
        'parent_item_colon' => 'parent' ,
      ),
    'public'             => true,
    'publicly_queryable' => true,
    'show_ui'            => true,
    'show_in_menu'       => true,
    'show_in_rest'       => true,
    'show_in_nav_menus'  => true,
    'query_var'          => true,
    'capability_type'    => 'post',
    'has_archive'        => true,
    'menu_position'      => 4,
    'menu_icon'          => 'dashicons-media-video',
    'supports'           => array( 'title' , 'thumbnail', 'editor'), 
    'hierarchical'       => true,
) );

register_post_type( 'review', array(
  'labels'             => array(
      'name'               => __( 'Отзывы'),
      'singular_name'      => __( 'Отзыв'),
      'add_new'            => __( 'Добавить новый отзыв' ),
      'add_new_item'       => __( 'Добавить новый отзыв' ),
      'edit_item'          => __( 'Редактировать отзыв' ),
      'new_item'           => __( 'Новый отзыв' ),
      'view_item'          => __( 'Посмотреть отзыв' ),
      'search_items'       => __( 'Найти отзыв' ),
      'not_found'          => __( 'Отзыв не найден' ),
      'not_found_in_trash' => __( 'В корзине отзыв не найден'),
      'menu_name'          => __( 'Отзыв' ),
      'parent_item_colon' => 'parent' ,
    ),
  'public'             => true,
  'publicly_queryable' => true,
  'show_ui'            => true,
  'show_in_menu'       => true,
  'show_in_rest'       => true,
  'show_in_nav_menus'  => true,
  'query_var'          => true,
  'capability_type'    => 'post',
  'has_archive'        => true,
  'menu_position'      => 4,
  'menu_icon'          => 'dashicons-thumbs-up',
  'supports'           => array( 'title' , 'thumbnail', 'editor'), 
  'hierarchical'       => true,
) );
}



add_action( 'after_setup_theme', 'sugar_register_post_type' );

?>