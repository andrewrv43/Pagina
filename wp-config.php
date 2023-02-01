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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', '123' );

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
define( 'AUTH_KEY',         'Re@mwfOHt%#D^_<q&[v92d^[{/>)p{g:vJUnL32tUZnEC239|?k%A.au`Q*Y+SyV' );
define( 'SECURE_AUTH_KEY',  '(I?$r)t@-MW{ByThWbx=I8f1PQ9f^69=7fkPd6W)[1yf]8wqdCBh.C]*Yay__|`e' );
define( 'LOGGED_IN_KEY',    '4&UcfCS{4c[ka:(e^xjdbj*m =oRM4gKcLBqAYl2^qK6CTaEBHDdz})Gm}QhC1#b' );
define( 'NONCE_KEY',        'C:~e`2P66stmJ6v{btAb9e]=_FIalzq2fOu@v9?&dxSt8`u06uRCjU<EE(pe&hZ0' );
define( 'AUTH_SALT',        'WjX?U|EtMaU!n+t3[+KQ251h|--7DPt4~6lR)L;M[]H?x5Qy6&o#_@ZJ{<~:D|%u' );
define( 'SECURE_AUTH_SALT', 'ch3&`Lr6$^5}T-LZR^d;<qq0;6([EVj.xX0Z:rOF*Qp<n{]3(nTo&Bv@9]ZQ/d@m' );
define( 'LOGGED_IN_SALT',   'cgiQz-a(7i&OUx-_M&GwM7fdYrK~B&6|P@XF0$[yK%LE+mTOI<+mA,0gY7ZHLtnG' );
define( 'NONCE_SALT',       'UlXkzI1CF-cTMW]z@r<]f0CTzS9d?_4aG!E1MpR,`t>=uCQ` p5MzNiyCu+|>LD9' );

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