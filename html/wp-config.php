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
define( 'DB_NAME', 'qabw697' );

/** MySQL database username */
define( 'DB_USER', 'qabw697' );

/** MySQL database password */
define( 'DB_PASSWORD', 'MLAmazing117' );

/** MySQL hostname */
define( 'DB_HOST', 'qabw697.amazingsportwear.com' );

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
define( 'AUTH_KEY',         'W?po*sXh8+nJ;N%n^r:?L=vjLF,FQ#8]kF&9-H_(?u<1O5J{!BX=M7q*wUO:aivD' );
define( 'SECURE_AUTH_KEY',  'oI-0AQqMk><XhqyuMNV+nnz3hBn8b[):_+,G,5L^j&4h,N65sEJ![lEtKndV$rQ1' );
define( 'LOGGED_IN_KEY',    '$RW6ueHkmH}CkSwX#`+.YW3p[}uO$z}exb>kx}eo5w10U1b(rKt8chq_35[| I%^' );
define( 'NONCE_KEY',        'X&QA*%YU<F(kxmnT+x4$bRY$;5IwhS}}X_C&Z~M?`pc8Go6u<q!)1;i!V;Sr%-Kf' );
define( 'AUTH_SALT',        'QbAjDsMp8txmfIw#Q#zjE{MhXZuRnu|:Q2Dqh7EIam3r_4 bz:jK<aC(5!o%w]FB' );
define( 'SECURE_AUTH_SALT', 'mb#I]N;J{MMsquANn=<fZ9F)mR:5(ILVKS`Npk<</|7/qh2pAkZGyc>`fV}0K~9^' );
define( 'LOGGED_IN_SALT',   'G[-V$%8UZx,7)C]x-DwAp)xv;/!gF|C)aTs*U0V/SiC(TIo6C26#t_CR>2OukV^t' );
define( 'NONCE_SALT',       '-x.l8To0VORF2hveXVF]%2Zf3rca8!S-%P:ML*!WG61M9%Tywuuj+I0p-M<h5Bx ' );

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
