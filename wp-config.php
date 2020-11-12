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
define( 'DB_NAME', 'giftshop' );

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
define( 'AUTH_KEY',         '={L_o*++y}8`L.E7u5#fq3qBcP,CB-G&*D_Up ~2cl;;I4G7|8?>e=X/XzuT2E.8' );
define( 'SECURE_AUTH_KEY',  ':hiZ$FI!Mh)*B1N2kpw,Z%A+iSN(85;m~3hqhng)?9(Msi#ZPLy|?@-d`h!ye^nL' );
define( 'LOGGED_IN_KEY',    'c{HB}pbium1LR(?o{w$Gd`SbmdY?yJXokDh;_/xwW?} dV4q[,~3?eb}`7$W%{1I' );
define( 'NONCE_KEY',        '#Xtz<q>.4L@FB`HJ!DVNSC?ZBp6D;q:$Yp$z7m-%sfl5Xn&**WDFArkM2~9VaG5g' );
define( 'AUTH_SALT',        'ZqN*a89}f-Ansa~`~{[S0,%;MkSG9DppaDA l:R{vvXh046+@wl,+eNaV*$v=WEm' );
define( 'SECURE_AUTH_SALT', 'nlth/y|]h79g }FI{2zpdpyk8>[UB<p)p|cquj=O>1*a(H`4Mf1@eHC%XTR_IG>-' );
define( 'LOGGED_IN_SALT',   'h9Z_4wP73LL$5PgbPha!6#f<IR_YB?EpM/c hMdjXXv<Qr4cO_>IVN#KqmS4],= ' );
define( 'NONCE_SALT',       '?-Myfl&vHC:s*8ro3vC#;#c+^WP2[4d^hs)aSndMigm|0ye~Rgodj38{i^a6`2hT' );

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
