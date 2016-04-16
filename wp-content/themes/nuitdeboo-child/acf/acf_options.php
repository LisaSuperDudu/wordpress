<?php
if(function_exists("register_field_group"))
{
	register_field_group(array (
		'id' => 'acf_modules',
		'title' => 'Modules',
		'fields' => array (
			array (
				'key' => 'field_571239024bdd0',
				'label' => 'Homepage',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57123848f36de',
				'label' => 'Inclure le module "homepage" fond d\'écran',
				'name' => 'homepage_module_screen',
				'type' => 'select',
				'choices' => array (
					'oui' => 'Oui',
					'non' => 'Non',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_571239164bdd1',
				'label' => 'Changer l\'écran de la page d\'accueil',
				'name' => 'homepage_screen',
				'type' => 'image',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123848f36de',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'save_format' => 'object',
				'preview_size' => 'thumbnail',
				'library' => 'all',
			),
			array (
				'key' => 'field_5712397bda1ca',
				'label' => 'Réseaux',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57123987da1cb',
				'label' => 'Inclure le module réseaux sociaux',
				'name' => 'global_module_social',
				'type' => 'select',
				'choices' => array (
					'oui' => 'Oui',
					'non' => 'Non',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57123a35b63f8',
				'label' => 'Facebook',
				'name' => 'social_facebook',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://facebook.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123a5db63f9',
				'label' => 'Twitter',
				'name' => 'social_twitter',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://twitter.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123a7cb63fa',
				'label' => 'Periscope',
				'name' => 'social_periscope',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://periscope.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123aa7b63fb',
				'label' => 'Instagram',
				'name' => 'social_instagram',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://instagram.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123ac0b63fc',
				'label' => 'Github',
				'name' => 'social_github',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://github.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123ad7b63fd',
				'label' => 'Youtube',
				'name' => 'social_youtube',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://youtube.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123ae5b63fe',
				'label' => 'Bambuser',
				'name' => 'social_bambuser',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://bambuser.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123af6b63ff',
				'label' => 'Scoopit',
				'name' => 'social_scoopit',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://scoopit.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123b0ab6400',
				'label' => 'Tumblr',
				'name' => 'social_tumblr',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://tumblr.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123b1db6401',
				'label' => 'Snapchat',
				'name' => 'social_snapchat',
				'type' => 'text',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57123987da1cb',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'default_value' => '',
				'placeholder' => 'https://snapchat.com/xxxx',
				'prepend' => '',
				'append' => '',
				'formatting' => 'none',
				'maxlength' => '',
			),
			array (
				'key' => 'field_57123b4136e55',
				'label' => 'Carte',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57123be236e57',
				'label' => 'Inclure le module carte',
				'name' => 'homepage_module_map',
				'type' => 'select',
				'choices' => array (
					'oui' => 'Oui',
					'non' => 'Non',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57123b4936e56',
				'label' => 'Participer',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57123c1936e58',
				'label' => 'Inclure le module participer',
				'name' => 'homepage_module_takepart',
				'type' => 'select',
				'choices' => array (
					'oui' => 'Oui',
					'non' => 'Non',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_571261bcb088d',
				'label' => 'Participer (page)',
				'name' => 'homepage_takepart',
				'type' => 'post_object',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57125fb8963ea',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57125fb0963e9',
				'label' => 'Manifesto',
				'name' => '',
				'type' => 'tab',
			),
			array (
				'key' => 'field_57125fb8963ea',
				'label' => 'Inclure le module manifesto',
				'name' => 'homepage_module_manifesto',
				'type' => 'select',
				'choices' => array (
					'oui' => 'Oui',
					'non' => 'Non',
				),
				'default_value' => '',
				'allow_null' => 0,
				'multiple' => 0,
			),
			array (
				'key' => 'field_57125edc26c22',
				'label' => 'Manifesto (page)',
				'name' => 'homepage_manifesto',
				'type' => 'post_object',
				'conditional_logic' => array (
					'status' => 1,
					'rules' => array (
						array (
							'field' => 'field_57125fb8963ea',
							'operator' => '==',
							'value' => 'oui',
						),
					),
					'allorany' => 'all',
				),
				'post_type' => array (
					0 => 'page',
				),
				'taxonomy' => array (
					0 => 'all',
				),
				'allow_null' => 0,
				'multiple' => 0,
			),
		),
		'location' => array (
			array (
				array (
					'param' => 'options_page',
					'operator' => '==',
					'value' => 'acf-options',
					'order_no' => 0,
					'group_no' => 0,
				),
			),
		),
		'options' => array (
			'position' => 'normal',
			'layout' => 'default',
			'hide_on_screen' => array (
			),
		),
		'menu_order' => 0,
	));
}
?>