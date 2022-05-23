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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'signetglobal' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'wqv,CeR4C0HURG+FENTa,zWj~0||a[*Ce[LRuz>$8MQ(eQU>G)$z;MpT$k%{x@*)' );
define( 'SECURE_AUTH_KEY',  '~$lSJem0mKOTg~|zX1i4|MN#,F@(wU`mur2 %Z]wm.F~p3{KBoC6P}vcXvJnO!tC' );
define( 'LOGGED_IN_KEY',    '`[|LV!J!/gwTm_9d%:aUo?(cR4NBFIrtrY).8LJoIi+nI*6r<za9f;?;`%pBhkK+' );
define( 'NONCE_KEY',        ',u-i-(LhTreL-[CV{rM9^1;h7]/<%<m&c9kS$GBw~$6A4.bc+!)n$$efyBbm14f&' );
define( 'AUTH_SALT',        ' o[q@P~<#6IRw_l!g;8pg%D=e&9z(eS2cTCB/V qtj+;(q@bK)lH29Bg9h1Fa^HI' );
define( 'SECURE_AUTH_SALT', 'qZ}g(I6]@Sp+lzIWOB$$H*`|>D9}jKJ_wHn7u?iHhPlJv3JY7eOpT&p4.PZmZc:r' );
define( 'LOGGED_IN_SALT',   '0:8/a8Vh3(ys83W#t?NX6nQ 7a`E4B[-ZVMI[yh4bJItC7!*b7fa@Hei A&ZIeo.' );
define( 'NONCE_SALT',       'ih^9+J]oypj~X7]KP~p<}`_&I(&t1>/Y`>+(YTA9,NB>nSq*U^h?6^[<)=6XlL}t' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
