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
define( 'DB_NAME', 'mbabout4DB2djsp');

/** MySQL database username */
define( 'DB_USER', 'mbabout4DB2djsp');

/** MySQL database password */
define( 'DB_PASSWORD', '2sysmgjeVP');

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1');

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY', 'JYM7<B{$yj.ufbyfQM7yiTPmTEA{L62.6<.ue*qaWuaLH2SD9]D;*pm]xhe+lSD9d');
define( 'SECURE_AUTH_KEY', '6L]+2;*qW51_p#_teLpaWGaKH1~C9[w:~-lWwhdOhSO9|K41@5|!sd@okVoZVG:RC');
define( 'LOGGED_IN_KEY', 'Y7},^F74},^zrng}>^yrjfYQzrjgB3IB7>,$vnj>^$vnjcYQ$yrjfXQME7fYUMEB');
define( 'NONCE_KEY', '>|kNnQ7R7,F}z}zc$jQfM3UA{B{ub$jPjMfE<2$2xP.mLW6S2D#lalKhG#5-:s~dC');
define( 'AUTH_SALT', '3jybuXEf{E{y2*m*mTAXE]E{x2*m*mTtaHaH;+5_p~lStaGaH:oVCWC[w1@k~lRsZ');
define( 'SECURE_AUTH_SALT', 'l15G|gsRkJR0J>nzUrUcB,3y^fuUjIbA.y{muT3mLX6T2x.m*epL;H#2+]p-a9WC');
define( 'LOGGED_IN_SALT', 'O5GOSadltKSWdhpw-_#hps-_#:19C~|[15CKOVZ5CGORZdlow-Vdkow-!|:os-@|:');
define( 'NONCE_SALT', 'Vs1!4O8RkRk@k@0G}JcNgzgz}z0F}FYfy}$3IEYrXr,q<A<ATATmXq.q.6P6LeLe');

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
define('FS_METHOD', 'direct');

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
