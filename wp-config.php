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
define( 'DB_NAME', 'gasu8294_valcode' );

/** Database username */
define( 'DB_USER', 'gasu8294_valcode' );

/** Database password */
define( 'DB_PASSWORD', ')3pW9b]5XS' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'w09uznuj66xnhdf2jtk8y9kc79oobjddjuv8nrfetbsm8qohhcn06o7bbdkdcwwk' );
define( 'SECURE_AUTH_KEY',  'fupynx7uywnifhr0qqv50splmfbh4mmittbmjmn0rxanwzgswmichkuyxu9rqtqj' );
define( 'LOGGED_IN_KEY',    'if8o5khdpc7v3w3iwycbpvgpjzfrqqnbukqrc5ovcwgoo2kwuvimetogsdubcykc' );
define( 'NONCE_KEY',        'ufjxxa3vhwgxdwpqajoiip49dnqtrpziv6lxbr3r7y2zebr5lz2n4ota1hzuvkns' );
define( 'AUTH_SALT',        'lv0dqhad3pt3jwzmlj8gif4qqzodqbtw8pheyd6yxokpjdxsd4gyu0kpezhut5tz' );
define( 'SECURE_AUTH_SALT', 'c5ju6xsutfuutymswhypet43u6di7oyffu5fyvnlafyrwtemt60yglxqzubpwri8' );
define( 'LOGGED_IN_SALT',   'vbxhvjmqtckj5h4h26wf13izjnoywll3m7eyxw5fl3d3ckicogafcaqd36mdfobs' );
define( 'NONCE_SALT',       'cx9sa4kftgib1angzsj2msod3phm8awtyzn4igkwzibgfiapq4fij2o7fbce3p0m' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpba_';

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
