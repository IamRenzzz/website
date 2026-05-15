<?php
define( 'WP_CACHE', true );
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
define( 'DB_NAME', 'u900236417_kfOvW' );

/** Database username */
define( 'DB_USER', 'u900236417_gGnDV' );

/** Database password */
define( 'DB_PASSWORD', 'BCxGKUJyRS' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',          'j.rI/A.n7O -vQCWeR(}#@yN=9TcE{K<FcJ ).E?XZcp##K?].P0f]YqR&|X{_l~' );
define( 'SECURE_AUTH_KEY',   '}DB+8FS=il_(Y$ABr/pb+vKLuNQ3gOR3o.>5x#a!stHczUP.jU>tnCVg4F-U[f`R' );
define( 'LOGGED_IN_KEY',     'h,d y A~WF(4tcq]GjlWM7_VKD8iAwS>2+^O@Ms5V)C,jQQ%=F~<y>ve)RuZSM3w' );
define( 'NONCE_KEY',         '(4<f{u~k*QeAzgn4lHQFow%{G|q@qs+(lsba8?&[22p;Nd&oLfWS?VE-pOx#ahq(' );
define( 'AUTH_SALT',         'lpE+%_D|YfH)?V}X7)3#*z?HgYZ]sJ@X]6cCRj0;8[^l=}k/T>cXO.$fMxNZE}cW' );
define( 'SECURE_AUTH_SALT',  'UrBGx7cFI*?@S~ht(/L&WWHLP3J!hoQC{/!HvlHT}w#}Ax-e<TQg9Mnx[dA,yCu+' );
define( 'LOGGED_IN_SALT',    'Vibp/-_RB`v)11*i,[BC~cX.sK+(k&Ue!Sii[4k ownDArxPU+S@Ugwbyrw}Jo,P' );
define( 'NONCE_SALT',        '8wR?O/;Zy[=w[r]JJ~cSg;*WiKDKtgnaEQr]qLU!Pwcl Hxp}:u3[(-a$$GTJ&l4' );
define( 'WP_CACHE_KEY_SALT', 'g*y%BW;.I)pZ::dkAkA7OWxYS8f{GE;~i(P{}b&dGA6c=2b[jG3Y%7,e7gMu&[O4' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';
define('DISALLOW_FILE_EDIT',true);


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

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', '41d818e7195508b1eadc731fb215ec72' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
define( 'WP_DEBUG_LOG', false );
define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
