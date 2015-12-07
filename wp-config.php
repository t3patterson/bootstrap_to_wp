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
define('DB_NAME', 'bootstrap_to_wp');

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
define('AUTH_KEY',         'a_m`qqS7Rj?e&:;v!3]zAtxo78H7y-wt$`R|v;n*nIU`v=U10~JL51cm:;d -{+}');
define('SECURE_AUTH_KEY',  '=GbD DcD,-$>K?9p<Bgp*$^-7dr=zhPfZE_f[daIIVO/I9VDwf|@.NikHh3=$999');
define('LOGGED_IN_KEY',    '[.*]ti5jn,@ewL4{/rxQeJ>bDO2`}N[)SHJB_h#dDj@K*x%9&vlj@nbq{ VZ4?T/');
define('NONCE_KEY',        '$/m@&v>+Jz?rEZrr7=q3.nq,3dKqS$^x-.in+26ngDp*q:^CKe5uO$->oSdNvS,x');
define('AUTH_SALT',        'O35S6J*nnY]}^Z4|lM%uHE@Uvag#FCNhe v59cmI=;Kp|wPdL>`XdhbaxDN)^0dU');
define('SECURE_AUTH_SALT', '3`QH`j){>]fk:B1rb-jO)OC=rZouFMBI@l@tg8>Gw}(U5/SLz.:i0+L;G!)#~&^_');
define('LOGGED_IN_SALT',   'xy,Qj% N5zG|./5*is#K5+AgLP-eLL6?U0{5EoKCsyDiY$W9s[5_z[~e+FLW+49B');
define('NONCE_SALT',       'vZo%7LWy2(/iEs5k!f>C249@7ezf#5pyd!|3-(dM+0rQc([t~n,:w.2m`C9<vtF<');

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
