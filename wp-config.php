<?php
/**
 * The base configurations of the WordPress.
 *
 * This file has the following configurations: MySQL settings, Table Prefix,
 * Secret Keys, WordPress Language, and ABSPATH. You can find more information
 * by visiting {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. You can get the MySQL settings from your web host.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

/** Nom de la base de données de WordPress. */
define('DB_NAME', 'quebecnumeriquecom');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'qcnumeriquecom');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Hrt745csdu5wa76t4ds');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql2');

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
define('AUTH_KEY',         ':<R(0^qvUacg+O[:-=Z?ud:iwc~V2<_23i5BQC7&}`97#S!o$^)_{d6U2)%8j#98');
define('SECURE_AUTH_KEY',  'ipl6{pXcp2q<4e-{]w^FCGtQSS=+ed]W894kNnnb&Xyj9+/b]Vo_|},eZ.qK->vQ');
define('LOGGED_IN_KEY',    '=mo4@75?!UYZ#qRPJ8q tt5<3A !bkf-[UxV_L`6y)37V^q#!qkfnm#;Wu(qeC-!');
define('NONCE_KEY',        ':mqf_|`T>=+).`_l-:m=[W|BT_/r`g-}^o5=wKw[R#S;5n<c[x]WNqX!]|Y+%wnf');
define('AUTH_SALT',        'GJ^T9e|T?hZf3<2Zmdm5ezgD$f+o>gerije)F,C~PG1q:11T|3@SE/FX6Wc}_M{<');
define('SECURE_AUTH_SALT', 'VR6C44.~kj(-@`|^WExC b!41@6$0U6s_+e[lwrt)-Dwtl~jNnZ#h$3 +edF~qNz');
define('LOGGED_IN_SALT',   'bw:!M!-N48Qm3x Fwq(q4xD<XSNC5n-+uykpe|S|VJl<0kaW^]NuWOGfT&6Lx7d*');
define('NONCE_SALT',       '0d#p,NE^5qR[MZ[{X|, !Y(p-mVZY]||z&6|a[3&Pw1eJ:5r bnGEaAw=D Y%06`');

/**#@-*/

/**
 * WordPress Database Table prefix.
 *
 * You can have multiple installations in one database if you give each a unique
 * prefix. Only numbers, letters, and underscores please!
 */
$table_prefix  = 'wp_';

/**
 * WordPress Localized Language, defaults to English.
 *
 * Change this to localize WordPress. A corresponding MO file for the chosen
 * language must be installed to wp-content/languages. For example, install
 * de_DE.mo to wp-content/languages and set WPLANG to 'de_DE' to enable German
 * language support.
 */
define('WPLANG', 'fr_FR');

/* Multisite */
define('WP_ALLOW_MULTISITE', true);

define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'quebecnumerique.com');
define('PATH_CURRENT_SITE', '/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);

/* Cookies */
/*define('ADMIN_COOKIE_PATH', '/');
define('COOKIE_DOMAIN', '');
define('COOKIEPATH', '');
define('SITECOOKIEPATH', '');

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
