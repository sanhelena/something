<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'sanna');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'e9d70{c4*`zu(Kg~y8HlD?@Mbl.8(PCsunT}bm*o/fz[u~k{`nB}K1AO?|7=<j^H');
define('SECURE_AUTH_KEY',  '. ~8[8b_bo`}>.+|ez$#]xks-CR.JkT~.Dj)ZVx>{{U&ua%2A4|Y)|,~0FI:wdwa');
define('LOGGED_IN_KEY',    '1y|Z8QNf=Zwq*lJ_C72p[}ql67--8[li)Bv|UVd@v -kPr<hwPuTW%=6QBr N8%,');
define('NONCE_KEY',        ':keGae8yImO.(bcxL[MP3-r-`!@-v:0V5~j*51J>|2*H^,!/`{Rqz>L..z#q>]9I');
define('AUTH_SALT',        'CJC)p4H+*8+N|iN=)G7v>^amo*5W2_OUsApat1i:f:,4z65<Ut<=pome-Z][:4Nj');
define('SECURE_AUTH_SALT', '4-${?+8t2TY}!}ZR9`.>XLM%d`-YJ[W@upt8t$jJlqz+;^W[H8?yo?*qg%t*|GKY');
define('LOGGED_IN_SALT',   'rueFwKgAIGCZHQ;e5{]m5 LnpU>1i6,}2(|mW?_rR70w-C|>@_|(G]!mE9r_y8H8');
define('NONCE_SALT',       ')-E(~/OS`lHlF5ieDR}u%7/0YGY7yh7>5=gnzp0UO636-prp>B;Yp +Vu2x/-Z+B');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
