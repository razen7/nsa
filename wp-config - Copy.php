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
define('DB_NAME', 'nsa');

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
define('AUTH_KEY',         'Uquw&X$l AP-w)RB6f20Rf&XvQ;^2Bf.~LL(2Yq}-1YlHU)NiRxo8af 8Lkc*QDk');
define('SECURE_AUTH_KEY',  '/+*(&0&x<%m~e?9KB/0Hq%{?3h>7O(QB=2@&<}(16-$uU5$8^dwy`aA@wV3tNM.5');
define('LOGGED_IN_KEY',    'G4$,XWsl%~|,n*|X.[TM{No9/gnd !p,G]!Bg$TY)G&%2y_(>xoMkG-uYSc{m/6T');
define('NONCE_KEY',        '3;t(5,kh6[=oz5R4I0r3axsF(;C~`bQW$)b|vdMU0$40!ElL``U.WVn%7^{rWi^3');
define('AUTH_SALT',        'G/ZYFfv{-J&<[n8qo{R3#W$_*Q{wK]`mDS*jkT UQ@E`1FA`fqqTW(_7OuqwsRYi');
define('SECURE_AUTH_SALT', 'k_]+1};(,|/(lN}lZ=rS|!^t8!3ZB/TF/qX=^b8/S}`qx@}Uc|5*?^UoheaES[Gf');
define('LOGGED_IN_SALT',   '9Sry4~6ms_;^5JfzL_1xRi>}G,:EC){3m!&YiU_O21hg?f~//|#)E|f9?Io&k&}E');
define('NONCE_SALT',       '~yAp~hr6kiGQmXN@*3r3nF4l2uzAFg(nrkMR^VmP/6NL7PsA0R4^v}g*(g.u8^to');

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
