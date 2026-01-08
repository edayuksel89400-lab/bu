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
define( 'DB_NAME', 'bu' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         ',?drrDUUX xxzoHCU^O$Lp-l#qdf+8c7::)t7w$-Ed9mxKQ:vj=VZ<1use-p@qb]' );
define( 'SECURE_AUTH_KEY',  'ZdYo^}Pn6X^q,?fS(;U= >=wN=jagWm)-d,0vn(j[jQL}CY:a`..x}6+iVj06s;!' );
define( 'LOGGED_IN_KEY',    'CuX^mG*,5S(?wjmkASa:$]ef&%RLf)_+vr.}f9:8J[_sVcwB.L|v#h_h1&TN iS6' );
define( 'NONCE_KEY',        '$V||Ev#f[:(K^n4<vdclE/@X<^qQu=?vn<>tA+@9DbnFd{!?PaZ57 rLJd)QV[`]' );
define( 'AUTH_SALT',        ';xxI4PQMO1dNyB-,lLw4>4KXhL4,9wu561r;RNA+U(7YS$=xw6]b:W5*`U}Rv.Ol' );
define( 'SECURE_AUTH_SALT', '|&9:f0.HkqG;$|?]ZOc:w%^xI!fuNL+|>^>|J5(b4![Wz8.w&g}v~vfi.#Jb4`I@' );
define( 'LOGGED_IN_SALT',   '|QSPkS]$Fz2r$86Ct.,9c o;YW[?E{l2ztnU8bPBCrqH<=Ka;Qg094Daa:N*/7=4' );
define( 'NONCE_SALT',       'br>Zt3LSTT9h2>cDe$tDX{hME-vgBKf/,a]Z.v0F.E=@z$}0I5tdzW3JHM%uW3x8' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
