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
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123456');

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
define('AUTH_KEY',         'L%ga709lKMO`JiI5E-7-f.7:tQ}S,EY|]a-}b)j3Qih<HruF7J}C,v{+ckHx_nQ&');
define('SECURE_AUTH_KEY',  '=@4z.R6LnaFU[y=0jZ$U-kV)SeVIWrhH5`.3X(!|6w;intm7@y%FS}rK.g+4-1B,');
define('LOGGED_IN_KEY',    'lpS:gl}X/s@eF!a=;+mnj(N@_^s/r]$aYViRR^ nRI84/db.kq3v }y?UDw]D,fM');
define('NONCE_KEY',        '4-DLxZ1f0Ya8C/*VT4$mFJ5oSn]gFDI5)RoLU>zK4=;Vr5ui6WW&/1GE?dF.KRM9');
define('AUTH_SALT',        '|tTXujb?og9a;j,hx*y|z 2&ChELx?xCkl%QT5efT>`;zXIyBsa<3,MOCtPXgyzv');
define('SECURE_AUTH_SALT', 'wC/_xDQjpDa6em*~&SK{?iX[@)6yOeG.&yH7 I/w?jS]{0^7ssV^]gOsU`5-J*U-');
define('LOGGED_IN_SALT',   '7BAc@&l`#P2M=4g7:#gzXb7WdF03{q.Ww1y9XJ%$2,h^B:Q<GUi{%jReroIkS+F<');
define('NONCE_SALT',       '7~Wp1<J>& wH4Q4E90_rbDx^A{&(@N7&P$NQ;MF%G{hsoJ8hLnD/+|VC~2T60i8[');

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
