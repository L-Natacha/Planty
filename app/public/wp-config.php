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
define( 'DB_NAME', 'Local' );

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
define( 'AUTH_KEY',          'R1,eohD#3&Ht`z*/TVdTI,C9>2ApxKTF;i=$BKR0NcA?FKm6Qw%r_#6tf#X_%r,^' );
define( 'SECURE_AUTH_KEY',   '@YimN}Y58=P`A;)j(D/,VE|Xr/SNfhsu%V|iU#yQBd2Eh?/!54:2_bg,yWYtqgkr' );
define( 'LOGGED_IN_KEY',     'Sf1OZ^me/IJ4OpSc`^Do -0:;,7P8l2)f`c}~P+Xyr-z`GJ?tJ;_g ^G-*L1P:py' );
define( 'NONCE_KEY',         '<4[enP8C8O-Cc!hZ!T-bbsgbqH#DHSTFkqLWWV=8RJER5X$VaK0DrZ@*3+z9fBoK' );
define( 'AUTH_SALT',         'Uw0h.dvS<Y]8=%5g|l660@pWgICqtK>aTURD=nx{r=Jz>~*A:Wo)J:pn4Pb>F!M[' );
define( 'SECURE_AUTH_SALT',  '8=B.{6a%X&vYzpJhhsy#|QSG=rb~+?4MQJWslE}4^HJWBqEMYam$X*Fv5pVWQDy*' );
define( 'LOGGED_IN_SALT',    '&WDi57?U+SH|M%ymq|BjX,|VV/r!&~I_,Ep$L!2lc8b[b~k1^zIJBSgr.qW*mxJo' );
define( 'NONCE_SALT',        'd^F@)-L-uc`Qf_&eBz&PiGHGCvl[j}0M6;_PMaOH+VBop2$-C|#KS48>9]Wu8-1@' );
define( 'WP_CACHE_KEY_SALT', 'a9DR`US2jh}m<=<A/7da}M!Qs:E^uG4I}Y3^3QNOx%r9zXa^SNq1@bGQ&)_?4Ml,' );


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
