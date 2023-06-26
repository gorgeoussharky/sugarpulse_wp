<?php

use Carbon_Fields\Container;
use Carbon_Fields\Field;

add_action( 'carbon_fields_register_fields', 'sugarpulse_meta_fields' );
function sugarpulse_meta_fields() {
	
	
						/*    Front-page    */

    Container::make( 'post_meta', 'Слайдер на главной' )
    ->where( 'post_id', '=', get_option( 'page_on_front' ) )
    ->add_fields( array(
		
		Field::make( 'complex', 'main_slider',   'Слайдер' )
		->set_layout( 'tabbed-horizontal' )
		->add_fields( 'main_slider_item', array(
				Field::make( 'text', 'main_slider_title', 'Заголовок слайда' )
				->set_width(100),
				Field::make( 'text', 'main_slider_btn', 'Текст кнопки' )
				->set_width(100),
				Field::make( 'textarea', 'main_slider_text', 'Текст' )
				->set_width(100),
				Field::make( 'text', 'main_slider_link', 'Ссылка' )
				->set_width(100),
				Field::make( 'image', 'main_slider_img', 'Изображение на фоне' )
				->set_width(50)
				->set_value_type( 'url' ),
				Field::make( 'text', 'main_slider_img_alt', 'Alt для изображения' )
				->set_width(50),
		)),
		
		Field::make('text', 'hero_title', 'Заголовок')
		->set_width(33),
		Field::make('textarea', 'hero_text', 'Текст')
		->set_width(33),
		
	));
	
	/*    Faq   */
	
    Container::make( 'post_meta', 'Faq' )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', '=', 'faq.php')
    ->add_fields( array(
			Field::make( 'complex', 'faq_block',   'Контент блока' )
            ->add_fields( 'block', array(
					Field::make( 'text', 'faq_block_title', 'Заголовок категории вопросов' )
					->set_width(30),                       
                    Field::make( 'complex', 'faq_block_list',   'Блок вопрос' )
                    ->add_fields( 'image', array(
							Field::make( 'text', 'faq_block_list_title', 'Вопрос' )
							->set_width(100),
							Field::make( 'textarea', 'faq_block_list_text', 'Ответ' )
							->set_width(100),
                    )),
          )),
    ));
	
	
	/*    About-us */
	
    Container::make( 'post_meta', 'About-us' )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', '=', 'about-us.php')
    ->add_fields( array(
			Field::make( 'complex', 'about_us_employees',   'Контент блока' )
            ->add_fields( 'block', array(
					Field::make( 'image', 'about_us_employees_icon', 'Фото работника' )
					->set_width(30)
					->set_value_type( 'url' ),
					Field::make( 'text', 'about_us_employees_name', 'Ф.И.О работника' )
					->set_width(30),
					Field::make( 'text', 'about_us_employees_job', 'Должность работника' )
					->set_width(30),
          	)),
		
			Field::make( 'text', 'about_us_advantages_title', 'Заголовок приемуществ' )
			->set_width(30),
		
			Field::make( 'complex', 'about_us_advantages_block',   'Блок приемуществ' )
            ->add_fields( 'block', array(
					Field::make( 'image', 'about_us_advantages_icon', 'Иконка' )
					->set_width(30)
					->set_value_type( 'url' ),
					Field::make( 'text', 'about_us_advantages_title', 'Заголовок' )
					->set_width(30),
					Field::make( 'textarea', 'about_us_advantages_text', 'Текст' )
					->set_width(30),
          	)),
    ));
	
	
	
	/*    Contacts   */
	
    Container::make( 'post_meta', 'Contacts' )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', '=', 'contacts.php')
    ->add_fields( array(
			Field::make( 'complex', 'contacts_blocks',   'Контент блока' )
            ->add_fields( 'block', array(
					Field::make( 'image', 'contacts_icon', 'Изображение на фоне' )
					->set_width(30)
					->set_value_type( 'url' ),
					Field::make( 'text', 'contacts_title', 'Заголовок категории вопросов' )
					->set_width(30),
					Field::make( 'text', 'contacts_text', 'Заголовок категории вопросов' )
					->set_width(30),
          )),
    ));
	
	/*    Delivery   */
	
    Container::make( 'post_meta', 'Delivery' )
    ->where( 'post_type', '=', 'page' )
    ->where('post_template', '=', 'delivery.php')
    ->add_fields( array(
			Field::make( 'rich_text', 'delivery_delivery', 'Блок доставка' )
			->set_width(100),
			Field::make( 'complex', 'delivery_delivery_sdec',   'Доставка таблица' )
            ->add_fields( 'block', array(
					Field::make( 'textarea', 'delivery_delivery_text', 'Доставка текст' )
					->set_width(100),
          	)),
			Field::make( 'rich_text', 'delivery_contacts', 'Блок контактов' )
			->set_width(100),
			Field::make( 'rich_text', 'delivery_payment', 'Блок оплата' )
			->set_width(100),
    ));
	
	
	/*    Promo   */
	
	Container::make( 'post_meta', 'Акции' )
    ->show_on_post_type(array('promo', 'post'))
    ->add_fields( array(
		Field::make( 'text', 'promo_btn_text', 'Текст кнопки' )
		->set_width(100),
		Field::make( 'text', 'promo_btn_link', 'Ссылка кнопки' )
		->set_width(100),
    ));
		
	/*    News-single   */
	
	Container::make( 'post_meta', 'Новость' )
    ->show_on_post_type(array('news', 'post'))
    ->add_fields( array(
				Field::make( 'text', 'news_category', 'категория' )
				->set_width(100),
                Field::make( 'complex', 'news_single_content',   'Блоки основного контента' )
                ->add_fields( 'block', array(
                    Field::make( 'text', 'news_single_block_title', 'Заголовок блока' )
                    ->set_width(100),                   
                    Field::make( 'complex', 'news_single_block_content',   'Контент блока' )
                    ->add_fields( 'block', array(
                            Field::make( 'rich_text', 'news_single_block_text', 'Основной текст' )
                            ->set_width(100),
						    Field::make( 'textarea', 'news_single_block_span', 'Синий текст' )
                            ->set_width(50),
							Field::make( 'image', 'news_single_block_img', 'Изображение на фоне' )
							->set_width(50)
							->set_value_type( 'url' ),
                    )),
					
				)),
					
	));
	
	Container::make( 'post_meta', 'Брэнды' )
    ->show_on_post_type(array('brands', 'post'))
    ->add_fields( array(
					
	));
						
	/*    Options   */
	
	Container::make( 'theme_options', __( 'Общие', 'crb' ) )
    ->add_fields( array(
			
		Field::make( 'text', 'th_options_tel', 'Телефон' )
        ->set_width(50),
		Field::make( 'text', 'th_options_mail', '@email' )
        ->set_width(50),
		Field::make( 'text', 'th_options_time', 'Часы работы' )
        ->set_width(50),
		Field::make( 'text', 'th_options_address', 'Юр. адрес' )
        ->set_width(50),
		
		Field::make( 'complex', 'th_options_links',   'Соц. сети' )
		->add_fields( 'th_options_links_item', array(
			Field::make( 'textarea', 'th_options_links_icon', 'Иконка' )
			->set_width(50),
			Field::make( 'textarea', 'th_options_links_icon_b', 'Иконка с акцентом' )
			->set_width(50),
			Field::make( 'text', 'th_options_links_link', 'Полная ссылка' )
			->set_width(50)
			)),
		
        ));

}