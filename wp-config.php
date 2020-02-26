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


// define('SAVEQUERIES', true);


// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', "cif_local");

/** MySQL database username */
define('DB_USER', "root");

/** MySQL database password */
define('DB_PASSWORD', "");

/** MySQL hostname */
define('DB_HOST', "localhost:3306");

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
define('AUTH_KEY',         'e1pzwpvtseewcagw25cum9xxvgkok5iusex1lcbjajsosxhnvsc4eurlc5yxy56l');
define('SECURE_AUTH_KEY',  'ehsfw9w1az7khv3ocfxtalrws9zzcw6g3axafjibsb5bucpkioelk10uzrlivenu');
define('LOGGED_IN_KEY',    'yjbsvt9ajug6tjkpn5weukqmorandnfbpgmtwgwf32xovfrr8pdhvld08n9pu6x0');
define('NONCE_KEY',        'wt7vsaxw1xwkfjrcapuw2znaugufm5vxj8mgaiawnwi8y2fuui8ysxtvqsynwwme');
define('AUTH_SALT',        'gk7wxry4q1tkx0kozikhw2eq89jtc5jzi0ujocrdefvdunmsz6dzl6cjxbir7pie');
define('SECURE_AUTH_SALT', 'tabnhke48dc0z8o2aohb1blu59npc7pme1x7ffkbhmdqpwcb76g9fnoaceemxugk');
define('LOGGED_IN_SALT',   'ju0ecwxg9iv8icvtf385zhren84akko7m6ud5r82atgsodvc5pco6uvfb6q6skx3');
define('NONCE_SALT',       'jgyvokrloqeithijlfderjfrbsuvvbuarkfhxh8wwwfnhnrz4xfl4te58szrdtof');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wpwd_';

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
