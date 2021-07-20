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
define( 'DB_NAME', 'kiwop_db' );

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
define( 'AUTH_KEY',         '.*(,,xIb4cXTR&irrc{9hg0ERVPGL{~__|RW>[$f#r>Vrx<q<jBr0=W[4{)sgu4k' );
define( 'SECURE_AUTH_KEY',  'NB>1)3}B5$|P3JT2|F?Do3$n_gZs4_rR:(_GZduX);$rMJ_F,ylWYpiG3o+-i]&C' );
define( 'LOGGED_IN_KEY',    'DL)9~q:gRr/o4vJP)xcxjBR>>5EVg^n&SzbCg}%p;>oqA[0Te9lF<4]T8)lruJ#S' );
define( 'NONCE_KEY',        'eah&.Z(l.%]A;m)E8TLhD70LBk5ktX_-~p2,;YzUB&N3Y{;FDC}F88d:eevRHWC+' );
define( 'AUTH_SALT',        ' 6hP+a%~2NUG3?&QXG%Dw!w*ZQMr)R8<;71L+96~ Y]jBheBLhD=nYE}nI/gKA)m' );
define( 'SECURE_AUTH_SALT', 'J_;Z6;GW*;NBUxDLRdH>p]SDz?{I8lXr6$nxr4cG}DKf,X;:^Dr(E=0Z8`noR#x<' );
define( 'LOGGED_IN_SALT',   'R`7*`ne]kYQs(DxWfYYa|e*.G(?_oo2 .zoc=tpR={]fE<lv} 6{c[rw|l92ueX.' );
define( 'NONCE_SALT',       '_fAqB7C{7~-U=el:Gr-r0rD~pGhKm]m#bU,Y&yTZL~WW6J+0.PAO*K7L^D$mBA5&' );

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
