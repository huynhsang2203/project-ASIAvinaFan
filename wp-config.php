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
define( 'DB_NAME', 'asiavinafans' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
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
define( 'AUTH_KEY',         '6+ua^&SX4&=27?_30`;VwAjwPL]C>h[bZdrzMJr[,azB[~QkkM<5K6E4O=26bM]c' );
define( 'SECURE_AUTH_KEY',  '7Wcl}$oU,vI=rg8I{X,vt^.n9mo,4jXYjiL-9YI]ChM0>Uv_o$dxkNN,EF1EZON4' );
define( 'LOGGED_IN_KEY',    '7xbwgj)F/EyV8KRJfeB/<Apx2T2r2iW]`d.Oj*XF!C*M|G]?O4xfGAP?C;X<i`ks' );
define( 'NONCE_KEY',        '*j}B3E3$N^~:P/?vHt2%juy%F2j{Pt[yaBli%kW9Q?lJ53_N!)wE&GNTK,K P)V&' );
define( 'AUTH_SALT',        '#+IM#uHVg4VR9d7zp=LFb-ZSK [IeT~7##xSf#z7cm(Pk(?tF4]Pp94a5zSSwWKt' );
define( 'SECURE_AUTH_SALT', '3oR?sfe#LP4aJ:#1*:a*+<xBf1$^SLdzy<p&s/C9Sx>Q;s~~*`)Zu4f*#SwVL]H_' );
define( 'LOGGED_IN_SALT',   ']}m#>4KO|]aGs9RKfU1}i%rR1tv:pey*VfYn@c$u6R$,foFU6ny1e&Q+l2{GGu00' );
define( 'NONCE_SALT',       'zn/}lNn0</eV:*dbO%&o(+r _GHUr6*1oo/>/DTT>k]%,R^~uL[J1DTV*i5N6DCV' );

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
