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
define( 'DB_NAME', 'portfolioDB' );

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
define( 'AUTH_KEY',         'vBWJdd>|bed*)0{Urw6-G,Wb~)@zwh8ylkxPXsSDFwI@(0cO8&kJ@:cgUaWLD-Y:' );
define( 'SECURE_AUTH_KEY',  'zh9m5uGyT<- n97x=Qx~#EPD,KK}4$/1tLt9Ti$Up<67<H2scov/i^DqK2>$,.7>' );
define( 'LOGGED_IN_KEY',    'O)V&7uA[jHRkt<jMqK+b BmQ4Y<AV|LjaV3 9HEHvwV[2(K6ng9SaM>Azyr_~*F8' );
define( 'NONCE_KEY',        'jWIH^>XPk%:%jV/S.#-/b32S;+|@nuCR8Zl[m^(+r y,}G|}Og9,|5TFZ>bPS{}w' );
define( 'AUTH_SALT',        '9-*nAjHcO+.&?-mXCI=fa3rUJaTZn4yM9-^zhH=-H)=4*(M+c~c568-k/Z{x5h1$' );
define( 'SECURE_AUTH_SALT', '#}@MAcFgkZ*7Ls)fQi^g<gBMcJ^(EH%tIVB&?ck*k.zJ,pFY5n`g/ UzAEd=z;dh' );
define( 'LOGGED_IN_SALT',   '%a8%@q1ar`Y=o|ZzQVZcz=Ibl&IxW5;+%vY[<4+Lw ~>fT[4qk)[W_!}LOrg*zQ?' );
define( 'NONCE_SALT',       'Bz-yh-}0~S$D9q1n4R#jJ)y-v` T=-.iBnq8 |?sf^^BFcKv1~BIBTRtmT-l}<^i' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'po_';

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


define('FS_METHOD','direct');