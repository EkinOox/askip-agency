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
define( 'DB_NAME', 'askipagency' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         '1OlZ_s?QpINTsoe|z,snm;wt-<vu6HS9S`#+uFmr%%ZiI!wWMKX508V*z/K@g.Ve' );
define( 'SECURE_AUTH_KEY',  '2dv4+N3k=ZjRz-$sg3G59>}uTd2Bsh0DUZ7A4l?FhIqh^TH.DBd9c6)_*n6E}Jkf' );
define( 'LOGGED_IN_KEY',    '%ASW3#klHr`$*=n_]j> R4.r##$A)diE_}kPxsunoPI#JyT#ZW,Ao0d3e%r8>2:]' );
define( 'NONCE_KEY',        '!sXY]U2OFUq_6(PIUU_|i{I dsRT18A_rfebhh%5mEY+oA~v{q|Phi)>Ic&(>;Sk' );
define( 'AUTH_SALT',        '$!6~OxeG%t+V4QM0d=p.f]|AXYX)}D2~KUdvvXTmXc3P;M0So|)XrJ}s.M=|wz|j' );
define( 'SECURE_AUTH_SALT', '5Uq_][$OU 5rlvm^8}BT81pvcE#.02JrTTs`rP`fra`=t<y2%HnG%3M/{,Lu>;1q' );
define( 'LOGGED_IN_SALT',   'n{e:k[.Y4gy(d%`SP~M1[9Z?ZfeN*ko8IUL,>3e3$eJYKI/y~88p/2/Xn}3vS-WQ' );
define( 'NONCE_SALT',       'aJ$&rO@aEFKt@hk5V}?`uIr/;Y-~#E=Fr<oX*0KB:}()@./mwFK<X[paKcoQ!ZvQ' );

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
