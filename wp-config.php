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
define( 'DB_NAME', 'clearskyshop' );

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
define( 'AUTH_KEY',         'zBg2&IU%_+Y@?+A4`b&-TmF& cu<D.B%{5oxj3~YRnJiia=yr:GHJhqUM!>!@ry]' );
define( 'SECURE_AUTH_KEY',  'Uyb2q/}oR7/RBsD$bfkx2d80633}HWY+0+:!`4P#~$9zmo7X&8Jw=&IR2+*+(MbI' );
define( 'LOGGED_IN_KEY',    '>q%j(=K-<l5tl&%#(bb%tty<*}v !,F#11A]vTT0y6j=OyHvIt-{;/g}QOO><Hn=' );
define( 'NONCE_KEY',        '|f2.$*eW|FdXA~Qq.z(R}o84wVx[R~**KcvD+vXLV/P?9^-coq5{=;=8lk5/p!E[' );
define( 'AUTH_SALT',        't1!V3Hy5 t&U|-w]erigJ@;zP3I;#%^(,^+CZhG~4Qe:`U?}H2^XJ.>k?vXQuj`A' );
define( 'SECURE_AUTH_SALT', 'usennq@Zi`]:oJTJgn~K`s@A[W(n:caY4sp/,2FVdP1JnO}/KSl)3h;z$`13m|9 ' );
define( 'LOGGED_IN_SALT',   '{%daofTf5vxG3pCM1R!qVu>-H}*R(*$r$B|:#]FFt`zv0h<@:]L7kVUP8O&RZ2#[' );
define( 'NONCE_SALT',       'nb)TLp%&*wBHu|_EaiagE.#zt2V{?V_!V<XCNL>bE}U_`0)msUdo9Kh:ZXo{]P^2' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = '983wbuiooiushi898_';

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
