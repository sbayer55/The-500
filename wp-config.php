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
define('DB_NAME', 'wp_db');

/** MySQL database username */
define('DB_USER', 'wordpressd');

/** MySQL database password */
define('DB_PASSWORD', 'Mageing7');

/** MySQL hostname */
define('DB_HOST', '127.0.0.1');

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
define('AUTH_KEY',         '<<!~A]8zW>9@)4,-7^T9,:AMMn!|.(MP(I4L`kDVF%).T1k@PBJtA`NnD0jF00XI');
define('SECURE_AUTH_KEY',  'hkVX50!~3_Q<c-DNd4;1bmljaBR;C1bzXbN-D-00J|xefn;!!!F1{iCK|Am$;SIZ');
define('LOGGED_IN_KEY',    '&S,zqRRg-Cmrd-YdE-y82(C6t1!X8TKWD& H*`st`SpcKLRUbc5T])t/-y&jCCmX');
define('NONCE_KEY',        '07X5Gwf4UsO&Fme,2w&%j8SWS(#q(%[^l Y`Ua1mmuk*=?W]XT)A!`pdHZk 1cYq');
define('AUTH_SALT',        'e)g+o5?9!D&b+i.[vaOZ#=:pjG]+5tv#cnG48AePbfb1W[rBgFnG?yQ;czZ;<|?;');
define('SECURE_AUTH_SALT', 'nE;b}DPl<2@QdnL-7KQ}eRg@7=j8*h`puhXBAj|f`lQ(,5u9!+M757CwG5blTS)?');
define('LOGGED_IN_SALT',   '5H)/y];99Da|:q}LM_9xJ&+!vbKdzTHU-hr|z&r|I 5<-1n T t;<RP|+W-L@e@H');
define('NONCE_SALT',       'mUXXsNlR0-xp2+,@Gi60|CM3#wZ(ss&&Yk!OGD{qj`p}H6pG[l#=]?d[XqLc&1!^');

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
