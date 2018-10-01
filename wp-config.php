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
define('DB_NAME', 'i5081720_wp1');

/** MySQL database username */
define('DB_USER', 'i5081720_wp1');

/** MySQL database password */
define('DB_PASSWORD', 'G.sGWvXz7k0dScuF1PW84');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '74KO2kKggIKick6SoIdKNqQ6aEJXXk9Qa8oM7drBYHXuICQeUr3SQh8oKgACQ3bQ');
define('SECURE_AUTH_KEY',  'AIJE7ST4Qk3b1MYZSolV2aV4eql9I4PLPqv1ypR2ny8ttr6xVLotuqclH2TKlip3');
define('LOGGED_IN_KEY',    '19j0KVqokvWmcpzVUc2P6b93oz1kMB95ugrzLRVdFHq3LnMJC3mS926M5J8yd3CK');
define('NONCE_KEY',        'OtR2HegoS8yG9Mt2Af0HPvoNMdzEsij3zWR2EYnahLAFlSJWjDIOOcHsOc2lN2mY');
define('AUTH_SALT',        'HL74GY96NKBkLGDmzzNLEPuFr2HxZebjvmcJbuiseKQfuACdSSuH7gtRY8leRkQc');
define('SECURE_AUTH_SALT', '8h7FPTPnxzLsWqJA25jAA6BWMG4FvGpZ2fPEv0jcYM7fA7A1yqMqFJVYcKakvqOl');
define('LOGGED_IN_SALT',   'M9PcPQU01EH53lTYDBNd2cAYP0cFgHBxS5IzVyMyDQdLoZKQyAdYaOybR43K6dc1');
define('NONCE_SALT',       'Hypc8Af61NguGxyB11Miz5A6vgVXjnTYdgCe8lK1jHr2s1eKHGVOQZKrz4lOd47B');

/**
 * Other customizations.
 */
define('FS_METHOD','direct');define('FS_CHMOD_DIR',0755);define('FS_CHMOD_FILE',0644);
define('WP_TEMP_DIR',dirname(__FILE__).'/wp-content/uploads');

/**
 * Turn off automatic updates since these are managed upstream.
 */
define('AUTOMATIC_UPDATER_DISABLED', true);


/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
