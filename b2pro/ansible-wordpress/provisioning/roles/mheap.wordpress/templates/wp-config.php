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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'wordpress');

/** MySQL database password */
define('DB_PASSWORD', 'bananas');

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
define('AUTH_KEY',         't{Rv$+pkS|XK27 9A-i<~In.XDw@lhs2v|S{h.xtlP&_~ygaJ=V<%*L_)}95VQ,C');
define('SECURE_AUTH_KEY',  'SR6: _w,t~^z(Lhzl+pNoY#+|o5 oxaBeqDV2w4nZh2sq!oZzLE^kI%0+k|jAI$ ');
define('LOGGED_IN_KEY',    '{W ZUlPSJE7I4qo#8KR!L:jg1]}++QTXH$o_r/Q7C~i+(OqOn*h/0Rr!-8+lTicn');
define('NONCE_KEY',        's6ZHKZ2!b  h#-_bMo!6Z#=/5q#q b`|H}~W`lsc~,V5w)>=b$%(z!#H`F9pSkRK');
define('AUTH_SALT',        'Sard}~s0pb^(QaP.->. fBqM/!Ksu>r(<YfNo+|.%NBisOrp9Oc>tn9dSDIz}X/D');
define('SECURE_AUTH_SALT', '1KD;rrroTF 7x(7agw6LM1lmL]jzpV[-&JB|$o.g3<mIa;N97:(<4zr7Xg-,#Wa3');
define('LOGGED_IN_SALT',   '-oyUc{*@ucKUMX!^<b]-9k@vB59xm 5-*MY2&S.-;YA&`|=I~+X7_FJ6zgcFDMLf');
define('NONCE_SALT',       '{-Jn%=5~i*<hV@S0#S|BJ$<.PD!QQ.fOGd%MW+qssicZVjnSqB;zd|Nj0,iC]([$');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
