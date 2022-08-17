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
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'garahtoo_datastore' );

/** MySQL database username */
define( 'DB_USER', 'garahtoo_admin' );

/** MySQL database password */
define( 'DB_PASSWORD', '&}p(E#vc$vQD' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '>_40Sx;F)Rb8(w<s AW2n~@#*^wN<(n+Y02w8cWq*bJ/*z^MB `ahUn0bP*,lrQb' );
define( 'SECURE_AUTH_KEY',  '&en74nu!UZZ$bLR~qPNKi]|v2#r]Gaimf:qFvvUi&KnfGMs%fp=`C:v}Yb( d!>h' );
define( 'LOGGED_IN_KEY',    'Q}S1$hQR61L5:@J{(Iu.G|c; g%JIu-e<t;Z3o-1T%bgsl/k]+ry!ZD/p{C#A-iX' );
define( 'NONCE_KEY',        'v(a<VZJ;g(dgH.lWU(89}tX{TKl)|,J)7nP}(0Dl0ke2r&Jf{{~gXT(0]q<Pa1Y ' );
define( 'AUTH_SALT',        '?RTasF6r/,mHT>[Ptn@H^SSA(2c=->yyQ{4YYd-20Ji)O8t5UhL~;??O2}l4Ql!&' );
define( 'SECURE_AUTH_SALT', 'QNZ+4,7%JGt`1f_n!CXU:TN=n1BRgxoRv$$fgV=*cl{**ohv.JA%Gg#4XF]1uD&5' );
define( 'LOGGED_IN_SALT',   'u2HevnxPYPDWZcKv<j R1MNZ,=YMgh_c1HoRl>sX(Q?1RmE;VqnVn:p<)P|C:DCd' );
define( 'NONCE_SALT',       'a! L,h<DEj01;^CSJc8wgLQ27*>Ar=JKbLwFf:,UksC+2]{f[*yDSqjE;>^a8oxg' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'gt_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
