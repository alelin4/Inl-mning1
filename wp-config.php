<?php
/**
 * Baskonfiguration för WordPress.
 *
 * Denna fil används av wp-config.php-genereringsskript under installationen.
 * Du behöver inte använda webbplatsens installationsrutin, utan kan kopiera
 * denna fil direkt till "wp-config.php" och fylla i alla värden.
 *
 * Denna fil innehåller följande konfigurationer:
 *
 * * Inställningar för databas
 * * Säkerhetsnycklar
 * * Tabellprefix för databas
 * * ABSPATH
 *
 * @link https://wordpress.org/documentation/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Databasinställningar - åtkomstuppgifter för databasen får du från ditt webbhotell ** //
/** Namnet på databasen du vill använda för WordPress */
define( 'DB_NAME', 'assingment1' );

/** Databasens användarnamn */
define( 'DB_USER', 'alelin' );

/** Databasens lösenord */
define( 'DB_PASSWORD', 'alelin' );

/** Databasserver */
define( 'DB_HOST', 'localhost' );

/** Teckenkodning för tabellerna i databasen. */
define( 'DB_CHARSET', 'utf8mb4' );

/** Kollationeringstyp för databasen. Ändra inte om du är osäker. */
define('DB_COLLATE', '');

/**#@+
 * Unika autentiseringsnycklar och salter.
 *
 * Ändra dessa till unika fraser!
 * Du kan generera nycklar med {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Du kan när som helst ändra dessa nycklar för att göra aktiva cookies obrukbara, vilket tvingar alla användare att logga in på nytt.
 *
 * @since 2.6.0
 */
define( 'AUTH_KEY',         '}Uy3mYGw6u=A6Efv``c)/%hc7Ti=ouF>yq-zrG>Ctp|BVK<+[qOpjlM_CC*8i8uu' );
define( 'SECURE_AUTH_KEY',  '&Hd8;E[Qas8bcYk)=c+nFU +8v77HQYLm!+?1^QGZxVb@Dj/nnmy[riqLBUNYvA3' );
define( 'LOGGED_IN_KEY',    'a/b=pZ~vKyc_-Jb]{^Q!QZ#CDw`D3*Pn?#;,r.&^2Y5{)8`}msa@WBc_B7wf&YV,' );
define( 'NONCE_KEY',        'u>:6{lDG!1j_sCM1lb<O$_BjR*uzEw;do5:3Iu*Sf7VrR]),3qvX3HsUY~L(3leR' );
define( 'AUTH_SALT',        '0atS8%tbE$*s &NFD9n4=A]TdQUJ+EvfaPVHOw[s*e.b4~!ApmQGhZ<TP|D.ETqG' );
define( 'SECURE_AUTH_SALT', 'lL0#O`9~qzHUxB+Y_NDz.-<Ax3UCnz>G;47+C j?xlT>n/0OEHI5IcAh&)1#+x/*' );
define( 'LOGGED_IN_SALT',   '=okJBu$2O@*t~23P5oYw#r@>|A38d3T`hf7-ruU^S_pZ^y_K02bm91(.n2u<PD6`' );
define( 'NONCE_SALT',       'uG-if|EqQsGBd0m8n/{T|E&u.TtKh55=pNZ=EbD`x2vl/JaITmrtb:53NZV+Nmu^' );

/**#@-*/

/**
 * Tabellprefix för WordPress-databasen.
 *
 * Du kan ha flera installationer i samma databas om du ger varje installation ett unikt
 * prefix. Använd endast siffror, bokstäver och understreck!
 */
$table_prefix = 'wp_';

/** 
 * För utvecklare: WordPress felsökningsläge. 
 * 
 * Ändra detta till true för att aktivera meddelanden under utveckling. 
 * Det rekommenderas att man som tilläggsskapare och temaskapare använder WP_DEBUG 
 * i sin utvecklingsmiljö. 
 *
 * För information om andra konstanter som kan användas för felsökning, 
 * se dokumentationen. 
 * 
 * @link https://wordpress.org/documentation/article/debugging-in-wordpress/
 */ 
define('WP_DEBUG', false);
/* Lägg in eventuella anpassade värden mellan denna rad och raden med "sluta redigera här". */




/* Det var allt, sluta redigera här och börja publicera! */

/** Absolut sökväg till WordPress-katalogen. */
if ( !defined('ABSPATH') )
	define('ABSPATH', __DIR__ . '/');

/** Anger WordPress-värden och inkluderade filer. */
require_once(ABSPATH . 'wp-settings.php');