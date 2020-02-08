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
define( 'DB_NAME', 'wordpress_custom' );

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
define( 'AUTH_KEY',         'jw*z;Xb,xxBbfVFb97fLZyiyL4K !!cz_Pr*UgC3|q=S2RXJ3JTE6qjVt7EAriUW' );
define( 'SECURE_AUTH_KEY',  'g+R9ydMRrxtYF!?XN(9<~nZG>Ogxx6m0kcW_e~rZ@,IzO,J%=&?Wfi,KiKFr&{KW' );
define( 'LOGGED_IN_KEY',    '4NF7-/AOn_}]sbug!c|]Br<KR`lch[H&~Pyj/_Ss<1.b}G(db+F{,bJ+uv!%SE^b' );
define( 'NONCE_KEY',        ';mn7Q{`%{cvyv95MT#b$E, /8(i):siFv*l%<Lx:X&Lza+#|pKl.eO}]*dlEUf5}' );
define( 'AUTH_SALT',        'FID^bi%x}[]7PiGKM9|@%wscJTDBY?SQTFdXmwh`].|:r@sVI1@B{OijF7y#%;~?' );
define( 'SECURE_AUTH_SALT', '|@_so@$,hCgMhLok`yDX$F>cLOxx$Z[])EPkDEu5eeO+shJIB@QlQi]G?ClUmDvZ' );
define( 'LOGGED_IN_SALT',   'SV#mTli:THgkjh#/5j+D$7z pRd76i.Q9@r5dagJ5L3G5OsV+yHMOCb;mT!oFN~R' );
define( 'NONCE_SALT',       '$=Xi_b9<suBOs&|^FfAbGK*lfwg)_~6x<=Ft.9ERa?|bBt$s_QSwVse`{s-PD:_+' );

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
