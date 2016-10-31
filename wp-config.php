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
define('AUTH_KEY',         '6I_6?Q5jk^: N6e!q-/Ft{-=ZB(2r0!_dJ1=]Rw!`rwBkh|-]0`$2ah(Wy`A/ki}');
define('SECURE_AUTH_KEY',  'znO+3sRi$L=oJgA@_%K1/r9g4Ee::~>2W(7wKy0/_,Dt<cK~1}>hsCvP_fl& ._>');
define('LOGGED_IN_KEY',    ':Y+BGPOj D2_|$.?}z>%5kc9r@aLnRla/P$.E<;V1UrC.oC0YT+F*KA:rfK04h?#');
define('NONCE_KEY',        '>ko9l)#f^$ww%o5K$_=X]>Zs# _=1bW#F? v@X+k}EV)DCxcgArc<){rbCLn[<UF');
define('AUTH_SALT',        'B9g@l#/**_~1%w@]GA-v )ZuOr@V-Pg&QrP]c8b5-ZHm15(5^^1x/|pH.>J^j.14');
define('SECURE_AUTH_SALT', '2b/AgxU0p]%}cyp8BnPa(dhAX-*x6w7FG&xc[j5EdnO&5=vkrb_XBV&gj+@S7r=|');
define('LOGGED_IN_SALT',   'ur~5&GA*8>P+?dw<^iYJROd2Iyx;J)Xbf4?P+]~)&!/4QyB4c-/G?1^I[QKBTx]p');
define('NONCE_SALT',       ' Yf(gi~y@1u;8(B:PkRlk).iBT>^LAq#M![;w|Yj/;Be+v:`G^Gh*9DgPFY9jFlv');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'goudhaantje_';

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
