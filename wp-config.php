<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bar' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

if ( !defined('WP_CLI') ) {
    define( 'WP_SITEURL', $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
    define( 'WP_HOME',    $_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'] );
}



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
define( 'AUTH_KEY',         'iOevbbTQAwCebxEkYoLsIFZ4UIjQMTIDRl00QrCIG1b0COyI6fYEXM6DAWawgP6N' );
define( 'SECURE_AUTH_KEY',  'JrbaGxIIg6HqKq1dMNT6rLvVs6k5dWTuJoqty5mkgGCyn6d8iyGf4IhBKpZNWaFH' );
define( 'LOGGED_IN_KEY',    'LiGV1tzRe7GShrkZIUPUfvmFPFcMLmoVf9458tBnOIivIptXkPWEiWwYIgLNI7dr' );
define( 'NONCE_KEY',        'QNRP8H7pirswnU81yQRtmYp8xwCDebeOzR7HuLeFnt2CTgu3eMv2lT03bZMoQuxq' );
define( 'AUTH_SALT',        'a7rd2syrKmYlQUxoyCLCuAyyqkvyRpJLNYyWCDcOWInIZsEXHHCHNnABmJ9vMWzP' );
define( 'SECURE_AUTH_SALT', 'Hep7IKTXASfkIrB0HeymEiQZt6RwF5UNTtsNv5wNwtoO12VIJygICpRDgvO0wsjC' );
define( 'LOGGED_IN_SALT',   'tZ7xBdZ0PEE5KIwUs8L4Z1PhRWs86lrDjSYMz3oJ96zulHdrfc7wJkDv8Js8LK9q' );
define( 'NONCE_SALT',       'MdZ8UQtDMWCCHv6v7zD1pxAPgts6OP5TcaP6zf4570KqHvGpNajK9tyojejSQ0CI' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
