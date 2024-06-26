<?php
/**
 * The base configuration for WordPress
 *
 * The wp-config.php creation script uses this file during the installation.
 * You don't have to use the website, you can copy this file to "wp-config.php"
 * and fill in the values.
 *
 * This file contains the following configurations:
 *
 * * Database settings
 * * Secret keys
 * * Database table prefix
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Database settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define( 'DB_NAME', 'shoes' );

/** Database username */
define( 'DB_USER', 'root' );

/** Database password */
define( 'DB_PASSWORD', '' );

/** Database hostname */
define( 'DB_HOST', 'localhost' );

/** Database charset to use in creating database tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** The database collate type. Don't change this if in doubt. */
define( 'DB_COLLATE', '' );

/**#@+
 * Authentication unique keys and salts.
 *
 * Change these to different unique phrases! You can generate these using
 * the {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}.
 *
 * You can change these at any point in time to invalidate all existing cookies.
 * This will force all users to have to log in again.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '8~(-5|-@c+mFH%7TN}NVD(t_VUtPtrmg-7xlu0`t!opG^QZt50)@-q@&}XAR9]>&' );
define( 'SECURE_AUTH_KEY',  'M/aDG1jkU_dyWI}:t/_tJ7&EC;YEdOtljy-:_Rcx1-VIRkYOgM:;{X)EMA@P#ue]' );
define( 'LOGGED_IN_KEY',    '|{0 KT(:22/b3)Ev#1v[&AF?qGz)KVmzgsO4Dk7:!RoYKR_.nWHVRGpu`Su1x^dV' );
define( 'NONCE_KEY',        'nISD=meHwDKAC+r*LKHB`W1#D^%dk0Ub&*P`XH#<.R:{czjN1[k9Z?r=O`HGT/Ik' );
define( 'AUTH_SALT',        'N~3:}Pc^cq<E^^;A&n{41lqZ{C1WSx-+|D>?GT4ehESNF~,ZVG|28/>68Gg_AZkh' );
define( 'SECURE_AUTH_SALT', 'euL;GIrT]}U9n2MG=!N!gYtz7v(tt$U%W|hhAzybfE]_w}<Ok!QyZrJtBl&Qj<PB' );
define( 'LOGGED_IN_SALT',   'b/CTepC:[%qV _nhS,`Efmr7(kc6|JgBZ=)cEd76xa7q]#/x2Y8m9R9dD=TrC8]{' );
define( 'NONCE_SALT',       '4gn}1}B7ypB7Ejq} 5JO_,<6,dVSF|_*@he~bQ{Rqpd{F 983,JUA9_e#Q:J[uk6' );

/**#@-*/

/**
 * WordPress database table prefix.
 *
 * You can have multiple installations in one database if you give each
 * a unique prefix. Only numbers, letters, and underscores please!
 */
$table_prefix = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 *
 * For information on other constants that can be used for debugging,
 * visit the documentation.
 *
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Add any custom values between this line and the "stop editing" line. */



/* That's all, stop editing! Happy publishing. */

/** Absolute path to the WordPress directory. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Sets up WordPress vars and included files. */
require_once ABSPATH . 'wp-settings.php';
