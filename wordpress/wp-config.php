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
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp' );

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
define( 'AUTH_KEY',         '[Z,Jefaq3+1CYpe=i]o-{bzB!+n!MsNC<`U^![];[k-/(/jbzQPeP M+fs!n%15u' );
define( 'SECURE_AUTH_KEY',  '?~t,#)HKh@-9?TY21^K7>`xL0u^?,Vt<Q~OTRnCz&nn?q!zG7xhQvXGp&BLZ&[_a' );
define( 'LOGGED_IN_KEY',    'R/TdDUS4g$]Ofh%`dY ?@q-&=nZdAIRLyqu<>t5l~Wu|r/zYZ]y&u/J?f*,<V5xA' );
define( 'NONCE_KEY',        'EufPdlB!a$s )DY8!e:`88079_Pzb,OK:pkT,S:7zc(WB-f.IfK)a7.&ROm<0q`o' );
define( 'AUTH_SALT',        'y~r7s:O]CC23fxFKG1) T@;F7}J+<t@0dzp,&&GYCspfTQ=ZYMKT=mZQ69}:TUTn' );
define( 'SECURE_AUTH_SALT', 'WaVSi06R@*d`n3Fn,N.?bI/Qhj;Nw@[an-s^vS-dskN&;IF2Vdf[hl9y7ELtl%~W' );
define( 'LOGGED_IN_SALT',   '|k#]CUedpeKRiS/4wYrHb%lQC[M=psR)x+FkX)N|XF{DXd31VO{Q+u .TzQskKd ' );
define( 'NONCE_SALT',       'jY|Us<V>2m6m8i#^AiL>MS>gu$p?v8*&$@2CV_Xz{1rWl{O+@;=]yAm~Fk.BkFV;' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
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
