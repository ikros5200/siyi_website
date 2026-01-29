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
define( 'DB_NAME', 'siyiDB' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'Hzh19940921!' );

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
//define('AUTH_KEY', 'put your unique phrase here');
//define('SECURE_AUTH_KEY', 'put your unique phrase here');
//define('LOGGED_IN_KEY', 'put your unique phrase here');
//define('NONCE_KEY', 'put your unique phrase here');
//define('AUTH_SALT', 'put your unique phrase here');
//define('SECURE_AUTH_SALT', 'put your unique phrase here');
//define('LOGGED_IN_SALT', 'put your unique phrase here');
//define('NONCE_SALT', 'put your unique phrase here');

define('AUTH_KEY', 'L5EpQ OcY?De8>Y5PQAF$.ia:5POb&]Y(_A@3%z,0{ 0{g7LViR^]d,FY=4%F@+i');
define('SECURE_AUTH_KEY', '?qfHP@+3$sn`_0HL|f`wv|#FUEg$:}U|NP}Y1Q*@XfeC(QL9,SiGy64{)nvh_A>,');
define('LOGGED_IN_KEY', ')C)9G|6+u+>4=]cD9Q7Ce_^>73(F-Nm*{8vJg(7gP6~f.LEDm!7}cpr%~uM5M;tb');
define('NONCE_KEY', '|W]`]I|&~OHD8|M)ThE*&[LN#4P!(B5u%+Ny<o_<U`U~z6ii~T^G-3kl^6C&#_)b');
define('AUTH_SALT', '([JEl,9-~kUtb+9[HKC1A1 IKwgbp6a2c|w7cR4g[{jP-s[yjMEYj+i,*a;kuZ^E');
define('SECURE_AUTH_SALT', 'lIGdNLzb;/PUWRNvL0)<(Kf_`TPXCanil?akrRH6XS8v9#L(,,65-3.GYm)$w|jS');
define('LOGGED_IN_SALT', 'XA_7x-;X2FD|>~qzscxGdwJi%,~AmxLHH1Xh:!-pF^laqdASGr;F=3-68s/|F1ao');
define('NONCE_SALT', 'Ah|8HqY<A~a8kB=0,wSU-X l8}P-[Or>M+9vq? A@Y&mwZOB+ep|YT4tubu2>]yV');

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
