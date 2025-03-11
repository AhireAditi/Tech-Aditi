<?php
define( 'WP_CACHE', true );
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
 * * Localized language
 * * ABSPATH
 *
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'u972669052_3Sq8k' );

/** Database username */
define( 'DB_USER', 'u972669052_IsaBt' );

/** Database password */
define( 'DB_PASSWORD', 'x0QO04fhN8' );

/** Database hostname */
define( 'DB_HOST', '127.0.0.1' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',          'ka>RO`cl=}IezGPr/.h+bA]XmU2nj vPg>zBY-[9:O4@]hQ[-%Ab6C}<39S~:ISE' );
define( 'SECURE_AUTH_KEY',   'i&1MdcQ1p:#&&#UQQ;I~?r5`r~MtZ`:_b-Ew^5,fFKCGkSrEC}6vMgVlb2Zq&T$z' );
define( 'LOGGED_IN_KEY',     'mOM/wOy5}E+$49=on @}&IK-x7X^K}9btD^9?BZ fj!=JtHl0vf_DvH<r>I(}+N}' );
define( 'NONCE_KEY',         '6js5j6cEa=W2NOY_G0YqEW]X$feOBTi!4E*;f 1J/ssk<5<QPgE`Ek^Tg.o(j]qL' );
define( 'AUTH_SALT',         '^R<]WeWBPPGNZaUp#Hv ${Ln{[di^p6rN?GM,QM0T1!Y[%Q}YJ6~N$z`D[/[?&-0' );
define( 'SECURE_AUTH_SALT',  '^fFj0cGbrN[I0m|A+#2W5D5l4>1S||un[rXx!rEWK3`U.,ELC9t8@3#B6_v?an;>' );
define( 'LOGGED_IN_SALT',    '&5V0ud`}3P.&:D^;KylMgN9*2&zJH~Bn,yM9,VaEsruy/9Z7s&N7$E$h3O)LjPO|' );
define( 'NONCE_SALT',        'k]C*^+^vpusb^w4=}e%QQW+1)iC8*;;dYIy?4axo)o|!tOp74.W-6Of)wY1UD%&i' );
define( 'WP_CACHE_KEY_SALT', 'BpFqg~oJ,WW/H_V~~Lq*,<8q(8|B<E*]u(<4ABe|jSmh:AIUmXWcLE&VOXyxkmLP' );


/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


/* Add any custom values between this line and the "stop editing" line. */



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
if ( ! defined( 'WP_DEBUG' ) ) {
	define( 'WP_DEBUG', false );
}

define( 'FS_METHOD', 'direct' );
define( 'COOKIEHASH', 'e33a1c22361fdfdbca923343c3d7afa1' );
define( 'WP_AUTO_UPDATE_CORE', 'minor' );
/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
