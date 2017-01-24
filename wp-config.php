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
define('DB_NAME', 'carbon');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'M4th3vsh3nr1');

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
define('AUTH_KEY',         '6Gw^q3r}^x[c5|Vfi&%UXP[ uR|teF?!hd-LlYrH2V4}k%Sx{L~9Wf/.],&0z:3g');
define('SECURE_AUTH_KEY',  'W7o=weu2y-lIz[f:FIj8fQ!|d-OEin]{sE^bR.*ailD83@!8t4O2PrhSs`! bLCm');
define('LOGGED_IN_KEY',    'Ed:#-m$:j,f_dl;4!Vr:]H&#EBdLqk21yZsqN$X28oGN9d}2*I@o-(_tBQ@R8~B2');
define('NONCE_KEY',        'KMEH}4%)+jdt)p3Nt}!V.o/xlM$L LI]}`&HA$x#?h]>+N$86<X[S* KbD?yyY5>');
define('AUTH_SALT',        ':}{YRCj(!LZjKS+eMe0!YvDH,`vInlyK_dk](,o`GwE?`%J,dv]kSstOqNEHnC-p');
define('SECURE_AUTH_SALT', 'y4wCK^tM4;k#UTBIC%kOfh+l2>wGexRZ$:pVw8v?)FmlW$S8^YPL~80J-F2}L1xI');
define('LOGGED_IN_SALT',   '%E sqd .SFCT/Vqj|_HAS_!HD:Mmj(^gk7{2?lg0:Z<v#v_*~Q2!RhE7-0APyD c');
define('NONCE_SALT',       '//m+syr/&<-PB~|Pm3$yAf$&4d)&!`_wVvXzn!Ljx5!<DNa|qQN3mR9(0=w16Hgt');

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
define('FS_METHOD','direct');

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
