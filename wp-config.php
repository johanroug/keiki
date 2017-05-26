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
define('DB_NAME', 'keiki_dk_db');

/** MySQL database username */
define('DB_USER', 'keiki_dk');

/** MySQL database password */
define('DB_PASSWORD', 'abcd1234');

/** MySQL hostname */
define('DB_HOST', 'mysql48.unoeuro.com');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY',         'NNYaewFu!qSrKZ)*E&RpCRhL5spr%oF3UbftXf1YLBn5H)DNN^2Zt@ddLxhL6SAe');
define('SECURE_AUTH_KEY',  'C)dF^)0BJe1XQGHU6R)enkco6s&qA4IQd4TdnyEG63h(puGI!9d#D)0Wd0(G1vjy');
define('LOGGED_IN_KEY',    'hKYn6g%OzhD@O6Emx93oNmR6mdvUKtofzzcnW^5wZNh32*sROGU7#5LgV@H3sfAU');
define('NONCE_KEY',        '(8WXpw27CYsH!3RIetl12dAOu#eQ6mMLLMJUBmfIJUFlMf3j&qfk@(ewnCb%LEPk');
define('AUTH_SALT',        '4DGdSZ^Ta@EjOcTjqtjxB*X7Z#FlL4mOwUw4Zmg(pZDG2a&x(kOUr7rUqUPY^LJq');
define('SECURE_AUTH_SALT', 'B99zn(0PKMYb*quE&vwi9bdGdB!P0C7FYHwP2o7psY)^FOBYZla6T3#HX)lbpCXz');
define('LOGGED_IN_SALT',   'A8PEzw^luN5hK&wjyLW#9xB(^TdxfB9(8&8yyfYXXI%!a!(h8dNFgk3y!UeEfs(u');
define('NONCE_SALT',       'y(TC)^Kx#Yj3I%l56fPt4MN@Y4!oPZj1zjc*j9VO^cmNE319XrnQZv0R5Rm6jn)2');
/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'clk_b08f3342f0_wp_';

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

define( 'WP_ALLOW_MULTISITE', true );

define ('FS_METHOD', 'direct');
?>