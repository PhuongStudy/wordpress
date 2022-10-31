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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'dttp1996' );

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
define( 'AUTH_KEY',         '};G!a6,<b#oqmUB:RPE`cXsC8]Ws;uWW&yh^omFh:UM=z:;E&pw&.qA*N<9WD++$' );
define( 'SECURE_AUTH_KEY',  '*CaijYc8N2*uprM1BWZ^LYOiL{eoa{*%D8`[LGpA&Rxkj7qdBu}8[AE@zAX[f7iD' );
define( 'LOGGED_IN_KEY',    'Aa2oj*[L+{%7E)QX_ITI~7!!gQP1UC/zUy-vVnkWH$6+SgZ;2{uuMmQs4V(b] kO' );
define( 'NONCE_KEY',        ')ks;#< ;- 86-=F):G8)hj[WyQaL;F~w2|s!*S6T7qg}x96,UBM!5RY&J]v|VfUh' );
define( 'AUTH_SALT',        '4!a=ct$5!ity:1e_QJL*rDhaT8 ti PjeGIX(CCu>;4Rc;s=chhJG>Pnr`P/FmpE' );
define( 'SECURE_AUTH_SALT', ':;YCgS:U(F|y#.CHbJ{!.R(%L;9`=qy1v!0uh!aM=>EQdg.{?Q@T2TeNTr/cx|jH' );
define( 'LOGGED_IN_SALT',   't(j>RcL2sFL{WZ{/1- LIr}z_K-g$H.q:S2.X?jb)L|F&dC!I]>t-WKE`10%hY/$' );
define( 'NONCE_SALT',       '=7N>VCw-{$D.hlkJ~`*f7j}l<Lv=T]RbYeid5UI4nK@^6H2: <bIP-4 DER=N}Tp' );

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
