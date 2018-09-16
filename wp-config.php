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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wpallan' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'toor' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          'PkdVakW,,N%$}v l61|rN|PrqrU_[ZVo.~AiIe2Km,$URO6vDX}yu~8nqP2xeYC,' );
define( 'SECURE_AUTH_KEY',   'M~06%ZpxH0Sb#~m|`^Q8E).PD@?Pk:=}UWuMmsRuc}`J?h<6tCZH9W348NW?.fdG' );
define( 'LOGGED_IN_KEY',     'GWX:+t|F4L+jp)-TfR]{b>RRYSdxVEaLu6!|W4DnB6_k8Or1}*##^R|/3uGobn,J' );
define( 'NONCE_KEY',         'Mab| LgJoWmsP/,U=B5GNRXe{-ZbQC)laYj.MfG_j14$-is7[S4Uz2O$K-7ON&^G' );
define( 'AUTH_SALT',         'g RGfr=G(=cr4#IyTaxh5YX.kTFV>I$@{&KWqWtQVn}u^FtQ3#An%*#U?380PM3H' );
define( 'SECURE_AUTH_SALT',  'W*gGUq{E5fkOe:}#:KvC /Ma#(yi%}&;25KM9>2]w]z,bci~faDnfd`wZ4V=Ur6L' );
define( 'LOGGED_IN_SALT',    '4- Ue=o# 2A5q(irX6 PTk}-9H 9<{a.;2w:2u4.1@L8lnJ)3vi^RBqx^|thjdF,' );
define( 'NONCE_SALT',        'NPJTK4C8~i)RmFEaARH8[c|K?d19}R+|MnL?Jq:wyIUF->T/,Xl@yZEQn3>{xZX&' );
define( 'WP_CACHE_KEY_SALT', 'I0d*7nLlj1%pa1uIe@8b~Rps.0M0Ay?A<h7~iXWR@1?}1pDTKnZMpRjoxF_%^n^~' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';




/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
