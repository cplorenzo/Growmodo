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
define( 'DB_NAME', 'growmodo' );

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
define( 'AUTH_KEY',         '?0f+W572x`Ylq_d{qfbMvH AL#UCoi@r}u(|=?#^QyF5I4&`O(TH@#5ugzoSK!<1' );
define( 'SECURE_AUTH_KEY',  '7ffI*=L-lVFD6Xbab6vM#;DZ^k)),]G%h>.y]aHKuLgxf)HVw5oeR*eJzFZTx|Ll' );
define( 'LOGGED_IN_KEY',    '99gfo~P#NOO]3-&5YW&1Q?!6bGF.CHPdNwhwiWYe~$6WLME:wI|}M)es6tqQ}Ah2' );
define( 'NONCE_KEY',        'xS3y!D4@gZ?jZ#Ag6N=.XxxU1Scr^R::{y|s{uL7n||sVyjtkO6PX5COF<Gj%gaJ' );
define( 'AUTH_SALT',        'j$~1F_cxM)]u$s?shq31mlt_^1:vTi;*yoS2{0)ukm`.2fo4rCP*zyz;cRdr$&Dq' );
define( 'SECURE_AUTH_SALT', 'Y[n~xadxrgI?G=C;RbN[;v(YMc!v;JjmRt+79<h`/<PplOPi{8#u %EFW!1CY9oA' );
define( 'LOGGED_IN_SALT',   '6IS8_7~gya5Hn[80B:$6E5mJ$N3FN|UFgiya**!*T=dZj~xkE?uVeT]IMpxc^&Hx' );
define( 'NONCE_SALT',       'IM,U03Mt&[3q`x@LZbGMA(^_m89_d16 AN6U||W~rwdr=*=DySdW8hJ;yINjZQks' );

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
$table_prefix = 'asfe3e_';

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
