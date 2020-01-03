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
define( 'DB_NAME', 'testwordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'K>SQj;i<vqMwn7<m3u%9C$jeAOFXX!MiUi>#_!WX<t]v&k+]{#9^Y0nfUky9MmI$' );
define( 'SECURE_AUTH_KEY',  'pG?}+]Rg,]$.IVe(Shdw`Q~}4(yeO@=H6IBWbOpj[SNRTsCLGw!ohsF@fU30w$i`' );
define( 'LOGGED_IN_KEY',    'eE6xP+3#pT1-Wd.Z>:oBz&<vO.0m1GFg5k2(WX%.aC*/9ZB#`]|lVa,Ce&,Hnsmm' );
define( 'NONCE_KEY',        'e6lJ=*[6*.RY<$&$v%!6mOFmqAlmF+mmqF2gQUF%4Vpiq6Jc4sl,^<7qKWv9#|MY' );
define( 'AUTH_SALT',        'a(`Lc+>U)qSG4uBhe*L!1hO6@c.v*}8{pjR(c[++r:Z,%k)F~r;p|F{N|I^L_Q19' );
define( 'SECURE_AUTH_SALT', 'j6[i_k`^,flNHJm@;ZpemNd7$RZNSbre@FdT.f^Y_.-(W>Hbl#0v3^<#up(g}t~w' );
define( 'LOGGED_IN_SALT',   'He{bViq @ u<JnEx,u~(pBlu#F%B,7Sw!%- ^)5ZR_M]2ZMG/XeZhm@tB#2fV)+0' );
define( 'NONCE_SALT',       '@!&,:B2)&OKz?KOW<_IFIlSyMxTw1OtU_3$pu&LyH4{qWz=0*u,,nA;^yvEiz#/^' );

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
