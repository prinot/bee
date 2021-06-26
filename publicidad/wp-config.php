<?php
define('WP_AUTO_UPDATE_CORE', 'minor');// This setting is required to make sure that WordPress updates can be properly managed in WordPress Toolkit. Remove this line if this WordPress website is not managed by WordPress Toolkit anymore.
/**
 * Configuración básica de WordPress.
 *
 * El script de creación utiliza este fichero para la creación del fichero wp-config.php durante el
 * proceso de instalación. Usted no necesita usarlo en su sitio web, simplemente puede guardar este fichero
 * como "wp-config.php" y completar los valores necesarios.
 *
 * Este fichero contiene las siguientes configuraciones:
 *
 * * Ajustes de MySQL
 * * Claves secretas
 * * Prefijo de las tablas de la Base de Datos
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/Editing_wp-config.php
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solcite esta información a su proveedor de alojamiento web. ** //
/** El nombre de la base de datos de WordPress */
define('DB_NAME', 'beedesign_publicidad');

/** Nombre de usuario de la base de datos de MySQL */
define('DB_USER', 'beedesign_publicidad');

/** Contraseña del usuario de la base de datos de MySQL */
define('DB_PASSWORD', 'S3ijas1412.');

/** Nombre del servidor de MySQL (generalmente es localhost) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para usar en la creación de las tablas de la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** El tipo de cotejamiento de la base de datos. Si tiene dudas, no lo modifique. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autenticación y salts.
 *
 * ¡Defina cada clave secreta con una frase aleatoria distinta!
 * Usted puede generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress.org}
 * Usted puede cambiar estos valores en cualquier momento para invalidar todas las cookies existentes. Esto obligará a todos los usuarios a iniciar sesión nuevamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'T>sm-vU>QRM3/MC.{r|vB Ni3P{$gmY<M:F|H wu-}>MWcq!K-|DVaz&3[L+r>cv');
define('SECURE_AUTH_KEY',  '@/Up&oC5P&P0pvs~P+p;3)19R4IKA]@b1I$Ok1q~iKu@MTq!QqFbg)UI4!;dYXs1');
define('LOGGED_IN_KEY',    'a6Ey)$x,)l!J7D>ocNrA}XXci($0w!ZHk#uxr5MHqBebUOEJ,Qi4$JR$)b)~Dr`B');
define('NONCE_KEY',        '3H[jv<4ea3Jg=uf&WOk$!RCp#sm]Jq!FUBXSC/19./E|]F-j:QK9U:t)o]--#2OD');
define('AUTH_SALT',        'yF{+QA?|5b^G|?C!D05m:nAhRW,!Qyv8y26?6_<,JM(6 m6n:fQ}K-U1w$JP)cc|');
define('SECURE_AUTH_SALT', 'FMf)H/VI)n!,-|$GhNMs1=G9DYMz&p_I14(!x-#0YkiKl(hWcqUQiP7skj|Rq_*,');
define('LOGGED_IN_SALT',   'ym<4-CMI7zoEBJgB:F(yV>CC:`mmQdcG-*`h!8<w#>H.-:{Bp7>A,O@W:j>._e k');
define('NONCE_SALT',       '}Y+;:r].3)%(YDnn}t70?[&t>F>kK%2jcSxMhSjXw&;0T-dAb?@dRTV!%XO7*/K_');

/**#@-*/

/**
 * Prefijo de las tablas de la base de datos de WordPress.
 *
 * Usted puede tener múltiples instalaciones en una sóla base de datos si a cada una le da 
 * un único prefijo. ¡Por favor, emplee sólo números, letras y guiones bajos!
 */
$table_prefix  = 'wp_';

/**
 * Para los desarrolladores: modo de depuración de WordPress.
 *
 * Cambie esto a true para habilitar la visualización de noticias durante el desarrollo.
 * Se recomienda encarecidamente que los desarrolladores de plugins y temas utilicen WP_DEBUG
 * en sus entornos de desarrollo.
 *
 * Para obtener información acerca de otras constantes que se pueden utilizar para la depuración, 
 * visite el Codex.
 *
 * @link https://codex.wordpress.org/Debugging_in_WordPress
 */
 
 
  // ** FTP CONFIGURACIÓN PARA AUTO-FTP ** //
define('FTP_HOST', 'localhost');
define('FTP_USER', 'beedesign');
define('FTP_PASS', 'qaz12wsx34..');
 
 
define('WP_DEBUG', false);

/* ¡Eso es todo, deje de editar! Disfrute de su sitio. */

/** Ruta absoluta al directorio de WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Establece las vars de WordPress y los ficheros incluidos. */
require_once(ABSPATH . 'wp-settings.php');
