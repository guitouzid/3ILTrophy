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
define('DB_NAME', '3ILTrophy');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'root');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'root');

/** Adresse de l'hébergement MySQL. */
define('DB_HOST', 'localhost');

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
define('AUTH_KEY',         'X$X:c^0pWYpafYTu-[A?>HjX^[_#uB1+ku_Dx;cPzt<.x)DP8_v(>yDEe$Jff1h#');
define('SECURE_AUTH_KEY',  '<j)M3l0RNCG-3SV]u(s7p`Tge|6kv;UBz/{RB@|QOa>Y->+sl4++ykP*WT:]^TG(');
define('LOGGED_IN_KEY',    'fC(lrS*E/<B)<Ng#LCMIs>`@psh++pKr~gbof(TX+@oNl%oBsUgMYJr,5g]=,,wU');
define('NONCE_KEY',        'ggp$FQ2eK*+!!&!@ATB0M/G/?BWHY-3V%&ey?&v(+T@maVCBe/IfBA_!%Mgg0~>m');
define('AUTH_SALT',        'x-zbR{!39t(e>qA`ye6!]g_lDgS2t;an mJKN<YPqkR_Rgx{!&he FV*zaL~+[/8');
define('SECURE_AUTH_SALT', 'JaibZFT?{^{[zCKbr&jVX6IkliM|k^@Se2`gQ|6[k+.5,zK+2gau}rgHGzB/.9EN');
define('LOGGED_IN_SALT',   'pBg]sI._Tz6e}OJ(a3)J-yE@NvwZzFMgRNXr|>BywjNLnf$ZYKi^%&*||0Uq`[B-');
define('NONCE_SALT',       '`+0yLBj6L/%c&0;Ryqf<Cp!oK?a.TAp,+Cg|`^^(a +G@]$+3{:AN?`sD(m?N8SZ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique. 
 * N'utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés!
 */
$table_prefix  = 'wp';

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