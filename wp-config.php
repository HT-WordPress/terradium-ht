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
define( 'AUTH_KEY',          '^8wHg,9x7Nyj5l+TD[}{k&aizV im)Csz)d)nJQn$)eCig:G?PsIs+G8!7rEs7SE' );
define( 'SECURE_AUTH_KEY',   '59__i39e.[%l]?arMz>@rqRh<hP3 8JcHU=Az)GU^y0x+u5hX.v*K4APmTPGpR[W' );
define( 'LOGGED_IN_KEY',     'FBJWN!aAL>-*A~s>9iIm% 4Ol8w7p]?r+pTn#@oNDh0CT[b|FGt^##1/[?^ACcU0' );
define( 'NONCE_KEY',         'g4Pj*FD<85:8k(]o2=E5a3@a}vPc|y%MzbUL7ojipsT$c$pL>bu)DPtT%$3Xv81Y' );
define( 'AUTH_SALT',         'ROvzL.G,2jTtln#.hXyZqC_-wr7mKK7nYN%qUN]1} mU>nBU/+?&+jVmKF)u.C,*' );
define( 'SECURE_AUTH_SALT',  'up!]>D&Q[*#LbPcY!}}4]RSV@l5[jcbP?qm- DT` g2R~=h=`Ccp&Q}?t1Ihn:1h' );
define( 'LOGGED_IN_SALT',    'XBV<2o7L]n+sev:5&2nvMiFD*|E)oYu/6j]Al-/Ii(!XW`M[^4zmg[0qu7.I``Zz' );
define( 'NONCE_SALT',        'o.U64F!:|1XVaGMvt0@eG;[qH5M71/]_$WJr0n#c._n|$PIM;k6U/48)!}mHlU4}' );
define( 'WP_CACHE_KEY_SALT', '+RYjjYl#Sm}Q5QKT.)0iEh;e>{3VPxKhCI9Jr__l])g*,0eVso7(vOM-%<Jz5?^0' );


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

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
