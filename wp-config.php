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
define( 'DB_NAME', 'ncshop' );

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
define( 'AUTH_KEY',         '_,lE]X]R44R)^y1ZMH~ex#i0IU`7rd`82NfaWFT%7:aaiUj$ gmMm8YL:CgCNh}t' );
define( 'SECURE_AUTH_KEY',  'gv7!JGjX:G)6f.ME{<O/D>?N.BbMT$d]O7vw>|^c>i`~YtvQ{?}ni(?{Q)_g0F43' );
define( 'LOGGED_IN_KEY',    '2-Cb >RijnzR>{lc}E+bhnH=GyU|BbVsnTFkd)i=.tjk6UUb]&2vu^QR2o-/;>()' );
define( 'NONCE_KEY',        'Kr_l)[4E~Zf_JXN?JG/mva90TZ0Z.G{(6nQ]G|upCVoXzGUO:/+ }9vx5%:cTlt|' );
define( 'AUTH_SALT',        'o=;x&CyL(?S2:[M6kb@zMtT3:yFzSbCu|RMb<m$*E)w&}Cx&s7:.9Y-5w^.-IbX`' );
define( 'SECURE_AUTH_SALT', 'j::Vd^IWlF4Kd/Sd9TIf7A.*#x6Q5AK$ms<fP|J?k#m6If~!mGMDVFF{E__1_8zT' );
define( 'LOGGED_IN_SALT',   'V#4}/qxf0Rpaa^[,lyIa}PtajE9>:YX)qVPxFeHpDt/cSOEKcEtLap/tKpNeUgLD' );
define( 'NONCE_SALT',       '.^I~O9zZ)W_D_BU0Cp/98I{ m|]rJt)FZ_-h4iiRwURChk<4i<i7@.qgG%Uoxnl)' );

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
