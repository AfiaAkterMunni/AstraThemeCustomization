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
define( 'DB_NAME', 'afiamunn_astraCust' );

/** MySQL database username */
define( 'DB_USER', 'afiamunn_root' );

/** MySQL database password */
define( 'DB_PASSWORD', '15303003@' );

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
define( 'AUTH_KEY',         'HWl;+-@]{Y&0T pfgv8:EVeZsQd)5XWk-}vu@NV)|Wexy!1H^,<w5u]Z*ni}#g/,' );
define( 'SECURE_AUTH_KEY',  'MZ#&?4mG|V%^.=!u1i]*r9RMW=(`Fla+CC&Xj)Z{/2^U6gDw*=l5 vNV?>zV#~!w' );
define( 'LOGGED_IN_KEY',    'ytHRG@drw[;H+;Y@_)AO8o+dR`/*2LT#eI!3K,p)cYyQ!b$@t8tC~> 0`><e{jMg' );
define( 'NONCE_KEY',        'H/^BRUrDr(x&m=.vzNtKhK9 Zk_d8K)x2J$t~r[+<e:/awtYl*[E@<,s {toORAg' );
define( 'AUTH_SALT',        'D)=?F ~`T8j~WxR^3=!LDRt_={d>,~)Z5_o;1ng#Jz-A6-Q(!_E}a6=>!EO=e=on' );
define( 'SECURE_AUTH_SALT', '~+$Zf3Dts~O@#Be#Y7qUx>Sm3~iyfFPWhEx@gY]o6gHuS5q5+qs|1}IM?l]P@T49' );
define( 'LOGGED_IN_SALT',   '#<8APw$BsPXc8a6i-ZxU=VY^{idhOw,t&_3G$$&A,&bh3QU`N.3~SM`,,=s2qVJ;' );
define( 'NONCE_SALT',       '~Kwp1QOF>]%|`vG_^2<L-Ovl@{sqhZ7-z*2:K]T1W15[hVa9.QaW7Ef!d8{S53LQ' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'm_';

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
