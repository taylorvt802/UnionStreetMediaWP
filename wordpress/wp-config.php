<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'mysite');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'C*x-npU@FP@czn yfXY&5#p)cFZII#jfIoS=SEO=E}aZJyn&}++AfFrP1-u4czS`');
define('SECURE_AUTH_KEY',  'ztmSgBN<]+*t~XIg0@J-X<$>8{e4t,am-pE5]:hVRf.u| 3w}0QDM>y+Ub@:e~Az');
define('LOGGED_IN_KEY',    'FarB^^DdsE]N,o5D-lVa;&T]#Q~~V1-j-yzs;lT-Lz,3sFUhd!yy7/Q9EYNviC!r');
define('NONCE_KEY',        '-o<Z@>;LtN3>,dK+38cYLp&c}-|I{kotHpPVD,VdG[kq}QsrBVZ=2_+P8@Z+00{t');
define('AUTH_SALT',        '5>_=Y<?n.MP^ZGns|O|Ym@>mtWU^St5Ot/>]bciB-pEl5S:FCcD|@mu9%=q*M*1B');
define('SECURE_AUTH_SALT', '+8*ynK}Dva:yeh-8Fdj1MFvKRpMKVva=O|-%Z9aHBawV6Yj#O<A7J?i`.Ps)+QIL');
define('LOGGED_IN_SALT',   'M#=xO{,}Q,M([Ckw7M?+S:i~-}9D]QZD4yr/oPY^|n%]Y68]e78Oe9OfE$mWRpS$');
define('NONCE_SALT',       '$[5YyFp-,#0]+ydY@rD1l%mdU{tBnO`(}/+Zqe!aHqZ-,C5}tSmW9+2|Qow{A8l ');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* Multisite */
define( 'WP_ALLOW_MULTISITE', true );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
