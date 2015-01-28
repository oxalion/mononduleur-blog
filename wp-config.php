<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clefs secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur 
 * {@link http://codex.wordpress.org/Editing_wp-config.php Modifier
 * wp-config.php} (en anglais). C'est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d'installation. Vous n'avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'monondulnew');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'monondulnew');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'Zw4ME2TR');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'mysql51-55.pro');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8');

/** Type de collation de la base de données. 
  * N'y touchez que si vous savez ce que vous faites. 
  */
define('DB_COLLATE', '');

/**#@+
 * Clefs uniques d'authentification et salage.
 *
 * Remplacez les valeurs par défaut par des phrases uniques !
 * Vous pouvez générer des phrases aléatoires en utilisant 
 * {@link https://api.wordpress.org/secret-key/1.1/salt/ le service de clefs secrètes de WordPress.org}.
 * Vous pouvez modifier ces phrases à n'importe quel moment, afin d'invalider tous les cookies existants.
 * Cela forcera également tous les utilisateurs à se reconnecter.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '}e*+1;C|j/{w}zcpw#?~^Gz_+j*Fs=@da-5i(G1wP{P-;n5H:-F-`}+>f;2Onuo#');
define('SECURE_AUTH_KEY',  '|AMKNLe(8z!Pk|-6RC5)286jgOFTve8?@%i=3>=th5BtJY?t8F]-1p[K$Q`o|+Yk');
define('LOGGED_IN_KEY',    '91Yz%&df|:^t:2sWm+l*.K}UR-5^d?Ek}7R)bn%)[l}NNLCSZ,f!5Oet7t1XN|z7');
define('NONCE_KEY',        'sbBWd^iX3F)5*-$]Bc9Hks$5Duc<ZYA:3{f&-Qw|WR4E}@N71EIDA8cEeA:_D&}i');
define('AUTH_SALT',        'oUx.ul{%0T(ST|p|fXhRXxf3XAJ}s>:NYVI+AB$oy-QrKtB?/4|Tp<;PK1-MYd7)');
define('SECURE_AUTH_SALT', 'm0U8vqL|Fky5j6Hm0N+k~Jd|gEv|5?x+8z_YaPG-.TB900-/q:XdA<PvOpJ,]q#u');
define('LOGGED_IN_SALT',   'r2Kc[3(:plM}rz3$E6k.u=v04{3V5:|&e^Z~<tkGsWf}Xu`/.TF/zTB=5/b^*fwT');
define('NONCE_SALT',       '@ct~Q}g:7R<?Dg}}DoN08-m*++Q`@G<}@]^yVp|0O:q&=mIbXyV!b%Ag{m-s1lFG');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'blog_';

/**
 * Langue de localisation de WordPress, par défaut en Anglais.
 *
 * Modifiez cette valeur pour localiser WordPress. Un fichier MO correspondant
 * au langage choisi doit être installé dans le dossier wp-content/languages.
 * Par exemple, pour mettre en place une traduction française, mettez le fichier
 * fr_FR.mo dans wp-content/languages, et réglez l'option ci-dessous à "fr_FR".
 */
define('WPLANG', 'fr_FR');

/** 
 * Pour les développeurs : le mode deboguage de WordPress.
 * 
 * En passant la valeur suivante à "true", vous activez l'affichage des
 * notifications d'erreurs pendant votre essais.
 * Il est fortemment recommandé que les développeurs d'extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de 
 * développement.
 */ 
define('WP_DEBUG', false); 

/* C'est tout, ne touchez pas à ce qui suit ! Bon blogging ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');