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
define('AUTH_KEY',         '6+0TnVA7OjgXDBIImumiR/fwSiTAAPUsqCxt7EN/X5Ix9kFSk4QkwDiPKlY/4MubFJYV8I6Rh+MCE6/R2a/DEA==');
define('SECURE_AUTH_KEY',  'WF6lZzZtMBVE5TC6lWRo1GwR27AMkUmuBZhYx16cGH7hr1Uf2D2n7b5GnwZ8gu6W98iOUS9L9L4wmfFBbyP3/Q==');
define('LOGGED_IN_KEY',    'vqYiBYw2/30z8t+133i2owDdiNtNhHlG6h/rZH97NdEjTbbMTpwe0nG9kQLUtTzqyUhGWFnauCDAIrO8VN5weA==');
define('NONCE_KEY',        'IDh1s/df163MBG9vnT3cI9QT1O5Ovt9c/5kvy9yCi9wBBMRvmepUg9QzKnW4ew6VgXHKCCN5nA8i/XT/Pm6a1w==');
define('AUTH_SALT',        'MdA2Ft+mDC764gNGXCJopoBmWD9SNMzYC7/DWLEK95kiwRvXabk1tI+20ImeJGMtmlrlLNDmbmG0ikaTZpjZXA==');
define('SECURE_AUTH_SALT', '4DmwMKGTFQa7GW6+tKNoGG/Hna/Gnf087AD5yEot7WQs4M8c/vqJWpHq5nmqxvjeWj7iiVkz8zO8A300ZiU/vw==');
define('LOGGED_IN_SALT',   'pAenZ+t7X/xWxxwLXHUmhXskPOvcNrLusysV5+hEnTRMvR5ost/K/GnaJ7GgmWQQszfq09ImNsGaSqw32soJOw==');
define('NONCE_SALT',       'idCR6ncXMIFRdG7VVvK2H5qw+zeeKS0yqoy80BvdJFXj6BeKSP/qh4guFpMcK1nVPvekN/vL7xi5KWT03vBxEA==');

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
