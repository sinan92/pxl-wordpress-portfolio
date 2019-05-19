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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'italent' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'FS~mJhS4[&ve;iiGxr/pKW7oV>?anx+PS7(Ns,%U/@8=4_#q7- ~ZA<9SWYxi$^.' );
define( 'SECURE_AUTH_KEY',  'y#0N3I{wGI yp_@*mLrCWUc<Pmc]c?5B8BOUBen9oxv:oeDQy<Y>3pI7C>K2!$#O' );
define( 'LOGGED_IN_KEY',    'Hm]& .u]64/?ZjU6bmBzW{1INICAFaj:J*4I)0Y9&vyKFAR)V1{2i25@r@teJr.K' );
define( 'NONCE_KEY',        'd&z:Tpig2m7Z?<sy(~oyf).Mwu317!hgK>n&VlD+vV[y6MerMiJ5@vyvL(1]p](r' );
define( 'AUTH_SALT',        '4~MWIfr,eeV_U68LOuZ!:z7,DCu?Kn)w$MSvDcYJ8#/h,zQwM3v~sH`<c YmD?h<' );
define( 'SECURE_AUTH_SALT', 'r<B{_ZA,,:6M13E~NuN=9y+]GVBh7kUp=+eU^yi,nfI,G<9Fn8nS=y$mV$dOm_#^' );
define( 'LOGGED_IN_SALT',   'MAq&1_Bbi*i?(GjW1wv@HF(z&y#-iH<33(~)XnljEL(-FNuiiwu;a.y-|J6KT]b/' );
define( 'NONCE_SALT',       'uMO%ENtnbG?gIgiUD7a[_?:[x)>!9P<%EyS,zGS@VC<(ab#Q2,I@E8f&;{SmXDyl' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
