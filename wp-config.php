<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link https://fr.wordpress.org/support/article/editing-wp-config-php/ Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'planty' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Type de collation de la base de données.
  * N’y touchez que si vous savez ce que vous faites.
  */
define('DB_COLLATE', '');

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'C|o5)wf,8|f|E9ab2PHtI).]AmiI2]*|E4C5a3ti*[ER{1yQ~-HY2b/}O4E>m4kF' );
define( 'SECURE_AUTH_KEY',  'x))vhI7[f7 2UaSOzAq3G!I&W:GvH-5O5-y3=lqOa5OS!aCx%=oS9M_.akV,c=Jo' );
define( 'LOGGED_IN_KEY',    '^i62+ylR}3n~8F4Dgy.E%|IBh r&/%[_#)ux;vz~N5^WX&f_I]5e;m`?95M<AZM2' );
define( 'NONCE_KEY',        'R2sMM[/oxjQR=WD:9~-<1|i<n9*I#.e8gAGQVnn @//uO2L.rPi$1sbDi3[Ub^hX' );
define( 'AUTH_SALT',        '$?@$}3{ry~(K&E^1kf4=-H:HfpdXOYG>%F&tOui4;EOh$#s(^wvZumBXVB] ($o%' );
define( 'SECURE_AUTH_SALT', 'q=~L_7~e?=fUu?%1?K*M8f{s+}}*>lDx3OW{xRN;r!BS#l_^6iPZx6P;%CM/N[xY' );
define( 'LOGGED_IN_SALT',   'D1:xDnMu&PB7Vr*PWF,2s@Qd)IDixPso&h]i%+r:(Og-DxMeFDx@5[NT&1b!;Ri0' );
define( 'NONCE_SALT',       'GR0s,uco=.}Q+>H]xfEV1vOo@j7#h%%mj+5QgDN$?} z(l-%z8<r(?Lf|<j*LVC1' );
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix = 'wp_';

/**
 * Pour les développeurs et développeuses : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur la documentation.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define('WP_DEBUG', true);
define('WP_DEBUG_LOG', true);
define('WP_DEBUG_DISPLAY', true);

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');
