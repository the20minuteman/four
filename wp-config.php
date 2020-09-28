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
define( 'DB_NAME', 'four_db' );

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
define( 'AUTH_KEY',         'j|b+LXz&dEB+v.74~MCdB8pphlPn7?z!oa.h-Rl*WgA1cP?^JM_tx0mQ9t:*4dg?' );
define( 'SECURE_AUTH_KEY',  'r}ir.xeUX%]Ox^%?&0Qjq(@#_2hry:u-pO<s;3lTQkveg!8Q2oRG!Qws]DnbXdOW' );
define( 'LOGGED_IN_KEY',    'z:Tq&=H!k-<<.#KZ<A81;wR>|(W4roSW@3/%r3G4,!qn14+{PC3mK!1Y,>Whh=cq' );
define( 'NONCE_KEY',        '$(e`/2SXLpsg_I6Zm|Fky[w;b;ZtjkLyYK^hG-ngW pf%<|N.(u37jsC/~:14USN' );
define( 'AUTH_SALT',        '=YdilzYiQ*7a%k2*^{VRBP2mweDRHIK}Il7sM#=!u80;.POT}|*kEI}i]a3L}B_G' );
define( 'SECURE_AUTH_SALT', '_RCjm!2Vo;=Ko!E_(43za*Rv5{2Z/ -^G&MDBb^ZN>;lD%K;oJy;R;)={#df^fAg' );
define( 'LOGGED_IN_SALT',   'EhJ]terI=z+Evv5Biv5R9gEg6DKNjI-!$H>_DNNQn,KLG19$(&WJ5qu{ZT~fhg!O' );
define( 'NONCE_SALT',       '~JR*u4eN*N/WwqypO}G/v-WS_c|iw%q=r8],4aswHc6e,(v1{|xl6 3SL[yeCh]T' );

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
