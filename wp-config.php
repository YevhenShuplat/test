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
define( 'DB_NAME', 'news_test' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

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
define('AUTH_KEY',         'I)R J7wmPtQ/M}!`&+;QIk 3210GRk-!2n)Iy#@(-d)(7*x C<S)N~X5 k&<~3A^');
define('SECURE_AUTH_KEY',  '>Y$!nnj7K{S,+9:o?aAZ!-P<):mZWT.KdP<)S.lw{Du?*]xCBfjt6NoK4~|XDB4-');
define('LOGGED_IN_KEY',    'DwoJF5<:nf;*m[SSU|>DL53E^})=yvwApq>%DW^}wXH]-yb|_es(#<pYui8KW7+x');
define('NONCE_KEY',        'LUg1Qto=0=@If&LQPejkq |r*T#PgbrP~T!Rk/47<A]Nb6OAwhtp~!)VFImtS6sR');
define('AUTH_SALT',        '<Z_(fa5){WJ*ey_2_By.8+I+[M%8{t7V1VCI5Dsje`x[@lB_*#@4NNPh?!~j*@4X');
define('SECURE_AUTH_SALT', '01w>NQ;5gD6>Z/&lkeabG_hDcP?]g;nhEIZ7+H-Q&=$MHG-e`t%nRSEj:,&ZdBlf');
define('LOGGED_IN_SALT',   'M] Tc`V5XV(N5l|#5~F*k}lfm#`l7-B`@(~xZ >K#yA QRmUCJ_bQZDqn^F;-:g}');
define('NONCE_SALT',       'Tml~r_F9}JMaY7uab:L2>Q.Z]O40mQ<`DiCz5#XM4XSAdx~-H_//x&Eh^u@)U!pg');

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'newa_';

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
define( 'WP_DEBUG', true );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
