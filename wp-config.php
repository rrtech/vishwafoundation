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
define( 'DB_NAME', 'vishwafoundation' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'password' );

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
define( 'AUTH_KEY',         'y{5v1zmFq&49HM_Ap*ws.2c|Zz%KrwO},W4W%_4>8 <-h:(Rt&#e=r5>]KE)98RF' );
define( 'SECURE_AUTH_KEY',  'x>%q~}9K:{:zFiurX!{T;PH%d@_:B9={?]3Y+/n4E?DA/JsFIX ]uGnR<a3U0 2F' );
define( 'LOGGED_IN_KEY',    '<<](nV)-5UC<]3Idg;LM`k6=.p-Oi=H}El_uM.1:6:Woa^G]E^O<|avL{ql`^inq' );
define( 'NONCE_KEY',        'c7dUqJRA[{=N0[QhA<e$4P_Z19Hz|*H(vRnqdA9z(9I-zbRj[$m^P@qP8R!z3}hR' );
define( 'AUTH_SALT',        'L}s?KO??]r? Vr.J9ZrvlymRtDbUY0IC@5Qtkd8)cI=6r=Bze/#:ArDnt!v&/<pU' );
define( 'SECURE_AUTH_SALT', 'Q]s&8Esj=/>#IG/JC@ZVdFj;1/y]W9X$%4%P^fNc={=j~~rIM[BN|J|5IP$gb?`6' );
define( 'LOGGED_IN_SALT',   '*kejG@22tbF(.9G{IiuA29}+v~INst)ltg>S|,YYT9Ge(P1/2F0Z`j$)vF>)jZ8R' );
define( 'NONCE_SALT',       '(26>1ub}/9?cEj44h4(nsCw5*gvFTiEivELRn%0D942@Zc!]TO-n|-XG90bmWN}=' );

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
