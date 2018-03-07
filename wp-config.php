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
define('DB_NAME', 'wordpress');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8mb4');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

/**#@+
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'U!r5]^Mn6s8Bm/aM5xkA;>iKJad.@ {b{<QrgW6O{dy?e(>DpZ)ODfS{zZn72!XP');
define('SECURE_AUTH_KEY',  'w9X9*<>@Xv2-C<|Um_lF;kf^6vG;zbPMgBy(gDyyPcs9}MLQ/Q1Ic#RzH@J,(sCA');
define('LOGGED_IN_KEY',    'JeOzs,da(K)b*XQojA$inNGrryC`{a-D.zi&DsPF=(4w7G]q-[&]f7<W<&I9Da*O');
define('NONCE_KEY',        '/*ZsV.Y6#EU6:.zPrqrk@>B^%RwTtnZ8!_B2#ScdwR[,<fcP#> 2s$BDvrz4t[:;');
define('AUTH_SALT',        'q6N8P$Qqhu<zU :#+F`U-={+W<d(&Udt|x:GYN.o0fuC/Z5gk|`vW/;W?mVd=X9F');
define('SECURE_AUTH_SALT', 'Yuc/xz&Wi.A=eo-.0R.<T):zHO@!wr#9C>ao=;2_8#Eyr>JVm]oCtb>yHs*o`CZ^');
define('LOGGED_IN_SALT',   'V,bNP3-Xiato2cB`d|o/.=zCbAYy:wJT)Ycq`Cb8No&xV}U/WC+Q1yCtrU+$mvr4');
define('NONCE_SALT',       'Y;b-3bbo$t72aZ JhZ?S!e5@!FL6 H2^A ~N~bTNzuv7/PvAA[k7> p9O-z!fg8x');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

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
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
