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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'cTFzNvupWZ0J)X0f_x}#kKu/ctDA7qwSV9GpNC+VhuYv>~9DC9Qy:`@[bxN/ pU5' );
define( 'SECURE_AUTH_KEY',   ',qGhHm)3TQunEGnKTw7l#V`CQuYaC;D6?JOW}D>X4b4XR`A73.J4Fz@!v}T|P%j~' );
define( 'LOGGED_IN_KEY',     'kC$roxw6&A&nwZ~5$qVg*Hxv{~5y+bq>|^[jZ+8_51UTc-M#KKl(hg?))iU!zTLl' );
define( 'NONCE_KEY',         'x.LH:W4Ti& XBZZmI!pG#p~VOjlox?!,%n]+B+$%U$Pu+6[DQq:.~L-!xc8EKl[V' );
define( 'AUTH_SALT',         'Jz{A~qz?3j;6<_O7%u{c6QXIBY*jwLM#96?gZWCvUHKF)qex-,k~91C!/(YvTO}o' );
define( 'SECURE_AUTH_SALT',  'cc$mS2,#>wVoj fuLq}F5Qs{>G(CXH|l%xxJC@Z,E%eSO6=.5k#y.Frc3oMXW/qR' );
define( 'LOGGED_IN_SALT',    'Fg,TQd5DBjMG68PI2vF Z0z}Kg|dsmT#P0 r?r!!:A[,GoP6p(gObLD!q804a@rl' );
define( 'NONCE_SALT',        '.XC|*3(2XMH%)r,[YQz(${G;/~H&}@!mXTIMk1F;Yo&+,c!ZGI-=ak(lSpv|zfLc' );
define( 'WP_CACHE_KEY_SALT', 'n}D6WhVfu=hnZG33_JdFJ&u?tiy@(A[WV3BxVT}3}|vJ-h][X^2}1hXU|rhpNcLb' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
