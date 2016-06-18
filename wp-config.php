<?php


// ** MySQL settings ** //
/** The name of the database for WordPress */
define('DB_NAME', 'heimtierprobleme');

/** MySQL database username */
define('DB_USER', 'heimtierprobleme');

/** MySQL database password */
define('DB_PASSWORD', '');

/** MySQL hostname */
define('DB_HOST', 'localhost');

/** Database Charset to use in creating database tables. */
define('DB_CHARSET', 'utf8');

/** The Database Collate type. Don't change this if in doubt. */
define('DB_COLLATE', '');

define('AUTH_KEY',         'l&6s_OT#${{ih`@kXId%8;D13#J$O++K$|7Kz5lgU@OVX<I#zN317?r+I#X.JEWZ');
define('SECURE_AUTH_KEY',  '-N[I+1 SrpM3n?iQ[|.j*Q8()h@Y/=U8hqi+B{j*QR H-/Ac}7rM[wsy>Dh)UEu|');
define('LOGGED_IN_KEY',    '7a8=;`A)FTAGWPf_ieVkhMf%laoS!F}9|(*42hz<as-7e+k:MSzD%eza|{BT`NPm');
define('NONCE_KEY',        'h%A{.^e!8q`u%ZscF{I`Gbp#V$OePH@N&7B0@SH|v<6#w>DsJfwhSKvgiZF#]D+;');
define('AUTH_SALT',        'K<@Y0u38T0=PoC6jbr8(J|w/hDR!P|I/rXSs/}6.g$Ma=<(2 -W7dASXD<H,W]Zi');
define('SECURE_AUTH_SALT', 'k?;ygWawNV]0Nh(grXr^mn3p9TaE;<;9eiXp3i|`ZmF6dgR/nlU&SQq-0Fc!P+@a');
define('LOGGED_IN_SALT',   'HklaS?-?p,pFt3rkdK[-|wO4Xf+<p|KR}TGy*{f&]o+..I)peHitg!(!+N{|eGv-');
define('NONCE_SALT',       '*E6S6p}%-dWxdPt_wG#c,B9_+a(.9+Jzz/6ff+b|&V.Tgnf#y-d= {c_]N|w6SC1');


$table_prefix = 'wp_';





/* That's all, stop editing! Happy blogging. */

/** Absolute path to the WordPress directory. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Sets up WordPress vars and included files. */
require_once(ABSPATH . 'wp-settings.php');
