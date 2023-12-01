<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the web site, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'Planty2' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'root' );

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
define( 'AUTH_KEY',         'ks,zqbvYvwKMgxo)~5/IL^>?O(N$3j?@ 4T-g*:AZ3&h;rmNVuXU0Ed5G)R>m7:M' );
define( 'SECURE_AUTH_KEY',  '^*i/Zz9vyD*__Busj02@UHNW``3TI3-WFFl#1S+42XgVXW~PGsm47L`y!IZ?0z8{' );
define( 'LOGGED_IN_KEY',    'r*f!/4ZD=uhDP<S4{_RxQlx&`0Aq7`Mr!9BBJ%OnOR5Zcm$%O1aNjzQpj+H+A^XO' );
define( 'NONCE_KEY',        'YuACFjpMnH||<0DW#P[g|YK%4T7fvcb:CqnaXf&`F5+j=yW`Npb.rH?fg7)WUs!s' );
define( 'AUTH_SALT',        's=q4$bo6HAQAQKThgl-N7vkCFb~lyEGE@SL|n<T8(r*ZAKx.<,I2TLFqRKj(G[QF' );
define( 'SECURE_AUTH_SALT', 'zf7kJ{c_*6ei*Ty?!#&ikWtx(5TW2SPSHQHIa%vtO >[CaEak^^B)Yz58(-=wAmF' );
define( 'LOGGED_IN_SALT',   'EG;/:xvZ=1 ,Gt^gCH[_o*o5M*EVgM|OFL.<wNc!g<X@hvcuc,1nb#jl%)p7l<3S' );
define( 'NONCE_SALT',       'o8pDa(/X7Up7J.zCCbW(0H9fJ|@Pmj(r3i{zFnxP-M7k-8DJ6F+7@+4R~UE}<O0^' );

/**#@-*/

/**
 * WordPress database table prefix.
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
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false);

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
