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
define( 'FS_METHOD', 'direct' );
// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'massah' );

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
define( 'AUTH_KEY',         '1hE{1$3wth=qa)!0Ec1~AJ>{VcEJ_Ig_3a`b!Lw4qUNm5j[qYhhb%AX{v}`_:NEF' );
define( 'SECURE_AUTH_KEY',  '.F9[jAj}34D-QJ>4tX`c9WM>d.*s[)L:E1nS3TXf4J1YPd<]=uMb%S8o_l2Y(:m6' );
define( 'LOGGED_IN_KEY',    'Q5]o&2:G>cE{$Gx1o2a`R}-ub55M> ^%9Gd2^G|2V^;KjDQ6=f<_2_sjc@_xMyeD' );
define( 'NONCE_KEY',        '-?d5<1XczB^cc861z7n*RXgF){,p1-=A+=5d-QM}-O>@m#<se5~ `zC{P70$UmJs' );
define( 'AUTH_SALT',        '>U2t|[cNaWpcX0bTi%n9&h65z7UOX/Bxs<6I5rq/$(qnF]VSU%QenEA X2}c>`uC' );
define( 'SECURE_AUTH_SALT', '_SxjkSdXaF7@TUR-:}mEq`iejF(Rif[?}hDy^<;=6B;mrX?u$Ig*BF_I@4(X4Pnt' );
define( 'LOGGED_IN_SALT',   '^=[~ds+^[RL3*xtJ/$% NC?#K_j4d,]F*5STlH<b#;X,5%$U_3_;n3ZF`Q:$5BCV' );
define( 'NONCE_SALT',       'Y8PlRp}y*NQhN@$tZ8uJegp a%U]FBtOfIQs8YL|Q>NZs<PmMH</|[BI,tAC1cl~' );

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
