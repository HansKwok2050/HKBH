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
define( 'DB_NAME', 'quicku6p_wp415' );

/** Database username */
define( 'DB_USER', 'quicku6p_wp415' );

/** Database password */
define( 'DB_PASSWORD', 'p[2.X8WS6R' );

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
define( 'AUTH_KEY',         'x182rczpntqwo6cwhfla78u7oe6wa2o1geuforx5ewvmlfqqo5nzdvxsrsmyuhob' );
define( 'SECURE_AUTH_KEY',  'mpafmrr3vwtrqwds5lskjawqfllj3dg0bfqknjrusuhflao0nigp5dqelgfsee65' );
define( 'LOGGED_IN_KEY',    '2vlf3sv3zki15flnwdiqyeyg8tyrkqby7fquhrys2k5msikvxva1jn8g8qhqqtkh' );
define( 'NONCE_KEY',        'yhyz5nb8bqqas8ctpwcsvvuc0hma5xb4irec1zcg7s51zscpulswqkhovg58jhbe' );
define( 'AUTH_SALT',        'h0eibac9so4ctncfvjrsa0nx4o7jcyro1tyocuczijrl4kprp6zwq8owdbi2fevc' );
define( 'SECURE_AUTH_SALT', 'ma7dedmcsngi5syaapb2n1nf4gvhx5tlzsbbjdyc7q8hnmchtljzkqvuadiyyqy8' );
define( 'LOGGED_IN_SALT',   'zns3suh2etrd8nhgoybyapafvrkjdrfkl4nig4m97xstibdvcu3ljctspkngdko3' );
define( 'NONCE_SALT',       'ah8wvcjod0ueprjdiqjmgr1okfqqoaehd5syayr3mixxjuhacsolu4blrphheoqv' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpmf_';

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

/* Memory Limit */
define('WP_MEMORY_LIMIT', '256M');
define('WP_MAX_MEMORY_LIMIT', '512M');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
