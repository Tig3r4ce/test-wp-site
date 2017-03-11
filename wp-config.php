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
define('DB_USER', 'wp_admin');

/** MySQL database password */
define('DB_PASSWORD', 'abc123');

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
define('AUTH_KEY',         'Hg{DeESteU/&;_Ci/UOZGNki,L[]Mf_ 8M0_=P}JggBfM-0Pasc14~t!*g[g+8Cb');
define('SECURE_AUTH_KEY',  '7ZW;-ZY9?Q!*[G976_? P3oh&XGNGJ4HV;E(c 3ugzH2g9K(gn{2S1n]`juiD!<k');
define('LOGGED_IN_KEY',    'R({3Xahx3LrpM`NNkEO#Kl,4+(Q/-gtX:i:_JuT&x?$t /SU.35Kchg<Ht9y:le,');
define('NONCE_KEY',        '(H<pO`ijq<-Go gg$ UTYGbjD$Reh<B@)%Rs=E?_:!&#_JcN`I[%a{uvc:sIjMh@');
define('AUTH_SALT',        'BAR@N*sn|8og$-7g29BDY+96*]ev.o#%!_BJfMcME_O2r;-%;2,c_7.C`q>8E3f8');
define('SECURE_AUTH_SALT', 'V#XWH0}VH=x[>-_oKJ+ZR-6l8T5%;h%3YVkZ#Fcm],.L1bK&s.+9Q`2qvVKoB<lH');
define('LOGGED_IN_SALT',   '*6i9L[y]iZ%eFmZ`,{LL8R0OD 2%?wdqU%[*Rk7b-8v(1Vx7.w$[{`~M~ToyCf0w');
define('NONCE_SALT',       'LmW#=U` DzB?f/@M- :@Cc9{0q0<N3UNUN.]f~<dsl=B C2(.~R9Y+E:I6((FB)@');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'test_';

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
