<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'world' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'SOVb)NYDM:^]%_Nb0+.*O]]Y|FvaB7CZfZ)wP}Bov.AU1:SY:&a[:^n8i o=d{Zq' );
define( 'SECURE_AUTH_KEY',  'U!,[j9eUH#DEu[g:/gg^.X@z(J!UIYps19Xf3?K^V0,%+_c8rz4yKhQNEts~:u<E' );
define( 'LOGGED_IN_KEY',    'Fdc6|F j)?SR_{K;;?YL0:I}*J`!4nWIw@(~flc )tO|s(9ng[LZI7Yo9_,4[l]J' );
define( 'NONCE_KEY',        '9;J`mIP^Z 6;w(4.r?&}VVXQA6~sl]wi~FFs}k-Hg1&6~w1hxu@5s_[&<EI0AhYJ' );
define( 'AUTH_SALT',        'l+k!QRD+KH})A[]|naL+ -3W 4Pcs8XnA>4)|r4r!mDA[QQ @:5}nKZgU.>w2O!R' );
define( 'SECURE_AUTH_SALT', '8molptH50Byi}cJ*;d&,Sto4,A37G4/X38UZi)7J*8=ggw]p2vRB6}>MeGs9 }pg' );
define( 'LOGGED_IN_SALT',   'gI>%_.leJu|i#b#lT`Z,#JI)1u6+0[)7D)cX]W7`Nh9V+v$kChfK%RP`npG&3(z?' );
define( 'NONCE_SALT',       '(S!!JDimtA3tAOI$r[R$<aF/F8~4ITOnSOi%<pYnvj1]<o[_XO{gO)C`,I/pE!d7' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 *
 * At the installation time, database tables are created with the specified prefix.
 * Changing this value after WordPress is installed will make your site think
 * it has not been installed.
 *
 * @link https://developer.wordpress.org/advanced-administration/wordpress/wp-config/#table-prefix
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
 * @link https://developer.wordpress.org/advanced-administration/debug/debug-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
