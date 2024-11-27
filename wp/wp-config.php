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
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'varnampainting_wp75' );

/** MySQL database username */
define( 'DB_USER', 'varnampainting_wp75' );

/** MySQL database password */
define( 'DB_PASSWORD', '4[PaS0pD0.' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

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
define( 'AUTH_KEY',         'nauyfm15mlcoma5przlkm2uuqaazqsrpamepz7st1ojjruck5qapj7kqdskuld12' );
define( 'SECURE_AUTH_KEY',  'ih3m9nre0lparbxo79vhrvgakp3keiuqogs23uqvoreiofn6bbydevaoebrcmafj' );
define( 'LOGGED_IN_KEY',    '39ioribuzhcvzbau0xzvqqeo1fykopytvvfybvfaspw8lfutshc35znfm2tb8vlb' );
define( 'NONCE_KEY',        '8xehu29ut7dimmc56hllmbxoulnbkorznnuraepyn0qgcbpwff9arovrivnh3sua' );
define( 'AUTH_SALT',        'mxpl499rhs7ptxzo0luapbrnnfxpzicrsyz08rfqnvzmwqmnvzumwaqsmh57g9tg' );
define( 'SECURE_AUTH_SALT', 'kipydxuapogpywzv0de7bt7wqyydrjzu0a1le5ev5lczcu4efxlavb99ojafrbsl' );
define( 'LOGGED_IN_SALT',   'ff9gdsurozoqguhghe0yyx5pjclmobp8tmejsqbszdlbjdagwjlyo0x1qjf0qpjt' );
define( 'NONCE_SALT',       'ra9hhckbi2igy4g9i5byfdq2cwsc8uy50boawsqwicbcxpxfxkyxhts0cp0vmt4i' );

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wpqw_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );
}

/** Sets up WordPress vars and included files. */
require_once( ABSPATH . 'wp-settings.php' );
