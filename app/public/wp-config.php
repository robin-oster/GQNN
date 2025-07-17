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
define( 'AUTH_KEY',          'o{8jA?<x/=hccJJ7O0=ytuxkUHqynVl:!DFBZCVn#IU`0+vW%!gAZIY#;a o+R2d' );
define( 'SECURE_AUTH_KEY',   '3l,dFW5zhKIXBE%>vavgfkc2Q5sB&oSY.6dt:Q0J;_/akXnz*{VOz,Q.H`yQc/0g' );
define( 'LOGGED_IN_KEY',     'u@8e|9p!<uMuIaIc5O_H}A|W[4R j{Hku]cWwr8g9Rf %J<{/_2u#YBzNb%/X_`6' );
define( 'NONCE_KEY',         '^8=1-A1,%C%Zi`$kVqmV^gmKs6T1DIK3Y~mZ/JGqlWs)35>/SfGNx;eBu1y*uh],' );
define( 'AUTH_SALT',         'Iy`QyWXDF8G55qJ+ey}^9{B<fSB-Coa6e,n}zHkay<&!&*Hy1LxoKLW@1I0[Y7gy' );
define( 'SECURE_AUTH_SALT',  'ifFEA6I[m+/^z19A!jCRxBWt!;IkSq>*zALO}%4G2vs`M#j=At||D/y/bqFMf9)K' );
define( 'LOGGED_IN_SALT',    'zr0S5uow;tEz1w&1.&H Pj;)diu ,4f5k%jF!0j!P%U;W?>3w615TSJ[_[5Gc N<' );
define( 'NONCE_SALT',        'y)Q~=P$o+LEg^E(P>B<h<haf LFngOXS/-T1K+}ERF:e<H+Td<: :WE2+ADC/ug8' );
define( 'WP_CACHE_KEY_SALT', '@PEMA3xs@R#./?_rl#t%un?KF2+>W%d[o(w@-?j45>)oMRcZ5p[llqFni:*@kg+a' );


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
