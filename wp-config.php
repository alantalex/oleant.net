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
define( 'DB_NAME', 'oleant.net.db' );

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
define( 'AUTH_KEY',         '=$GE_I{r4^f[@1c~-erWr;VFxv{]=Z2U.N/9Hnk+Oa[h9wCRFDhp]Nx)=b$K.EH>' );
define( 'SECURE_AUTH_KEY',  'BDQ/QUqFzC:=WCy3!4M0p$e/2P^cz{,DsBjVGPJOrN,sa:Dt/Z~Ih(f1CV1]Q.z$' );
define( 'LOGGED_IN_KEY',    'n;wI:`kPXZ<_ (t$u84K:.%A7z2X~ `d6T1frZY=mMf@j;oLaVBJZ@TkpQohkU6i' );
define( 'NONCE_KEY',        't,l(KNqtGUJ UcJP%|q55/WSYQ[(unpzx0i2tm6.^=8a0`}}K`:h#+;w:h+36*N$' );
define( 'AUTH_SALT',        'u&j8U{RFb.34P-/|9O}`jN~*`-,i qoeEDf$A*sDocE+Q)!<3%m+iZE.zX:GA^dT' );
define( 'SECURE_AUTH_SALT', '9o_qu^iF^*c=eBFBOGskns7eL:x&zc:.93:(xsB5Aj2pPN)Tjv|S%V!}gI:rvM4*' );
define( 'LOGGED_IN_SALT',   '2uSe@e;2%o<iH2HAi#>e =kn&y)6o&<BM%q(lIt<?x`HhVVu~Ljv!79Yz-]y|.?t' );
define( 'NONCE_SALT',       '@~i7&<k?MRBi,E CVrNf=|!0,;J%4y@iazOy^Z&_T4h-ZK8nqtX)$J17G0&rw`bz' );

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
