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
define( 'DB_NAME', 'testwordpress1' );

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
define( 'AUTH_KEY',         'OlRIB{IBENeLAH9MGUWPf4P8kugxE}..rSwQ);r!1*wDU-`PwS)Y.rH#!&J gl*S' );
define( 'SECURE_AUTH_KEY',  '<h+oq<ZX4`X!$bF_ATf-(qj^zq^CP[`uh+D~;Ti :;#voSbTeaM7zc9_GfhA$.xm' );
define( 'LOGGED_IN_KEY',    '4!_%?Z,(N8mc.kh=a{INlLL48l6`8Q6a4*d5m_JEuH_>dh5NeQ`WI*$l ([uSGQx' );
define( 'NONCE_KEY',        'N<9}Q#nrtp_Ymng9O!G!r`_2btnZ:O-&Mj*uzL~fobns3.OG`!{2AH+O+si~#MTZ' );
define( 'AUTH_SALT',        'f<>.Y8N@p^,xf6>NdN;+8w}Rck8fH&Z.wso:`3u|a@60CcHB=);_P^-lIQBA/M=@' );
define( 'SECURE_AUTH_SALT', '=s8;4w2f@$Li7%O3H(W48+(dAE{337i@OxdIJl/aiH?Z$R1z3g)ykbAWjr>7S4Pn' );
define( 'LOGGED_IN_SALT',   'u$g1`.-Q^9U01x<;v&g4=1y4vq7?{-v.>9e{JkA yHRQ`Dhp9_uARyE!-yR*`8-c' );
define( 'NONCE_SALT',       '0soTaxEOyj5an/[959g9Q,bB$jBjXv!eJ9N;Q&Y1Y8C3em$XvAEH,C$beD}c6TKZ' );

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
