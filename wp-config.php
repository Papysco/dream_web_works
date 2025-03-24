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
define( 'DB_NAME', 'dream_web' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'p@ssword' );

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
define( 'AUTH_KEY',         'DHlo+_s(9J[jt:]6A12UOmAhSYEn  Hk6Kj:NUEgSZ`W|0bPYPuX;g=RLOF{%#Gc' );
define( 'SECURE_AUTH_KEY',  'K=4%ssQUH+xhF-|68-}Pc/noL,^n_qu@KiweD)omUkPTYi^iN}}B(0T}sWyC7_BI' );
define( 'LOGGED_IN_KEY',    'AZ!#RW.^%E+(iid_3 y$=b,r]6BL&q3&@8csCrktb7f^4o0+#ZPIoB?vp*L>v]D2' );
define( 'NONCE_KEY',        'Y4$xvH@xI<Ea3Wh`{Xf~+~Wjj?Q+ak{ykkmmWtG+Ce>Co<#_|G-M|<LA!uIR,+/w' );
define( 'AUTH_SALT',        '>Qa?1fJL$p%!!q)HUjLXXL}H|#E(6QEhXF.1Oe7nArb/f1(DV|r2Hr;j24EIicms' );
define( 'SECURE_AUTH_SALT', 'PJH}bw]o$>wm-I9|esUnFs2kzjWo%H!0+i[j4K]4gtJjr49$Q],{7U,&n1c@co#?' );
define( 'LOGGED_IN_SALT',   'R3o^q<OQ-%pESm5eBygQW%GRZ^-Djx#Em1`}6#hS3Pz<{:NFTb~3+5Q5q=x(E4])' );
define( 'NONCE_SALT',       'X/tu#IBv2]-|3J[?G*bU:/u0G^r~ch=|}zR!A8:JN_la_{x[9Wbo0A0>I)Np@HIk' );

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
