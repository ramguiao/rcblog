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
define('DB_NAME', 'rc_blog');

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

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '%[eJ/^;zNw+l19@]B~Ev_uh-ieo[=_7*3U};VHa2Wd*c&4MQ:ferMau&A~`E0,WA');
define('SECURE_AUTH_KEY',  '^Hl9Y:E#13([Di2VM1 w%~lxH;cbT39_DuIHS|G8o~d=A[A?4NDv(Z3wZ#u4vr*x');
define('LOGGED_IN_KEY',    'e[!EoC7$hZA3o}Ct<gy3wfx_Mz|.R<fh8BB3,q~M}>WBSuo>G/7;W?!Q&Y9,6@JG');
define('NONCE_KEY',        '[ 4gnmSF_AeeZPUB0qid(2):kzg|0mjiqFQ5`IT<?VWUDYt=QBd;V_SN!6^M{%s(');
define('AUTH_SALT',        '&Rh/8E~ahr>[z/m0yocAx$cP45%AI>{:?r-Ew1NF?a(psp{O:}9M=@J`*u^|XSGE');
define('SECURE_AUTH_SALT', ',(Zc,0)Gth=B6Fb3I[,7<@KxA0ZhHsQm7U__AFk:NtInBi9XcPI-sDHB5*K54iag');
define('LOGGED_IN_SALT',   '=edVz#GosLPB=jFbt)|MeUPvY&1<a3L8xq32|:~fjLw[Wh[{`EF7xevd}oi]9PGx');
define('NONCE_SALT',       'lr4Dy<|C14!_[1uH>QCDAGeq6&$AsmLvN# dv}W($fIE/<{j7qnV*on*sdI&DF:c');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'rc_';

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
