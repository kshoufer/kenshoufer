<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 * Ken Shoufer Web Design
 * @package WordPress
 */

/*added logic by Ken Shoufer*/
if ($_SERVER['SERVER_NAME'] === "localhost") {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    define('DB_NAME', 'kenshoufer');
    /** MySQL database username */
    define('DB_USER', 'root');
    /** MySQL database password */
    define('DB_PASSWORD', '');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    define('WP_HOME','http://localhost/kenshoufer');
    define('WP_SITEURL','http://localhost/kenshoufer');
} else {
    // ** MySQL settings - You can get this info from your web host ** //
    /** The name of the database for WordPress */
    /** The name of the database for WordPress */
    define('DB_NAME', 'backcou2_kenshoufer');
    /** MySQL database username */
    define('DB_USER', 'backcou2_ks');
    /** MySQL database password */
    define('DB_PASSWORD', 'pi76X!L.$-P%');
    /** MySQL hostname */
    define('DB_HOST', 'localhost');
    /** Database Charset to use in creating database tables. */
    define('DB_CHARSET', 'utf8');
    /** The Database Collate type. Don't change this if in doubt. */
    define('DB_COLLATE', '');
    define('WP_HOME','http://ken-shoufer.com');
    define('WP_SITEURL','http://ken-shoufer.com');
};
/*end added logic*/




/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '|@Ez)MKi4(HNZ4Pg]C2i10WbH(_9O%yG:qp2Uw.^<KhL(Wb@#P(n@za [&v!R:/~');
define('SECURE_AUTH_KEY',  '_-U@=B>cRJp5xAZ,UI*fnmR$T+G:^tV].+r|a)0#CpNmD2_9pj@|lK?^o}g1!Cw8');
define('LOGGED_IN_KEY',    'f*lhTq{/z2:iR?{x~VuR,!.. +=Z]l)<nSP$]nTn=?$]F*lzX~4!]q0#I5;=r86V');
define('NONCE_KEY',        'c&Mh.0bYtOWC`^I&66S#/5axe:%KyUC,kh;Wc*Qu}r@0suFaZ.M5CplIIe6@(S$q');
define('AUTH_SALT',        'a&]@h*:ri^UTt[MB5}J.m:),(XC?d#h24I]v73wk#B^9 euoH3aR5pIK<YGK3F]3');
define('SECURE_AUTH_SALT', 'H~9p@,-N9;M[(Gay`vKj`1$Z!!m/a5(XE-Cy<i7iX,T$ =&owAjt(DwQjAq|Edfk');
define('LOGGED_IN_SALT',   'YreDk6alXoxdDULmP`X([AV22mea?yDzwVrV4Ue{*eY,]JvL%(__@nWXocv0i^t.');
define('NONCE_SALT',       'a8h|**fpWn_BzZz+p2TYyKLeLnN.^M-F|UQxxgLhz>+s`i9@~@wZ @nUW488Lf[7');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', '');

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
