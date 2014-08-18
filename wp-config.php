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
define('DB_NAME', 'wp_correio');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

define('WPLANG', 'pt_BR');


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'hGD)CG#HkBTb5H&0Vr+3j:U^~lL 5UfMc_J/TmA,A:2<1p7Iy,~tbZSpFiEv+o{L');
define('SECURE_AUTH_KEY',  'a{:!KCjDL{&zu%F:+a|+,[XPcz-E-K@S/[#K-i/*|a}9+7:+(.HPv?-H*OcSRM&%');
define('LOGGED_IN_KEY',    'tv;5y)?Jx0bUV$OqMe*},:)FXm]q~BW#1U?*=TkN>pmxGZ[(XfX7AA18kk0!Pp`t');
define('NONCE_KEY',        '9s}(b>a`gF|;&.fB<&&WF`;kz8>Wx3LCxY}cmqCj5:(.FT^mNE<>Ql5+?x@<D&FK');
define('AUTH_SALT',        'bJ&/6$caY.A+u[vf41IUE4yF;5+kAa8V15uI1=eCTK]@u82C*!_!y4x&O#<n-~9-');
define('SECURE_AUTH_SALT', 'FCg}?u<U=n&O[xQc/CB,8k1us6?;AcNbC}SsLor`-a~*wZ% Zw9OhOOxcQEP1$Fa');
define('LOGGED_IN_SALT',   '(Gm)T:,QX|!h/&wEO*wUckm`)|1T.Y6<9J6=u:y>qzJ1@$!~$#Eh{l:8 zN*Jd++');
define('NONCE_SALT',       '{Up-euk)d90+eq#k})1D<)7_MT&]mK<+l>pL8!#zk%.$c?PW|A^k}J_RX=9<`?$9');

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
