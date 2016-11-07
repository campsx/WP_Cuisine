<?php
/**
 * La configuration de base de votre installation WordPress.
 *
 * Ce fichier contient les réglages de configuration suivants : réglages MySQL,
 * préfixe de table, clés secrètes, langue utilisée, et ABSPATH.
 * Vous pouvez en savoir plus à leur sujet en allant sur
 * {@link http://codex.wordpress.org/fr:Modifier_wp-config.php Modifier
 * wp-config.php}. C’est votre hébergeur qui doit vous donner vos
 * codes MySQL.
 *
 * Ce fichier est utilisé par le script de création de wp-config.php pendant
 * le processus d’installation. Vous n’avez pas à utiliser le site web, vous
 * pouvez simplement renommer ce fichier en "wp-config.php" et remplir les
 * valeurs.
 *
 * @package WordPress
 */

// ** Réglages MySQL - Votre hébergeur doit vous fournir ces informations. ** //
/** Nom de la base de données de WordPress. */
define('DB_NAME', 'wordpress');

/** Utilisateur de la base de données MySQL. */
define('DB_USER', 'userwp');

/** Mot de passe de la base de données MySQL. */
define('DB_PASSWORD', 'uwordpress00');

/** Adresse de l’hébergement MySQL. */
define('DB_HOST', '78.120.153.164');

/** Jeu de caractères à utiliser par la base de données lors de la création des tables. */
define('DB_CHARSET', 'utf8mb4');

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
define('AUTH_KEY',         '?|CW>9Z0($@Y<xdFA$yW^DkcG9E/-z:Z%tfCCN;/=e^ Z>4}2HEkaI,8{}W]qQ.F');
define('SECURE_AUTH_KEY',  'Z0U|x8t,8n&{f9(p4/BM`^`as`T^c~32(IJdQ&(wS!XUs[|K$mz%DTz7ibHx*M{Z');
define('LOGGED_IN_KEY',    '(Y&Msh]{Ia3Emqd6vSM3(c/k5;0EA-Dxgl2KXT89>ZH_io[Z&Cf7^A#WI9H^A`6<');
define('NONCE_KEY',        'X2RC>L{QXb+K#66%Zry`]@YlA|[Ist%fSh4,LWfqKa_q^qouM4ep(<af=[FtwuSk');
define('AUTH_SALT',        'wfDk+TP<}9tFhq98l17>WrJ6%`6BZvrZA2))#D4uV6G%6{FY#i ER{ {g}5c~/fe');
define('SECURE_AUTH_SALT', '._ZGUHMa~foTxv,-=voQ?OK@MYJ//go#qfrr^!hzUsZ<H]E(aG=i(*F-!X8-jHi8');
define('LOGGED_IN_SALT',   'pv|3.9r+a|J_,_iBSt BLEB5T=wg]0gmI~5CF+ZNv9-G}{qXxP*6KBw!(w SO*O#');
define('NONCE_SALT',       '!h bfA-1<J9r dZSw{_KM%&3}w)OKxj=2RT/_ -mY9&LSaV]Y8u@}08Irw+vRHRQ');
/**#@-*/

/**
 * Préfixe de base de données pour les tables de WordPress.
 *
 * Vous pouvez installer plusieurs WordPress sur une seule base de données
 * si vous leur donnez chacune un préfixe unique.
 * N’utilisez que des chiffres, des lettres non-accentuées, et des caractères soulignés !
 */
$table_prefix  = 'w0rDpr3zs_';

/**
 * Pour les développeurs : le mode déboguage de WordPress.
 *
 * En passant la valeur suivante à "true", vous activez l’affichage des
 * notifications d’erreurs pendant vos essais.
 * Il est fortemment recommandé que les développeurs d’extensions et
 * de thèmes se servent de WP_DEBUG dans leur environnement de
 * développement.
 *
 * Pour plus d'information sur les autres constantes qui peuvent être utilisées
 * pour le déboguage, rendez-vous sur le Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
define('WP_DEBUG', false);

/* C’est tout, ne touchez pas à ce qui suit ! */

/** Chemin absolu vers le dossier de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Réglage des variables de WordPress et de ses fichiers inclus. */
require_once(ABSPATH . 'wp-settings.php');