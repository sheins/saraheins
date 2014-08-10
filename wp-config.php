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
define('DB_NAME', 'saraheins');

/** MySQL database username */
define('DB_USER', 'thesaraheins');

/** MySQL database password */
define('DB_PASSWORD', 'overlandpark');

/** MySQL hostname */
define('DB_HOST', 'saraheins.local');

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
define('AUTH_KEY',         '7=X-k0:5dAWrT&d;B)_.@{(%4Yl>,&%p>VX/`6Kz%MV9cdrWyrjt`9gp8DiKv yB');
define('SECURE_AUTH_KEY',  'DJ|[v_8TYs~Is*B{>:0Xs:,i?9B!K~-F;~7-5kH<,O{i7~uBl=l]-Bt]_$@mM3{f');
define('LOGGED_IN_KEY',    '|/8{P}o;.TU/+q~|!ult7Ymo&;!y/}:6rdi2,u_%Bhds%x&PXB/xp-}>r<Sm(n(a');
define('NONCE_KEY',        '!T@+O^k/DG]||AYd2#NH 9 ;L<S2Xp+7k>{[P*MeB@:-.9}Fm!~bkwT6 }Ui@q|@');
define('AUTH_SALT',        'cKqXq;,SB_2fKaiLwiBR[.:GoVif}kp?8dArV/Yweoj}5WP,yyWShLbQ1_M%QOwc');
define('SECURE_AUTH_SALT', 'QZ|te|(y}yN]Pc`cH0!oGVvNbGPIC9aH7>g;SBwvg%%*;2l&,1BAYsF/uXL@Be%p');
define('LOGGED_IN_SALT',   'r`p^qLCE;kFHd>JiE,acTy.tQ|1rc~+v|MY|v8K_`wD|Z<6)IJlnNjW2*h-,]Uj:');
define('NONCE_SALT',       'SC>49Ke#co]!&l0aAJZ7B-TP3/)cXU+@x/76tAOt9-wJ!9w$I+oA1d~>-OE&r.&-');

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
