<?php
/** 
 * Configuración básica de WordPress.
 *
 * Este archivo contiene las siguientes configuraciones: ajustes de MySQL, prefijo de tablas,
 * claves secretas, idioma de WordPress y ABSPATH. Para obtener más información,
 * visita la página del Codex{@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} . Los ajustes de MySQL te los proporcionará tu proveedor de alojamiento web.
 *
 * This file is used by the wp-config.php creation script during the
 * installation. You don't have to use the web site, you can just copy this file
 * to "wp-config.php" and fill in the values.
 *
 * @package WordPress
 */

// ** Ajustes de MySQL. Solicita estos datos a tu proveedor de alojamiento web. ** //
/** El nombre de tu base de datos de WordPress */
define('DB_NAME', 'marginal');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8mb4');

/** Cotejamiento de la base de datos. No lo modifiques si tienes dudas. */
define('DB_COLLATE', '');

/**#@+
 * Claves únicas de autentificación.
 *
 * Define cada clave secreta con una frase aleatoria distinta.
 * Puedes generarlas usando el {@link https://api.wordpress.org/secret-key/1.1/salt/ servicio de claves secretas de WordPress}
 * Puedes cambiar las claves en cualquier momento para invalidar todas las cookies existentes. Esto forzará a todos los usuarios a volver a hacer login.
 *
 * @since 2.6.0
 */
define('AUTH_KEY', 'ybj_>aAYDixCYQpjvMunPr4HjSbwCl&i/~;< x[-0!VoF-F[p6L&ks|gX~ua.01.');
define('SECURE_AUTH_KEY', '~*J*0yoaVfqSV7PG_[V{`h[0Z%Rc=a|<uLUwG)wu%=__vJ1M=]MfLU4P_k<iK~;h');
define('LOGGED_IN_KEY', 'R,0@`e9nq:yFZe,*N<h2 bbq>yT8`Qs^F]f{2zaU<Z]R7=%(XVv1ti[JrOlBE5b}');
define('NONCE_KEY', 'Tnyw$Iv#_+g.!^NW.}(tV? s|3NSb4*>j{=l([*9-A4hQGM9%sLI_V$V[%~8|T+2');
define('AUTH_SALT', 'g?Gx@Y|#Z[b<#1;rTmmMmSX^,>=ct@e:Uq9J)u~] HBcCJQ5|xrn f8M/3Wi6a#P');
define('SECURE_AUTH_SALT', 'd~-M@gm.],w1sEx .I|/-<1al{j0Xo&D=bX?=vLR:MFL~QY:x4wnjSOK1^+AC:30');
define('LOGGED_IN_SALT', '/sM=X5uVGH7se$Q!fTGT/G]g@U9@i(O<<ZRLedJHCz4xDK(^HE#3($47@H6cx495');
define('NONCE_SALT', '9[z5FWK20!pHCz16v_*zQ<FV)<L@$t/4;avLeh<=c%4(Er;_T]!w{/iXL3qlJhFl');

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';


/**
 * Para desarrolladores: modo debug de WordPress.
 *
 * Cambia esto a true para activar la muestra de avisos durante el desarrollo.
 * Se recomienda encarecidamente a los desarrolladores de temas y plugins que usen WP_DEBUG
 * en sus entornos de desarrollo.
 */
define('WP_DEBUG', false);

/* ¡Eso es todo, deja de editar! Feliz blogging */

/** WordPress absolute path to the Wordpress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');

