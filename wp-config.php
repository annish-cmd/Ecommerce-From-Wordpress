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
define( 'DB_NAME', 'City_Wears' );

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
define( 'AUTH_KEY',         'Xy,w;h.pav[T1rE0}v-VG[GFwNW/0vM2D*?.sRh9M3[/3!3*-(`kkw21deL55r=#' );
define( 'SECURE_AUTH_KEY',  '#XWUmt-:NF+L}{JaqrZ3ZWB?#C@Hob2?2Y&:]$1z!8uVL(sk<dL!, @@OIYP7z$_' );
define( 'LOGGED_IN_KEY',    'UvI`]u:vbM([)D(Tu-Azo69Lq@yWKCKw<~F>~}|!(JjWv=}bYVN:N@[G/blCMkqA' );
define( 'NONCE_KEY',        '.<$y6*lzDATRWqHZ2 {8FfT6wdW~b.(m=k~$]4;MI.][63+mR*Hl}Pcx=kZyXkK:' );
define( 'AUTH_SALT',        '7+=TQI<UH`Oj2bqKUN&bhym81)!5rn4tvuSIdDj_7D-MA H[?/es*jY,x#nnHz~-' );
define( 'SECURE_AUTH_SALT', 'H0]4qOTDAzrMd;5iG3).)ukH[&rgo[7Fl>P~Z.f/fg| #-CEO2](LFCmO9~kLE>k' );
define( 'LOGGED_IN_SALT',   'e`svDPv,F2J[wIn #<!OV9Il$9yrH?Y5B=([B$LHE;x|47D=3`(b&6e}E`=g(#I~' );
define( 'NONCE_SALT',       '6hmTHajk]-==m-6{X>|^)s:%CW``def$pYP_and6)p J!kSxv{j+#DIy@=:<X|Oi' );

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
