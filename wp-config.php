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
define( 'DB_NAME', 'wordpress' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', 'thuctap2022' );

/** Database hostname */
define( 'DB_HOST', 'mysql-service' );

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
define('AUTH_KEY',         'e>R>6:Jd}inJC](I*EBA^tuQ=g_|MT:&T:ugHYxA5+w2UUL|3%{S6vWJw-U`?YVT');
define('SECURE_AUTH_KEY',  'JfhZbvM_LO>13c|%w-|d9k*>_GW5Ss7B&aZs6R,mNVogH`hLd9M+>,e`,.:wb:L?');
define('LOGGED_IN_KEY',    '&nr:F||[$3@osV],><WEzi:`;QxVyGNB%oc&`yTEjmJl5RlnURS91/rNiGu!p/n}');
define('NONCE_KEY',        '2BT$:`=+mH47lgkW-*;-lv2k 0swt2?+p9F!(doqd`AH/{E=T3vHD.kzzP#.3&+3');
define('AUTH_SALT',        '>}M)*B[^(G$A7c-r{e.%,%i_|UMr.s3:=3zZSl{*_,f-0z^8MnlG}qsnYH`-Fl9u');
define('SECURE_AUTH_SALT', '6O/R{pGRX:9ue;x~8^+Sw^!UIJxLtm60}-g|4IqN!7M(JO#69Ei1]tr}5II7oXu1');
define('LOGGED_IN_SALT',   'X=paikv|h<Fi$~kJy{lEc+E|K#W1}gNG[dS_|klv-c+z`{cu>.(ZkK|F7kLUO+Xv');
define('NONCE_SALT',       'HX.Ww$+lS$me|dm[]1X.J4k;E(bw],>0*I9`Uoy-bbl^EqYA1TZCn6;tqEa-*gJH');

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

	
define('WP_ALLOW_REPAIR', true);

/* That's all, stop editing! Happy publishing. */
	
/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
