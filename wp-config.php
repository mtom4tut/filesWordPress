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
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры MySQL: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'mybd' );

/** Имя пользователя MySQL */
define( 'DB_USER', 'root' );

/** Пароль к базе данных MySQL */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'CQ?.{>F0ZR#EF{DZC1HZ%~u%MC+5%,FjurW+58y(.86`qN|^90[@=fGvN1In`[8V' );
define( 'SECURE_AUTH_KEY',  'd9*nYZ^78VvGy.;(ef-f<8`qM|aNV%@nY|5;Vu7DiPoj3$;9(10a&L]mW2@Ippoa' );
define( 'LOGGED_IN_KEY',    '=&b?#l9}HVMFba/v7Sx]Z%vD~@|E?K;)^/Vp)8VIwddQ4`{C/08Cu3bxYae;v4YF' );
define( 'NONCE_KEY',        '`:ugdV+Bb]VZ@~PHS(HJJ</!mxLU1==%%siA{)R:Ln4rro42cq1Al&1G-|I` ]EL' );
define( 'AUTH_SALT',        'm1zY$1;_{IGNLz$+>*awWvqmdsIGW{@g>;;.cx/W%aALI?4!> 9EtFhpmmU>gRg,' );
define( 'SECURE_AUTH_SALT', 'VXY7FB(jg>(}.}qq!W+E-CSJ6|!i1E<}!zk~#des27[oe5EDU(O_2 *Fr|>v-x[2' );
define( 'LOGGED_IN_SALT',   '_&_X9V$i29m]qkScTG@C^p)$I]y_W!ufH{w.7S(DBl3BTO4IK5&IfVO#6!+D>G>M' );
define( 'NONCE_SALT',       'eCK,VS5; v!@|9bobV%bzFiL.CJujb:p.E:a*eB>1g;2:.!t7V-J$Tus}r u~1K)' );

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

/* Это всё, дальше не редактируем. Успехов! */

/** Абсолютный путь к директории WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Инициализирует переменные WordPress и подключает файлы. */
require_once ABSPATH . 'wp-settings.php';
