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
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'adoptabook_blog');

/** MySQL database username */
define('DB_USER', 'wpsrv');

/** MySQL database password */
define('DB_PASSWORD', 'NgBrTF3jYn');

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
define('AUTH_KEY',         '{+0B0Xh=k|m{slDyVO9W:S^m}H!ue=fB|Fn9cT~~]dWQbymt;Y9QK~1HCR6)Q!F:');
define('SECURE_AUTH_KEY',  '-DvvFJ|HLO3< $tjVGC`oUN,9AW8^~S&!M>984:afMNx-g2RM}&Txwv}pCqCxK/f');
define('LOGGED_IN_KEY',    '$jLTLirNRss]vX;->YkTV:W~T0Z33)l53[+bT7f7>WYd4ZEnMtKIH--?}KxbMRFR');
define('NONCE_KEY',        '<|l:p|-a4X%{H &[lw=_IR8-yIb&9j7-2r|8a2anSY|OO4c~,>Al5iu&sa538r89');
define('AUTH_SALT',        '9}.e!0w|V&_X7q4:gchrh|Is}uZ;sz723nig]!D30&su/G?6mEQcI+]V`,:p@hB-');
define('SECURE_AUTH_SALT', '<_2bm$f<x-Ci/>yM@$ :rl{iss^~6eFEXnpP,P8Z.CyT]f:sL2|4.R4(RhAl8Zw.');
define('LOGGED_IN_SALT',   ' W{s4oup4tN8+.7x|J`iHsF_B8l}gQ4&Y9Qy}`:5%|}^a4M*&(<hcxHl?*PsHNt5');
define('NONCE_SALT',       'UENRm$mU}<p|@Bs-eu-Eli]TSMem&RFlTRNhzffNLmdG+(|u5PwQQ<qAO^HDy/TU');

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
define('SCRIPT_DEBUG', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

define('FS_METHOD', 'direct');