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
define( 'DB_NAME', '1777-22_73565' );

/** Имя пользователя базы данных */
define( 'DB_USER', '1777-22_73565' );

/** Пароль к базе данных */
define( 'DB_PASSWORD', '8bbf3262e288c6c31170' );

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
define( 'AUTH_KEY',         'vkagQW=D4&S&wX6{M/aB+A%j:t:<dYcT7:CrK9p,0MH?+sHeIQ$Tj% GtH(&s~.|' );
define( 'SECURE_AUTH_KEY',  '/UGU(>x8*Tdo,h:Zrz*(JU>Q9z&yJzoyR[*X6xw--,~*va<N (F_Wp$Yn^[!s=+X' );
define( 'LOGGED_IN_KEY',    '1Y<D[:5;T*WU!IvPI@D20y<fEYi(Yp.Q> #cA!PdP=Bj)uHw A&P:Bb^,ON9zKcq' );
define( 'NONCE_KEY',        'Pf=fL>;!DOP{-DCssF/cr4BL:O**s$4_MDA4C&[j5PONOPCoN9e)9< 31[>r%V_v' );
define( 'AUTH_SALT',        't|G-ZW(r(XJ}yb?~`qn=)3c2KAv[*9%  Ml(8eS`FBRc=tdk]#Damm4=w jY-,L3' );
define( 'SECURE_AUTH_SALT', '<!,iTo&m$R@F7&1N3h?uldGlJ4/kMq8u`HOEcXDf[>nc%I3Re>`%~oelP|6?w}dT' );
define( 'LOGGED_IN_SALT',   'D@>ACkPi6}e0zB$=GO)VlXSg-F?#.6o_K[N#u:=R?@*m>ch)}GgonV)iQYz[hu^E' );
define( 'NONCE_SALT',       'H*?CT]t$XFDk {#c /~@vX]hv E9i/&Ckj556689MVsd=,-lZ]+Bi!zH<tf|GRw,' );

/**#@-*/

/**
 * Префикс таблиц в базе данных WordPress.
 *
 * Можно установить несколько сайтов в одну базу данных, если использовать
 * разные префиксы. Пожалуйста, указывайте только цифры, буквы и знак подчеркивания.
 */
$table_prefix = 'BMkWX_';


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