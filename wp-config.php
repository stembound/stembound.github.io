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
define( 'DB_NAME', 'sbmf_db' );

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
define( 'AUTH_KEY',         '/-b~ !8npz^2s>@96[pQFV.Uqe]yv)8-I)ayoOe@zb_gvr>8|{?3QhTEDkq~-lMk' );
define( 'SECURE_AUTH_KEY',  'bwoD DLD5pKBm:5{/Ez.sARhi@0d$03M@{<T QUI1C[_%O.T>)gY!9nsR)} n#]j' );
define( 'LOGGED_IN_KEY',    '?W;jHFo;(y+k|W?rssrBe7JYvwow4.=+%2u|n;)iRzIF|GXhQ,mBY/YKkd%qG[Z^' );
define( 'NONCE_KEY',        '1ygN?L3.;8r7S[gDF%6HI[5_T3YzMu/Too:{>0)5-RTg!2&8,HkohgW@<qpe=YJ*' );
define( 'AUTH_SALT',        'pcFBt.X<z-22VA+=,$@]&3rHFs]E+QtP6<:{cz+;moP1DlE8xrv9pRQ(bZWEY1 3' );
define( 'SECURE_AUTH_SALT', '~{5{3[ydHb~IEOTiL?tK!Vg*H<~1Q.&45!&x*3tM~p0h}D~._64-:{moR2l6=?PS' );
define( 'LOGGED_IN_SALT',   'd]+@6rX^bzG7XfbWa([4L72nGWhBRkM$*S8+@(E%.j#qZ]:)^(O_>AW|rkh%Dnad' );
define( 'NONCE_SALT',       '{<3RY-B4NS3LAex:PaVNs[>=tv#d_sRg?Pa EhI0qGrvdA@7^h2A5!D$ebLz@O6v' );

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
