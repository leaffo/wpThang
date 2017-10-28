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
define('DB_NAME', 'wpthang');

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
define('AUTH_KEY',         'STcH,3~v[.Q25=fV}Sh~ 2P&;N.P0mk}xm0,*`R.HX4;1*e.Q9+d?MO)I)dIDoM ');
define('SECURE_AUTH_KEY',  '0YHeAP$6eT:&2}29k]u8r_9af_J?h,@-Wlg>XU=WE;o)W[Hp?P_.^HA`d9#c}WG:');
define('LOGGED_IN_KEY',    '|1VfC0V2CFrz7Fbe#PJ]UneJcfuqp-6}h-yS6+Yn-} 7?1os#I#1~=Fi@M`_Ei4G');
define('NONCE_KEY',        '6jYj911C}qY8o&o)uIbnPS8O06U^&eslBoOHnEr3;x%oKIZHgSzuzd|Gn~JhwpBs');
define('AUTH_SALT',        '/(vTth}2.B@-9dH|+Dn)t<a-Lrv]#HXZ)f}aO$o&5#]?^o.u4Xv*<N$7U7?{aw(T');
define('SECURE_AUTH_SALT', 'k%)kJV>tW12.0=$qpOQ]c*M%2imM@]z!mgvc!)Um6y-!5JYjJ4]Wvgko]78b}@>j');
define('LOGGED_IN_SALT',   '1mjjtC;wXUbtE&X7m>5q@VlvhB:FKdFG>%vr}&Q7[11U+Bu_{52|GG)~.]PGAYW0');
define('NONCE_SALT',       'w+s?3?7+6Xcxi_s1YC7U&u$[VDro:y9;T?S*n0xT%MvM{yn3Q. PM :K3Zvs/&_8');

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
