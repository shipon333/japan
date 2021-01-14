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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'japan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'mriuqE7y`A=u-0no{B~yolI/^ar1!7yXPiI/jImSF,YJ Cs`A)1/;aRrS6<_8rTt' );
define( 'SECURE_AUTH_KEY',  'Z>$6BAME#SY/q?O^9pTw|2og+r.LYKAU2uc~f(/_9jg|caSCp+co>>}~^0P|/8E;' );
define( 'LOGGED_IN_KEY',    'rj-ayE~@|;0moHtvBGw#uje}5 $|39hPVRIWCJk#DRMvH^i0-I~N-A]l:@2tLR=D' );
define( 'NONCE_KEY',        '7fK)M`+i59Z+uA C#UMFI=$(5VpsBq};TQ[S/Z-lNer#3at2Mbx>Z>y/2|VDd%>x' );
define( 'AUTH_SALT',        '7y(#W?#+e[AD,~]ViV^6`c+mRAa&He+KlBOU|9y$Xzhu]z5rx=dd26W_n.nn2..R' );
define( 'SECURE_AUTH_SALT', 'YMCzotxz,b>}60bA`Y: JGIN?@)6^(X,PD&E!0r?&lr:eU$}6K+-h>+eeKo0V^pn' );
define( 'LOGGED_IN_SALT',   'Ctiwz J^U^t>)6wpfm-%129>I);Ji=IfE<3/.acOuWyFL^U_~dJ#,l+G? jvU0Yh' );
define( 'NONCE_SALT',       'e5u ZTGPj`X< SC&70M|twDgAuEph/?K[p%DV;1Nqm%qx}?n*ZhKN%|gkkEMV#o)' );

/**#@-*/

/**
 * WordPress Database Table prefix.
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
