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
define('DB_NAME', 'wpbacth-03');

/** Database username */
define('DB_USER', 'root');

/** Database password */
define('DB_PASSWORD', '');

/** Database hostname */
define('DB_HOST', 'localhost');

/** Database charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The database collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

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
define('AUTH_KEY',         'DNv]_3 qKNKeTr:C}(OJ{0k2x4cszvVx&q8Hxa,GN.;FIu7}5bDS}P:!=V?x_@Kj');
define('SECURE_AUTH_KEY',  'NogT3$tLkuQTV(GFdgc<6.i[RO*zE<]&lTVJ CN0yv`-2%YTzC3thE:XdBAq^Ro8');
define('LOGGED_IN_KEY',    'aNQ?D#S)q.{%Q8b%YNy~TsLUTA&`uVDcUJ{r]L:KHV%rL0p)wXauiIa@|*j0E_?*');
define('NONCE_KEY',        'LP5zg#*_]Nmwe-Z3e?H.Zx!PKt~)[!~rZ2Dk|COFE]T{g0j$ETE.E48~UH(|DI;f');
define('AUTH_SALT',        'Hm`Fq):C8# a9Iri0n?b.zL/nbBG%N{.4_x$zl>R&IVo/$bg+%V0;x51|,~YP5Ee');
define('SECURE_AUTH_SALT', 'q8gj3$Sh8,)}snDj6mn0lCw0MoOEB(MTlM^m0yf @7j:;ml%2-?MCeI9VY&xI-z4');
define('LOGGED_IN_SALT',   'j^X5F!XTkG5&/kj0u[Do!|^Mg</_~^J2U0;%SCzF$f#x#V>}~pmkipo7X, h~9By');
define('NONCE_SALT',       'Cm&spB`V;YTbSNNsU.p&%g?iwe@Z?`_Mn4{dQ{[&s,A3{5{dNzt2l kUVeuVEhX]');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
 */
$table_prefix = 'wp_';

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
define('WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if (! defined('ABSPATH')) {
	define('ABSPATH', __DIR__ . '/');
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
