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
define( 'DB_NAME', 'presta' );

/** Database username */
define( 'DB_USER', 'prestauser' );

/** Database password */
define( 'DB_PASSWORD', 'prestapw' );

/** Database hostname */
define( 'DB_HOST', 'db' );

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
define( 'AUTH_KEY',         'o|aFU%($cGhC:ArHir#Qg)lNuz*Kx!ZmAdlK%<KZl`&[.w+mz<^%5myK2?o{saFr' );
define( 'SECURE_AUTH_KEY',  'jtn/?/AYb^fZ({iaLo7@n_-9/p/G;^_G`Y5bZW(#9`UAXvf;)3/Wv0BL@LLrfs<A' );
define( 'LOGGED_IN_KEY',    'g0X3(xgjz6EN -trz2rRK*O4dFZkO cxv: {b*A)Z4EJ,t[Y$LE$Yn%-SY@%iM+z' );
define( 'NONCE_KEY',        'u:G`*#1m(j8KNio|j:>$?BKwqpcbm-h]41$[2EgVg<~(w5#{)SqAo#(GCbWROsZz' );
define( 'AUTH_SALT',        'q.N=Orxm? l&Sb=V}M!vmF/S2=n,cx9W$.Cfsd W@:rAwkqg$qse8qc1>G:3W,K*' );
define( 'SECURE_AUTH_SALT', 'D*T,n1tfup@ROGEt#UK%EzQ]Dm3oEp1A(t6KzFsp8ppg!t$t0AX>=?K;k;U@lp%B' );
define( 'LOGGED_IN_SALT',   'C<v-8?q+?JQ/pbgr`bwX|+08`3N!@45Xn) ~rUR.v5y$[xFXZIj>iO,3Jseg,/F~' );
define( 'NONCE_SALT',       '[pxR9n$#jPgN6w@Ri&i;uWC83jiHh$QM)aw~1hD~h<K3{?L0Mw$y^Co#{cp?od(M' );

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
