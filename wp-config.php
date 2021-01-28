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
define( 'DB_NAME', 'wordpress' );

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
define( 'AUTH_KEY',         'V,v%GPf,E~YuHiws#J%*VU5j7m,]z7>Z`!!@Y)Cpt(m7lmq8ki5U@O^{h8*9RZ(p' );
define( 'SECURE_AUTH_KEY',  'k=4t>J:X-[]euor>@Wv&xbuSsp=<DS2jVTQr,B/_= N4Ay#6ZHyU*$Hk}C[zW4ce' );
define( 'LOGGED_IN_KEY',    '^3bq cclDU`)~*cD@pTu9$eR&vCIMJ5nrkTw!;-^>Y7e%)?<dRt!yVZR1iTuN_!9' );
define( 'NONCE_KEY',        'To2lczqRfXJ2ovIF%_|J=w(q_[aJU)n,?M@/=%`=5(^LCZy3B1R3|PXa7YOb)me5' );
define( 'AUTH_SALT',        'UL^pR2NHWF<WZ+j4b}cB^?,in=}U]ypGg4s@+l+QQahE s7kPK/j-4B?Bl5d`}TF' );
define( 'SECURE_AUTH_SALT', 'oL4NPGoq/)P9gDP@7v^-IRrLVq6UtR/0.M}%u<I!6g_C#8[P4y(>Ee&{R#8R8c6%' );
define( 'LOGGED_IN_SALT',   '.!f7!;KnH52=&k#=%E@$^.lJ-|M//U{b,&#gOBk,A%=H/kEGe>b>6Op!C&(!k 2W' );
define( 'NONCE_SALT',       'S+Sq1#Pei[Yug[p8RssCYv8ne(%>%#,H4ue9/RLED__hm,^/OH-Q@9V&&,X5qS<C' );

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
