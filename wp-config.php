<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'procoder' );

/** Database username */
define( 'DB_USER', 'admin' );

/** Database password */
define( 'DB_PASSWORD', '12345678' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
define('FTP_HOST', 'localhost'); // Use 'localhost' for local installations
define('FTP_USER', 'pl_shop'); // Your FTP username
define('FTP_PASS', '12345678'); // Your FTP password
define('FTP_SSL', false); // Set to true if using SSL
define('WP_CONTENT_DIR', '/var/www/html/pl_shop/wordpress/wp-content');

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Dq8<[R^#yyr>wEMG%q?/{/O+MnM%W]EmV!s/d9@D@?jK_|`Bv$zo{JDQZR73B4i&' );
define( 'SECURE_AUTH_KEY',  'cImqyh&&FXt~~Y2I*0wwveH]/!k&}<+5Tc%>gKFqza43vJm4yBx7d{!f;A7c_:!]' );
define( 'LOGGED_IN_KEY',    'JS4^(|=k.~&j &!W.g,vE27CJ7%+U_5|RkHv)m5A&yhsrQf5f 4rXlQm~&f<3A9l' );
define( 'NONCE_KEY',        '|y=PmU#.b!vC.Uqp}Z2+e+_4|/r.wOwrRu,AQOjykYc-<_$rr<?:hm76t2}oKkjt' );
define( 'AUTH_SALT',        't?&L]QP^|<1QlG.i/K|b3IQ^%S0,5v#lv5:HzXB27X@*nvy(Rjm>a?`%QEiC_Wuw' );
define( 'SECURE_AUTH_SALT', '6DT.d-V6]-g~}@_uD_+A2a3xO.N|=1DjRy6,gezoqzT@I9O{_V4e]LN0i`vfLbVR' );
define( 'LOGGED_IN_SALT',   '||AjaE&>@*t$C9:S|=v|=U}7$1Su9G6|A?V=|!IclsKc(A$m1ry}n~3M_#eES8Ao' );
define( 'NONCE_SALT',       ',{4&m8@0jv-8mt|!:jQ~1(;71Jx<vV$3u7B{c@/L|_*j0!V(+/:QkaaP$`8L{#%4' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
