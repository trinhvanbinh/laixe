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

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'laixe.local');

/** MySQL database username */
define('DB_USER', 'devlaixe');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         '_D*XVN|RD,=E<a1/FZ[u|+|k|}]Wv+f-Q}MeZbb>BADHM<1w<+@th1&/1%s7/7mX');
define('SECURE_AUTH_KEY',  'qq>3f~A+r=En;1z^&+:H4aDRLZQ ENQ7]n[v?yb!Rov^ t~i38%t0p1bthy3r&91');
define('LOGGED_IN_KEY',    'dN&}G?TwP.i^&RU94k|UhtY{,#cx$5WT,Fq/ ?`Oc-T+If9K1cFvQkSyb39~{|b(');
define('NONCE_KEY',        ',&hCujVaAaO<}04@rRq|L|A% wv|zI=.2Upu&QCne9d;=h^#Ehmxg-Fwj5.h_f]Z');
define('AUTH_SALT',        'fUtcr896ELl0Y:I*p+zm?%iE{Tk8^NEN D2m9gmMh0}|ov-dqKwGX9-*wF5-C!zL');
define('SECURE_AUTH_SALT', '$-U^TZb>kBf|>nCJRH{AMP q(i-N[HFS]i|tF-u%|+)!AnH3|q+;K|;^,BXJ+08|');
define('LOGGED_IN_SALT',   'fh*-FL-|Yv=~;k2v2Q #N+G%gsUY+*Q *a6^#*N[2NQ1r:&X_&Q 1x!z*BKHZy!r');
define('NONCE_SALT',       'L]{D,G+5m1;+E6NQ>xE60f<o_+9DV4>y7rxG_KW]2t4wVjGNg>ENT|+DB?Z5Hj>z');

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
