<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
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
define( 'DB_NAME', 'apexdyna-dev_apexdyna-dev' );

/** Database username */
define( 'DB_USER', 'apexdyna-dev_apexdyna-dev' );

/** Database password */
define( 'DB_PASSWORD', 'ttvDw0VezETDT9pv' );

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
define( 'AUTH_KEY',         'h0~<oMJftWy9v4=`YAcM14~J VFJhs!U]$yHqa3DZk9 ,5)1~[HGp Ic[zLcK%ca' );
define( 'SECURE_AUTH_KEY',  'IK`u98GcOyF/746r1_ZoQT/)X1!@$4dN#Yg$b%wJu E0uGb{OhfNO1Q>`^lg9ZZJ' );
define( 'LOGGED_IN_KEY',    'Bdr6>]GMdy^MP C(/@Ob|VTdDzp`MGlQ=wx/a&v/SY)BZ85K UHG kxERwmIA}}@' );
define( 'NONCE_KEY',        'sC_I0ufgaF_dT=2Em$yt_F+PPv8.@w&NX|j*[Dklc&UrwJ1Kl2;0fnQK*Uy^|t!I' );
define( 'AUTH_SALT',        'q+UHTss|/4DZI >EcZ5Bli50kq-W]G8fl3ssYR02OKO<$cd$~~hOf`Yi[~-7J*nB' );
define( 'SECURE_AUTH_SALT', '=[k-Ku:F0!~(/`rS.]Pz[VbP1~N1=f^>$pn:}$=zEMaqjTp8WR5SL;^K+-pJjaHd' );
define( 'LOGGED_IN_SALT',   'YeU+|XFY#oB.sthh3w(0+<1vy<[_w[`Gom8GRtYOv@/^#8I!~@?[q;$bWGak%ZVB' );
define( 'NONCE_SALT',       'b[h$M9,JSi}#y),IA+xaiJ6dzBW/;hG>a@A+8TmKeQbiX[N_P /RYqg1Yh{/v [/' );

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
