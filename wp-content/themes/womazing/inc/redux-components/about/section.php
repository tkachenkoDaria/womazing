<?php
/**
 * Redux Framework text config.
 * For full documentation, please visit: http://devs.redux.io/
 *
 * @package Redux Framework
 */

defined( 'ABSPATH' ) || exit;


Redux::set_section(
	$opt_name,
	array(
		'title'            => esc_html__( 'О нас', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактируйту страницу О нас', 'your-textdomain-here' ),
		'id'               => 'about-info',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'about-heading',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок секции', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'about-one',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте первый блок контента', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'           => 'about-photo-one',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените фото первого блока контента', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'about-title-one',
				'type'     => 'text',
				'title'    => esc_html__( 'Зоголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок первого блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'about-desc-one',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание-1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание первого блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'about-desc-two',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание-2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание первого блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'about-two',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте второй блок контента', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'           => 'about-photo-two',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените фото второго блока контента', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'about-title-two',
				'type'     => 'text',
				'title'    => esc_html__( 'Зоголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок второго блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'about-one-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание-1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание второго блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'about-two-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание-2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание второго блока контента', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'about-link',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените названия кнопки в первом поле, во втором ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
    ),
    );