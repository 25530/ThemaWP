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
define( 'DB_NAME', 'c3679SamWP' );

/** MySQL database username */
define( 'DB_USER', 'c3679Sam' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wachtffwoord' );

/** MySQL hostname */
define( 'DB_HOST', '127.0.0.1' );

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
define( 'AUTH_KEY',         'y[-<wK48fd#.?Opf7>EVJTvEpq{SJ 1_e<AC58Imz(wtO1 {0>/jYhAXo(Dfqq[J' );
define( 'SECURE_AUTH_KEY',  '1~lkn@TsB#tCOz3R5fZ}7P}E0`Lc=o>BCVDiM`@KN9gqA&/lyIQ_Z:51O~=G-}#c' );
define( 'LOGGED_IN_KEY',    '2y1TkIH8fUCspG;GqHOXuxTkWPAOq^&*&eS;7c7jGq|&%ya{LzyJi<6?W.PWtzsO' );
define( 'NONCE_KEY',        '9ZJO}FEtuKg;AlA#Z~]%j8X_H){[7W.wsJv2z|#1tedQavC2`H$SgJZGw0N$k88k' );
define( 'AUTH_SALT',        '~@j4Psd_>1gT)_?Kz+-BKVZ97Mua`pPm@U]qaP4QVEL 4O5{Q}Mr9Mg|E<+DH)]}' );
define( 'SECURE_AUTH_SALT', 'JYjk$(zB`yZ<8Kem70qD4B%p)sm2ue;S;*pU[PVs<|P`6#ZOgPAi_0(v~y/QYZ2b' );
define( 'LOGGED_IN_SALT',   'uf2 cr~SJ,t.!Cuneb0OY5w5QtWdXrvK3d)v&B/-%GY]q1E_H4xMt^TDxDNMp8^8' );
define( 'NONCE_SALT',       '[5)`U<#b0>YC:@se2^TvA?ilFYw<md/og8O{l[zSW]^#7Ou!$Sj-@:8?{BxVbu7R' );

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
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
