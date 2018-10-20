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
define('DB_NAME', 'pswwp-refrigerios');

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
define('AUTH_KEY',         '28P{XzHwK;S!$3@#co1(h*@,U!pFHZF;Zt8OexBOTE0PKR37pL!@lq]Y#vLY&:O;');
define('SECURE_AUTH_KEY',  'v:dThCpF9/i|*5HoI>]YPS)rGF*sB2U%rMoe30B]+;>4T3r/d}esu[qbau0S7X9|');
define('LOGGED_IN_KEY',    'Ww`?S|R%bJef]gHJmYGB(ji9bK.Q ;c)zV^;f4d(pmS(I]y7zpSy4{Z0 =&HbBz`');
define('NONCE_KEY',        'nYSrs%)0Abip4|MW<Q6JC !Ws~1tGX@v/.17p6|w2|9<azOW`UF}tKHbTN`$a..k');
define('AUTH_SALT',        'A;QV(bG@%_[iOU>?s=#u2WhB7W+:gv;>^n.B9y&?Hox:5KK0XR,N$R/MsuAVAz.D');
define('SECURE_AUTH_SALT', '!.kj1o,H}QV)+wJgrMmy!!ihC3$,=|B)Av@E%5/nLe|W]5 ^3,%pNJpl$}O0qUbQ');
define('LOGGED_IN_SALT',   '!*x``B%eV?YfnuwfcL.07?urEZy#iOL~lrS:svaOxx+]8N?W|~9&_t.qGbw8g/0T');
define('NONCE_SALT',       'f9_un}(T+A~o5eot72Y_QT?(a%=DPWA{j!YR6./s}3QMLby@>6$,ZewoP|zvsHIB');

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
