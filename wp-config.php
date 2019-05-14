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
define( 'DB_NAME', 'easy-drains' );

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
define( 'AUTH_KEY',         'zRK&4jAYAPyGFoM064kpJA&xh/xy<(2[]5I4Z*m cqZV>? Wr[ue9k)ccYq%1UCt' );
define( 'SECURE_AUTH_KEY',  '?GF=Y.Y,@H3.djp`cN$.0Qrcl7/Xq512i8MQCVNhAo<`!h==wzo(adv+7:!sFH4n' );
define( 'LOGGED_IN_KEY',    'i!aw^2Az=?SVeb>&.7Q$6[a+qh1}b 8fnBy6A/kUCb|YVVSYn61H)XOkU;7[BN^,' );
define( 'NONCE_KEY',        '}>&*MjhH@R`b9Osmb@{ifg(usv a]WIIK8nW;-@Oli6N+B=3Zy:UG1FPuvvq :v^' );
define( 'AUTH_SALT',        'W;~Mf/-^U` :mzqJe]I -25&7c>;;8F,2KF%499mV@,;izw]y!z60TNhQ%Vsnvc6' );
define( 'SECURE_AUTH_SALT', 'q:G=IwtKj^_M :GCC1Et3FM>Tg&7ohL1T`Pp1fTWv<U}r@W?^K.5;3hEQ6Ouyc@w' );
define( 'LOGGED_IN_SALT',   ':n1[c^V?W5$X;x|bQvJ#](-dLl_C:&P|Xy+i4jKjlTm<?i>G</1%KO |Qk|J{Kq^' );
define( 'NONCE_SALT',       '^pYZ9F#/&@7EAiN|mYX4mn&lfTl(}@`)x~j)y&i?1EZ<i$LXkN,c!XwDh698#03q' );

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
