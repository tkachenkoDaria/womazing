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
		'title'            => esc_html__( 'Подвал', 'your-textdomain-here' ),
		'desc'             => esc_html__( 'Редактируйту блока подвала', 'your-textdomain-here' ),
		'id'               => 'footer-info',
		'subsection'       => true,
		'customizer_width' => '700px',
		'fields'           => array(
            array(
				'id'       => 'footer-cprt',
				'type'     => 'text',
				'title'    => esc_html__( 'Копирайт', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените копирайт подвала', 'your-textdomain-here' ),
				'desc'     => esc_html__( 'Обратите внимание что это поле принимает любые тегы Html', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'politics-link',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Кнопка политики', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените названия кнопки в первом поле, во втором ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'offer-link',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Кнопка публичная оферта', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените названия кнопки в первом поле, во втором ссылку', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'footer-info-two',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок со связью', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'footer-tel',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Телефон', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените номер телефона в первом поле начиная с tel:+xxxxxxxxxxx, во втором поле с +x (xxx) xxx-xx-xx', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Обратите внимание что номер телефона также измениться на странице контакты!', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'       => 'footer-email',
				'type'     => 'multi_text',
				'title'    => esc_html__( 'Почта', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените адрес почты в первом поле начиная с  mailto:admin@admin.com, во втором admin@admin.com', 'your-textdomain-here' ),
                'desc'     => esc_html__( 'Обратите внимание что почта также измениться на странице контакты!', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
                'id'       => 'footer-info-three',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок со связью Instagram', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'footer-instagram',
				'type'     => 'text',
				'title'    => esc_html__( 'Instagram', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку instagram', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'           => 'instagram-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените иконку instagram', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
                'id'       => 'footer-info-four',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок со связью facebook', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'footer-facebook',
				'type'     => 'text',
				'title'    => esc_html__( 'Facebook', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку facebook', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'           => 'facebook-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените иконку facebook', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
                'id'       => 'footer-info-five',
                'type'     => 'section',
                'title'    => esc_html__( 'Редактируйте блок со связью twitter', 'your-textdomain-here' ),
                'indent'   => true, // Indent all options below until the next 'section' option is set.
            ),
            array(
				'id'       => 'footer-twitter',
				'type'     => 'text',
				'title'    => esc_html__( 'Twitter', 'your-textdomain-here' ),
				'subtitle' => esc_html__( 'Измените ссылку twitter', 'your-textdomain-here' ),
				'default'  => 'Default Text',
			),
            array(
				'id'           => 'twitter-icon',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените иконку twitter', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
            array(
				'id'           => 'footer-visa',
				'type'         => 'media',
				'url'          => true,
				'title'        => esc_html__( 'Измените фото оплаты', 'your-textdomain-here' ),
				'compiler'     => 'true',
				'preview_size' => 'full',
			),
		),
    ),
    );    