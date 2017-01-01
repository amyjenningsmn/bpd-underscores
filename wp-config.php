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
define('DB_NAME', 'bpd');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '[pp$oz<~x[xqfN$K{v~]w@rf$z#2iu^C]d2Df`Aa<((]e-AI?ON05R[|R;!U2wkC');
define('SECURE_AUTH_KEY',  '- ?-|<gu8-$,.W1f:`jx5e:>S1Bl!RTCZB/su,2>`eZddRBX{#fd9p/%0ci-gPyn');
define('LOGGED_IN_KEY',    '#0bj#oc>,4TpIdc7Xb{dcO&&La[lb2((x`NI&s0}KK]{:MpCq+ex}9lSp9FB8bA(');
define('NONCE_KEY',        'zc=_3bnSg}!Wu;O9>ra<!p,#/M2mBD@Q@v$T6r<*X/`/.*u{oYb3RcYfzB83Unyx');
define('AUTH_SALT',        'h~p~Nl^n[H|0DH->TXi8d6(0lGN{6)`.TD:Glg%OI=C3+CrT7<(fa U~9N)obe%m');
define('SECURE_AUTH_SALT', 'b:4Y&-~Hxyaaz`P[krtJ?qjotSFmPH}~VLn69^axsuBWRU6KuPZZzLz*R}4j~ab`');
define('LOGGED_IN_SALT',   '7OkTp@vNAa1xbd{f5bbBUB:-a=vR[!S=-[&.qB*(>N=^u`RH~=b%TtsBi5,fZ5S8');
define('NONCE_SALT',       '>2eil*ZzD>Ao>P^6Q`E-Gg&xf xXrlSZ-:X=.QWG8my@m0|?-6|Yt4#YOa+ #qvI');

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
define('WP_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
