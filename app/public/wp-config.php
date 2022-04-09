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
define('AUTH_KEY',         'n3cyNq2qJlS2c/lNwwbDzK8uB0i6eAPNv0leWa6qcgbDJrEkAvlVTVtf8EB7KxoxXZJz3fyKxN9G/C9ezw43UA==');
define('SECURE_AUTH_KEY',  'MoF4ICb0CYnSGQjVxNEqsivzd7B9NQmHHu1ppo+8aPbiHi5ev5qVgokQJywSBbT7LArvhnl9ZLoCjUzTKyYJoA==');
define('LOGGED_IN_KEY',    'OYKOG8Ctw3zAMwhVbQjUKpmQOJ/TOA38pKo0FXlsF3koWEJ7+vpyv78Nqt62URur90CBkhacw4k6Ihfksdf9Gg==');
define('NONCE_KEY',        '4BzRSKjjLAu9+g39AqFsPYBhhc9eqI5kDLoFbkHQCS3l46e6qZh+uYyAYR5p74qNIkDQpHVPq3hqRQh9Ci4cWg==');
define('AUTH_SALT',        '4Lal9ObyfMd/VoQp4NFu+h/ACddwSQs8b2XtH9Zpl//25UQbAiUQs6eTH8WEJBPek3uHqhbFqaiNl1SgFIxwhQ==');
define('SECURE_AUTH_SALT', 'GxTb1/PVNVSWyxA4zAkmmgIaFuRyTtLKcwnzleQoysh4yzf4QbmUhu9hPvOAIXqgcACglBHNcID0I0fGtHPEFw==');
define('LOGGED_IN_SALT',   'O8LUAPyymCNIXQ9BKF+FjZTGekCYSf+OyDiHI+OYm+W9LqbcRlK4ipaU6iRu9aV46ISHiEd7qBNOWWdfX17cfw==');
define('NONCE_SALT',       'rDJAEPQ8RC/7LN0jvILeMJQ4Wyhzzf6BhQYptEQgShsA1KBflkjZxX+e76h9zGRx+nWzHy7ZtF5A04wKK2c2uQ==');

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
