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
define( 'AUTH_KEY',          'Oba4{u=:n]%Ekyn23UAK6+>s)SvFuY8M!A%_Kr.heO^^-s~tGS|{{UH<Y){Kg~`:' );
define( 'SECURE_AUTH_KEY',   '|j1`tP/V@xdpqC=FO=K![~cA:VFcGSjL9glkItxQ>N3$AEf]Wp)]Ga}u!+NfsZ28' );
define( 'LOGGED_IN_KEY',     '9W#+|rK&T|><V{I?JKUahP=lqxX}|wf,ohXfKpl;&1*[])P-rLUYP>Nqibp>/BU;' );
define( 'NONCE_KEY',         'm+alVnBqRSFUor%8+1I#1mv^{<5ES%)!kiS?!6z)I%h]w(,2s@h1U88CCe~xAn]e' );
define( 'AUTH_SALT',         '35o0q~5zV8#v8S_QY$cCG}l,&/b|c<MLN4r*&kyc9~)Lz(_w7EO):+66-p(]n2uL' );
define( 'SECURE_AUTH_SALT',  'n,[klQvSA6BX*`WCf:p/8n+(}JWte rTj8eUA>#y2(A%N;<}Vt(u&u@1Cfs)Y6_i' );
define( 'LOGGED_IN_SALT',    ':T%^`dEHmWn4Ms<l^TVtQ;:nRxp]tP`-J1e9XjJM31oNGXD0H<jrhgEN)v&<-,:T' );
define( 'NONCE_SALT',        'Czbf4`HN~nfyAn?Nt[ 7KZqV+rz[:.}E6%j?L*e%qf(YB+~FSHZ.F3av),dQf<X,' );
define( 'WP_CACHE_KEY_SALT', 'kRig.%,}2b3c{6-uxBjy#D{-*(72>rjBIQNf@iePSF=YL[h{n%p_*L;XY?|M%U,-' );


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
