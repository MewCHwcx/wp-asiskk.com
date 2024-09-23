<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'sql_asiskk_com' );

/** Database username */
define( 'DB_USER', 'sql_asiskk_com' );

/** Database password */
define( 'DB_PASSWORD', '928d688ebf82a' );

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
define( 'AUTH_KEY',         '9q=w$>%6D_7UP+K<$[a=NjH<~9yt<-Z3wfd5DFK5hs}x<p%<$+t1e]J_+Of;Ay17' );
define( 'SECURE_AUTH_KEY',  'Tl~ZSj2GV,s-A`PR)+k`NvP@K,>/&NO&5|rjz6h32!Bh3RJ`>mDL`];{BgvOEI~]' );
define( 'LOGGED_IN_KEY',    'G$ 1$EeXn4-4U~`(lI%uZPU@z`%/[N}54?B<e7E~ x<TurYaebOv9TdR9`:kCiIE' );
define( 'NONCE_KEY',        'S_|F)A[Q`9%WZn8UmCaGkl~SR7A rc@pQJSe?r0p]z?C/=/SWCq,bt33^k p#Wd.' );
define( 'AUTH_SALT',        'G%9oF3+I<>.gG2k,D+NeicS$$KPQ=yuNzWi3~&Y[6%3.]`-vw3 E`D[D4dwCdcY@' );
define( 'SECURE_AUTH_SALT', '97HPB[+QIlD8>c)Hs^paZTLJxI-a$c2tJhLR~~2ILA|946%6Ap&kxH+|cm8OuY>J' );
define( 'LOGGED_IN_SALT',   'uV;y+M5TzNaBl=Mh7zMm6*zS?L$,s)2C&kyN./=4Yq(TulkQ~.tJz+t@i8p8r%QH' );
define( 'NONCE_SALT',       '6]9AE.:TMWAu1o&9YyK_:Gj1A%e)>i0T_4_W>}NlfIYwTx yR6M/M/TgJ`CC_Tl0' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
