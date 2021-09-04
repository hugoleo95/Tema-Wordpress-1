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
define( 'DB_NAME', 'wordpress_tema1' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'h}vklANDQsGy,nVd~|z4uJY-m/j8iALI@(hF1=WFiatv~e 4XY8eDW =9VYbrGXU' );
define( 'SECURE_AUTH_KEY',  'F2c9Nh5^Npg>z$p%I8</b4;h}(OKog.OF#ZUa_4wvm$6u3+wmN+Yc:~T ?a4id{/' );
define( 'LOGGED_IN_KEY',    'K3li>j3^`:Vz?w-NY~&=t0/Mb(cg_J|D0n:-Kp;aV+z82 w8e`JD$*A3!gk4rZB{' );
define( 'NONCE_KEY',        'YxF7L<y2Jcoa% *pMoj.W^6|ZptPD98]0>rJu[gEqx&o)Wf.&-6wV!c{.R>eQ?Ow' );
define( 'AUTH_SALT',        '|c`|i#[q7h! B[jed,qH8iwPsnWL+?9bq8p/61c!Pd##4bVKy^JFfjwR|LRGxq%0' );
define( 'SECURE_AUTH_SALT', '88^*&~Ma/Z&|m]}U9Cx]mQc`<4ucPa5`o>O<s+UEc1s5}vJ7tUDC&Z2&A3uF=UjL' );
define( 'LOGGED_IN_SALT',   'UIx_e-5!iOzPwqK?k,]3h;iR]AsO: XLyT(2SLm4|1GaANa-Qk,v08|dbV{Q__E5' );
define( 'NONCE_SALT',       '`?ZA*CocCBy%jouV,2R:G)~I]xk%_76Q{p-6`3NyPaVjNq9wk`I.Nx{x#|;$jf5g' );

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
