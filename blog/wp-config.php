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
define( 'DB_NAME', 'content-ladder' );

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
define( 'AUTH_KEY',         '~5Lb#jW9Z*j0Fc1(RDbOL|$C:}%f1ND5VYCIt_LJt{MDEVKt?>.5$MI(6O|l %oI' );
define( 'SECURE_AUTH_KEY',  '(Bnt83<iu4`/l9)kn#j&~VS9m?A;jGs.Rw<wf@YkmU<gyViO#49lI,Gt1f1|{$dN' );
define( 'LOGGED_IN_KEY',    'GjR:aY}+GJ/M Nb ]lgV !8?`*~jU<WPFNZ,P34iiB~!sO(v+_>fJczU{tJIA*Tk' );
define( 'NONCE_KEY',        'b9pjn}^L(BqA0+jHqG*JmgRoa+- T&_zFvK-vB<sb7/vr4&e$#Ba1}-CQ$;J4e-]' );
define( 'AUTH_SALT',        '|X-N};w(giW`F`<#qU}{Dha*F*cl=Xr N1*mM,x_sW3.<=@2CF)| EH~=rDxTOv8' );
define( 'SECURE_AUTH_SALT', 'm`dPuLC_nA]FJ4v$CRy(_&Z6?X:WjS!QLb*5)?C#<W{%0W!`IZYjGVs94%g$-_9r' );
define( 'LOGGED_IN_SALT',   '$u9D4yx9=K7hY3H<3y;KHz znG:G;sebvMUP<8&Ub=Nf:RtLYm[OU1QVN^QN>g)h' );
define( 'NONCE_SALT',       '_M}g9c109!9,mWP]`;[Xp=J&5BShu(LLiaf08udwRbx(S#L#Ntr8pBPW54hvrRju' );

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
