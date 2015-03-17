<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */
 
define('WP_SITEURL', 'http://' . $_SERVER['SERVER_NAME'] . '/scarlet/wordpress');
define('WP_HOME',    'http://' . $_SERVER['SERVER_NAME'] . '/scarlet');

define('WP_CONTENT_DIR', dirname( __FILE__ ) . '/wp-content');
define('WP_CONTENT_URL', 'http://' . $_SERVER['SERVER_NAME'] . '/scarlet/wp-content');

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'scarlet');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'JvQ;0#n7{1# y(/=F|7 /oG0:/L]N IuB+J8!Xk,S_j;t<D=OTZ3T,kaSH`CRc0W');
define('SECURE_AUTH_KEY',  'u+}@g.)|gqUEwLv4Xj4AN.|l&;H%}2Xx]99Z]H+6}jQq9<F=e+Nh,3zT*e(2(h1+');
define('LOGGED_IN_KEY',    'NV-CYCuCDV;V7-aS=V+J!9Zw3.Ev_B.m(O-qt t<r$f7U<-H(`{|+c`Y|ti&#Kc2');
define('NONCE_KEY',        'Org8C2*$ffIgEfxY )Vb!?V(h>Up(<zAP!RJ9l)(>#vu;5=&ut2_b7*5SO)FP@V(');
define('AUTH_SALT',        'CP5*D>j;ab H|ugeNM;V_QJ-A[Bd!m|74?|UuYBGD+1D#f#_U=_F+1>:7DuF2@3h');
define('SECURE_AUTH_SALT', '01MC#yVXd6E1<fF?-iR<)dE$y|s~:QCH*2+{T}`z9LRIS+@V<*y0$IC9#PBop,Yw');
define('LOGGED_IN_SALT',   'j=GMk5%S%bYj9Yl6[ayV#_JHAU$52~6sgz}q3e^#@]0[ot- 4e/wjr~RdZm}yu+L');
define('NONCE_SALT',       'N`A&%ktIu3SN*N7!l~AJg;^h@TZ#qJ15?=eBP&R(u=k#3i|I77&YxxNf#T_-8~8F');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
