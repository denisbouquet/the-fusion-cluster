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
define( 'DB_NAME', 'thefusioncluster' );

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
define( 'AUTH_KEY',         'oS.W:6PyE1!/yL-N2n-Qimi88s8gh-(~X<g*ay/k4:H:e?w:-wTc57VrdsQb_Te|' );
define( 'SECURE_AUTH_KEY',  'Dt_ief2}g|8%xSXyqztwff~tR_jl fSH/7,.SvyhcKtnBx:RkO* ?M7=Qzs>cPdW' );
define( 'LOGGED_IN_KEY',    '.~;J@;2CVh/aCw(nw|,Vlr^;#p@ =/@GO)PAzt-7QRt3xebN#ciT>1r5/05#k)b ' );
define( 'NONCE_KEY',        '.>R <~FU9Fw=;9$K:-f}cR4*j=h2a-okFTjmr:OGVv)Vvdze^1kT;nGB,;+V8b%Y' );
define( 'AUTH_SALT',        '(@^1k|f.~*@xxXcIax:ccFFQj$N2VK]:_P/%nJ5!n#Vmro{ WO.4,;PTBp0S0&$y' );
define( 'SECURE_AUTH_SALT', 'w$n*KTTT/G#Dz5EcaGOT]{Img .)ZYTnVD0^aCf89llxk@eA4=6bg/E|y&P&1h4O' );
define( 'LOGGED_IN_SALT',   'CB<}I1f.xTkjfi;>01{R=3d~x@fK+)c^8k[B#%LKygX&s]D@E-~P^r~09(;b2ZeT' );
define( 'NONCE_SALT',       'bod6b5%9P$^i(P)&5M(r<k5{iVD;Z!%|zd$~`3Ghx[VGN6asH-.zt`-;!3rLHNI.' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wptfc_';

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
