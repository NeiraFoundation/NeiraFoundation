<?php
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
// np_admin / neira1123
// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'neirafoundation' );

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
define( 'AUTH_KEY',         'azYS)MGT%Ua239><$g7]*v}Kmke8LWKv*ARgG^Z_1h[Y9,|ZqdP)PLQR^*?eoS(@' );
define( 'SECURE_AUTH_KEY',  'XJ,&<zOT&-GC6}$Y+J(#vIGd2$:Y;y@4lGF,$5,xKUG41{x%JJsfsHfP?-bcp^`2' );
define( 'LOGGED_IN_KEY',    '}xT ]bCD,ZZ%H,:7todq@VwXEq.,<oUGMB0sr%PEH:)$XnFlQ1z4qwIJu[17G4[y' );
define( 'NONCE_KEY',        'Z0d@LOzp,~5$aeP;ldU9Gx[Z//CnyG@akG_}d6f>ZX:B{Hlq|:a+D-{w-V;J>k5O' );
define( 'AUTH_SALT',        'Wa5;Iw5U5FWe%4BPk8 aUZ^jqz0Zaya?0f!VoDJy+R}r2_[T$08*(amOtL}Z`Xt[' );
define( 'SECURE_AUTH_SALT', 'xT-zZ4PLXG99npn/_ va;~9kDn5? 0S?*}GU-@((XjD$ P}s)ASf1@+W4?v^&/mV' );
define( 'LOGGED_IN_SALT',   'xB.r@y.Sb}1QY@?1Z@z^;c[{mjF}]$Mpod!iJ$|X9BCQ_G6=Ht/Y9+oGS&FfyTRQ' );
define( 'NONCE_SALT',       'CTBjUCU6|^6[9AcZWbc*}M#4bI^}3X6oEF@TX.UN59oMw)9KvN;)NlVY4]MmnEeV' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'np_';

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
