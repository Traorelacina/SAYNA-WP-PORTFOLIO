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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'Xgr@5F{xxrMwyg:%g-kwgCy_@q(`1VkJOho$6ve>};;$eV<7Kf}q;t+ls)XaV;e:' );
define( 'SECURE_AUTH_KEY',   'C8A;C4&^Ly1nH1=qMJwA}fdet5hb/;cf|7K#=EiB9yeG@k+=kjX1>8Pf-/o):Yc ' );
define( 'LOGGED_IN_KEY',     '  S,<VxlBuXR>s62il>~U)p .<r/}c382g6I#y}4qi{*NP&([q*7O;r( `Nq0Zs{' );
define( 'NONCE_KEY',         '#J2JF;JeI1V^t^3 %`6T|y*l:}Az;O+ztU7OBRfW4Bwt]>?!%M&E_PAofq~m&~j=' );
define( 'AUTH_SALT',         '+om[#|*c<~Trvw|h(y9C=9qf90phy#/|=r{j=|w&;X(?b^RR`_p&n.?^zESqC)QR' );
define( 'SECURE_AUTH_SALT',  'b%pxOJJ+Ij{vb&,n=cr03(F6T@IL$9t!P)[iJw*2U0nBtTyho84*r`d}:2POhOjV' );
define( 'LOGGED_IN_SALT',    'AwI<I0Lhs2e)!kpGtrJ+!z+4+m98lnJ~u~|*sDU(|Smb2.0`RUuJ%Tk^5U1xERw8' );
define( 'NONCE_SALT',        ')6y: 9bqeQ*TTFA;qm1r+luJxGs|YP,b^52peuoqHlxHQ0?]*c4[m,2d$^%)emt{' );
define( 'WP_CACHE_KEY_SALT', '{ o@>i.YA*]`4.d!]z&>hN`NRzMk5vaJ.kk.C((*_.[JF?lU1qnH{[Y/l?Z&u6GF' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
