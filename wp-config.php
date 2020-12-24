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
define( 'DB_NAME', 'codify' );

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
define( 'AUTH_KEY',         's@t={/bFIU+U(hh*{F`8y[7[b`PaeRmWJj ~@xVX+%@Q6[p3.`/KM#9FVX0M6fi7' );
define( 'SECURE_AUTH_KEY',  'Rx.y/kaySKoEpHRw:M;n>eW u3B)a&2OXKr1jNT[w }%?qHpv@nj*5SV ~N#yq6Q' );
define( 'LOGGED_IN_KEY',    'V)6y74N>~F;M}DA1X:Z<EOHUJM%[5>7Lj1N;-6 S36J/>r^eR/X73]1BrWJ{z/bT' );
define( 'NONCE_KEY',        'MlO-sb-H5YT>~h~,E4:3=*#WyoB8={`y%o9Pbcs*bnN3XC~<.[T2b1 k7][VGRC`' );
define( 'AUTH_SALT',        '),1:pH:80K&_5?0*SpqX~CYd9~8Uu|*&+QsVi$Noc<!y$4 o%1O?Q*d,D{Rs-.,I' );
define( 'SECURE_AUTH_SALT', 'M{rz.H7B~&rqa<1M9X-s%3Jrj7SfsH~aQmJ.//cj^?mwp(9%04_3QD`=Vq?b$DJW' );
define( 'LOGGED_IN_SALT',   '`lE#N#D@w=}Iv&]zLV|KCjmq;_*V@U_OOo^CLj?5vSj^ oEQ>,rfq7R`MAd@.UM%' );
define( 'NONCE_SALT',       '8eqSnYyt0+3+wWq`+H;tQC}2_n6hI_UZ]L]J@0A&7e_cmcTH/tz|UJ}VH.,-z/T/' );

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
