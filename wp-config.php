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
define( 'DB_NAME', 'metanoiadb' );

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
define( 'AUTH_KEY',         '3$eCxgbRII|Er+U%d~m|#7Tz}+bPql%d9NQ|y[y1 Y^^owb=-!)&fI%LBc!{5/ +' );
define( 'SECURE_AUTH_KEY',  '.r/uj)k|TQvbn{9 &G3$<Qw~F(Gy1lw heL^4LIJU~]FHevwE?[S9pZ<R:l+#g=Q' );
define( 'LOGGED_IN_KEY',    'uvs%(UiS:r{9Y^?F,?qvIpW 0q`!4..Dk1-IKjQ?ta?w4vbFrxdq*d.Q0>tyOGlC' );
define( 'NONCE_KEY',        '~D<E.lq0$J&*x1DE@li%>PI{*~4 X.Gqk3BO|Y>;UawH00jI,`s9}qg)uZkbCGdT' );
define( 'AUTH_SALT',        '7q{?H_.na?BFuWLl]/L%IG}^H1FaAzp]c?XnEc5?zOPZ8n]{l9PY.+n$J?CwcE ^' );
define( 'SECURE_AUTH_SALT', '5IC)&8k^9Q,DRqD}2Zo*>QrbK7#e.0$lAp6(-*Q1<pC:v1^h:;VI[<:B DUu?Koo' );
define( 'LOGGED_IN_SALT',   '2@D&*8%^&&[|D!nnpRCLRMS:]${v3ZhX /FEy+~{L!|agL}`yXAl|fwL*n07cE/4' );
define( 'NONCE_SALT',       ',^]+P9=Lm]`NFaO753^WZZ %Qu`,ytFs{@wgNDF*E;8x0=&k~D]7IPa5rM*UwfB*' );

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
