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
		'title'            => esc_html__( 'Преимущество', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактирование блока: качество, скорость, ответственность', 'your-textdomain-here' ),
		'id'               => 'advantages',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
                'id'       => 'important',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок об качестве', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'           => 'important-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Загрузите фото-иконку', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'important-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'important-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'dignity',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок об скорости', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'           => 'dignity-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Загрузите фото-иконку', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'dignity-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'dignity-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'responsibility',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок об ответственности', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'           => 'responsibility-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Загрузите фото-иконку', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'       => 'responsibility-text',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
			array(
				'id'       => 'responsibility-desc',
				'type'     => 'textarea',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
        ),
        )
    );