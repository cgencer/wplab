<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, and ABSPATH. You can find more information by visiting
 * {@link http://codex.wordpress.org/Editing_wp-config.php Editing wp-config.php}
 * Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** MySQL settings - You can get this info from your web host ** //
/** The name of the database for WordPress */
define('DB_NAME', 'wplab');

/** MySQL database username */
define('DB_USER', 'root');

/** MySQL database password */
define('DB_PASSWORD', '123');

/** MySQL hostname */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         '_14u;LC@8pRL+=={=H^+%dLkOt$HP.w|-;!R-l+6`ufr}4ulsR$Z%K=*VR_VbI5b');
define('SECURE_AUTH_KEY',  '<9c*@GhkFe_oGRBQ2)MAGZZ+J ExIo=1)4ZgsLHS]gpm{%#26Geh9IT:{o0cz7Y+');
define('LOGGED_IN_KEY',    '4YUPe[DD*cdWRjW>]<)9)kNx-<(/S1^74IV]||#;FL :5b+oC{,ar)9S@S)0^Hj+');
define('NONCE_KEY',        '6lyyitr}/8W<Tw(Z=[_Feg0N0/pFQ}Oq[yF1xkrPHw>g!S`!Kvv!COW(+#zjE1C#');
define('AUTH_SALT',        '%Szs?[|w6&{Nx| Ea|$bGM`Ci64nq(_e)5!jo5o~QF(`@S5D HV$>|+v xVo|06N');
define('SECURE_AUTH_SALT', 'BFw|0M)S!_>QR|XU|A>F#x2lfE,#` 1w%S`9>>vF2&4tx4^M,ijmxhtZ-gxijT_+');
define('LOGGED_IN_SALT',   '.s0D1Z9TO:*wy!a&(k].wU8K|2CbSDy|UX:7Q}:b@+~b4r(/Y(f6;341-Z2}4bjO');
define('NONCE_SALT',       'Ok8wuBvQ? mt}1l-sziSk(}-/:n+x;BYv&7*Gu|97eTs2(+j+R:KG=7=TwSfWzfy');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * For developers: WordPress debugging mode.
 *
 * Change this to true to enable the display of notices during development.
 * It is strongly recommended that plugin and theme developers use WP_DEBUG
 * in their development environments.
 */
define('WP_DEBUG', false);

/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
