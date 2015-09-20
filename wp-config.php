<?php
if (isset($_SERVER["HTTP_X_FORWARDED_PROTO"]) && $_SERVER["HTTP_X_FORWARDED_PROTO"] == "https") $_SERVER["HTTPS"] = "on";
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link https://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'c9');

/** MySQL database username */
define('DB_USER', getenv('C9_USER'));

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', getenv('IP'));

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
define('AUTH_KEY',         '>f#9j[|S>(mEGmL6v@It]|<-=1KiHK6%_:I w/5x&nXrpqRenn&WF+w,/X)+|dVF');
define('SECURE_AUTH_KEY',  '2ur_N<%3+Ao>8uOo-$Ljg@yuCB/+mKjsWU+#Q,=55Fn!k|NvulSxXGJ[Wn/&Sf6k');
define('LOGGED_IN_KEY',    '[/XmZ(<-*Fy+a]qM+jY:=T|ug*_5ZZyR* 6S6jm_z+B5;T0-1QUo el8T8w-rwhU');
define('NONCE_KEY',        '!mlh+p>ug}mLvv}0K&w>QMH5k*f-^(q@|TKZB+)3RTZ}%(kNF/w6C8;2-3fjP0u-');
define('AUTH_SALT',        'uw]/D/WTChatM;MX&r=EbaA 5Nh~i<=bH%|p_Da*N18|CNxisGcD<U)}[D|q]H11');
define('SECURE_AUTH_SALT', '; bsu${R^#hxuQ3C-f!G7[}$l]@)M*Ku3}Y55bW~/|G<tA}7b[0cP6u3G-vmZFXY');
define('LOGGED_IN_SALT',   'P| h PCGd8/c!5$o_oP3Tfohj2M+ -Fq)&Og HwwUk+]CmOHzwJux.u1uo_-{=vX');
define('NONCE_SALT',       'V4K9DzKgub_9-3|}dqf]!lPXy5?f Ex>zL(MGr!m--gMG1H9u3M.?vm::z|pQzX2');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/** Post revisions limit */

define('WP_POST_REVISIONS', 5);

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];
$_SERVER["HTTP_HOST"] = $_SERVER["SERVER_NAME"];

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');