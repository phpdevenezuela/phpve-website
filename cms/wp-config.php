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
define('DB_NAME', 'phpvenezuela');

/** Tu nombre de usuario de MySQL */
define('DB_USER', 'root');

/** Tu contraseña de MySQL */
define('DB_PASSWORD', 'root');

/** Host de MySQL (es muy probable que no necesites cambiarlo) */
define('DB_HOST', 'localhost');

/** Codificación de caracteres para la base de datos. */
define('DB_CHARSET', 'utf8');

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
define('AUTH_KEY', '.2eYS6bq;! K6uiU2M:56JtnB1~=VQnVr:JC/ZsRGRkp*gvGfL!H`|(Z=4:Vws3R'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_KEY', '`6K6ebiSK<~Fk7tfA/hx[o!MOdhu %{2;b9~(@81@?>MT<u/twl.L1M)DcS09$oJ'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_KEY', 'SlIYZG?,7Mh2&(^#x/hwg<Ce0nwfG*0q?R1*4mkarD`Q48Ec-nLD|C}>FO%6E8o.'); // Cambia esto por tu frase aleatoria.
define('NONCE_KEY', 'h`xBDH}zK<3nqVd xt)+)f?55>&FM]u8)s.fUpQZBphU}D:izN@xXoqpXd(1v*A4'); // Cambia esto por tu frase aleatoria.
define('AUTH_SALT', '3h,wfYXu@F+{e{>K,xfYB0^sp)eJc|jl=^}W2a3QN%E@!ML;DN6uh64c9[s_FD}B'); // Cambia esto por tu frase aleatoria.
define('SECURE_AUTH_SALT', '0,HQ]$.;L??a0WgMeD0?Hn[ ErlR5ycqwmklz=N+.=@a5hi5WOkcVfiy[=WG3_H/'); // Cambia esto por tu frase aleatoria.
define('LOGGED_IN_SALT', '`djuS;/Uw7LXuJsp[O?|a%2=9 K-+TzEQU;m008kjhDq^u,B^@cah}do_Hy|Xk`R'); // Cambia esto por tu frase aleatoria.
define('NONCE_SALT', 'YVOAqzT*rUz&Uxk. ]:[C$lQbrr{p?l8RW?/S&YG3us+4U3XWYB,+Zx(MMPYAdcN'); // Cambia esto por tu frase aleatoria.

/**#@-*/

/**
 * Prefijo de la base de datos de WordPress.
 *
 * Cambia el prefijo si deseas instalar multiples blogs en una sola base de datos.
 * Emplea solo números, letras y guión bajo.
 */
$table_prefix  = 'wp_';

/**
 * Idioma de WordPress.
 *
 * Cambia lo siguiente para tener WordPress en tu idioma. El correspondiente archivo MO
 * del lenguaje elegido debe encontrarse en wp-content/languages.
 * Por ejemplo, instala ca_ES.mo copiándolo a wp-content/languages y define WPLANG como 'ca_ES'
 * para traducir WordPress al catalán.
 */
define('WPLANG', 'es_ES');

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

