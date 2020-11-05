<?php
/**
 * Основные параметры WordPress.
 *
 * Скрипт для создания wp-config.php использует этот файл в процессе
 * установки. Необязательно использовать веб-интерфейс, можно
 * скопировать файл в "wp-config.php" и заполнить значения вручную.
 *
 * Этот файл содержит следующие параметры:
 *
 * * Настройки MySQL
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mozar' );

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
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '`aS@U-[Rm1jbLh5KqeSB[_~.ah`xnJXPS]gn-S),+B:5-i^<4I3R3R[|Uq,O]HQY' );
define( 'SECURE_AUTH_KEY',  '-5d]]5.|a|>LfwE88{Z@Y.x!{cS?>Wxd=@n_!|K@Ty,/0OfWOSNUWD3j>Y8L{dMv' );
define( 'LOGGED_IN_KEY',    '}U*r]XKAc~@(yF5^nGTW[A_)b;FU)90zan+00^Q{I:%t*HIYiJgjUt-1Q#@iI$#h' );
define( 'NONCE_KEY',        '`R>B!E7beK~4xf@zUD_]7o%4Ay`w;!eZ1:v-[]Jz#F}.PHuwKXm#.>+bM<fX0~sL' );
define( 'AUTH_SALT',        'IBm,G(wf>:X8E4W8,%up`Q`WeP&[F2wefTS9Wa6D5}I!`<kPTx<}TBJ5=CAAK+ .' );
define( 'SECURE_AUTH_SALT', ':{1)u>TQfT~x?Rn_M>Y?Q7zx-;TU~n6460$G:@RBiH&r (9r}|Eql#^g).}w-bd_' );
define( 'LOGGED_IN_SALT',   'gb6@xL+ <]6@wg<2Z#sl:o:*,/1 *DNN}6yZa?VluRFd.psG`tuq:tsNC/L{|QV#' );
define( 'NONCE_SALT',       '{Fz~^~RD%T}E/mcd>>(r{<z}iwUD%*Y)qh0IKi GrWWb4]m}B|TM|w|<5#:7?Xy5' );

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
 * Информацию о других отладочных константах можно найти в Кодексе.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once( ABSPATH . 'wp-settings.php' );
