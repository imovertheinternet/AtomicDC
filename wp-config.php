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
define('DB_NAME', 'atomic_wp');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'Q6-DRD3},%A %.QA^U1LPh}.H)VjX^#PJ%Kf@jGF}_Y(Nq+kN=gQsOBTk+7i4O8/');
define('SECURE_AUTH_KEY',  '|}!UNF47?KPuX$#tv&h~xS}QB_Anb7G=t>{G9o-jQPA]hvH&h[M8fxsu*Ounjz&T');
define('LOGGED_IN_KEY',    '{#^KVKtTys8Ol:PZ{d-n0+nm$^S7IQT-tlwvFW`=Za9}zMAUZXQWFEOIsI9SGib,');
define('NONCE_KEY',        '*c~{MYPu/GE9-/e+wz7R+i/=G%&x7JM< tU.YD>s:;Qp{bbhW6B]s;1VL~Zuzf]c');
define('AUTH_SALT',        '!*pGS,B!~5E:>!~9er,.q7hX9/e2|reTB3jp8+-.iGTg&<E 5=.GnBl^/KJN$v6f');
define('SECURE_AUTH_SALT', 'XZypjc,:7#wt(=V~A-}Lq=hrveD<kF =bd$HM5q;SufhX49yYMD!4|s!}PnOMG^r');
define('LOGGED_IN_SALT',   '>&+h}m0T}-=~1G/O%#}CY8=YYWh1rr/R|>tO@=V|mXi2k[VB*TQ+j}uUdbdmGr7|');
define('NONCE_SALT',       'd(feVfsie517{z_L|#ipu}i*8dbF*a,yUx+nv!zy{!8FJ~$]<sIS-u!g`w 39W!+');

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

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
