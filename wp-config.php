<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'staging_wp345' );

/** Database username */
define( 'DB_USER', 'staging_wp345' );

/** Database password */
define( 'DB_PASSWORD', 'GfIfqvuKsqtC' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define('AUTH_KEY',']1AR6>A~hLq_o/GE;:x8eU,|hTRSy!7+i Pg`k>hY8=k?ZJR_b[:jV$%W?cDrgwO');
define('SECURE_AUTH_KEY','nu/]!pWT_@bs/I^},6P$8)DcED?0n;<;Lr^VO?w+;`RFkr0L8{}jK,ZBzh;-6w`b');
define('LOGGED_IN_KEY','9#6jV[Zk=%#6C4mC/|nwi<}70UM+=V&f{`;(im]VG;1;!Ds0^mEX|m Dah*7=%nm');
define('NONCE_KEY','t#KK.? 5VY0BG7eEll)ZIP}3-`d2x6PMnpdi/F2`D.Xa}0`f7uJ)7~s9.K8>F[bI');
define('AUTH_SALT','gBE_6iSN^eY()D@pgwseC+(4+T)nZ!(P6WkO5?6;y2@o1+KbW5nni>+D>QL.73rG');
define('SECURE_AUTH_SALT','H^i0Xj2-_W*aO.|}iXx&yL#ocllt(g>Pttm+:%,KJ-+W!590>,g!xbR Z7IftWbI');
define('LOGGED_IN_SALT','a&B?FY]*78bqinjDdcU%_{b?fy<pP(K`R](Ui$a%5V*=,wXz!YF?.1%@40lcwh1N');
define('NONCE_SALT','H+|acM,fqys}*>o=0SboE6~SDE3*`uXU<8]hYo,e|d>Tt+INfJ6w0J9$Ew,39aOh');

/**#@-*/

/**
 * WordPress database table prefix.
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

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
