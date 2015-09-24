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
define('DB_PASSWORD', 'root');

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
define('AUTH_KEY',         'P:TaIKPa>UA$sv3Du_+ss+|KNb(R<JKfWWLB+fOT]p}@(c^||4UIefJlMVgB}EJX');
define('SECURE_AUTH_KEY',  '}.njto>/J^KC0@k[u}ITO0; , az)-Tq^&]{c3:|u3AfwQC2gP_[e83&2?lqtr.J');
define('LOGGED_IN_KEY',    'sr.7WH4T5Q+U4WSktH70^K0Zd%J2HZA +/0x6.}FA#U+QZL(N h8~$kdMg-3=n~ ');
define('NONCE_KEY',        '>oGWIX-@%LHnd*` (7}+W9<0x8[3gv^MV%#*Ut1AJh(T?+:<Ru-?;e)y%<H6pN4]');
define('AUTH_SALT',        '|.HodylF@rr<6?oH/|Q8G-1umB!VMkV<tLsdq_k2b|!fkeqbye8dRga#5+4z,O-`');
define('SECURE_AUTH_SALT', 't&>|^gUqr@*`>F7M7U(HnU|M9fl(Q[smg*vBPYjm*E,d?zr:>OWs<M0Q%wI>Gz~p');
define('LOGGED_IN_SALT',   '{]rG85bV-y!K;M$<0X:-<Tz98zvwTF*8ly[`OM)4ah,$G]{-MQInliG^=Q&{-_7R');
define('NONCE_SALT',       'ZCcV#6_stkMtK[,wRI a<-/P<+}(U|O-2P+pF^%e!x><Vh3J2k9|Ff,l}1;<+{vR');

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
