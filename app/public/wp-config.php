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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',          'sVXGeN814cH*F[H-9SSeU`JSs7vPb_jB&aJP~Od~){wOqLEoY2O;2BzAi]?`<Zwh' );
define( 'SECURE_AUTH_KEY',   '1&*vdZ~;?s:VpK<5-)Q!kFv-&gMv/I_#X~E(xqJBQwt>mI8C Cap7<1WXcb>_/H?' );
define( 'LOGGED_IN_KEY',     '_flY;Fn+zkZu#>?+JOS;y+ETmJP-h/dE}-OK]luxIV<%[P-uxoSn3jsn()CN3nbb' );
define( 'NONCE_KEY',         '9Xb4B[N?t]d];>J:yKELg=Ic{k>[3AN:,;sL>9]7/3J}gHtTO62@VBk{Sj*MX92l' );
define( 'AUTH_SALT',         'coE aR=S #,B|7$L4B2~xeFi:S)t(l=!n)7Ae44^$h&f/Nujn-u%8~+sN8i{=04%' );
define( 'SECURE_AUTH_SALT',  ')dAYU,s*s6S+$AZzamY)%q=;Fyy3@tT:^g@+4lcG}vP_:l!Y1X$[-/j-_fGB(^s8' );
define( 'LOGGED_IN_SALT',    '7KBw] 3.rt(|40_k;S7#%@urz%!N5N<)P6(O}|dX-zKLHtUMPQPezC`?^%SSiWVM' );
define( 'NONCE_SALT',        '} XDjT)6gR%]%BO^QKRsbbqM$mzN-%>Jdrm=:1/J7$iK5KQUoV4,v-(p9}MCsB[W' );
define( 'WP_CACHE_KEY_SALT', 'fRkz9K#$5#=&_8JMiES=g;4bL@C!9VuW<E{mvP%Dg^PfkTGeSIhT!N@{2Oy;TcWC' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
