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

// ** MySQL settings ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'apicity' );

/** MySQL database username */
define( 'DB_USER', 'root' );

/** MySQL database password */
define( 'DB_PASSWORD', 'awoods' );

/** MySQL hostname */
define( 'DB_HOST', 'localhost' );

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
define( 'AUTH_KEY',          'F<;r&,zN1l-RazbgSpS2wC/8b3)>8#kOSPOO.l^kaYOjMq#BVId{`1DYWG{W|h)]' );
define( 'SECURE_AUTH_KEY',   '1HMH{(!J[ULw{GF}Yeo_St2x0kk?g=.2E!=>Cr5aJ PS21LT0tPoc|`M0>t|GF}R' );
define( 'LOGGED_IN_KEY',     'ae1Ay2>o^4cxnY[F8[O^W(D2vjt4T2?,n]Tpk7hQJ+W9Y.evFv2PJ(p))v[!s;1f' );
define( 'NONCE_KEY',         '2(L2K&.e)|72D/E1E8R<q[BsN~4Hw@vjdQkx4<YvDM|%B!4o&I|rh,ChzFZB~7n{' );
define( 'AUTH_SALT',         'WV5$>X.6-nEBLc<!Ip%bCO1:rJ3d$/L`&pAmiboVo1!0|y88[Hu}6X+NIly|U(n+' );
define( 'SECURE_AUTH_SALT',  'dQ$_NP?9dax)D_G=k4}$JUv[y2Ya*4c5U|nYvXz|1DjV=W_FMq$fw9= }:d_$7Ja' );
define( 'LOGGED_IN_SALT',    '8J6+jER>)kzRD=n`Ck(v hN!+.1];KYG?MsXe}REW(MlEHUE/Wbh.7:(awQcFARz' );
define( 'NONCE_SALT',        'mn)tsHuJKyW[|YRckTdEipGM7yYsUL>1]zirAoro^3:rrn!/@0>C(tfJrb2C_@qr' );
define( 'WP_CACHE_KEY_SALT', 'lCYRBXwwX7V1lixP.?XC$&{OQ7?x>n//9^9=6YEC8_s6.i+#Op):XUfROLE_#F,d' );

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';


define( 'WP_DEBUG', false );

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) )
	define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
