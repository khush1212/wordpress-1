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

define('FS_METHOD','direct');
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'root' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',         'lbo<>)+bQ_*<>xA:sfC{(f<W%.}{[+iZA79;{0v|2u7y(x#a@)c!vz`^O1lQt!a]' );
define( 'SECURE_AUTH_KEY',  'rVdR+vjqB>ZX*LL?S<aJexpEN=Lc`7iTcjcDkyAc&ZFHTC-5;LM6/{<lRfqSc/]q' );
define( 'LOGGED_IN_KEY',    'c>tsc[WE5VQNQ%O1)euM=SNbF6!K]Rh4bXHZDyF;)hb!`DTw(zsop-DMTG6#39|d' );
define( 'NONCE_KEY',        'bM1:~K%jE`6e7%t!B4}FmO~V_Aia-9[zO[9`p$+#]&+OuBao N(NY~V }b!>gWU,' );
define( 'AUTH_SALT',        'B_BG*-?6=BT8ksjt^t$xP%12t7bOdq0yKr+9q*r_@~QB]s@I,W>k%1@<%UOKEh]f' );
define( 'SECURE_AUTH_SALT', '~V&562lnc2q:4E&lBFS`%F>gz_EGY[H6iDe}!+Q?23Q%X=psX~IoK$g*(ptKNfWi' );
define( 'LOGGED_IN_SALT',   'f*Sd*Z,d5FXUZT!Kn|c)1NYeh-:}%$Cs<i)V1Ya M-*ZMzT[B)(qD*p$cieli.2;' );
define( 'NONCE_SALT',       'nW gWdlZpPr}Xaf*kIP q~XhvQl,VzJ?BTSBc?_VtlTiWE%s04:g5a^*4dQbUWj<' );

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
