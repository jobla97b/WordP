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
define( 'DB_NAME', 'WordPress' );

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
define( 'AUTH_KEY',         ' :2>eqj/6>@K_FWmF:qt0A|,jaY0(:YkPJN(]G`2 zke+MLlmTU|IuOBmF(I[b22' );
define( 'SECURE_AUTH_KEY',  '7uDTG8y7_HWOHX)FXxh3,_|_-G9C)s`Br|,|Q_#SIa^le>to9#zD4mHk`wGB,Iet' );
define( 'LOGGED_IN_KEY',    '9sGJ8#%)t Tz6=WNYcz7?X!@U:2,XKQMYS D)`./VE(,D?x`9C/]O9BXh*c`d}6?' );
define( 'NONCE_KEY',        'h{ssXs1o}nT+^m?{4>gX]%[x728{~$;`OyNxXG@SeIRPFf30!@V-272s/iaR??Vc' );
define( 'AUTH_SALT',        's~NcnQxG1k5R AP|/$2K9q`ojq-$26!lMg>@JOc92,jJxWc~#@:+cM<?{I60zx O' );
define( 'SECURE_AUTH_SALT', '-}Z:0$pA0?WYwjL^vJ^MyypI,?iJ6%chu1n|JY 0E1,*7-Qa`kf6VlT9s]/xY5cv' );
define( 'LOGGED_IN_SALT',   '47#-Rkjl<][-]vU<%vYD6*bZJi5~%EUSU?#& q*I:i1|BqE~ibvd.., VGP(.Wxp' );
define( 'NONCE_SALT',       'OlA46e_p;Y`iX0GU_CS$r/}~w|]W8N;~90cE[iyBH(z!peN<D]d(n#eQ^@!lom8O' );

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
