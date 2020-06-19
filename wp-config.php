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
define( 'DB_NAME', 'wordpress_db' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

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
define( 'AUTH_KEY',         'VV1>u<6o9s]@Q-~(.:jsp :,q:,|w/^yt:=!zUdvk<*~5`TEk+^?&J`jL9 |gR7M' );
define( 'SECURE_AUTH_KEY',  'M}{CU5qsACG!FCk>pZDBI:;aEcZz@DX9S_;*${{3Uh4.w^hz9WUR62_9pXdT%@3 ' );
define( 'LOGGED_IN_KEY',    'h WQ4RB0`b0c#jG>De/0vbYQ((>6cvQ5A.]LI#8[pL[V*&@!D~$,tEpORjfwFaHp' );
define( 'NONCE_KEY',        '=wJg@ B#(wvQGdRAeiEo7/*kuxA&+6V^i5gge_@tj`=>Y}s!k3?h<<TOv/S.g`&~' );
define( 'AUTH_SALT',        '* B-4?xXzFv*@rWZrs>@bz2F;_K?[B&9s;#`7[XNR0z?DxUClp{D;D@A!64e[7l?' );
define( 'SECURE_AUTH_SALT', 'L48Z-S!zmKJ!O%4=3#^{Gm;I91n9hSf^P#7Q}u2x.~aekHMgbjJb(+06/Ym2F#ZM' );
define( 'LOGGED_IN_SALT',   's$mEbP!uf-2Y_zaH t0)(GTDnD|BmpEtz##D{tpYJi>YV_QILiP|[ kmiy#:]zK)' );
define( 'NONCE_SALT',       'Ix}z/Hy^Rip3l}/Q?U[?^k=U)4vt1{Eo.1<iM2QM^6#FEx;-#1O3w*w*ES!Hy7%9' );

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
