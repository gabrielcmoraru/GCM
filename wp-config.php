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
define('DB_USER', 'wordpressadmin');

/** MySQL database password */
define('DB_PASSWORD', 'admin');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('FS_METHOD', 'direct');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'DWCT~hhD.8eHj@*Q:rlc]1w8TRd.B !UY;1Y CLlhRj+!0d8:jAPuo:)+8r8L+nq');
define('SECURE_AUTH_KEY',  '//Q E+:6#c!e9r4%I9HmWj+?ad:V+5+gW^EhtBtNrwe}(SsLCC|7+L)d@K/n8]u2');
define('LOGGED_IN_KEY',    ')U+FHQR&+1F&2h^a&5z$_@A:?UX^2|4]p!o6hU%x5#l2Xk +2r{p+nSb*3S0*c|]');
define('NONCE_KEY',        '+:/[LHJKEdmhH3%h0qvS>T-Vn)|G?S&P58}S[t0/[)>5d@~[V;lczFi]cPfp/P#L');
define('AUTH_SALT',        'J-oyZ$42~$CwL-4e:(b%W@2{+<qQJ^a=~eVb&.Qk+&,{-}Ad)4X-LXMgUH!{a?!W');
define('SECURE_AUTH_SALT', 'WWRy)$V8R#o>=0xr,qoPL-4O0-n%_`3@L)gXq<bfd cD{-g~6*`zYwz}hwV`w>G!');
define('LOGGED_IN_SALT',   'EKZW5NB4EX-MpS>fkoy$aq-0l5#KvZl`M:]OqLTcgv^JZ^idcrwoRw*(9]C%1]=W');
define('NONCE_SALT',       'uS##=Cj<Ko8c:jU.g%2-SA|4Gd/r !Avc.Lf!B4YC-lz%tc*YS7H^}Q fhZELA[@');
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
