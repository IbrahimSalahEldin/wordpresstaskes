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
define( 'DB_NAME', 'ecproject' );

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
define( 'AUTH_KEY',         'dz9iJKNRXiI6{@e2G=R7,>bc]us$1JI +=SsgqdP|K]bLWpq=/c}0@PHC&gYd{p6' );
define( 'SECURE_AUTH_KEY',  'TJmp^sp5~ws}SuLEGBnYOH<Ym(WHXogZ ?O$dW%>{L%&rydkEa)7J9g!f<fp/(eu' );
define( 'LOGGED_IN_KEY',    'QNM4af2>4N;Wmzbp!/1W-_ZX%$`<,65kl1zQ!|R1,o;bd(Y,Zf[HBQaC2&8A@_n#' );
define( 'NONCE_KEY',        '?z<auCA*?r-3Cm[%cy1|QXV!Ze!7uci6N23^OIX0JeP$Qsmln5E._G/J*}XC<v(_' );
define( 'AUTH_SALT',        'r%Vge_>qs}~_?J$kIa5W$ ::=Mf Oy1dRq(En$R{!N(c&dmY$+|B@3H2O9eLXV<@' );
define( 'SECURE_AUTH_SALT', 'Y`oQ$+Ch&IxH;*S[5|A]-(R*XV?2EX~7g=~VAH&Ob O8V^)BI*jD~,OS#n=!?Xw1' );
define( 'LOGGED_IN_SALT',   '/ 1F3j/4qtb2o;j19%`kgv1uxMi<iKu~[Xj#Lc-&^]8^lqs-y=2w_;If NP5qtBJ' );
define( 'NONCE_SALT',       'ozgVEYi.BM^QzMOa*#W<HL<jcmzTJ[xAA]?f6<H8EN,K~4HmE]E3Y+F#qxbA_+E-' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'ec_';

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
