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
define( 'DB_NAME', 'magnat' );

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
define( 'AUTH_KEY',         '4HR!5^lncP;KG_C5n1Y~BP.;p<*HlJ Rvb=N<BaDx0C@k},D?E.dwaaha-w?8dE4' );
define( 'SECURE_AUTH_KEY',  '21|WM$*#aD1OZ@qK`,y}Z$2wQQ9$VN5)%x#E,1,4 2G3u6rmS^3B# +SV819IJ7*' );
define( 'LOGGED_IN_KEY',    '&Bu!#(}#8K!}ryT%= }ahE[OS.s$yDqp5dC|tXDY?982h<AJvR*irBB%7P|zSm=&' );
define( 'NONCE_KEY',        '(0I}5[Tz|>VE/Ig1gce=vVTbuC)-{~pjk /})Zz`]GZhBa!S*pHYTbu<V^wjzcF|' );
define( 'AUTH_SALT',        'oSWlQmdK~nbqK|j!!W)~v(_$A=l1X}X*bBx.N)O+K9X*O9lcV9(U<`MuIVB*&Rf.' );
define( 'SECURE_AUTH_SALT', '@$~,#]+-MHO[yyo+GD02Dppayz>t[wa<Kn@4Q$zEiqq-+.O5s.a.yW?DE@~Ag9Wv' );
define( 'LOGGED_IN_SALT',   'OSG[W1:(A 9_=?DYG$cX73>#Jc|lKYr.deiv@s}Japp3Mt=thm!. BpTW?a,]rh2' );
define( 'NONCE_SALT',       'GA>nNTfZ0,k>}i%MBvRn<>H,;1];Q{O^K8zby9$8&95@;R[7h0tbaGig$SN3i5hm' );

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
