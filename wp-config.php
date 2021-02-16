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
define( 'DB_NAME', 'testsite' );

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
define( 'AUTH_KEY',         '=P74L{!5?aMr+jWh_d~qv@Ag0^K>6XJ%wRa,tZv4eW3)ks#-&b8Pbo9?[/}E-@;a' );
define( 'SECURE_AUTH_KEY',  '@gSVHeqQ1sz*@z6Qqoo+oSR,[[pSHTs7qwz(/Nkcm8zxc)@lU?O:8.&rkJa.{ms@' );
define( 'LOGGED_IN_KEY',    'E|w-9]0$0,Q=!fbrU n6dgd:o8z/*%R`-8Y&K9h1g5NUwmJmmn!5)JGgj%idJAcZ' );
define( 'NONCE_KEY',        '[tGXCNQ_H;.x[Z1$u-hL)g#/+nzbKlhN<n*/? W4](N{)j[0A8?z^mpui|S<hQN(' );
define( 'AUTH_SALT',        'DY_yRq rZs&42c^DN{IDud)58W2bIz35@ku(t~rGQ0kLA:et=/b!% W[3C#cjFN<' );
define( 'SECURE_AUTH_SALT', 'IE1cNd4)_6[N0jD@)}Q]Uk>)pK@};YKRyBZ/mt5,(Z/fJ+~?G?&1Bf$Qj)H4T?Rg' );
define( 'LOGGED_IN_SALT',   'llQ|Or#RH)3cJfp^7.e]HALj^X/wN)-=0R_BM{I#q{=+Y:VA&%R+q/=XE`tfx7_&' );
define( 'NONCE_SALT',       '}?x<8V*|-vNbE|FFlrDQ;hKIta(,~sr+]/z|$i6^ZV%R(2jxo>@@KcoZov`QbAZ|' );

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
define( 'WP_DEBUG', true );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
