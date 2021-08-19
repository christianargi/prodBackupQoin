<?php
define('CONCATENATE_SCRIPTS', false);
define('DISALLOW_FILE_EDIT', true);
define('WP_CACHE', true);
define( 'WPCACHEHOME', '/var/www/vhosts/qoin.id/httpdocs/wp-content/plugins/wp-super-cache/' );
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'wp_tmwp8' );

/** MySQL database username */
define( 'DB_USER', 'wp_6eyph' );

/** MySQL database password */
define( 'DB_PASSWORD', 'Qc97WuD!6m' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost:3306' );

/** Database Charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8' );

/** The Database Collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**
 * Authentication Unique Keys and Salts.
 *
 * Change these to different unique phrases!
 * You can generate these using the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * You can change these at any point in time to invalidate all existing cookies. This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'HeKgn5!-6h;0!x#]0(9l4ADG-80XWMdqF*:69LTZI1vLX2Z852H5_a90Y+54g5-5');
define('SECURE_AUTH_KEY', '9G%nIb[BoC3Qsu!O7S28Y|i[|dn7e9;X&H]HwmryN00lGl85TB&aam32#9Nvk2C9');
define('LOGGED_IN_KEY', '-J2|qxd*M2c73334ZTZ!k&q75U6(xtt!UTnEAoP1I5@%H+ViI98yb9Opvifu@+yb');
define('NONCE_KEY', 'J96zttU0#ZYM/Tm9]_5p[RmEm;#&~M;8+mq0KC5117]LcmJi_2zFH/0Gg81gQBKu');
define('AUTH_SALT', '+:a1nq[/56)6]FS6S_-P!t+16k~zV]vON3qjeOL[98~:l02e|)Ycg66f8[5e21Tu');
define('SECURE_AUTH_SALT', 'b8r1*+S9yk6B0KlZ[7!t|;Y5T*(haO~%x#M+90N4q1SO-dc-C2z)m%&Xn2%VExFd');
define('LOGGED_IN_SALT', ']K[55KS4056Mj0i!mK46@%*[X;4*|V2FVm*j3nF/5#hRS26USW]c6%IV#I/sF7xL');
define('NONCE_SALT', 'XH(t0z1)F10b_~T]A@06%1Y;-~Uf3IalkUyo!/L54j]Y5C)%%]A)M14o:a5j3mn2');

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'Mpp2o0sq_';


define('WP_ALLOW_MULTISITE', true);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
