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
define( 'DB_NAME', 'db_sp_store_by_ziyad_ouamna' );

/** Database username */
define( 'DB_USER', 'contact.ziyadouamna@gmail.com' );

/** Database password */
define( 'DB_PASSWORD', 'wordpress' );

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
define( 'AUTH_KEY',         '&iVspuu-Sh.`p>Hj6t@5%b&:MvK->CsS`H]:K|y^H.Q_crL41t$_Sd4ab!p15%5j' );
define( 'SECURE_AUTH_KEY',  'mWr}OswiRk>z]*+l,Wug,Z,?NqT4,2h=2GgqQ3j|-FUBtPMhpR;LVis`{t($~]+Z' );
define( 'LOGGED_IN_KEY',    'q`NXYSqfG^y;!DEC-mKtj]L|$s5;(GfX,m/<&|9r!fIC;8vsTFg*Z]sp2*7@/YVG' );
define( 'NONCE_KEY',        '_/El7cE%`X(g2E[`uNe)&e#v[Ye)A|2D/9Avs.tB^YY`dqNHT@f&YcLNS0?GI$48' );
define( 'AUTH_SALT',        'B_g`=U;8/wqC=:^qp`%!QDCn&h:0Q(5-L2-CPrg;JQBf+7[!>^ewW,~suv_<WVB*' );
define( 'SECURE_AUTH_SALT', '?@@_E!g%7rNV5qJh3,@/[xb)qGYzwW|v;IP+qLJsY)aP:V|^;j5t^O7*1kLQWXJ3' );
define( 'LOGGED_IN_SALT',   '[WImh&6o-nh*m;d`}bK-a|oe47TY*F;bV`0LDIK<Q[1-S/M(S`s&T1ivP@t#;T@u' );
define( 'NONCE_SALT',       'V]N;z?)@Lelg-!4!e/1$P7!%wMp!VJ#3u/UgGh9M^9nvfx|2;vHaX8AQMk]jT#M]' );

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
