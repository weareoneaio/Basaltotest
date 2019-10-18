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
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/home2/casabasalto/public_html/wp-content/plugins/wp-super-cache/' );
define('DB_NAME', 'casabasa_wp725');

/** MySQL database username */
define('DB_USER', 'casabasa_wp725');

/** MySQL database password */
define('DB_PASSWORD', 'S91O35)7p]');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         'nindt3zhwpp3d7ptkyw56earkg3rby4a2zobhprq5sn7kpqnelmyz80e1epjoyyn');
define('SECURE_AUTH_KEY',  'o34f8h8atobxogszspy9qqjbu8yl6fkwaqqq7f5tnzslxq2nxbrrhfsn7pi02msu');
define('LOGGED_IN_KEY',    'm8vyovtsr5svzkcm9nn9amtengo28czpw6cvglgyac8uxcpoumfggpftskxj0qb2');
define('NONCE_KEY',        'tasimkrcs51mytzqov67urlchrhjcrx64mih0s926yyz1n1nrtrzlvcpmvefl1yk');
define('AUTH_SALT',        'cn9hofyf4tkg0n5qvj3dtppt1nwboj4xfvxfvlhzltvx2x2zcqbhhigktxzyrfge');
define('SECURE_AUTH_SALT', 'zb6nnqt4fpyzo7yroxruo0u6zl3o2r9hgqpj0qunsxwmmyqrfpn2ala5icjdcgeg');
define('LOGGED_IN_SALT',   'mi2qk6gh1kj4gt3061rafqagtxwfemo6kbotjongpgaa4x5cms5otd9rdwg1pwkl');
define('NONCE_SALT',       'xja9gjqyy6a9mqyfc9tmp64nglzo302l797mydp0ugpxijpqdr2fojjiqsfimt41');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpux_';

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
