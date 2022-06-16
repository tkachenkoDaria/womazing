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
		'title'            => esc_html__( 'Команда', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактируйте блок об команде', 'your-textdomain-here' ),
		'id'               => 'commands',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'commands-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок секции', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'commands-slider',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте слайдер', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
                'id'       => 'commands-gallery-list',
                'type'     => 'gallery',
                'title'    => esc_html__( 'Добавить/Изменить галарею', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Добавьте фото в галерею для слайдера', 'your-textdomain-here' ),
            ),
            array(
                'id'       => 'commands-section',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте описание после слайдера', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'commands-text-title',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените заголовок справа от слайдера', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'commands-desc',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Описание', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените описание об команде', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'commands-link',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Кнопка', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку кнопки в первом поле, во втором названия', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
    ),
    );    