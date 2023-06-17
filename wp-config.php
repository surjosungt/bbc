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
define( 'DB_NAME', 'bbc' );

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
define( 'AUTH_KEY',         '5ph*M,?UcUE9:`w}(od0GIR`Al Q^d18uduQD^I)sK~r(X;&)VE>BVhIPp9OEOCe' );
define( 'SECURE_AUTH_KEY',  'H<GHxT)G1@:-;BF%<0bvsy$^HI<kvFr4XY}~GL1o>h(A{j*/ue`Zd6]y^^WLyAE2' );
define( 'LOGGED_IN_KEY',    'P.okv>nje<.`H/2C&A0TB|oz|]/D~#n&;vSQ[` [KZ:5&&.)4ZzLH,E%_zhjPfES' );
define( 'NONCE_KEY',        'U@Gr0eR+x`oPF%(b.[bTY>vYB)^ikYo%/s4Wx,yZ4Y`cA #_b73zx)NY%]KQjj0t' );
define( 'AUTH_SALT',        'Q*fWfj]zObyP7rK4]R6M9DV e8~rh&a>~FqGkxMjIU,g:BsIzByM!b%Hp}RZHbYt' );
define( 'SECURE_AUTH_SALT', 'H]]NFjWc5{vClNIKs,VFar{y<e}}Jp!pT5VZzpC5L88Gj,fQ7XwnC6kDBI)K1QiK' );
define( 'LOGGED_IN_SALT',   '&A&?eQHJ}v;vSe^ULT[pz7Tp(rEkk63]fJ2 R,x1Lr~-n%i{yOLWh/1?8r5e1.?C' );
define( 'NONCE_SALT',       '=QEL^/~E($AQ?b%>Se-yL{J09qK+!:1b5?||4:c}(f+jofSvT[xCO%=i{ZJ}M6pP' );

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
