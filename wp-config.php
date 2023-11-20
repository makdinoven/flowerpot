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
define( 'DB_NAME', 'flowersinpot' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'mysql' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'mysql' );

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
define( 'AUTH_KEY',         'w@oDou*pG5SK1oVPln23F}AHI/eLWy#EF4`NT8l$6NdSO|Jp(}QaJ3-(./zG-jNg' );
define( 'SECURE_AUTH_KEY',  ' Q<3O(Bg!(~dllJK8O:U(jyQ^L1e*I 1o;8|K#^r)&P/sqeO-&T]Qq,1%9P1NQbB' );
define( 'LOGGED_IN_KEY',    '6,t6s43JcDDR8N)]E<=CEHQw1P1RW+7f^Z^Kqxu(Q5.:J@k$sCH]Sw<IL2/%n!?u' );
define( 'NONCE_KEY',        '6js? p_d/<Iv?w (~K4!qMAdzLj7|EzIbNXtUZ%K>c+RhRKw&4W7&fFy0qN~}^X`' );
define( 'AUTH_SALT',        '@9(>zPLDIPEWXPRDV2&<8+yXX8NV{B,~bS,8%hG##9FoN$&0WNXX$lkluulA*GiY' );
define( 'SECURE_AUTH_SALT', 'nnCx6$h1Q,AAI=YINza)C4#%#!}>PiZhIN<|*Ej.Ou<i=jn{Q..[r4,K,I %YJ5U' );
define( 'LOGGED_IN_SALT',   'YfwmG7SpeKDXQJ>6^3bq;2wk_]eT}4SDknW^JXP5I0g7o6do9M<`z;>o]yb K>?E' );
define( 'NONCE_SALT',       'vf{Nm7hWKdv_#Lkn:/2tO;w:A9v7NW6|m!v+4?/FFj]/KU!MfK3d*o}piAj^ `/7' );

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
