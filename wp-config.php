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
define( 'DB_NAME', 'i10045413_lrbw1' );

/** Database username */
define( 'DB_USER', 'i10045413_lrbw1' );

/** Database password */
define( 'DB_PASSWORD', 'Z.uoRPPi2WCGwb1EjuU47' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',         'vloTrBQZLw0ruEoFGKY4pbv1naiWN3PighFa1u8h4Qmt5RjEZRNlP0pIcQnciMhx');
define('SECURE_AUTH_KEY',  'oHH7FWvZwrBVLtDmxR95K6NGcTNkxmuyixwuXTGFX11FqKqd7RmyD2MLcc7hLe8U');
define('LOGGED_IN_KEY',    'hhCt34BaBdVuQEVSJrqAHyfflyoDzOTERXOgdbqctTm4Z0LLYSJEkMop9xkhgOTk');
define('NONCE_KEY',        'ImGrIvrvMQSaxIEBPwP96HjqDm2atLOV6jeQN3WNeEbj3gf3cHbAhMhsxCo2aBv8');
define('AUTH_SALT',        'pOiit30It6qmcpIynKGmomau8aCcdjXQv7PJixv5OTPOJxfi86p1jGtspc1qMDDc');
define('SECURE_AUTH_SALT', 'isZbbl5q0Fe9cS3q3s7cp38R4S3gwl9CLaxkED0PvaI76BWMR9lvDvu9VJA5CQSn');
define('LOGGED_IN_SALT',   'Nc96PHWvmHoAtliDkKATQKehlCMK99pDPUxhW7cbZoHvaDDW2Bch38IXVSo9Ng3o');
define('NONCE_SALT',       'PJQxJT2PDsl5BFZyuMzFUdZPlZfYs9L7kOKoCsbvthYhr6EW3t1aYoruFzuU4uIV');

/**
 * Other customizations.
 */
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'rgak_';

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
