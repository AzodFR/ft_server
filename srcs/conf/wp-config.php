<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en « wp-config.php » et remplir les
 * valeurs.
 *
 * Ce fichier contient les réglages de configuration suivants :
 *
 * Réglages MySQL
 * Préfixe de table
 * Clés secrètes
 * Langue utilisée
 * ABSPATH
 *
 * @link https://fr.wordpress.org/support/article/editing-wp-config-php/.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define( 'DB_NAME', 'wordpress' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'wp_root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8' );

/**
 * Type de collation de la base de données.
 * N’y touchez que si vous savez ce que vous faites.
 */
define( 'DB_COLLATE', '' );

/**#@+
 * Clés uniques d’authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clés secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n’importe quel moment, afin d’invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         'fgiufhciorhgvoerhnvioebhvoperhncioebciovbecioewpvnfiovjn' );
define( 'SECURE_AUTH_KEY',  '56fv1d56v1d6v1d561cv6d1v56fr1b56v1r6fv1f61vrv-9-v+df-v*-f9v-f*v+d9' );
define( 'LOGGED_IN_KEY',    '4+9t8w9rgt +rtg+45+t45+t45T%+T%T$$Wt4++grgs' );
define( 'NONCE_KEY',        'rt+grt*-78g*er8g*8ef*-8e-9f+awf+ewfr+394+rads+f6+eferGTH{FH}}:[][][ ');
define( 'AUTH_SALT',        '5494985+9562th2dth+dr9h+5+95dh+95+h2+t+nht2+hn2hty+2n+ty2n+td' );
define( 'SECURE_AUTH_SALT', 'cieciuewiob3db3ibri34br34t647346r7235478)(*&^%$#@#$%^&*(*&^%$#$%^&' );
define( 'LOGGED_IN_SALT',   '5cv45fv4fv408dv40dv4c8d4v8erverijcgeiuwfcuefgeytr34676348r36r48346)(*&^%^&*&^%^&^%^^^^^^^^^^^^^^^^%$$$$$$$$$$$' );
define( 'NONCE_SALT',       'f2ew6fc6ew2f6ew156fewfkeiofhcoienfvnv[][][][][][][][][][][][][][][]7i69y45yt784yt78y4t78hw4' );
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
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortement recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d’information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://fr.wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* C’est tout, ne touchez pas à ce qui suit ! Bonne publication. */

/** Chemin absolu vers le dossier de WordPress. */
if ( ! defined( 'ABSPATH' ) )
  define( 'ABSPATH', dirname( __FILE__ ) . '/' );

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once( ABSPATH . 'wp-settings.php' );