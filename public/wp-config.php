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
define('DB_NAME', 'scotchbox');

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
define('AUTH_KEY',         'r;b7}%hg}G6l:Am3`4Y(G!&n>Rkue-`+aKu_zK(Ze]&~A36,h+#-)GGjX}f|2O!<');
define('SECURE_AUTH_KEY',  '`}~|&Aep+(mP0:+UvPEUGj-YR;Du[-ZaMMe|6aA/1.3+JMzO/D/ihuDQ?bJ^*co`');
define('LOGGED_IN_KEY',    'Rl@MDnc-M-dWCE!6d[*U[DFF|.,b.?%al>aaR-R#h=9C%WtYa?S*KW{V.*d+2r#>');
define('NONCE_KEY',        'w|$iju<K-0~(Tpx5_!E+Qj0 5i^PB1&yt]Cbcwp|)8* ( L5<DXoq[%z(Ridz63[');
define('AUTH_SALT',        'Ya$l[jfW[D:l8KoU(>GRsA^+Up&/N,l]T+zBLpxJg9}y(TAl}%tYUnJWjl#[lWMU');
define('SECURE_AUTH_SALT', 'Y&U>_(>Q+3RzHhc/shIq>x:YB-Lh8jvl5^MBQu=Ik`--8DH@h/K8|4F}isAl3A p');
define('LOGGED_IN_SALT',   'e&V[+c2RWZAL|YN$mh``0f|FHdMP+?C#+gb^EG%IS=[R-m%f9Pr+uxX`Akoh)tmf');
define('NONCE_SALT',       '%Ba*>+_~/s@OOCMr9$xDnROZj,JcMqH:;+u9:Z;tdY(l>%B,rce&CtYH^(.O@hi^');

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
