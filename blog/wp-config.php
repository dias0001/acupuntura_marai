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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bd_acu_mari' );

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
define( 'AUTH_KEY',         's.0<^_a[,&8O%;f)MRb <)^A Op$jD5BCN/qS]b@B0f?3Eq(hdAbGc(Bauc/8T%`' );
define( 'SECURE_AUTH_KEY',  'CijA!V0C~7y};|fjB0]:65H:PwPf)*D.*o` 9HfVc2y<ynbM=Lp3^kZ!%yYXG7zF' );
define( 'LOGGED_IN_KEY',    'PtD2rtWkUX>$0utu?Xn7#0?j:yU>umoJ;kRNEbPK`UGix;Fi9H+g.:!W=mWwB%xj' );
define( 'NONCE_KEY',        'CSV&hLGlGN<O^Lxl1I>mUh`VSvFN$GY]|qcN%<X=&^Mc1a0oyuBI|fgZaYOr#~HC' );
define( 'AUTH_SALT',        '3d?{z.h8^j6C7Hmc*!:~vcX_$3IokykWrix$Qa1 s=I5|yesx1/UXupImhZ[b$kC' );
define( 'SECURE_AUTH_SALT', 'zXSbuxfz<9NK3$DKKFE7Ph&`=]P~-T,Ng6JM,?|(*(E++CO|NGvl&38-P#TDw;wV' );
define( 'LOGGED_IN_SALT',   '_R9TA!rg=!IKa3W/ZMTJ/LM2}cv$N-o-}/RJF/20X8>|cu<Kj ayD/Z`qVIKb&s$' );
define( 'NONCE_SALT',       'wU.2T@*[B6n!S,Ocqs,EKyCxvMSN.2s}lm2AnQeqhpQ7M!wW55E_DpQH@2>s5@oS' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'acupuntura_marai';

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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
