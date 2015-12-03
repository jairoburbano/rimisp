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
define('DB_NAME', 'rimisp');

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
define('AUTH_KEY',         '.x{?6QdBOjcMz0kiT;!|^uM/^A:V&Hb|)lhzY|S;r29W[Kgx?WIwXY=)Y%*^5@RT');
define('SECURE_AUTH_KEY',  'Ym*am-5m6U8F/v;Eo<lVZ4ZqiB?JxZlmu6_T<C,.K51fH|l`=WB~jh+-3@$%GuOR');
define('LOGGED_IN_KEY',    '*/YZkeV!HEUuG#OwnS4V!EP0hBsS]G+OSrvqTh*!$hGO 707+cqH+,)V@!t{%it,');
define('NONCE_KEY',        ' (02xho(i38rY{b@!oQVL?jh5[RB08wWaUn&.6h2.Sm9FgzB*J/Qq9 /8+y0%,6&');
define('AUTH_SALT',        'h&kc}|u^ps^<;7^hGd$9To&c^v-:pLP(<ohx=}-b@=CR)#Ct4#{C~HU0u|2AJ}I|');
define('SECURE_AUTH_SALT', '9t?,kZ{P5`!9M$$h-M+7A8C9 :zv(+0+Ms1SS4?2{B>0/4:5)J :oc~e$/oN9;B+');
define('LOGGED_IN_SALT',   ',ASN|pRCau6hD3cp@6oR2Wu[t`;q>Ec}]k_^rvp]>!%g.rUfAMpG>g<vH):XlA4P');
define('NONCE_SALT',       'U0}G|sMK1`i!#]Q_=U9cD+em;x:Nl^DZ%DDd;@@1NMSe@,u+<U2i&#/=**R6Oe]J');

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
