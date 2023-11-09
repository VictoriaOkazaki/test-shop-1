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
define( 'DB_NAME', 'shop' );

/** Имя пользователя базы данных */
define( 'DB_USER', 'root' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'XU6ai0r1n^w1319&`CR,Ez:isJ%:.F?HYD~jtv`*7 Civ3djDUCQLM#9OA~q-@Jo' );
define( 'SECURE_AUTH_KEY',  'AY;:?EgP[y 09tR4ig-l~h@3%)K.n]R5%t7=jJh=3{m8ajv<1Kf5#q[-|h,8|k#a' );
define( 'LOGGED_IN_KEY',    'bU]g~tT^KF)L*%U46x4QgLJ;b2bGVOUfJ*eJI,)p(!e_YVo2Rwp&[6b0fSiM=FAw' );
define( 'NONCE_KEY',        'pgw.oMm~AJfPIZ5}L0>TL$,?cJhGYwrL`!pKgP4VV]w}g>$:;yd5Rw.LHvO$o]Ti' );
define( 'AUTH_SALT',        'OIrN 2qHoJ[{gG%k|YJG/U2y!&v/L5$Gd8B$#d@Dc(hSrCNTspbJLXtr gCj@i@)' );
define( 'SECURE_AUTH_SALT', 'v6E94WqrK_.Ei%Lh,uvo6wH?QhOetn14uvK)C*fDJXHTHJ1roc;eTS:dX]wv3*&.' );
define( 'LOGGED_IN_SALT',   'D3zudf8OIP&p ;IO< Z[6mDc1eRwXeqbtc-EN-y|fpu)y{^|:U4 $h<&af[nMR3k' );
define( 'NONCE_SALT',       '#5HAKF-jgg$#;&s;UYOyTonT1PSJ<H5I+s 0V<aP`KJ=x5er&zS7,VH99CYDJ^-o' );

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
