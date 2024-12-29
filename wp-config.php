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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         '~sHzt06f i_(A_QD6zab2~Jpi=BM:Cop_?84.v~GsE_g#-U3R3TXn@ODll5f?G@!' );
define( 'SECURE_AUTH_KEY',  '%Fj$SU!hE[!Y.|aW]f:`1SJ:@^A;nwovyQdSw9ez)${wXo$Y^xfny :uHd]/O[;~' );
define( 'LOGGED_IN_KEY',    '(}4^q.P&rJ8iJ61>zm<jZi%ha0^KY*!>.ET2%RT %M@q0,E.AQA|dynQbn6T(e%(' );
define( 'NONCE_KEY',        '+Ig[?%RiUlX/yB)/~q_6LklC8a$Q*O2j1[Ek?%},:vlS(u/U~QY(a$xS*Fm@,AUb' );
define( 'AUTH_SALT',        'U^LI|]<p(O%2@$@|`0pGiWKW18d/V]Up8!r(z##wn!!a(wcG[Y.^*B))7!BxB:.F' );
define( 'SECURE_AUTH_SALT', '~TO&-yuAF/K8cKC]ypc9T}A708l?)sdRv./Ib KW@]o_^p&%$Xo?G;aW~2rsjN%-' );
define( 'LOGGED_IN_SALT',   'Z45|m8{D!J$l~xe[[fKYb(fdwEVO.t2Y+vAPuk~`5p>[EM9y4vqee}M^5Q+.<Qw@' );
define( 'NONCE_SALT',       'W0}DdHIER3Q@JQ{i f9<~va6Z?IOrB6SmVyoSC<+w[3%{^of*hI^EwRqIUmg9Kl&' );

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
