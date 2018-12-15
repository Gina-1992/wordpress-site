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
define('DB_NAME', 'wordpress-test');

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
define('AUTH_KEY',         'W}_PRn1hor:@;_iY4Wo8W#e},YqIS!j9N!5~9HhxT)y1:{@_5B#3VzmL<:F#9GfT');
define('SECURE_AUTH_KEY',  'n|A~C:p`LLnS)&:L%BmVVqM[<Kr}r>Ozk34Pvq_;IgF(..j|:{WEYI3fy6P$xaj*');
define('LOGGED_IN_KEY',    '09Ca}mv~K=,ekqjVDXkwu?_~{CP8<5,|J`YOeE`/4Q!aBmY.P2/5qb!rG^q{@k(c');
define('NONCE_KEY',        '{&b4pX1urkw Y>vt#q`4Kqd[0U,y9`*jEk`/lChao;>xr^=^DnTstA<r)eIzmic(');
define('AUTH_SALT',        'gg/!V^vDG<`3@BX.=X~SQiLg$VQ|l;P)GoOy|)D8a iizRb6`9HJf,=7r;W-k/CK');
define('SECURE_AUTH_SALT', '^G4GmQImD.k 2m !)#Mh3}ea;6xS[:+p]d/hQHt*QWnl4& X<~oOj37Zp7]c8E2O');
define('LOGGED_IN_SALT',   'O7f0:[FB6pZ$p7BYv()OfaS<[N3QyV<]9l~T(v%8XKVsfJrqWw~2XHy=a>&`0ig{');
define('NONCE_SALT',       '|iG/bJUj 415@l?(<kj#0EeC$I|VCI9VxK1V84RQD+dTHq;BU dK!E;p8N{{A_L>');

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
define('WP_DEBUG', true );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
