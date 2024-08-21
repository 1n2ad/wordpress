<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'nabill' );

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
define( 'AUTH_KEY',         'fpiZTYfe^TU.=W4,=q&{,dPCl?%q*7* DlF(uPBOe<cBV;xP8nyOp?}u:b:+_Bl!' );
define( 'SECURE_AUTH_KEY',  ':E~@[G>&YpYw=A(f+?%/H9ryS:yfuY =!B|n}WI-f{v&um4Cswu9#xGeavgV6LBv' );
define( 'LOGGED_IN_KEY',    'tvZ{A_NDN]jL#hJ=Q2<.9Tr$5Z[&;|+nOys@j??[:WNL5Fa:z4)<<a_Sj6%z?hYY' );
define( 'NONCE_KEY',        'N1Y%&47Rs?O+q.JwLF`a6`vJPf(*d~g^bjtg#]W<<Z-#~=k]1.CiA-753h)E*dit' );
define( 'AUTH_SALT',        '4CRxdD_a^)>#qOYm`Ve:1ERzECuOYe7H@iy-J+?{D@_zzIV@KvpI!-pp.{|BBF^d' );
define( 'SECURE_AUTH_SALT', 'jkp7`GS[dw)$+sUyc-%}IL/z@Vij1rpL`S!gsNb)bv>OA7Kw9xJ~^[2^Ks<$<hBk' );
define( 'LOGGED_IN_SALT',   '4nLff|ufSiDOYrB5g7~] `{F8^Ibw#WK7&(Wq`ls8tbkU{%0`F=^G@q@!x`mGg4K' );
define( 'NONCE_SALT',       '/+T<uSN*H=  KCbmHGL@  H*=5YINf,x1iM~o%PwYkZwgrL9qd${DZb7)e#=w%i8' );

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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
