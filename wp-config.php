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

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'advance_theme' );

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
define( 'AUTH_KEY',         'jwF=6oeZJd4+09U7@ 3^ QV1nTn{OJGE0mwIu6wQD?HFt!AKx(~<o>  |9h-lIy:' );
define( 'SECURE_AUTH_KEY',  'A.$8L&m[)x42D|?FNx!4]V[8v~)%{}CxcX=XAm4J <W|9$2^w)DL,0}M=O+Z<:JG' );
define( 'LOGGED_IN_KEY',    'O$?AOJ7Y#5zfry+#Bt?;s**p* 9c_P).jJBkmt)Z.dJ@e ]I,2<b|Yp,yR&.$g%-' );
define( 'NONCE_KEY',        '57Hsc4F?pCa@s;TS.,UD6An!^NI@t)VFKd8s_e{2_y$rEAg1,P5uM@_jo!@M+w#^' );
define( 'AUTH_SALT',        'E9}ht!u_dws.kf1o</HWw8P*LnvrL%Q}IBkq]oVc0e[v=Dd${/t`hLw^$UJoN7ua' );
define( 'SECURE_AUTH_SALT', 'YjE9#6fD{MfLLI}]AZVbR<K$J6s?d$l~=*L^&gB[orl4PT4P>BwWg}Ql5m.EN7{F' );
define( 'LOGGED_IN_SALT',   '5(1&.dr(NW&8Gn/?BKT_6g!d>4s{9:u>vbLf0}[be<TlAxa_h>JpZF1ASsK#dUa8' );
define( 'NONCE_SALT',       'r4Gy)c8Pb|t9o>tepd!j+B$jqDWF``-RUgdNGUb^C#PngbpEZ,v=&5ZqHI+UHLvb' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'adv_';

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
