<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе установки.
 * Необязательно использовать веб-интерфейс, можно скопировать файл в "wp-config.php"
 * и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'womazing' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', '' );

/** Имя сервера MySQL */
define( 'DB_HOST', 'localhost' );

/** Кодировка базы данных для создания таблиц. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Схема сопоставления. Не меняйте, если не уверены. */
define( 'DB_COLLATE', '' );

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу. Можно сгенерировать их с помощью
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}.
 *
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными.
 * Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         ',HCD%I88^E%tTy9/t1ZHo3;<<{[6)$;*16iVVK%ut%+rTnaC.><[NnrLN&8^p=N/' );
define( 'SECURE_AUTH_KEY',  'mo*CE/ )`Wg7~Xcxz&?$jWCMmz);9QG4r}zYH`p?FInXe#<;)%Kuwj39?{GzdJ+o' );
define( 'LOGGED_IN_KEY',    'E8 KFXA1%BV_N/C}]fCu^Z9A*kk,KHI/(&,t.Q#;^-^.C{>)h`?X/}dx9nU0%jEw' );
define( 'NONCE_KEY',        'ADG8x1{U^c_/Cxc;>,<<~tZp>aUzB#|*1I~`N4UQ>s.`8#MS1T/{E,:,xvX!TP%F' );
define( 'AUTH_SALT',        'Vwk:}Sj9@P027a>+B`0?.o*v}:H7Eg=1l;(K5VQ`z{yD0ms|HPivA1p!ObhtpEb|' );
define( 'SECURE_AUTH_SALT', 'fA8PH0ZNq;D0*)8Ckp$sc`2UQbzg&t7zVfaN_O]WT6}V.jV@[FJGf{jNIU}hBM-g' );
define( 'LOGGED_IN_SALT',   'tX+me%j-;c--RZxHee@^F3.=+,<-fHGy481eFl:_>hqKOg-a5}c%[VWoB<,tB@U&' );
define( 'NONCE_SALT',       ':L*K^6!)oP-#:&,5-`~j^I?o{},8_tOSAj8F4M sz&{<~Ub)v(QRuY8%8&J0vhTc' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'wp_';

/**
 * Для разработчиков: Режим отладки WordPress.
 *
 * Измените это значение на true, чтобы включить отображение уведомлений при разработке.
 * Разработчикам плагинов и тем настоятельно рекомендуется использовать WP_DEBUG
 * в своём рабочем окружении.
 *
 * Информацию о других отладочных константах можно найти в документации.
 *
 * @link https://ru.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Произвольные значения добавляйте между этой строкой и надписью "дальше не редактируем". */


/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
