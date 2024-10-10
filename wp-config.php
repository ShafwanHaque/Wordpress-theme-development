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
define( 'DB_NAME', 'practice' );

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

define( 'DB_COLLATE', '' );

define('FS_METHOD', 'direct');
define('FTP_HOST', 'localhost'); // Use 'localhost' for local installations
define('FTP_USER', 'pl_shop'); // Your FTP username
define('FTP_PASS', '12345678'); // Your FTP password
define('FTP_SSL', false); // Set to true if using SSL
define('WP_CONTENT_DIR', '/var/www/html/practice/wordpress/wp-content');

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
define( 'AUTH_KEY',         '`#W]x.jv/>>etlGL 4(X[3]]A7*3JHNf lq,BiGhUxcc8!&Op/6[(we&)j2cB?$E' );
define( 'SECURE_AUTH_KEY',  '-p_P%,v^pe}7QF22Db[9_lXUW/>eagQS1T#*.&=LHB4Q0&y:|rnU/g}II$%+#$~*' );
define( 'LOGGED_IN_KEY',    'Z};+L}[6j03e=#!&JrfMx;uUoxji3 OwI tN.7e/`Y !fh/<RV)8rEKhhg~6QQaV' );
define( 'NONCE_KEY',        '?`d{[Yh8aygc>G+~/U)xqb/ZVNF}4F}G2]%Yoiv-SG!1d(J,/lws^Xm:QcO%^]5|' );
define( 'AUTH_SALT',        '8Vk8j3p+OJ@j,<4.G@Va?.*JG.klEU!ju!}18nk=6]n#O#$p{9jpPxgw,a38ceL(' );
define( 'SECURE_AUTH_SALT', 'BQ9PZ,f`G?{tOaGoj`Exv@|FC$jO//(KJ0=LEA-zLI]cOepqKlh;xe=Z9Mvxg7Z%' );
define( 'LOGGED_IN_SALT',   'VLY {[d8nq;9{,aBFGd%ol?/];UPj4HU+X6GFe(kg)QsJ |<]1)xrpx4SS:]m4DV' );
define( 'NONCE_SALT',       '8|yg<RG]muk3Uo7W3)I6 WEWZoSo/|?]IML>qA&H`Qq^VJ0_Lc07R6*lx*MLP&N>' );

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
