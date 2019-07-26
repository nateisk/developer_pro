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
define( 'DB_NAME', 'developer_pro' );

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

define( 'WP_HOME', 'http://localhost/developer_pro/' );
define( 'WP_SITEURL', 'http://localhost/developer_pro/' );
define('FS_METHOD', 'direct');
/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'Ztg]j^O3iQIi/l1Fuj!SV1X|ELaE@hVRW]:u7=@SUdas26S>dO&lN94ig}l6MIL~' );
define( 'SECURE_AUTH_KEY',  '-r(Ns}fm64WFP!iWDP:~J8Ag?QDpI!f5i6<nw+6-e+c&8m4zr8mkkOV fpi&JX%7' );
define( 'LOGGED_IN_KEY',    'NDHqB}ixIs.&vtM5#?xk]@pX+IQR/LCgh,vbYH8*F1gSN~3!/Sq:Ce/8*d>z?JD3' );
define( 'NONCE_KEY',        'zs(Rr#WaF&`W9`XDt[r|m$^$xm3qjg%b;k0K(ovk,Jl4 2);$@ &D>mO9y0ZCG0,' );
define( 'AUTH_SALT',        'Mw,2?odGgUvCWJ:@Li7dfl4E<` I>ENQ/Ub{DrrmOSq5f,W~wsU%.0u^=R2BH`Sx' );
define( 'SECURE_AUTH_SALT', 'B!IS#c0C6jJaXXyf~-Yc9|WHCbm;r3BV@3th@yW_zt$+;M1Q5-9}xx2;#(;?]XiE' );
define( 'LOGGED_IN_SALT',   'yImm[#FhKCN]V|GAS`R;ALJWb@qvR(n0[mJaAq;)4V@,vkpk-(=DFWVd@3!:xESa' );
define( 'NONCE_SALT',       '5D,#@]P2+6>|FTz}LtxykTN. 6B+(vWtxXSlV:V!Af_>|U73FIDd!Yw B:NN@y#^' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'dpr_';

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
