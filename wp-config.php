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
define( 'DB_NAME', 'n0206327_toyshop' );

/** Database username */
define( 'DB_USER', 'n0206327_suhail' );

/** Database password */
define( 'DB_PASSWORD', 'Suhail@2024' );

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
define( 'AUTH_KEY',         '?v)kgNi:(B$e{Cv>=$S5(2?75vCMaxN$sZ%nqdUPxvV./EVcpp5aw.=Wh!)==f>$' );
define( 'SECURE_AUTH_KEY',  '8HE9]Q-!+^`yLp#fI3Hgj(fp_mkaiHQ/Vkk>J(k.3KMS`vO]!Eg ~e?E S ,~VRj' );
define( 'LOGGED_IN_KEY',    ':]>zy,f9X&5u~7L/vn$JX.et4;5D?f94lmH[75.I4E1}%%jphxnq qo>!28To;2h' );
define( 'NONCE_KEY',        '/aWkJ+PF% VZl,Y!}*>J}C#JE?JuZ&q]sI8$LPsWdqSF8urZx=E}J%cPtS|8Nn1x' );
define( 'AUTH_SALT',        ')`FIQr4Ov&#</CX6t`bz_shm3*vgBw;>:W0P4G2oTm]6*x+H|+]C7B)pO@Z],y5H' );
define( 'SECURE_AUTH_SALT', 'PbhGMS^ l+nn}%yGcd#L2MCF/:Mg%TDPgco.{dUx!<lEUJtT*F:Ao.RyoTxgs!Cb' );
define( 'LOGGED_IN_SALT',   'z91g`FGvF(AE&Rg o.C]:qyOD4qbE-/Lup.9+!zETi5}[0 2lRyDV3!f|0r_WBn@' );
define( 'NONCE_SALT',       '6w+-{|L1,DNo14p#K`Ml;Qyj0>Fd2DRf.SyT>Y]#}L%:.5b>)b7Co28yA3y8:jLc' );

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
