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
define( 'DB_NAME', 'wordpress_sage' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', '' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/wordpress-sage/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);


/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '|bbld-:./b{u$JS8d;-U]y0S^hQ8yho:c5E6D0)xc0|IQQ5JI&Z;yg)XLjS{!AR;' );
define( 'SECURE_AUTH_KEY',  ';Cp{HDh}%ch6&6FwN[az%m%G)7)&l3PhHoB#m,^!/Fi :vt?>Td,F89/pz9TV@W*' );
define( 'LOGGED_IN_KEY',    'zwDg~53V:gnJ5,(j44!-1&R |UO+eQO*akV5GZJa6i#ssYWnX%p5r~PI`]AB2%xJ' );
define( 'NONCE_KEY',        '&K*jU#$c{ >jtwo*kKqR`6GJiw(pc!A{^jzPuchN NO4:6AE?Ql2WBr1:)I$N+-s' );
define( 'AUTH_SALT',        'dvRUVr2uWF;oR:KqJ XhY5:6dfu;NyjWp%-u&g:Po|R[A#mkqwH[-j0/T{;<f9hr' );
define( 'SECURE_AUTH_SALT', 'N3*0UV^Xb/f1tiFcB2UMYPRQr*Cc`.S(!c<7raMaA9uv)NvTKa]x>D=V U6saZRM' );
define( 'LOGGED_IN_SALT',   'Y:>42, >m-J=yVe uYy|J~8`KZi@ZERh]B.Y}wp:~j^eE,CiTKGz6jSPieQrekZ^' );
define( 'NONCE_SALT',       'nIXsmZuxb_3-XEq;|8/rAw$k!;,++I7PiB^(q<:G3F~Z3aNh:BjmJ|f[$<|&)+Bs' );

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
