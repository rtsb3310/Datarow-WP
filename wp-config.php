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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'wordpress' );

/** Database password */
define( 'DB_PASSWORD', 'flag{2dd413613a55efc3b537024fc8fd6619}' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

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
define('AUTH_KEY',         '{|Vwl4e)8 ,*G5|6gR>kpGOnnJb+sE>4|w~:-~f2&pdu5-5hC1I$Q^Hj+4*c,DWA');
define('SECURE_AUTH_KEY',  '8H&$r]%gP_s_spby-+hc+[w^Xt,m|h(b18e{l2l@6VZ-AL%p*ISM,+G:/8($9!dR');
define('LOGGED_IN_KEY',    'ADxf{WNu,I{}N%q-SN3+.cXY!YzRr u- ^SV:~$)hW8vfIT|7*[tJEG/s>VbB9-Z');
define('NONCE_KEY',        'W,kV)7A<ApL<lEm.%vVm5pIt;S6SG^UgV]+!9?NXm70E6K-BSyCEEwtg5i3HgsvI');
define('AUTH_SALT',        'QOcW6p-_+`nm!(@-Q~B-Yw-56U6i:q@^><?gr_=lK.M>_t5/lJxYRsqZQ2PT5^sL');
define('SECURE_AUTH_SALT', '(2gKaYRt_tB]4,G?y}`aaa3/(7Ar:r@x%a`431+rsgsD?oJxEMWjiu#6K(Ioj)/-');
define('LOGGED_IN_SALT',   ':!Z)S.U(VCSa2Su0gXC!y0d`s4;BZp[^B+_v;m<N,OEgHNfA0n]/:-b%6f-]aR()');
define('NONCE_SALT',       '~E0_mszjqUds(;J>!TbP8wmOV;#Du`|no%AkdgIb3OGoDk`7Mz$F]_[^}[4]?]5:');

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
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
