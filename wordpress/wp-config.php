<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the
 * installation. You don't have to use the web site, you can
 * copy this file to "wp-config.php" and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * MySQL settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'jZTEYFkUH#&]J}X?n/ z.;;&2q8`y}%DLk 0C}PWaYMWB2dP~+r%>2L^u$Xt|Qr&');
define('SECURE_AUTH_KEY',  'UMeJ=]-A9y?E/>5M%3(hU]*%(#jYp#OPo,ilIT_7}*J+3Mm#B[5A 31^;R_znVv[');
define('LOGGED_IN_KEY',    'aEb<vz2a~en#8:{L:C 8_%|-z*wUi*x$D-oID&NAQ43Qb}bBX9E!Hp(lH|_MOcL;');
define('NONCE_KEY',        ' .Bk`.n][tau0u0,~vW#Ou5}ONlUBH0K`_15?Dj:>I!>OY/PTKIx+~l?I&w@jW`]');
define('AUTH_SALT',        'ME?FD(L2]y^&^k<,yK9gn6L7DpTejmrqFt]3I>a<[H]&MbG]O,5-r%553mq32$$2');
define('SECURE_AUTH_SALT', '4DeU}{5JrR&x2xXv$ XTEm#yXKXH,Wv*I)6;3p$]u4Ft9Yt=;]fMK13;80znw?&D');
define('LOGGED_IN_SALT',   'D4L 9M{H{F!.,@_Vd:HBAE4aJ3$Qme77<btH5JTj0hH-);1toRmPT+9K.&Aw,PNA');
define('NONCE_SALT',       'w6(}&7fKsehzW@4A0[z-pWy/F_@wMoJI?Hk{%GJpaifzh}Zl)?]<W%5`*m-O0rR>');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
