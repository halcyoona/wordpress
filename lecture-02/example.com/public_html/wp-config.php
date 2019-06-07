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
define( 'DB_NAME', 'wordpress' );

/** MySQL database username */
define( 'DB_USER', 'wpuser' );

/** MySQL database password */
define( 'DB_PASSWORD', 'wpuser123' );

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
define( 'AUTH_KEY',         '-DAf:LfMInav]S|8S^J_qY8QV/!(B%_F*5NI#};<=[k$^?*H`TA(Q]p~!edn6C<+' );
define( 'SECURE_AUTH_KEY',  '<0<bZVJ,)Q%*,GxPt~@Q!yAqlFUzu*y+xlC%Ue0[ync)I*-}dmFS];#z4g2)_e-4' );
define( 'LOGGED_IN_KEY',    'z)-6-c{=4z)<F!6EV@$-l&Le(.!@P? Y0vB&gefu5$p 3+Zw$v}$=r<~:N6&ua<{' );
define( 'NONCE_KEY',        'WG+A0 %bq91%Ak4-bua 10::p-e~^mP8y7.^-&th<AzopTIhD})5#!YHl2L/co`_' );
define( 'AUTH_SALT',        'X^,.Q&1f#f1<53c1>fc?]3s@MEw_DF;xv;Z{5bnpl@36;)>%SzQX3GLNJoGre:iS' );
define( 'SECURE_AUTH_SALT', 'tPC~1;&OuT!7MP2ww|6p=s3[{@8w&d,,alY*T;vpheP{ }<x(pH&B|ZkQFTud7rw' );
define( 'LOGGED_IN_SALT',   'R.v]/V7km/}%g!clV&`M$yZ@w0p) GM`]Bs/oAmM]l-nzcw-6uIFBBwJM;+,!t_A' );
define( 'NONCE_SALT',       '.@XRw~Ub5YSUzndHo_]F~SJ9XTzT%Qux=&9Mg09pkph?r*#?7rBkaFSfy3{Y>xtF' );
/** Bypass FTP */
define('FS_METHOD', 'direct');

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
