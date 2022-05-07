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
define( 'DB_NAME', 'chalet-caviar' );

/** Utilisateur de la base de données MySQL. */
define( 'DB_USER', 'root' );

/** Mot de passe de la base de données MySQL. */
define( 'DB_PASSWORD', 'root' );

/** Adresse de l’hébergement MySQL. */
define( 'DB_HOST', 'localhost' );

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define( 'DB_CHARSET', 'utf8mb4' );

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
define( 'AUTH_KEY',         '7fu>.}:2^KqG@RA/a`*Dt_ CFf7XZXrm9q&fpsg+]<~kqG~(rq^P&g6LI5eQZKzL' );
define( 'SECURE_AUTH_KEY',  '*zHRaZT^yt%9p*=jAenxB;Z@%N,2Eox1*D[<96=7YTxp9 MZiOw&3FF:f,||6v;U' );
define( 'LOGGED_IN_KEY',    'qF2U[uWuf>V{pR[/VCdc[9HA&|C)e1}H-,cbe6of|ECPDjj:uwJ`&,;sSj&YCatC' );
define( 'NONCE_KEY',        '] 4)S_SFwx `+_sbHe$3pJqk@=^&(WrE6U!4uk@_Hr;rZdg2rY/.sxr7^//-~h;$' );
define( 'AUTH_SALT',        '|B{Fuw8RBJ$9yu|oMS=~|oZB.J-T~:dxU]`]{y^CdfZ6i(r4x~OVYt` coWy_7}U' );
define( 'SECURE_AUTH_SALT', 'K/t:LlBn|GQ`e_93bBb`dY:6oB1&-RR^-Etn`j}L*I7.(fL9_yPZzc1i5<@{`9W<' );
define( 'LOGGED_IN_SALT',   'N|e*<oi9y}og$r)=r;[(tyU4hAL8`i=fJ$#Pum-Eops@E_#LXe8q(,:Uu9(S=-GG' );
define( 'NONCE_SALT',       'dzA{yg!+s)0w{,WJ@}N48oeVT.t]Ox)S@Y8|M@ey$iv[;Q*X[^!Do&q:L5*ua?zz' );
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
