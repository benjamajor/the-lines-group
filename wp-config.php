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

// ** MySQL settings ** //
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
define('AUTH_KEY',         'Keugqkol67rnQs60PX6v806iOGCKzza/OhbSvd//vWL2okPlDJe5TjIV3Xu+fO7iTQoFx4xK71Vaju3XzraSnA==');
define('SECURE_AUTH_KEY',  'iheYXS3QSd35Ef4k7jTyhtdaME15abtCuB5+2U2KRZcO66rZO0iz0NxYaGoSKqkJ03Wjc5ZC+DLhmWwxGFghsg==');
define('LOGGED_IN_KEY',    'oMe5ge5V1+HOG9MYf9eonwwF0lhhTZBtWJnqghwWJtcX/2Ey0z3w/CwhNktpRnoSBQLUlH7g9pzll2B1wSibew==');
define('NONCE_KEY',        'xTZN/Bx7PSTRJ3YmsCodWfDx/3Z6IKnbOA65hAJ4sl3J1aKz87BpzarzlMiFx3pZiHfBBwUou3/6OwqZTGn2IA==');
define('AUTH_SALT',        'uIkeI8Z2w3JD+EkZUN5+ZS7WQi7mQB3xSYd8jBLWjUKXRFeOLtOfwNbD/Fq/P4kJZgjvB1ziJm4po4ei9nVWUQ==');
define('SECURE_AUTH_SALT', 'ovOmCxQggLLegQYmCKaUGrH8MwMaKQN1dCb+aEeHSFNjjVPNiYh7lmuOfiBi7VIwqa7G2NxcKjjlkUEmgSTtqQ==');
define('LOGGED_IN_SALT',   'd6UeGlVWfrSKkwyBiYrdBKNso37KOoh4DQKnBHtsybJ5rOpDVjB54nGpXFQgv5d1rtOdRPFMepw0tfx8mWs6GQ==');
define('NONCE_SALT',       'IAC5qkAHXjLugtajm0xi7SZ0o92sX/f2IGTpaY/NhWtAvxTwFDgWxxZZihIc3M9bh8Yc/HEQ8AZg5dCJxWS/Zg==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';





/* Inserted by Local by Flywheel. See: http://codex.wordpress.org/Administration_Over_SSL#Using_a_Reverse_Proxy */
if ( isset( $_SERVER['HTTP_X_FORWARDED_PROTO'] ) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https' ) {
	$_SERVER['HTTPS'] = 'on';
}

/* Inserted by Local by Flywheel. Fixes $is_nginx global for rewrites. */
if ( ! empty( $_SERVER['SERVER_SOFTWARE'] ) && strpos( $_SERVER['SERVER_SOFTWARE'], 'Flywheel/' ) !== false ) {
	$_SERVER['SERVER_SOFTWARE'] = 'nginx/1.10.1';
}
/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
