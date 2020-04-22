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
define( 'DB_NAME', 'bus' );

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
define( 'AUTH_KEY',         '},^JdjB~yc)fdJ^/9Jz6Fq#>u>wO9NhJfw;zmOm}(K6sTmw5B0`.lt46-1^F*#lG' );
define( 'SECURE_AUTH_KEY',  '^6ii1JDK|`s&5^#J,5M(u{QkTr~i4*<9?N?A>b2U!CtvJ %vaolgUH FYvk=w4x!' );
define( 'LOGGED_IN_KEY',    '5rrp>%a8%=J?6i~oJL$a}Q|Wt=tzJNs|~agr[i3I_oVnbH&[vaSIw~B`PAP10{(F' );
define( 'NONCE_KEY',        '-0h02UEQnQ}MFhZ3Vl|lvK{*Q<@pjcm<r?8g JTP)i^O3A%kFFUm^&1XXR ?6E]B' );
define( 'AUTH_SALT',        'q6oxm P+w?}mtkIOUOQ+19<rNU(Nm|0m@ny%?$pi80c(,@O.+_g0fp6/9?%6ok_8' );
define( 'SECURE_AUTH_SALT', 'H{#>$db42Wu!Hj?TwfhS-RWt]zko,+tL~Ea|D f_BM?E@6Km+Mhx9?[A-c0* S>3' );
define( 'LOGGED_IN_SALT',   '#-~Wy>>`0qd.SB o?5gUPd22YxXom1KkD[`VH:.`%{qXt7&iPaVY2~IU=2]&,5*u' );
define( 'NONCE_SALT',       '2?|r%/mC|.lFgfEhAUCU[{C9I80;LeJGX?O3R6l)+ sz>sD9&d=Ng<1U5kM*Dl-/' );

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
