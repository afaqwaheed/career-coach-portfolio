<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'local' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',          '6K]Au*$gNtxT)[;O>J}<3NMhI:[u4TDr<=F7Nt}GrXiO*A:!g;DN[tcqAUhpQVjy' );
define( 'SECURE_AUTH_KEY',   'Dk~QHgujjlkbV-$g&%gWjAkH[3=+tc/)t[Cw4Cxw B8]ygyd,uv>fCQOf-mU}xa ' );
define( 'LOGGED_IN_KEY',     '5UkjkiNjJSKj-}>Mq(CV?8PSn<@g76K5x~W; fEaPmP;&4IR#nS46B/xnKEza-_2' );
define( 'NONCE_KEY',         '-,<aSDkEZ]B^H62Sk/si2JKH]Vy:apD4l{=CYWg4n~NLM-D*@]IB4sep6^-5a;[F' );
define( 'AUTH_SALT',         'zE3&kL/T_P}q5MM)Ja~$whTOy#~eeraqUCfK)k.4jBg::b$f[|52kAb7%|!C,T]H' );
define( 'SECURE_AUTH_SALT',  '*/nngo}/fP,_SQjT&Elt0g#C_3MsDV2ITr&2? *OAs[{/-QpE^kpH1|6]pLdKngr' );
define( 'LOGGED_IN_SALT',    '-B/&(#nnj<2bkiH.1Q~{Bv7xCH/CHVZ0IY*>X`hx;=R`-Fe3kz4xQygTv.P@8oVW' );
define( 'NONCE_SALT',        '(&;;7rF73xH;7&[j-4rFZ-@v^}T>5I;UDB7Xv3o`|PZWj%%*+B?mb=ElEDyEC3=m' );
define( 'WP_CACHE_KEY_SALT', '+:|wf0/,$7H:OD-0r+e|{7mk8c}*f;WDN(%# i-oTOOR[<R_w6s=!O$1ys8]lz77' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'WP_ENVIRONMENT_TYPE', 'local' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
