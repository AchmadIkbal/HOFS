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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'company1' );

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
define( 'AUTH_KEY',         'a<1[$xa7t3s|WnSk?O(nxFK8O%D@]zCH#$SZY1kP6vaZ@g?`c!FsHxf]D/|!GdLX' );
define( 'SECURE_AUTH_KEY',  'tND&8Yl]2%8rS1:cBaJLRrZ Q+kKa:;(22[f(/Wz*$+8B{?9N6X$Dl8.+m-KtYf{' );
define( 'LOGGED_IN_KEY',    '11(LhI==jOI6EM>G+TeXHP)7-a fI`m:QVpp-cWE^Ag{#01m3O_FvHtG+x`ZK>pV' );
define( 'NONCE_KEY',        '/@KpcPimY>[SE7s1Z>5~],fEj2%JG0H4|]QHong;9,^-W4j^N|%g1kyThtLL2)b:' );
define( 'AUTH_SALT',        ']]c[A;25BJx{t<J4^5@_KZCQ^E-U+6v.Pll%%qw_u$`|t.N}vKy?8!R>&tX;$,Xd' );
define( 'SECURE_AUTH_SALT', 'Lnj~o9,(uf,t^wE8q@#Ca-h$@nB.o]a2u`BQiOcIklYbOm>.nazywUOc8b84F4Pj' );
define( 'LOGGED_IN_SALT',   'EfdYgWR+>9yBmMQ17&LUVs(R]%X^FnaP31;C%(FZ`AI&`1<Sf$Cfy@Sx^/QQR2P~' );
define( 'NONCE_SALT',       '7GK]wH{4o~:4_+;9*=<`{/s0ZUETywW22O`E7llzl#3O@|tUcGk~7UcQ=l% WB@I' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
