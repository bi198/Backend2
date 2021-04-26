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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'BC79kC7NjBBLq;Hp9/=J7L=T3R?[f8D.egW2%^5k~<;]dU+ch1$[Z#](;MH>G#Lg' );
define( 'SECURE_AUTH_KEY',  'gJGu:2eN$:K WVmF!2q+&Z4?`+k(&f8)A3:Irls}+- 6qigWP0SD[9_-/-e1C>t_' );
define( 'LOGGED_IN_KEY',    '+3PIr_Qj?$xeUwnuEPL!^(@;f9+>jAOO&0m:iB5g(VlVuHf5-9.pXmF7mwRg0f{&' );
define( 'NONCE_KEY',        'fo[rUqd|w|(|;`EYF,|]B=s?*6~A2|RpcTt43oJ[jdW*=OK[nQtiLM@=Gv5p%!d/' );
define( 'AUTH_SALT',        ',W){nP$0/WA8Uq1vGR+:p1M:>mT-@4HV,:Pho`;}N1;*=ww(2=SnX?tIm{]g$x0{' );
define( 'SECURE_AUTH_SALT', ' HcwlN~q8z3/le}DdsS6Wr!i/ZTuZj9Dv75dS,u.qu`oOa&V-vw^7?7(2([2?DdF' );
define( 'LOGGED_IN_SALT',   '=>A]aukxY2[X6xUXrm$Vxx&z0NnRcif1lpt%8d)ZcmjlUlbwua/o690,R-GY&DD$' );
define( 'NONCE_SALT',       'ja{BuJn6M~gWgz U;arUM36LRs.E~Rl1tlkNJX8XN!=e@RLUm(%xNpgT8>C2nR3+' );

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
