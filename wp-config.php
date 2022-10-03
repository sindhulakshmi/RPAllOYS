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
define( 'DB_NAME', 'alloys' );

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
define( 'AUTH_KEY',         'A2n}Brw!pd$E(;J0uI?Z4}U,?]}~1}Q/c]sVB}orF*jXu^)6v#@xz-S3nPC[-K 0' );
define( 'SECURE_AUTH_KEY',  '6pvoVESpI i>w=-a2_k cfTbqA2W{HwDo7TP_Fp=<U_H`nF|{fLlAek@C8Pp&B3Q' );
define( 'LOGGED_IN_KEY',    'xGF9c0ec7h^= 6O8P`,@pa7VAQ(1vM%1Z>Kx!DNIf;JWD}q[k!w[PHJZw}5^i4aS' );
define( 'NONCE_KEY',        'k**yRC=8f.gqpfjNTVM~ZT04`KM) m_^@pkRlDxI_E$1XkO`s<!(][Jjy2}UZ~= ' );
define( 'AUTH_SALT',        'CY2>ZnKQ]$*%Y cKWfUR]9f*IJ!PmSRk#{#p(y:T/*M@+T$0,O5dV5;mQ< pp+S0' );
define( 'SECURE_AUTH_SALT', 'Yl/Dbx7aQ:+LwK1xjX vuQeF,020O1}~cimg}r`!i%|IvG g82K3x&YBlL5 ag#5' );
define( 'LOGGED_IN_SALT',   'nr$#.>kOBnK<V,/.]=>qxxB0bj|*i~Hkx:V $C6*/iyEg2Sd^tNC}hcJjdyTJ>HD' );
define( 'NONCE_SALT',       'V9ss#^}l=R,]dS?d?4jAox]wYc-tnQ-KmJ,s[4gK9qJ|~]=$oFjzs/3Y1Un7Iq;5' );

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
