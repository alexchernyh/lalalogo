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
 * * Настройки базы данных
 * * Секретные ключи
 * * Префикс таблиц базы данных
 * * ABSPATH
 *
 * @link https://ru.wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Параметры базы данных: Эту информацию можно получить у вашего хостинг-провайдера ** //
/** Имя базы данных для WordPress */
define( 'DB_NAME', 'lalalogo' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '' );

/** Имя сервера базы данных */
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
define( 'AUTH_KEY',         'MTADCJ9AXk=u:~jtC3Y)>hCQ0Tse@jVTe+k5ZVs.>E4LC6USg,#NR](@&V$xhayF' );
define( 'SECURE_AUTH_KEY',  'Uhz?|BYkUJQC]/Pf(_p8*76>#Tudp~UJf%GcU)|u[-q.;+}e`Nw~vEO)~F_xsOwc' );
define( 'LOGGED_IN_KEY',    'gwL>SA}k.S/x,C!c,k4`2 j$O)sd]-) p`_~-2fDdV0jr_TYM}vXz)o^f7l_+f`?' );
define( 'NONCE_KEY',        '3qEEp+n1g!7UpV3TY;OTn+i`1x,Erzq)s+96q7k27x(<|bT;QKWG2UV?UupEX;wm' );
define( 'AUTH_SALT',        'O_*%<U~P*UKHjKO|/7DO5<x0./.N{bB4;PfW1u5^:o2-cp:WQA|/ajuXZsigE$Aq' );
define( 'SECURE_AUTH_SALT', 'qPb+/ZQD@Q(E$pu?Co]n|m$;on!@cw3;KA63~Qn4y`da[5On(f.ww,E,a`:fJ0rC' );
define( 'LOGGED_IN_SALT',   'io{4FyO00%2B2,dnD#j]!f+5U-4}~O&e8-ure.?|a)O>vq/I] ,[QO9rxVjI&_<b' );
define( 'NONCE_SALT',       '~!d}7UY4o=`HPQxRg@Ruhjj=W4|tBhT>>TS,;;F57%%W^6dIW_Xw`F;lSN$fOzR ' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'la_';

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
