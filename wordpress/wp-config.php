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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'bareenwordpressside_onetempshop' );

/** MySQL database username */
define( 'DB_USER', 'bareenwordpressside_onetempshop' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Fahrenheit451' );

/** MySQL hostname */
define( 'DB_HOST', 'bareenwordpressside.one.mysql' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'J9G5H-Q#+d2h*gcN!pg0fY|K.{gduR,z~;D:IDYPEtMTiQcR?K,jr]CSDtY@!0u~' );
define( 'SECURE_AUTH_KEY',  '~D>t#CZY.^M|!<GaDM^/(Z/.$=9.ZJpyL%SZud2IW/DZQ0itgHe>Y&nQ-TsH)Yuu' );
define( 'LOGGED_IN_KEY',    '<@z$g?G.);nfXx!4mD13vzSEQkM6{LvyegBiAnY0p[m_kxNFJ]jIPT)j%y>]V&Im' );
define( 'NONCE_KEY',        'iw1tqN87$?%DOTAn:>dgf&4+r*d@qND#,fxj*/#Y!n>Xnwe:bOaNVRe5rIq-cJ*h' );
define( 'AUTH_SALT',        '[*rFy})GbMeTm|R;~2IBy}g*5jI%WEN@=Sm ?3PGl3]-vBnoA@>%wyGmXHrQ~^PK' );
define( 'SECURE_AUTH_SALT', '-!uQ mGWje?T&8>dJf3i~*nl/UKLZ7Rz~53FOlNfZ6<xiAds6Lhej[X2k_i#q2A]' );
define( 'LOGGED_IN_SALT',   'Dsl;iM7~nAXqiU0=cJe$$`[3}u.9L_ctsz3t]`A]fE:D{XZiv^eAHkB`V57LQN!z' );
define( 'NONCE_SALT',       'Hh!-Wra=5W?&tSo~B^3N>kcCqsI(Q71<wRshI%yi`35FvPS?W|p2a8hj+z`;%|4:' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
