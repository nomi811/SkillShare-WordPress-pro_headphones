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
define('DB_NAME', 'pro-headphones');

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
define('AUTH_KEY',         'P5b|(BMFTX07a ukgi|SpL(>H}lcSd[4nVqXb9G7V(ls]Fv[}]$qX27%xkFRV!H.');
define('SECURE_AUTH_KEY',  '*./uQu4B{!zRFkTo@5/g:$8}|ma4+Nycs}b^0/{zkGYD{.2X-KHtX.f3zz#5ip`k');
define('LOGGED_IN_KEY',    'L@KFlnnW?Jc4HcS!EX|wg+{1VgD`[N^+4:ifD*>>n*?OnZdevmj=DX6TB?SoV`Wt');
define('NONCE_KEY',        '%i83xNsVHxQL=-<>L1T![pn7t>FOL!^&<1__XxZkUGidDa,S;U!W6eFT<_]qh*$|');
define('AUTH_SALT',        'Pa74b]+zR5vQEgqB8tF!wx!jB?b_ZbrPFjZYbBRNO8<]p&ml^Wx^rPi<owQ(.5&&');
define('SECURE_AUTH_SALT', 'B2m?H%0*g]^Ih_+8Yhsh:HArwp<MvrQigLfF;#7NeEa1?c?U/(OcSk~p2f$s87Y;');
define('LOGGED_IN_SALT',   'hj9KWu,)642qs`Sbc0r;-~G>N`|)+xF^g}.ml{=>,+LvsB}SxcTwF,}X5tD8MsqO');
define('NONCE_SALT',       'Al02:/[3cZJMS!:S|DX(JMl.IGs!Vd4#Y^fm)?)%d<E$GsGIe9Q &r8/k*VY+Ix4');

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
