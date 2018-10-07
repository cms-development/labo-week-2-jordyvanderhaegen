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
define('DB_NAME', 'cms-db');

/** MySQL database username */
define('DB_USER', 'cms-user');

/** MySQL database password */
define('DB_PASSWORD', 'cms-pass');

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
define('AUTH_KEY',         'Kwl]NQfTvslDuqau.9|e4e.e/Mnt&F6Dav:2{9R((CN=qosu`R|[}~>EB;d<}C>|');
define('SECURE_AUTH_KEY',  '2+K.W>QVi[Zs&NUdVie[(6y_sXcSvY?RzaCWq]:9sh^j?`lD^6$n8;8{6N(pw{7o');
define('LOGGED_IN_KEY',    'Nw/]QGp+,CE51P|JTo~|o{$f`E=h)Xa0.VLJ-Q+GxwxY;NkHl^O!Rsbd<}e||~=^');
define('NONCE_KEY',        'b,U(`-I0IDVy50Eg>6_EWr.<SM6<dGK}[{ukFHU_0_c:,p6)~?kz!C;wag~)pgYK');
define('AUTH_SALT',        '{u|TU)hJhE9YVGetFoDuCF)Y/w8w&_JJ=1qWanV{Q.:-dV9q@Cl|HJFj7)5KS#G7');
define('SECURE_AUTH_SALT', '~lIh{u8&(Y+r`=&QYA;S#[aE?>T0D8f8eJ@Y5qg_XaWFhC!V&rDLm7TJTj,x7?!Y');
define('LOGGED_IN_SALT',   'k/a2E>pp4=/7C0?)`8Wc#*8O|2gH$|}#ab.6ZDKcWlQ,wjL >w?5@2#GWmby%|bQ');
define('NONCE_SALT',       'K#;St7|(-;/N5(=vPcgle[GJT[?9O1wHX|+x![oN&N#12[{Og8!=1{G`N.oM=2a0');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

/** Enable content perms */
define('FS_METHOD', 'direct');
