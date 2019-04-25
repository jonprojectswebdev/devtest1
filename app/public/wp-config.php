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
define('AUTH_KEY',         'thoKI2an0Mrp7Iaruc4ULLRcTHiY4N2Pd9Pl7Sg8UONBxJrJdEU9j0XKegFWsy8AHTnQvx5TIl4ZjN+vwEK0qA==');
define('SECURE_AUTH_KEY',  'JV1/w0nEgZkhwH69I+SyIcS97LB+PGcDoG+997K+2YW+I3WUgfu8kAedh2xJqSN6flCy/X7bR2UTHK4Ig7/0UQ==');
define('LOGGED_IN_KEY',    'VWJz2YIsLplLuCQJtfoGaykTG7EMfdyOdsnyF9UUD3IOOOsO21WhsAyfACMCKuv6KFdXr3lTMCeVltcFJ1XeiA==');
define('NONCE_KEY',        '95ZWVCa+0sRqs+qlNWWy1fwRMtg/vv/E/fqzJNNvUcy+oW6TsTED3+Cv5QJdss9YO6IRc79nMEikYK2n8qmq8g==');
define('AUTH_SALT',        'rjiksN7ayxCg8HQAhZ4Cnl+oA+4bHxdVFZmzsxycCnPR/CUVkNGhXW+bPpn75baLeTqFRXziB36HHDUd+dyhwg==');
define('SECURE_AUTH_SALT', 'zxNf989UHotKP4Pkm79rO/9GS7pMZZI3xDhVqfbimwqmhxjdyPfhBilTB2d5yUSOknLLu1Vk0vSQBOyUMaBSoA==');
define('LOGGED_IN_SALT',   'nXRtHCwoIbG9WKr0vYTo8R7YWRIpLux6SsTJGbiSXp9huwn62BUkfIcrKeWnqA3KO5p8lk7x/V3cEBEIPulPdg==');
define('NONCE_SALT',       'ChoE60yDc3q7ujmvHv8YMNnmnyYMZR9BGIxL3nqaf36jvuVIOwAEj+WYdPf+0XFVM27+Jr50s0q5n1O3QgIknw==');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
