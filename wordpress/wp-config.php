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
define('DB_NAME', 'etatch');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '7eight9');

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
define('AUTH_KEY',         '$`Y8I}1xbJHmj5x)[0NMjs{Xqo1R!K6Yo*-Zc?2mTXiEf+i5.J698L+wZV,7{|[~');
define('SECURE_AUTH_KEY',  'CZzV2sL-%K|>3tpL&M@;.}Urb$dp|2x%zlgpZI%kV{#[p9ZrAsEQPJ=;Dr-+Ak;>');
define('LOGGED_IN_KEY',    'Y&+U AE[Do]ly8`(J~5VL*0nA,$X7?>rWpusH kcL/r|i;,7nM84(z| *Tpps A(');
define('NONCE_KEY',        'f+5]{.#ruHPzHazR#+Gg/Y4V3[^n8%U?/m,YGzK`$PmAFbC8-?Q.|Om|6[1eF+6A');
define('AUTH_SALT',        'jQ5n+5nvKUXpSGeazqw[QwMMP!V%$(2HLHp)~^+gZW-3_BTZ8m^|Yvhk/K=OfrZm');
define('SECURE_AUTH_SALT', '|UDOKI@*,2.UD0S~;t95_-rwt]k$O%Dk+@iE{UvX:&lC5jqp0V6tj_?zsiGY<xtJ');
define('LOGGED_IN_SALT',   '8M#1nwTy0b`+NEoG1MKY3#fApaPBO9#^J[%`/?U^A6 # X<g*?tVA[{at#i$&EAu');
define('NONCE_SALT',       'R`7h~ym0Uc,*}fjQd+@@4ofG_7Q54Bk18H-dV-=5ZO|k* cK}Nq-5PWzhl%/HINo');

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
