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
define( 'DB_NAME', 'Forum' );

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
define( 'AUTH_KEY',         ']-`]$:4@)qMT/}U6h^(7b>4yC70c^/-&/IK$],=84~@3(uZN{@As~Q8X|$bSnlgs' );
define( 'SECURE_AUTH_KEY',  'm[rXp&oU(gkmuK3{nV~!|k<)]H15MZGUubP>ATi+3zM)EWpF#4(aM4,`]b!|V;jT' );
define( 'LOGGED_IN_KEY',    'lLj4.<22$}U+!?dTVAJE{s aWG2y[8f2hI4Q2m>=225ZtP5;w72Vk#@:am:fb-+S' );
define( 'NONCE_KEY',        'U4AzdXQ(S1`+@SyP/l{]1GkNu!8+`??<ZnDJfMOM_i.0kNqM-fXL*;;&P&e?P6C8' );
define( 'AUTH_SALT',        'H;#MKx<&2Q}*BgVxN:?0X21JC#& zt)yWGBDJ]kd=&WK]XF@-]TOedw)$<dRlIq}' );
define( 'SECURE_AUTH_SALT', '96?+{:_Btaf:zq%ZQ>y9`/86?y+c]D?<?lAzQEC1>asB^:YM/+R]LR?YO)%2:;| ' );
define( 'LOGGED_IN_SALT',   '~p~WVV%g6< h$n~%73fTHvaT6#a,6AE0@O;;!fYD7RslM $I5Y2,2`~{(~PC ;,L' );
define( 'NONCE_SALT',       ' }N,28-;ITQ:*5o({u<(dYje>z*]$nWMJsK,StfG.Mb01-y)hp N) >?>~~ci&xa' );

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
