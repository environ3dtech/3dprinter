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
define('DB_NAME', 'Environ3D');

/** MySQL database username */
define('DB_USER', 'environ3d');

/** MySQL database password */
define('DB_PASSWORD', 'environ3d');

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
define('AUTH_KEY',         '!d07HYPeEex#Eei}R}PY-k-`PitbwF{@(phkRD~OEbd5V@[6<BttdRG>*B?55vYH');
define('SECURE_AUTH_KEY',  'c:S9vU3zNN<I XiU GbdqnU~:s+%CB&pz)Dcp5j^ZA!&JZ-mTrU61i?.Wb)0FD=^');
define('LOGGED_IN_KEY',    'B|XAui`t3kXpC:KZwaXh<T^:eW=.>JDEzrSsVv _O;[k#+HlVxN~G(qM53&C 1z ');
define('NONCE_KEY',        'cqkxCTS=kB20m/L&!gk8dEHg6@w(u!$}9~,>fJ?(BY{B0`-4q^[)4>Gwa~HJ|6g-');
define('AUTH_SALT',        '-sz)2=r{fLmi%VavIPhp@gncd++wadhs3n5[KjGFVU~J:di(d4MHfKYS`X{Q^!)o');
define('SECURE_AUTH_SALT', 'n55zejP2A$=i:$yKw}D~?f!1%`AGr`:@{)1&X]w;]T%mf-Y;T}aQLX4b-e<m$0<i');
define('LOGGED_IN_SALT',   '<;=mM=hEV8uQv8s|$P$cZCd6ZHuuz*vTON1>Wz!>x?0S{P7gm#k(}wz[=vq{eL5Y');
define('NONCE_SALT',       'S]p=S7%<d.}l17,9#6E+0b%$[A,7}zcKl%/gCJqV?NIr0P051)pb/w)w:E/S50bS');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_e3d_';

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
