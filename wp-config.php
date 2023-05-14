<?php
//Begin Really Simple SSL session cookie settings
@ini_set('session.cookie_httponly', true);
@ini_set('session.cookie_secure', true);
@ini_set('session.use_only_cookies', true);
//END Really Simple SSL cookie settings

/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'umarket.com.ua' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'd&}Hhk^r|%m@.X|meg [[[~!,arFnj1yID6iL,?@;5nK_-}RzD%=k;DL/aFHwuZ*' );
define( 'SECURE_AUTH_KEY',  'f[L%pVErt:><_8r2=<uS`*[sjn0ReB]F5~6zxYCrP=BQ*i!PX:G90ipKp%]iU=ZJ' );
define( 'LOGGED_IN_KEY',    ']fEs4Fz/^na]*bxheGAcp_IFs(1C,R~i3zBE75YyBK$2c4^ECUG{OsxE+NK::%C^' );
define( 'NONCE_KEY',        '|PRO@zjWx3Mpn?Wf8.usgc<x#d%d~yFy(!pVS0Nj W`,W[~=~Jm=mVZy~$Y>|PQ^' );
define( 'AUTH_SALT',        's2X-7M~g5jk.RNSI|I{(]@/(55lL?V;W6|_WPyO@ S _rs]GE*.xM@??8Jaq!X5~' );
define( 'SECURE_AUTH_SALT', 'Vs=BNFK[?LMp@BFe z{RGG%eOiZPOrrT?>@bwq&f ;wwXes#`QMjc1~IngDDVqoW' );
define( 'LOGGED_IN_SALT',   '&qP!<RX?-iM#6viBnC ,O;Ag+5Tnr{nV%*W/Q{38c&0xd3ll*>[5{qjue?$j!B}(' );
define( 'NONCE_SALT',       '(:wIArR<2Kx_iIzPJ:`,@+[hhN-)jKU2{8h^[).GT7<Jed`!q3JKveeD~Hr%RA*(' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
