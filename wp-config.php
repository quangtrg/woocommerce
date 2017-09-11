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
define('DB_NAME', 'wordpress_fgc_woocommerce');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

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
define('AUTH_KEY',         'UBii[=o-W>e_4e_VW+uQ%$[=Q1k.o:5O5k-.4Inot1Re* {U, ICx4%iHgaL[LBy');
define('SECURE_AUTH_KEY',  'Po@b7%2/tx(PnVvwbSj!Z(V Z]D2(4~1GC.nI<|}adZE$ A1k+C h%,NCB/^9<BN');
define('LOGGED_IN_KEY',    'jVxr@Qy~N2?P=:ufjZ6_Mlvl<c|d.F$liT&=RElXkaRis)AxB-O%E+{g+684OSGb');
define('NONCE_KEY',        '!miunj8cX|do.;3o5^jj,Sg#{g&[Blpt] R87b9Qv_+Sv x7]U#BY@P*B6l)W+Z^');
define('AUTH_SALT',        '|wOJf*Q1.Mq83$oD;ac&y03c![+bDj86G&>Wg2QNV`C,e!K;I,1CR(9@%5 .bmEW');
define('SECURE_AUTH_SALT', '2$DDUQ[Op`Me;yNPBZ@E#.>%4~UtXs?S*:[{I3*2)$P{UIE2M|$ MA~eT7ztg36*');
define('LOGGED_IN_SALT',   '|/].?|TDU{$7Ydq)+%,y}| $g.a-ToyU2Sp.[/1/G, ^}a4Z[`N?5h g+Z)eeKv(');
define('NONCE_SALT',       '~UHTYEe>bw*()ago`3=(:%3Vhs`JTBy51]jlW|Jpbm $yXN4^B_6mD&0U:0iH@{i');

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
