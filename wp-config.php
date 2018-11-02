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
define('DB_NAME', 'crystal');

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
define('AUTH_KEY',         '0pSIA0cmpE<&vIw..Z]2BKio+f*zty9V}<]!P~^WJUplOF*qB(MI&AD#)p~`X%>O');
define('SECURE_AUTH_KEY',  'IT_qamqkq#wE0xKQ<mF>Xs==lu3$&3g|P;`~1*@hGUjd_.eXk/Nb}X#tTgZF2uCQ');
define('LOGGED_IN_KEY',    'tkpDbd]b*cweC|CtX`QrI6EeGRA)=:B7 @~9D~nu$@kb_*LKw7>1;*[oUsl|:_|b');
define('NONCE_KEY',        'X4Xf$3 4Bc.%&#]~=#MQ21ilan*@Q$V)vCS*]xib=EL/<bLtr22@DM9k1O Le^[u');
define('AUTH_SALT',        '/oX,3t7#tbCC4ix%xs//DQ%f|,gNdZMB8Z3)^{CL6mGM3!*UI@%FzHu*u=mX~TOj');
define('SECURE_AUTH_SALT', 'O(+M-9,%9p;Mazsv<$2P|N$O?fSIrvRFT.$4yN,z9}a(cUUeW2T`;/pQyBnX7L#%');
define('LOGGED_IN_SALT',   'vl/I5?)B:+nlLCK;r^bY@2HmOr7(dxJ<nog^zA|1Io{XV1-e]75w5:}S+:=WXcTf');
define('NONCE_SALT',       '7Gs@NQi.A[DQn7wT}C0=1DEEP.}~;A?YY|Td)t$8~Mnhy!=?R,5F[NM+0>>}GO+x');

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
