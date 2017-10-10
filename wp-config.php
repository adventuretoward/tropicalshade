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
define('DB_NAME', 'tropicalshade');

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
define('AUTH_KEY',         'msH)]Dv/F>d*b|)hV2zjT2HU|:;(9SXwQ7_E&7@0i@g1?aY#Cdk $H%=m!Rh}k{h');
define('SECURE_AUTH_KEY',  'Qt[SHivheJv+?UoY[*E{z]v@j]0Na0YB/bO]=Gf+b>)p(6M3?E%g$JRN113`V&O&');
define('LOGGED_IN_KEY',    ']/T{.ebLaFGSj)gP*&4/CB%&)7h6}^<Cctl!j{~`Um5,/Yc1lJ{_Ky;XK5&[&DtR');
define('NONCE_KEY',        'R*=5UwFp48R9j;cs0qA``Stj0nHKx3` ,*2iQ7_U:mfyB#nSlFBUAgFJGFm?bxUO');
define('AUTH_SALT',        'V:DJWr2q-(eRy@P|W>OWj^@eeFbJ 7a5xtT~{v:-hS9O[1nyr)Q8a4/Z)M_V(E]1');
define('SECURE_AUTH_SALT', 'CsT]PZrvG-Y+>XtqBKsZkbPQWJU?CFR#F#y+}*$;0xW&xt;M/>s|zHR<8_!&t:tJ');
define('LOGGED_IN_SALT',   'KjCkqJ{B?I^ ,{<H K{9Ii0Ep,eh_{E-Ib-5r3Rk+zjyb`_dHhI hv~57:vj),=?');
define('NONCE_SALT',       'Hg=e8;L1r?a.Fryn53Z.ev0VS:4*y)<zm^_!+o]wDVys-7gaIu0>l8,%u|.PA<`O');

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
