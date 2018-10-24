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
define('DB_NAME', 'new_edugestor');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '1234');

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
define('AUTH_KEY',         '?E?u!9Z]+vECV^5uoga4sK]95Chf{fQS- rYm|(vJCj{A!Vp!+d@C65RnAan)he/');
define('SECURE_AUTH_KEY',  'qd-azR0Ptfcf|doJ38r4{+(X/iEN_y_ j- CfdZR*{t4?S#*).*,F0#[-UIpr}YQ');
define('LOGGED_IN_KEY',    '^+@#[I[ZPjlFHZX^=ttEl}E d%z[Z5]HeI+L>l^?1V@!#jO36!nosG95YT(S-!5A');
define('NONCE_KEY',        '^F?P#qHf=#4l5Yb&Ssp3DBCv-o*4$-zxRS9r;5Zk0YgS],g7-W1}WioAN*<Ce((a');
define('AUTH_SALT',        'gw;r?e]9Lc[tJ).r{-t:&{7,?ekeu5DSmI4!uKUdg,FND3f3qI4@<QkVSo~=R&-e');
define('SECURE_AUTH_SALT', 'S!)QWvT@n0hvv^(bl]x;vCq{/<`w`{CKk/Kfncl4[w`g> yd+E^Ut@1ZeJxUP1cQ');
define('LOGGED_IN_SALT',   'Bu|QNO&s2]A+}sPqc$:BZikZ:e$PgI/)%<2I,!+lor-|{W,+[wlOogKn20YD DkE');
define('NONCE_SALT',       'jM^?7lg1?<hN?Jm+s*IX+E.151)9X?!2)QPLyLB|D3Yv6qR)FFx!rn mIu8m{GK1');
/**#@-*/
define ('WP_MEMORY_LIMIT', '256M');
/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'eg_';

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
