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
define( 'DB_NAME', 'local' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '2qfbSyHkWvfNfOe1qBdl8ROSlCPVO8OhLEtxm7TVbryuzDyWz+Cwr8IqJW+xjNd4dfD/5EucLWY39EvEFIO6WA==');
define('SECURE_AUTH_KEY',  'wItsMtC1Fqv4PuTKQ5juYKWivVEAynXqTHQPdegoPpj0awys7LqkiECelVWc1ESBH8UHbko8OJP3IUGZpJSjyg==');
define('LOGGED_IN_KEY',    'rB1V0PcBSscl+enN2jJyjsbQLTjTl/h42obetPnQIJeJo0NAY+2h9gMbL52wIocg5uSz1iEvw8WEP3hPxaRrBQ==');
define('NONCE_KEY',        'qkfeo48GnscFAorwDLWpb8thzysD8vOuTiikxMYJ1vw7GVtibplSReSjBa6imiVp6YdiI51j++VkRTkY+2XXYw==');
define('AUTH_SALT',        'P+/J44DWKKwj+Aoh1B/PWO1ueHGMHlL6SEiR8KTBocakCWPOn/jStNtglS4IDlasE6M73VFEh6kK6nWlAMtgNA==');
define('SECURE_AUTH_SALT', 't353KsmuhP1mo0Z+WThx4sErbKc95an2DTa2fqvJTt9122iR3fgOSlX1Q22JC6EvIogZlyLHp2BhF+gF1/Xd+A==');
define('LOGGED_IN_SALT',   'ilN7Uen2zYsBIyDcps0xiBouaQPQqYOWlAoDzz1hib94tUcTfaw7fgQC4eleoj+mxWbD7HrVw4Lwj/TDsdJ0Lw==');
define('NONCE_SALT',       'hfji++K61YpyPCOCLr0RnkYe1axZv14gBbMcY5J659K2xUnHXbQQOpKxOIIDVM0x8NSFcHTwx/oVTLz2FNWNzQ==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
