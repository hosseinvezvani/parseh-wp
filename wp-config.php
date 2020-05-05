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
define( 'DB_NAME', 'parsehvez' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'cly@J^z?ZQ-t{&2]]|D5[:~!jG|ypzIg<MSr!$Tp|0eG/v9GQ,xrG(T-,3*,Hbn4' );
define( 'SECURE_AUTH_KEY',  'ce=Jfmpp2O*d=p/i5e6lKfB{{R:``R-v|&Pe)_<.$jmSgz,aCObBa?%GW,n$ jS}' );
define( 'LOGGED_IN_KEY',    '9[z:?B^5>PKa(wZ^2Zi]M&az!,I{`U~ xJ+=5D<kuE[s~(&%xW&= 4$qUw~Nng&l' );
define( 'NONCE_KEY',        'HA1%iTaD$1;+kR,vR]YLU/Fq|2&t0d}_&BOhY}fH]hD%>|{u/PTT<Mvo5O2!Qcgu' );
define( 'AUTH_SALT',        'FC,KMbt51%]cVi+-Fuo$cs{=4_qzkNk]wjU*#m!<Kas*SD:b,~/Q/H>)m(g{$X.r' );
define( 'SECURE_AUTH_SALT', '!l7t75i3601lo9 JN;b+Ma+>>= %Gmp;]cZ1?UXJxUf7 j*iCwTH$|E~mv]~*H$M' );
define( 'LOGGED_IN_SALT',   '+mH#I{eO#Bpv,EJiO@,>y+EY$kf&P;g}),Iet4EF:x>>]2m<HB47&3>xo.iaA{~0' );
define( 'NONCE_SALT',       '?)~6P@._lp+_by6G2HZy-C soUf9k[d|x1OiGD}=QD5y_M9~V MR8CQurj#kxQiR' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpVp_';

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
