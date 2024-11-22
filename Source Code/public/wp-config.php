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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define('AUTH_KEY',         'UIJv0i5XQ52ismSSxv2Pumq8p3/M55rKCrJur7REwcS+PGH7Svu+5qRI7hu/XnCG95SRMfWJXT85XZMFyi/gGQ==');
define('SECURE_AUTH_KEY',  't4RnDyXcDdMCi5y5gnNrnc1OHUH6pdp+ZaZEXV5cmpmmEiv+qLF0HX9eBIfnhF/rSIlEmg9p8T9OsVAZjDq50A==');
define('LOGGED_IN_KEY',    'B3CU7AX3EVHzUHnKqgxxjYYb/BlgsasaXHnWxT7c3D7XW5PI2IGrR/Fr9gd8SrGXsjOvDArUkIqIc/CCs7mOww==');
define('NONCE_KEY',        'JLYcTtI7ZOs9kntZKEUnupgS7SO3zv3KFLCfaN99UqdanH3dEla4n94pN0G+gsxXwQ88YdC4PYgP/nT7Q7LqSw==');
define('AUTH_SALT',        '0jhEwgDBVUNBhOrP90ZN41x9En4d60Nun3a6gjSpDy9mPry7Ji50Ve2GfLy8nuI4l9BixLo07fRLh38WkztT0A==');
define('SECURE_AUTH_SALT', 'tVSWwqilVMYLPUFhzIKTKmI64zC4L6fnxkueaLvaB4UQU/SjXUC6kIHbuyZYZLC9E/CHuU4U1VHNa9G9jpYgWw==');
define('LOGGED_IN_SALT',   '1V0tUJ4a80eVyyz+hZ45ix3c1DbJfbh6TM4K8ha2UzZvI/xVIA/Uknsb3GI21YA1Fpm4EFZyL3DkXjqloi6/VQ==');
define('NONCE_SALT',       'uhaN+UpudcodES0acIqtujA0PiMd074vDFqgYZUFPqXd4wTbsUmfxxpRVPab85wrKuxykbKid5so2yH+luO0Gw==');


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
