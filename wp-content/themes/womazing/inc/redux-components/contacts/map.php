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
		'title'            => esc_html__( 'Контакты', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактируйту страницу контакты', 'your-textdomain-here' ),
		'id'               => 'contacts-info',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'contacts-heading',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок секции', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'contacts-info-one',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок со связью', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'contacts-title-one',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок-1', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок для телефона', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contacts-title-two',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок-2', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок для почты', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contacts-title-three',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок-3', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок для адреса', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contacts-desc-three',
				'type'     => 'text',
				'title'    => esc_html__( 'Адрес', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Укажите адрес', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'contacts-form',
				'type'     => 'text',
				'title'    => esc_html__( 'Заголовок формы', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Редактируйте заголовок формы', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
		),
    ),
    );