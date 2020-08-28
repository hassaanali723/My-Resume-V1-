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
define( 'DB_NAME', 'Resume' );

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
define( 'AUTH_KEY',         'T4F2c:o@Cm-#QQ1qDhd7TEbN3L.[V%hwbHzCGLn4C-91cvxwExPx(ZcHmHSB_|wG' );
define( 'SECURE_AUTH_KEY',  '6SK*9&3Z@sL=.#6,{z2}dozpL-9N,`5K*Y;Rtf(TW[a^Y;c>&Z8bni` 7bMyK:P5' );
define( 'LOGGED_IN_KEY',    '2o7^M_@a8)a^nv&=|enQzf2SM<E,/0Q #o[D)ph1~]tA]NirQdW1C;Y/=D!,qY]O' );
define( 'NONCE_KEY',        'kD!>P%rV-YP$ZoK(z5N]SHJL`^3?6/8Ytv=;UThWZ|]w$tO>FfLmThb.y^<?SQ.?' );
define( 'AUTH_SALT',        'TfZ6<%<]QHd.KS`@_5qgW|JQ!I[*F7sI?37yV5FCL~%6[;hC5<9w]d=kD|[aEt?|' );
define( 'SECURE_AUTH_SALT', 'f3PM(5l9[4aFi6A;pkQ4#^(~5c;LTU5,AU;*(/ChQ@gV3GnsR/V(tg=JLQI,uyXc' );
define( 'LOGGED_IN_SALT',   ' AUxMHJV2jgpKzP/@QpeJb6yX*VEQmqi@+%}=@M~M,$_cv8#yoSVdi8?GrHU(p`j' );
define( 'NONCE_SALT',       'kyuKLP%(Vw;yh-U>Zc0L=]{ya1J }V+*WO+]v7INLQ< y8)ZVPUVm3|NAgF6aX$i' );

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
