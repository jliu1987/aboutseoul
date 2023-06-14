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
define( 'DB_NAME', 'jliu_aboutsesoul' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost:3306' );

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
define('AUTH_KEY', ';zA*C0(yn~M/:#wj4G(KJ@kXd48TH:r9l#5*06Q~/:S]_2*1v6q8_5uo&a]9N*2B');
define('SECURE_AUTH_KEY', 'YS~5w3q5de5I4P_B7+26%%sAg*F|4(_1!ZaCq&+z76h5WW99(6UkA4_2C11!a2[8');
define('LOGGED_IN_KEY', '6I2yrxS*%VRCTM*)n7CRyOBvD|@2~45*i97P~1tI0G5v7ZW585UxL8(tUX*+:3wj');
define('NONCE_KEY', 'Ph3cLz#sOy3![7*Z*ue*7;z#4Ro+yruS@)w|!3foK1w@kB12|]X5f@C47De:Ir%8');
define('AUTH_SALT', 's:0i9TZ2LE@(;O9t)4G1x_dr1Fo2mwGNdDfx5-)t3iP5Vy6)S96c)R0@B(2&6#3)');
define('SECURE_AUTH_SALT', '6@Hu60N*H7|Q|~28|3He+X-1~_88S~M)%e5sE[o_mKm|4RW+03|k0nPik1~Q20Nr');
define('LOGGED_IN_SALT', '+Q6!GFcS4jP|b9uwv|*(0&m(lqfW5m43UMp3AmnUc7nX6D07g|%1H1u0%S+ez&]3');
define('NONCE_SALT', 'f69[xKH4Dr%-t;jc]@qgzsH3DPW-|0tIa3E6s61%/1H-8F(~2%78L3Xwim-x*%7m');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'jhim1ea_';


/* Add any custom values between this line and the "stop editing" line. */

define('WP_ALLOW_MULTISITE', true);
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

define( 'WP_DEBUG_DISPLAY', false );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
