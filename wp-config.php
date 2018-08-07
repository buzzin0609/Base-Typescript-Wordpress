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

require_once(__DIR__ . '/config/Config.php');
require_once(\Anabelle\Config::getConfigFile());

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '_b5KSr!{oTW*1@pG`$xOf0BD4w{=fG1N[GlLTSObkd4-l$Tl-X)]&}5E+d`cE*vK');
define('SECURE_AUTH_KEY',  'cBnd^zkpgF+MEnoFuF)Tz}7Ti:t$0-:g-_l8R2ySt0p|QUMyyXf(ed}7W{M{H)v*');
define('LOGGED_IN_KEY',    '+UQUF{@b2|hHY*vyMIE4*QvdB(3te$C`[nM,iw?x+!ex2*L8j*suW5AL*^:(Ei*[');
define('NONCE_KEY',        'D1Q#Z(!0dU ![=i @wLK4{nRn-ilp|@-)m9Si{O,[:-e|L$A=tdmM;zQFtlR[=6w');
define('AUTH_SALT',        '(-Y=`VTT>fH[.er)Yq.R--rNpX:0_JdtRfzBRIHCC4(n]/y;X#4JL,d`{>r6rqA<');
define('SECURE_AUTH_SALT', 'U0b!EFY3/Fk5`Z*dL|Yu#CS=@I2| iZ,Yf#n)0>@[bqbl9Eo]Dm`_-|z>GC|aUHV');
define('LOGGED_IN_SALT',   'JFKHru*z)F]Q^Cf+R<$N-!u_6*y2/>B]{/urS3-G@$;ekX_3EFp@(n^8CzG@3h|o');
define('NONCE_SALT',       '$&h,0FEMGrxa5-AbcRSE_3E;Ov&:k%bAx&xm7,qp8NO&D?L=-w[[cmdMCFUvPQg*');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
