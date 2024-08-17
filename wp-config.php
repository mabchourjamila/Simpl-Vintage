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
define( 'AUTH_KEY',          'je2q4b_/?13h0K^kV`lH8g~Z:zPwDh$HJeugv3E>vc:d `bE-:75AAP1XA?r62h4' );
define( 'SECURE_AUTH_KEY',   'ZQ_q`PVMHZmD~&-B6C7j9`P[7!ogE~2p]WXkvY7>1@v*%eHNiY!X@{PH]tEhiN!-' );
define( 'LOGGED_IN_KEY',     '.4$5v.<mSh`q6gx!AV@{Hl/[/?66(F]VX5$9iM1nXBBV:_Ja8T8g C68Q;e^.]-9' );
define( 'NONCE_KEY',         '^[+ (.DcnD{N&K?&_`{-W?54aY9c()qRCfN}[=Y(nQ+ULzab>=)gP>`I_LubvNtR' );
define( 'AUTH_SALT',         '`FeklszQ<.oV:o/6|<qK@7mW~VEn]ej<carM:Bg9jf7c_6Rk]L4s([Jq16.PV_*e' );
define( 'SECURE_AUTH_SALT',  'M)JtNbs>E!hwHe^~mjccA5e++i/&NBW(xFe_?D:i}(H0R_n:cFPC),SIH~0-26Ks' );
define( 'LOGGED_IN_SALT',    ',}2yD?^%W9]iP5`rf`rD>bP|tD:I}V(6Tz9O%i_I:YZjDf& ~YJSs3ks/`ye;e}0' );
define( 'NONCE_SALT',        '}oOdqUPl*mKzE|AH!#mXXvG`T|U}(k(SbD#}1X!^(J.KTh&;[Lq)fUAd/E4p@3Os' );
define( 'WP_CACHE_KEY_SALT', 'a:fhjJSXx l/gp=}aIb9`Fn^aij3&.[<?qx#$`M1Svu/IrjE<c%<B-DCu^h[.5.q' );


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
