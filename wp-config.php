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
define('DB_NAME', 'dorks_shop');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         ':.#lc;>KUx%}07v78?LY`0YJY.4BY3-$A%2DfKGGLpD@^9CO`cCJi8uKX!]EDPk/');
define('SECURE_AUTH_KEY',  '}T=ZhvwwNjS,[RgxE 9YD,8>V9P)zXM-ZDWYXd4v=fNJ>42O,0oqL%eTFDW$*s37');
define('LOGGED_IN_KEY',    'qVOeY&N,5!][g&o%|XzH|I&7o,#zB+)!ic^}jZvQ88[As>Cv~K8s 8MIr0.x2LOr');
define('NONCE_KEY',        'KgFuU^qpjFn%H^#sF4[]*}b:Zh1R/M%>+76`+gCwh %i}~m0cU)q3>*y]/kctGv#');
define('AUTH_SALT',        'L{![2N1&>6%=T%Pa:A:#TY2@`=}q0VLk(6Khnd[897gNC!H99f1 jT<W;B600J?9');
define('SECURE_AUTH_SALT', 'j6x?e1dNRH,l&nE[;GKR~RIl?i]$z^u%yeeRQ^PSoc`rgmq7uf7Jz*6f5<#$p2?/');
define('LOGGED_IN_SALT',   'lp=rLxxd,t0NEFI7~k^4TghP,vbz1~?S<1n+5XJ<.%}u?3<c^DyiiwIZj,*Y:Cn:');
define('NONCE_SALT',       ',0)#+Oivva&tONMp&scx0J9O2)Gj=4g|#;mBfkl_ TJ ss^(`#Gdf9~BymYS!?9!');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'dks_';

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
