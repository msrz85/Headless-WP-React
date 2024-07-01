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
define( 'AUTH_KEY',          'B,ffC0cWlL0sCJ`9uO87%XN?=!VNJ#M[|[:(,d$5<[3n4tr_96nt?Hg%I-kFtJS/' );
define( 'SECURE_AUTH_KEY',   ' y_%6.0CwpW8<-J>`Cc!%Iv} JCZ>.Pi?VaKMb0xji.+L2^/*0Dh<shP:p@zz!|A' );
define( 'LOGGED_IN_KEY',     'jcHW)Jk._FApfW}KmFico`pc*+T^G9zSI|^]bOqm>WK(_^P[)#@CEli-u `p,/^}' );
define( 'NONCE_KEY',         'hWypw9;ZR2YbL`#`*[Q$2>,;&%g&(H!-EK7 ^Hi9Q|@~m30*;Fv@FsSd>Wa|Sb7,' );
define( 'AUTH_SALT',         'uzoUY%&OIa;.|_U_Z7^!kkQh+Um1Xnaw3Ud7I;$0c({?^L(8Md2c!B7B6{MA@PWe' );
define( 'SECURE_AUTH_SALT',  'I/YL<DW^x!)>D0$!KzIVQ03ItG-zM>K4WYVvRTi);FtkuhPx4 2Z.t|7w~K<n=_w' );
define( 'LOGGED_IN_SALT',    'GouzArnpUfA?.L]VB>J__Dufbls4=P>dSHtHQ?qqD]-7Dtz(lKcIMN>aW(yi1Jem' );
define( 'NONCE_SALT',        'CncgN,nI{uAyNpm=FQ?d$v6O%DMR!)#9g/>*R{E;#JDYX&:+qY,Lvt81{nsnHmi[' );
define( 'WP_CACHE_KEY_SALT', 'l5m6*v3l,0RK)or+N}*Yb*kyiLL01!5-cvDf.>8|}Q?>PQI:MQ+7E]u^B6$v%+1n' );


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
