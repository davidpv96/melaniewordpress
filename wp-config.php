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
define( 'DB_NAME', 'melaniealavamakeup' );

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
define( 'AUTH_KEY',         '#vEbDxP{):)HO_E|Bzbm^,!gQ{!$Zotb`%&Z[`]}gQ1Ds`d|[=y;GhUX[@lSvAY[' );
define( 'SECURE_AUTH_KEY',  ' 6-Eo}>A9nR*`+5+w^fz>9=;Cgh|Ob5UJ@7BZLX]8ii~<]9:n,Sv -$)9;Y1NN%G' );
define( 'LOGGED_IN_KEY',    'Q KV_L0Qs>@J~cQ9/D`8;6j0qTs1Emz~q)Ey>V`QjWorR/h!fxIuO34;4m6AeuRE' );
define( 'NONCE_KEY',        ',FZf-[Tcn`@2?+kpDajl~7NJ(uB<WB)o1i4?TGD=f2w%`Y2=|3vL>XXB}#+E_x+I' );
define( 'AUTH_SALT',        '@z0-f%_]5-MCQ|`m>Y@BF+cT{g9}7naql3i 3N}-U.Ys4lQ`4d~;zyid?B]/iaA0' );
define( 'SECURE_AUTH_SALT', 'd!H7b5fJ;gV}.hK[B>>`(vYwL<_5i#lbb7={WGi:8s=bP=}L,ARv@VB9Vrug/.%{' );
define( 'LOGGED_IN_SALT',   '=:@m$v;D)2!|lWFW-BMw/5V.`F4vpgn%chmVzd%!xy>Zc K7R;VId^r/0!a0-BJ&' );
define( 'NONCE_SALT',       'm>YzS^ePm& 25yuw_LYUjmq]+sRG~.w-t_yi;wC2qE_~dUQt;*ec}]]c/c>cggm8' );

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
