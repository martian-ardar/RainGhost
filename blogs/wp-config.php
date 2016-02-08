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
define('DB_NAME', 'rgwordpress');

/** MySQL database username */
define('DB_USER', 'rainghost');

/** MySQL database password */
define('DB_PASSWORD', 'qwerty1V');

/** MySQL hostname */
define('DB_HOST', '10.157.3.11');

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
define('AUTH_KEY',         't9)J~}Q6:e`sjR7)2,E,g^ra+)D<K%C,/MP7rKkwul: M(i=BT~~HfZl^<SJ#+c#');
define('SECURE_AUTH_KEY',  '3/>gv]-*i=usyG09qq<I+C1UwvnYyT7v<2dkZ Gwh6:Y%hQf/f*By@j[JfDx!Lv8');
define('LOGGED_IN_KEY',    'qY[]};q|}JpBgZ=/zHTg;)oCe|^hlr6{t8fx,aF#`Jhre/,yS{|IH,Cion/FEnNu');
define('NONCE_KEY',        'C#az}jjB_;a:s`b4)r3D)_.bLwz7R4s#/ZU#s}Yx>_,S(?u;?$hnr$8<O{ hu~c=');
define('AUTH_SALT',        'oGjH/J(o_$|X[2B&.E/j|i00IV?UEk<utAl9GS8NLtv~W kdcAj<z`9vQ?,iid$r');
define('SECURE_AUTH_SALT', '5hP/SR{wbRCU$:f[zlU-E,Bb]#Gs!U wdkKj8>>M?WJ`[ZPmT/I{nXf@B7!VNz9`');
define('LOGGED_IN_SALT',   'Lz&6Zea3KC,ug)I?*}@UlLX (K>*K1imuzRWWOX $[Ika*xHEx(pJgPO>5<BA,_r');
define('NONCE_SALT',       'ak@=Jl]lJG!$;n.o-bE0aifj.?aHJ*TXGMJl}*qI5T-tb[-GT/wojvV#a6Ek/n2s');

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
