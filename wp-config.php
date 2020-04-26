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
define( 'DB_NAME', 'onlineschool' );

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
define( 'AUTH_KEY',         '/R ,G&3ov[d;i JMc#:}yOAlkR7+Cg|WI?&$)q.$xXK-aCDOh}Up7wnxqr5eGyGL' );
define( 'SECURE_AUTH_KEY',  'i<UD?)#)IRcf<L@NP]EF#e!+CIN;zcH`-$$+&G+&R@=iExv1L4|X7t:w%7<7?FWp' );
define( 'LOGGED_IN_KEY',    ':1}0SE5JW5ceON/oijIr++}Q_(0Rcc~^Aqn^!2h7Tz.HG5ui$q]*~mS>GSh[~kcC' );
define( 'NONCE_KEY',        'nWnLerJh3Svq)|$JQat):#d,4Iu_$2}n-E2Apj!2/[3M(.mICKyKp43ReH#y2|LG' );
define( 'AUTH_SALT',        'd3sHG1M=jod>f`+JUu.#h7-BOe[PPZ@;-Q3$r>IG_gC|w:f:k9~RZ=HPlc}VVt`-' );
define( 'SECURE_AUTH_SALT', 'VRdr,~d^p1!VV;_/1#=6F;$e;M25[G*k+ I3CPh9Y9;yqa}!*r,w+qspC*de<)^R' );
define( 'LOGGED_IN_SALT',   'D^uzYXO%=o)}o}!y)ztHTbS0oX4 (HuWH-6X=978wA0C_u(sHVhSZD/v5?2iiNXS' );
define( 'NONCE_SALT',       'Jb|~_fN:1miC)G0d~2YV&Jm.CgGy,G<jHrY_R5bvey35i0v3~a: /93dzh4Gt-3K' );

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
