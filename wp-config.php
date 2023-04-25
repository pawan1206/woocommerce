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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'pawan' );

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
define( 'AUTH_KEY',         '7:7L=)7.KO-QaXy2Aj;}W>4##0YGc_{1qG@3HK%Pz(~<Q=2LGVp+/-pN>W9j5pF ' );
define( 'SECURE_AUTH_KEY',  ';s-aZtapdSKX,1e])#:[sC]:gU;*T6&|^q=J;#K<i& 9s~@Nu(V:bj?1A5/<PIO^' );
define( 'LOGGED_IN_KEY',    'F<4SdsXSmw.;NH+!k:W=9QS1-gwRTqJIqrd<OwE?nb3D#rcR1/*DrXW_6@)naI^i' );
define( 'NONCE_KEY',        'l~(0-NwE|oaG;A$IE9-_w9znCFtDM4ZC,T*c),_L[1%!r 8,&lQZdHY{/g&^>_**' );
define( 'AUTH_SALT',        ']<~Nj;ni_7*&65/|l^u`OCoX[VSjw4.xo9y)WV8C-OH:1diRVbrf[>6Usz}`?l9S' );
define( 'SECURE_AUTH_SALT', 'PAYat4 XVKe~AF vn&[df]yn Aq,+P8*b`msMW=?z5H<r4R;:mnyI a4qh:=2O-B' );
define( 'LOGGED_IN_SALT',   'Pc3AM>QR_O6tw^XW-b*$*$TFsgT;:d!iF)hIGMiJ*VR)l-1.7 AO~g=]tk(vj`i/' );
define( 'NONCE_SALT',       '~PYIT+{D7*7d`uC-mvh>z #TnL{$8cz}1)lwWUGdt?7(Yr/PPI5 ]G9vw],4DHw:' );

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
// define( 'WP_DEBUG', false );
define( 'WP_DEBUG', true );


/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
