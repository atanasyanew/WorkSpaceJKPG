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
define('DB_NAME', 'wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'db:3306');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'YNt73OKoLpf~rz~h>@kP,S4FYprZPt~k=CA%1xWpA&^O$5HQBVp 3Sa~{2IBt>,D');
define('SECURE_AUTH_KEY',  ']{8s8qzYv]c~2,d8O3}DC*J~T%LU^XhTzjC@kRy M3y<Xe#%1B|)n-JDNqn8??{~');
define('LOGGED_IN_KEY',    'cJDBEWGsG;0N{ vu_~Q[>}vgam1RnA?>aLfA>.p94.k_9OnKdwyyi4A]Qb,y{QEf');
define('NONCE_KEY',        '[nzpr]5BvNPF|1e$#?G{358`umt>LYTaRmV5r7[L#esjJz0EEbb.li3@C?RVMb[/');
define('AUTH_SALT',        'dP/)XEfBp+vr2?JmHnB{;R#FH!F<dw;1=^`1 !PEc4*nR#JTJfOL+X@#a}fxY8~z');
define('SECURE_AUTH_SALT', '5(ieFx8*g+=dUv^;=B(n1,8F@>exs&~b[^*)|ook|J[`Z6N=P6<aN5Ym&ce^]oCH');
define('LOGGED_IN_SALT',   '&pQv&3tIU^1(nPbI4rHOEi/z ;id egb6P2:a%ql`QZ>4-7MpDj$k~Ispd4Y<S+6');
define('NONCE_SALT',       'rW4|WY1!$nxgbC~{TPsfO8N/bu66l!$_LqDeam4}6]I=WHI$vDziWk0v)tzCZ|aF');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');


define( 'WP_ALLOW_REPAIR', true );
