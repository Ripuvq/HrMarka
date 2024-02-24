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
define( 'DB_NAME', 'white-space' );

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
define( 'AUTH_KEY',         ';4YIP<%f0S:Zr,EteTl;I{B{rS[,eYx%$5h=`e!@d># ~c:=Z,[88S66``w_]U>E' );
define( 'SECURE_AUTH_KEY',  '7k*}eeNHh(|.5tf!!8S#9Vys^0<;p8uO 2}4PtB[$o roWbyet?hV(qE6m_;v?%L' );
define( 'LOGGED_IN_KEY',    'YX0/q6eKk4ez!aL0:TWNM?2S:fA.%g7BnL(||fL!mz/e/re.!I7X!mSE>q)wSf0A' );
define( 'NONCE_KEY',        'nYCnM;<.D(*xKfc@5Iv_s$~#0ulH:ceTn1/yn(F.V*:AJ9{U6GCD6Ia=1j)v@EQ!' );
define( 'AUTH_SALT',        '6mmwWmbNs3mEoJ1 V*nt!5$.S];p+HAJO8Y^s)K/ec10dYg^/H4vJ#!*u67bSr{}' );
define( 'SECURE_AUTH_SALT', 'oKAb*kQW?9qrar*<[:f(`D[rf+]]yNU7QtPoldlWwP_?R^ r~q59Xf[C4?68^3C6' );
define( 'LOGGED_IN_SALT',   'I|q-h:lhwFbbg*9TOSgpy9]1YfGJD+f-2Fvfq(tK/e~B>-66_xX<:b~HB_f?8~)o' );
define( 'NONCE_SALT',       ',}G~;V>y5%9 iK-Fx6c$SddL/qx[+:}FuA;voCmwU#yJ*HLk=Z]h,o=Y2=<3Jn>1' );

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
