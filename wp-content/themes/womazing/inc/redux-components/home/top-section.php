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
		'title'            => esc_html__( 'Верхняя секция', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактирование блока с текстом и кнопкой, фото слайдера', 'your-textdomain-here' ),
		'id'               => 'home-text',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
			array(
                'id'       => 'home-one',
                'type'     => 'section',
                'title'    => esc_html__( 'Первый блок', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
				'id'       => 'home-one-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-one-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-one-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку на кнопку', 'your-textdomain-here' ),
				'default'  => '№',
			),
			array(
                'id'       => 'home-two',
                'type'     => 'section',
                'title'    => esc_html__( 'Второй блок', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
				'id'       => 'home-two-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-two-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-two-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку на кнопку', 'your-textdomain-here' ),
				'default'  => '№',
			),
			array(
                'id'       => 'home-three',
                'type'     => 'section',
                'title'    => esc_html__( 'Третий блок', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
				'id'       => 'home-three-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-three-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'home-three-link',
				'type'     => 'text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку на кнопку', 'your-textdomain-here' ),
				'default'  => '№',
			),
			array(
                'id'       => 'home-model',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте все фото справа секции', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
			array(
                'id'       => 'home-gallery-list',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Добавить/Изменить галарею', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Тут вы можете создать свою галерею для главной страницы', 'your-textdomain-here' ),
            ),
			array(
				'id'           => 'home-media-left',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените фото слева', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
			array(
				'id'           => 'home-media-right',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените фото справа', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
	)
);
