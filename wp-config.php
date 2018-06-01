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
define('DB_NAME', 'wp-fashion');

/** Имя пользователя MySQL */
define('DB_USER', 'root');

/** Пароль к базе данных MySQL */
define('DB_PASSWORD', '');

/** Имя сервера MySQL */
define('DB_HOST', 'localhost');

/** Кодировка базы данных для создания таблиц. */
define('DB_CHARSET', 'utf8mb4');

/** Схема сопоставления. Не меняйте, если не уверены. */
define('DB_COLLATE', '');

/**#@+
 * Уникальные ключи и соли для аутентификации.
 *
 * Смените значение каждой константы на уникальную фразу.
 * Можно сгенерировать их с помощью {@link https://api.wordpress.org/secret-key/1.1/salt/ сервиса ключей на WordPress.org}
 * Можно изменить их, чтобы сделать существующие файлы cookies недействительными. Пользователям потребуется авторизоваться снова.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '6<_OQb~UK$gN_!xd0j?%pGRqE>k7#.<C?|u*W|S[c6BPX@$y}Bj(zC^iQC==r=!`');
define('SECURE_AUTH_KEY',  'C qK{bTHk:shv^?^}o*,C5@Is `1rT`bELC;MSDNVc)?DVR I0o[[JPzk~bc~/#y');
define('LOGGED_IN_KEY',    'MM#0V@Lj_la^z@J@D<xc ~TtNk^oE{f`d{_-C!x%9.+e-w9Lx$}~8Xux<bj{D)Xz');
define('NONCE_KEY',        '<OlX7fy5 0fZ)XoiVpSNXoRb-U5$8m0.-O#tdf0COK>>Xj)3588N1U[+94^oN^G0');
define('AUTH_SALT',        'q5vMtNAh2F4$fj52LYOfQ_VA+hkeHd|~@e, %$yM?q((c?x3YTJsdT^ 3tTcizC?');
define('SECURE_AUTH_SALT', '6mt^Ed{o0sn*{pAE{x8I+ss7+EL`4+Wb#6{iG=@veb3hu~1Q0EXvV#.SE_d2cF8r');
define('LOGGED_IN_SALT',   'cI2JVT/e/[>/?>=,N+GnO9KksEF5D HTzSRMnWyY;G-h|}[-j)`I{Ymgf%dYd+m8');
define('NONCE_SALT',       '>C-xB.1S~Vk-dU-:j@ 0YTjoDu~~XfSGUa4f=7S v c=(X>7Y7SQSwDJJeT3:#4,');

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Инициализирует переменные WordPress и подключает файлы. */
require_once(ABSPATH . 'wp-settings.php');
