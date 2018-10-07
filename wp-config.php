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
define('DB_NAME', 'cmsdev-db');

/** MySQL database username */
define('DB_USER', 'cmsdev-user');

/** MySQL database password */
define('DB_PASSWORD', 'cmsdev-pass');

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
define('AUTH_KEY',         'WYx$P4qm?MPZ2ashTG,RwX~GI^.Qa`C}tG7*1BnBM*inHa`-8/7>Y$T^K;:e>8=:');
define('SECURE_AUTH_KEY',  'D lClR$m3EVd4G)n)(ap=J%(Bo~xc)DIg&{&^/nUaaP|?:7R_+_^MqKs|fXJ-55u');
define('LOGGED_IN_KEY',    'oG6Xaig2ZN %_9,RlHZ-Nwr[_!x_1FYf:  +;tO`le`^yX@_Ha1=9+[b;_)T~Mip');
define('NONCE_KEY',        '`@k;oBUwvmrM;?V`YaKJdP]0)~m3Gp),5iJTD/5m^M`zx_/gqKp^P?GKrvJHRnI?');
define('AUTH_SALT',        'u1m%rj{6pqxTQRoTKBODm=)B/}Ao0q(L+(PK+j[E%Atl75LbG]18BLNPAA~Rad}a');
define('SECURE_AUTH_SALT', ':i.a3IS}3 |8tYUgICh`~TaFJ,^*q1A&xd00lBW4rsqUF7TOX}iuS:oP2ybxjju6');
define('LOGGED_IN_SALT',   'G!5jlp%g;s-X9ZQ1 Gqb=Q;Z!`?!f<#3/G>eu@eNyfor&##x6%|PzzqkSz5F=%L^');
define('NONCE_SALT',       'cj@sXGs7I,bvoTQ4CU0OmcE_OR%D8KY]RRf:bxS%Dh0A8^tJGj-qj{(1C4h>~wTI');

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

define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
