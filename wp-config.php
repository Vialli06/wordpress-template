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
define( 'DB_NAME', 'wordpress_db' );

/** Database username */
define( 'DB_USER', 'Vialli' );

/** Database password */
define( 'DB_PASSWORD', 'fbrules06' );

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
define( 'AUTH_KEY',         '*rlCpu]_aP^<nV:_ppI|GX&(U~0v{_wfu{[,lUy|=g;rXV(Pz]ylx~O+RQyPbiVN' );
define( 'SECURE_AUTH_KEY',  '?nmE>36/V2.cgjIZoShfRo]k5l+oq/(MJ>wb@dS7Dfn=-]/~$.uj]&u-mfvWX[-3' );
define( 'LOGGED_IN_KEY',    '1O%n.RgTwQ#$YPbUQyuAH7YEFN1E% cD{s/2@mdYd5P3B@aj9:N&>>PNtn<HQHYa' );
define( 'NONCE_KEY',        'WmxRF#=g&S=uxAuKVzvm^hVyC||*=Lp+owC/lZ}[,3k5TzhFAEQ/4E(hX=%UGlK&' );
define( 'AUTH_SALT',        'O}i5C8D&|h)SiKh}{!*:`uD4mi3i*ol[d0I!Oz5KM^Vk=Ba}.jq.2o3~2uKy{a$|' );
define( 'SECURE_AUTH_SALT', '[k*O0!mIH& YNJ>fh?<ktv,QO(Xwt~T%|rAcPDAL-IZR7S~ukCg1^HGpUH?~l_BJ' );
define( 'LOGGED_IN_SALT',   'e3WJBg%0WKhk&QpI>,EYx7CfC<=*,%|s0G!:![SgX&Y.#2xBPvIr2dt!KN@o^sP,' );
define( 'NONCE_SALT',       '-}X6f-8&X]W!nF]Wy,uMfl:?[/+J:y)lY^@P)-iX_5XxRKuiwrs1lI*az[<:xhh;' );

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
