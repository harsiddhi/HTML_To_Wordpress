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
define('AUTH_KEY',         'z *CoYZV(iEH,D*/ycX/Gf*?HLHi[*aq^D_U89G9VSAu+qu!T6|u] Jck(A/te}]');
define('SECURE_AUTH_KEY',  'b5<@9093i}mC+ha3w!.`S{/(y2[J .gH6WoD%,KPW9Obk57snnKL~m2/bJ)LbK0k');
define('LOGGED_IN_KEY',    'T|DU:tL7Z<6Lw;RRNp>6xnmZhX^)JKHvyHBD&3os<szC9mvozYJGf4yET|A- ^v6');
define('NONCE_KEY',        '4f0R9$B<c*v1db337ePc/c^zIeBQ1CGzg%H1`aq^+0!!HXxlUx2.7pAa&~n7PWMt');
define('AUTH_SALT',        's/F3,kMe]Qa^9NF6{J~b=YHz}o.`8A]pz=X3,DQ3v((JCH/=WRkIQk<kt*U~d=HI');
define('SECURE_AUTH_SALT', '(w0{_EB#J2SiME(SHj$-i]-NQ,bT.k8eEwqVI2Cz|]k`Cio/3 dYw9AsAG_$]q]n');
define('LOGGED_IN_SALT',   '>!;jw)t47ru-7kDBc.i>x!oyK-9=X>j3PB0U1SSq1:W5Q(~tFK?1qaGc&:kpPJ2?');
define('NONCE_SALT',       'n5#yQqEG+-Vx&&a)6w1QTFy?qu(mGkhWn77c7@CH 1b40]a8fc(=A6cii$q~[|%q');

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
