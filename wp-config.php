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
define('DB_NAME', 'jjband');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'yGV/1p`-Bdaz%ZnaP>V)rEkDCgKI[j:J<7@$bK`B<mdBDsd=,eF~M*B72(]7X QV');
define('SECURE_AUTH_KEY',  '#`|S/@]8=5{Co%?Q$8W?x*hcSO3/<AU~XU(fzdcHVN,jC@).jSZ1oG7Omc)4Zbsj');
define('LOGGED_IN_KEY',    ';O@O_CpH!]0wjd*;vqmCcF4^MJ9J^s&RMUVKW-Xp&}77g{;{MT_1K*nAx5r[A~>y');
define('NONCE_KEY',        'e[%Kx1red}8D+o;>$.ws4ln5h+(`.54~z;as4YKX&hs239(rk-7HgLfO/A[&I_b_');
define('AUTH_SALT',        '-9&OetAL9gMH^@:z_fArO`]qS?n|*v(~-|Tfx|9l}*>..M5SMT~_,7-8H(GUY:7)');
define('SECURE_AUTH_SALT', 'QYlD4Q)n?cmyd.RrYgE/2sX/(JnzlsEwo)aw,6FnHe132^JDP:;?dKA<i$P`NRG7');
define('LOGGED_IN_SALT',   '9Il$`wqyy}lz|3.EmSMH,Q !Xddmy_,Q};Kb7{]sePR930++rqF#}$z+C=xor}#<');
define('NONCE_SALT',       '{_l.|y=Svde]!%!K.O6!]A+(7r:yK}v Uz1x-]p}*Iib>ni5/Q>:PJ(|A7nVz2f+');

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
