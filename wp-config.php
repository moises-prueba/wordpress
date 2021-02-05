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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wordpress' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wordpress' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'r:}/NN:h|5@*v?S0cXaj({S9]Tqzn+Ucb!1qI;O=}71IH~`%zS8W~; GX{~bc6B&' );
define( 'SECURE_AUTH_KEY',  'Vg0.eMnIfM@C[eszW*eW#|4G$jiKPjxEk:GmXkuSR6:GO)]=D&{ S^j)8Ia6(;eL' );
define( 'LOGGED_IN_KEY',    'QCQ^i9^N/KL}fLN98me3{TUwV$;OBZD!d>(QE>|4rSa[.ZgH$z5VluS5t~-B^N .' );
define( 'NONCE_KEY',        'J3QQZ}_F5~QyNBhSc(C*wW5tJS09ev!?C]cb).!?8- 8yc;7)jo*3WAewZO_Ogo,' );
define( 'AUTH_SALT',        'sv#YepEQ;X3 :I>K.].j68I1SA#/bDfd-4Pa4FcHt<A92C Y0UWL.FU@d?J*O**l' );
define( 'SECURE_AUTH_SALT', 'VPf2sSilP;0*|.j_Do$zRa5pQ{QyTt>!9Y)M~KLS<hUl%Hp{;,kb!_EM|*HHBEue' );
define( 'LOGGED_IN_SALT',   '2:V5W&r{cdxBZpe%?:f1b2Qulp73wB-7/D%[l?1nQPIEA<um!T*=&B;R&Kb{x#`]' );
define( 'NONCE_SALT',       'r3d$4]`I_DTLYTw/1QnCn>Y/1lI! -{E*Cffu E~{ :tfSO>7GHq1[spzF;0(Okq' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
