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
define('DB_NAME', 'amazioj6_wordpress');

/** MySQL database username */
define('DB_USER', 'amazioj6_web');

/** MySQL database password */
define('DB_PASSWORD', '7=;TVJG#&[)!');

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
define('AUTH_KEY',         '| rrnYp|UrQU*&$e+{XaYW|1Avn|IpmL4Z/,:_G#3>1vC&~u-pp}7Dw6P:rZh#A>');
define('SECURE_AUTH_KEY',  'x`4%{(!sIVE,xJiVf1~khUz;f{9x9)85)nM0CH`<5.aqC/?Iu;d_jMV&d73Y|feP');
define('LOGGED_IN_KEY',    'oS.Bnpw]vC0EN?j}nzVjhORtGL-?%q:uW0Dz@pDKQlb;yzZ?-f>mc0:(wV6yZud ');
define('NONCE_KEY',        'H -c-#O$x(2Y?tc%o{-mk~1 .hO+hx<ObW.w^Z#.iQc+zVu+rz1n3JO0{k|#=bm]');
define('AUTH_SALT',        'uVGVAFMxe-gX,+#h=gOzP`q03|?K?x?yQA3jOG$hn6wlT$e_h(`X2Vg7#w7q>2>t');
define('SECURE_AUTH_SALT', '>QWMxt.ZcsWSA(%y +-xYhuSe/1BeH<s`+ xdETDug_/w#Lq9)AC8[~LxP)zZwXY');
define('LOGGED_IN_SALT',   ']7Jy^Btrccf-I/Rwow.g>X+-CtNd--uau,z1x|3|5nMb,mzRA0.ff0x5]4Sq[uw3');
define('NONCE_SALT',       '@F~QH$Zq0C[0q/$<,m: z-H[>[hW+pssA-ks:3U^T37=}@;u>@-p<tO<$Hnd_h!P');

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
