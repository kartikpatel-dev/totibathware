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
define( 'DB_NAME', 'totibath' );

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
define( 'AUTH_KEY',         'g3Niq^j-^dj--PtB~;V;+9-Ks6mj|Q*]3iQ;[s<~;xt#=(!w>Qn&_j_D$/rz3Su;' );
define( 'SECURE_AUTH_KEY',  '@=Fp%gI^r4BMPXilwR%f@Q <7B=h?$l5v++^r*2*G^{WbKxThvB3iT9}FZq&hx6a' );
define( 'LOGGED_IN_KEY',    'tN>2J*v`Uv[l_ k[j{fiVHl|4QmL2*XT}HBiQrhJ4[4#,Wb?5lvDzlT|DvM<?vjP' );
define( 'NONCE_KEY',        'MX9gZiw7 !OuilE*7j.]PG[B[|/dl%Z[t{qY_lz=q6^3>=>JW(g_>Y0J0ZfptqKM' );
define( 'AUTH_SALT',        '33]qmQA%e1;+3J%vsSJD jm#jGQzVkJFY(n{K<rS$UcSf>)xCc@F&;zG6|w#%{M ' );
define( 'SECURE_AUTH_SALT', 'Rv%UlqU=/3wH~)GC-6%*UQ3:NrxRHPjXa9>eOo4gJqcp.}0AbyC@Aog@2?E%Dz^1' );
define( 'LOGGED_IN_SALT',   'H#BaJ4i?@m;n[CIOI[v@}2! ZYF0|Wj/nxgQbwK!EQaV*XHA~v+T+xiIed.Gssb{' );
define( 'NONCE_SALT',       '&9Z%0{qWj2y&to>S[+El Yd1cI-Z`9?3sV656{`nPc4;yzUbcZ)0QhJnAAUPh;T+' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpdb_';

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



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
