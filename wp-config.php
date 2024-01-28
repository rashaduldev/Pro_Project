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
define( 'DB_NAME', 'proproject' );

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
define( 'AUTH_KEY',         'L-5FiBg;:Odd*`W,3vsLF jyZ=mm@iW=%W=,0[p{$4RpyRsiQl>O{B}m<vl#cZCm' );
define( 'SECURE_AUTH_KEY',  '<^Ok7AlMi6X+*wG5~Gzvtn^?jUc{+lSKwx_<>L2/LKZ74$WB(| <Z`*Ce$mYHJdd' );
define( 'LOGGED_IN_KEY',    ',r%zw+[&DgMznf`I`jK28&Q[;<jf3~]`j(/Yc{;ya(x5?aC96JN/gpj[48d.%P*J' );
define( 'NONCE_KEY',        'uNjgy) ~:dwPo$&@My >?!khJ:3nX66dG=.<xJNs[6,N1v*=/{>8%}6GfNZVX_kF' );
define( 'AUTH_SALT',        'A>H%8-*N<)d/><sg3`e6w%jBcS@QAXiLRVl1[&rc&,v/-PCCJg3HI2 +yRK..F*F' );
define( 'SECURE_AUTH_SALT', 'jgQ6{v_N?7sVv-<$SXJ- GHNpD/GF%MX$<td@@%frecGqw#8~Lmbi%<FNwSID+AJ' );
define( 'LOGGED_IN_SALT',   ',8_{Z9-EE6mrbDgRO9=ugn^wA97Z6+U9=DFL^?Nz2rVpfMJLnBM1Dc$5mfE-cPyz' );
define( 'NONCE_SALT',       '5~i@RJO_|>F1:od>(^F@zg!ZXbIM|y05roT{P4sV7P,|w^UYtx%<_f!(WnzAn`<>' );

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
