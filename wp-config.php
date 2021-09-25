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
define( 'DB_NAME', 'yas-wp1' );

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
define( 'AUTH_KEY',         '!P_/x@(mz5Vw_X3C`~I5`tWm+&X%WirehGtyU<t&EgT 7T,rCn@B/y7J%625D,H+' );
define( 'SECURE_AUTH_KEY',  'Anj,CtC7%}e|sBBf~&yIW-jTPlT)O+2q?CZhCrOK+.hEGhb%vw1DN;)T(>y:).24' );
define( 'LOGGED_IN_KEY',    '0qzU^9F<@;<rv}p)IN3q(O)7fMk)7LP29u^E~]<nUTNm$y>RO`B:$}057QRcB^.]' );
define( 'NONCE_KEY',        ':71WYgC@4KsIAv>h4fPm6.Ed]3*PXFLoPBXQxP_c0kVZzfG3d;&>gq|6;s CB8X:' );
define( 'AUTH_SALT',        ' i~wo$9)&/,X s8CYPvO;WaT7`=MaD1OU}[**@eu6_8KO/V%ouU2SgJE2?<:Oup:' );
define( 'SECURE_AUTH_SALT', 'nBx1zjM8?M#~Lx=K9=u%N^UC,FcJ<pE$Q5)dN_u49,y_l36A[UTcZ@5MMkW,QC4]' );
define( 'LOGGED_IN_SALT',   'xtLg( J2b*v%+.^c:id6`0G`gkYB2:#Gz@[1?n`|G9k~Z{(G _vK*_%Tj,`ua$T(' );
define( 'NONCE_SALT',       '@|}:nsB5}Y1L3~A@bt~s8d+%V<k+&:Iz>UGkcp#DGDHjkD0JX>FPS^k7@;qu!I+.' );

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
