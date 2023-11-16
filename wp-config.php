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
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
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
define( 'AUTH_KEY',         '#<1(r?PmMFA86` Rm!k/+w/Eu88(<*`>8JZxi&aA$lq]eZPb0<>UtCH9p1D{f-EM' );
define( 'SECURE_AUTH_KEY',  'dUU9 U`Yf)H)bp-ox-6Su7MN>UT20YY^cIym/swxNsau4`ye{XSI|95a,|{M:Z43' );
define( 'LOGGED_IN_KEY',    'W0`9mnJU[Gam5braEqC/3lw!3ez#m>je1Q4Ny7!qiI!EkS81!gk=,_$/Wz#oBLXs' );
define( 'NONCE_KEY',        'g4liLoahPU@qhimXn)C/bMq3(g(]g@=#ebs%3-fK>()$lWeOK@?a92<-C qxtagB' );
define( 'AUTH_SALT',        '}*lK)InAMer!y4l]_SVdR3l/Btr8Nw$KblHT4HV]_WC=?eK#k j|Wi<NucVT_G>_' );
define( 'SECURE_AUTH_SALT', '1xyBe3v<wYAMc_2B|!rspdoEB}3JK:n_)-}.%&:DwPcl$3LEg{g08gXd5y>*j>YW' );
define( 'LOGGED_IN_SALT',   '(_$oJT+h.1W 9*gnbb#^Eg~fSJl`/9h5 vc%HV|2&2JcYMct|ADMgJ, <4hyTGqK' );
define( 'NONCE_SALT',       'd+Or!_LRG4,JW_ kc[ORKy4.6D{L[Eg[+`kHKuT.c{)@SCJD;Ce6eXJ:|l$ +}`h' );

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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
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
