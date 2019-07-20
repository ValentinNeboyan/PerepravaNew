<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'pereprav_db');

/** MySQL database username */
define('DB_USER', 'pereprav_db');

/** MySQL database password */
define('DB_PASSWORD', '996*Ja^kpO');

/** MySQL hostname */
define('DB_HOST', 'pereprav.mysql.tools');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '1Tx4zfxIx)6i77P4gZmY5c(uJ3spM9!39zm(FH%Ei9mmLWoKcYi@j#K&gWf@Pcc8');
define('SECURE_AUTH_KEY',  '2r9wf5GIYS(wX6@7mnJzqWFsarC3CvVrFPXD1@eO7V0*SY!rGO3pZl5h0&WG)@To');
define('LOGGED_IN_KEY',    'UkfsD)h^4Y#ISPlSp5)R7FzeVwDnRlWW9hHLKN(Q#dyS448nC4NJ*QG#^Jrxns4U');
define('NONCE_KEY',        'jHmmudQ!IF9%h!AhifWMpv8gFvaX%ZhBh^^vLrMMBEzxqF5pqEVSmp9#EkBIQjoT');
define('AUTH_SALT',        '%*94TUrTddA(KQ(DKd(6kZ48veiMqx1t6r0DKhkRGUK7498EdA&6eODBVRxHf!K!');
define('SECURE_AUTH_SALT', 'pUWo2@RKmL04aIC!*Y)7JWj78Smrt9Bc1tvYoTnA2^1AIVAfUnYvB0p)65sRm0PP');
define('LOGGED_IN_SALT',   'A*H*tgJ%e%kRUt7N7SzT!xAKe%9pqhLqRQKAj!BxvxLU(ZxBXtdYb9K(5JiSe3yV');
define('NONCE_SALT',       'ncf)MU6wQIvtM@lSF#qO7kZ5*48r2D!lI2ruuVBMN0BUZMW(Jrt%0@0#wtSJVfXs');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', true );     // включение дебаг режима
define( 'WP_DEBUG_LOG', true ); // true - логирование ошибок в файл /wp-content/debug.log
define( 'WP_DEBUG_DISPLAY', false ); // false - отключает показ ошибок на экране
//define( 'SCRIPT_DEBUG', true ); // используем полные версии JS и CSS файлов движка

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
