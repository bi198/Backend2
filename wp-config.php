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
define( 'DB_NAME', 'wordpress_5x' );

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
define( 'AUTH_KEY',         '|t3LdP{Oe>f@); cCCE-V.LvCtx-MR q15TP+GKBy$YZ<gS0l-*Y.K)sy#}I987-' );
define( 'SECURE_AUTH_KEY',  'g#;eo5jt[[k{y@lmr[Y2<imJV.Qx2g=%zy>x)Kw-b=v1e~<@(b}f[xmD:o](FNm7' );
define( 'LOGGED_IN_KEY',    '1})bIklz,znu%:12u.J-2 !$tJ$Ta}13.~X7YCpp0!x<A4WZ-K]u.&weod)EY}9T' );
define( 'NONCE_KEY',        '&tw23`:%SHCCSCTTe6y,M%H2(Ihz^*TWN<]Uf:N|xLva?0l uNy2;BM/f2wvq=k@' );
define( 'AUTH_SALT',        'sFi(XJvXpngrD[*A?*_sz&eZkJCI17:>yS=h70kfqvmBY]8?1?R4xo-_ab&~3>-0' );
define( 'SECURE_AUTH_SALT', '4.U!5du, e6Qwz:m^-Pl9vO5PKE%(wjc;_)yzzX!.hW:f;G*l?nc=4emnMGBxB9b' );
define( 'LOGGED_IN_SALT',   'YH$VnCGA:Rr(T!I<w1tZllTY.;NTIZ{W0K0HU7W|+.[~-j}# `)8!~93&5l4qMc/' );
define( 'NONCE_SALT',       'C8[#Ty0@pk)ncSj6[W 0<RzM7V{w?{Ud!nyipJPjH{@dFN!T0j`:,b?hCd_F z_E' );

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
