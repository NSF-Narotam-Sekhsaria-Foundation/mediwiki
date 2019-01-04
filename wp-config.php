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
define('DB_NAME', 'pzaltmmy_mediwiki');

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
define('AUTH_KEY',         ':aq0k*pW&.T{T6l[^A[J[zqF%f|BINz=leQ)V%c;}f&FxZvf6:~BiGd{>1M+tsIt');
define('SECURE_AUTH_KEY',  'W~yZ~O T]-pezD/1oo-O7PF@[K?VkqU;@6LXmBw&zf[z<`his_zQK  ]nxoPN@[?');
define('LOGGED_IN_KEY',    'Y&k+N.H2z&a64cK.1b+PNX)gEr(ziLSI2*ud/RQ^YRwVl{@7y*:*?~+x17dAHqc!');
define('NONCE_KEY',        'yZOEA7z| r8hH-7TrE/bmj+|K5H:{`7k5b6Y_:zI4Qg/Tqn59$q>nGDb@jR`xeys');
define('AUTH_SALT',        'Bsw#4~V+5u!sd5XTP/cjd(jV.UJ:?K3Ebl&Woi_6 hFHg=C%$p!p_7%K!PWo(aY~');
define('SECURE_AUTH_SALT', 'zG(5ya]|;metDkP3dll/xpzq4v/fMz0cI!zj6]UE@$WGAb]Xd0oEA%0&=3BH#vSv');
define('LOGGED_IN_SALT',   '-_f>Z?tHE!({/{RtlvJmoU`7kR|}c@C#{.wWD3s6Xp3[|~nEyw8xu,0FE9(SAByC');
define('NONCE_SALT',       'J*zM22zGvN*li~dH,4$mFa~Pzrbw>{e0UytO?& $bfPk&$Q_MPcNYA?(Wj?ia#[P');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'medi_';

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

define( 'DISALLOW_FILE_EDIT', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
