<?php
/**
 * Tsss asdasddffhe base configurations of the WordPress.
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

define('WP_SITEURL', 'http://localhost/~darionovoa/AAF');
define('WP_HOME', 'http://localhost/~darionovoa/AAF');


define('WP_DEFAULT_THEME', 'AAF');

/** The name of the database for WordPress */
define('DB_NAME', 'AAF');

/** MySQL database username */
define('DB_USER', 'aaf');

/** MySQL database password */
define('DB_PASSWORD', 'aaf');

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
define('AUTH_KEY',         'r!9b{s-3|+#V%gX,sv:LSAIRP!FcIy(y7ML4[u[NB(G7&+m%~@/F-a[Bnw-Yi%E]');
define('SECURE_AUTH_KEY',  '9%%Uc`PJbH1Q*[&H~Stp$h/mdh$w{6sP*;>#0e+c&G^X8;^k$gz= M6!v){.1?h6');
define('LOGGED_IN_KEY',    'u{6HSJQOD,u.ct0z,Fe}mV,$-;^dGn]HSVQ#8`1%wSa4=~t0T83^a%fZ)X`JoZJr');
define('NONCE_KEY',        '6i3Uyhi/~T?,qkx[!^AM,#Rg_T;p-l{#5<Z<O< =WD7UWAqi*@G3P $O&06/.3F!');
define('AUTH_SALT',        ':tk4o)qj{+=kxS)iaLeKYP<,#*XlkEow$)-UZimJ%P| {.,k!idro~ X#%w_stOX');
define('SECURE_AUTH_SALT', '1gTLbzjc(H%,~gaWG=c9kjIN-ST!6h2-HK7+Rr-c.m,fE6a9!pm~ryN?%,aba~N0');
define('LOGGED_IN_SALT',   ']-Pn>%g+4F>.iefe({:.fzrEco+)N^A?7ISlri$/@J)JfHx7a|rz+<(-QbOQb | ');
define('NONCE_SALT',       'zgnur*k8`_I|?:e5niK&[Zq2Szfo6d:ypAjLMp,QQ@tz-iE0M^!sTxh_6)pr|Hp+');

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
