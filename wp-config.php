<?php
/** 
 * As configurações básicas do WordPress.
 *
 * Esse arquivo contém as seguintes configurações: configurações de MySQL, Prefixo de Tabelas,
 * Chaves secretas, Idioma do WordPress, e ABSPATH. Você pode encontrar mais informações
 * visitando {@link http://codex.wordpress.org/Editing_wp-config.php Editing
 * wp-config.php} Codex page. Você pode obter as configurações de MySQL de seu servidor de hospedagem.
 *
 * Esse arquivo é usado pelo script ed criação wp-config.php durante a
 * instalação. Você não precisa usar o site, você pode apenas salvar esse arquivo
 * como "wp-config.php" e preencher os valores.
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar essas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'altran_estoque2');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'altran_estoque2');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', 'bnTttxbT9mpKL7Fb');

/** nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Conjunto de caracteres do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8');

/** O tipo de collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org secret-key service}
 * Você pode alterá-las a qualquer momento para desvalidar quaisquer cookies existentes. Isto irá forçar todos os usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         '&u^ur_cH(fug%?jn!h<<Z#yGJYyM79iWg=<h/LpT+-V9<~b@ {}c8|%hNK&&zco`');
define('SECURE_AUTH_KEY',  '&P-|-fBf-MRV&F0.@VW-95z8Y.!k)E?y_h>;/ri(J)sDKx`B+ebJ%|.?Fq- .E;Y');
define('LOGGED_IN_KEY',    '~a|KZcxD[Z.eb1:P2SjT{&ZPM!L(v/RM3EsS}5xX#nb=I}ZPE|0gjp&Y2.R t85P');
define('NONCE_KEY',        'Y^D-)!Y?Fu0X#Vg%8I$Qii1+v.+HnIV*qIsU^c9ndApr{Y:m1q<rif(pX@S07pB+');
define('AUTH_SALT',        'G9 Fha]~tK2lZh#4q%p&NNNZ=`[a_/w)nOVY.oo6_S=?9e4J<;]MZFla+M-+ed--');
define('SECURE_AUTH_SALT', '-u5R`nxW)A_4P]MgN:2q=u!fn5,I)2efkzx,Sp#e[?xy}*.:`xxAA[.O+7U`(//x');
define('LOGGED_IN_SALT',   '}swR@{-[{J^Th$m!i@JMJBQQ>m~PuJ3PU|N+2=R|+vd2XHEyOAUwc,KYcURJisNK');
define('NONCE_SALT',       '(*$?`)UD5XyO,xMH}?dT2l`AGE<d9 8/jqz{BHw;n3y-^w9/F?L]Vt[.>LTx %.{');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der para cada um um único
 * prefixo. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';


/**
 * Para desenvolvedores: Modo debugging WordPress.
 *
 * altere isto para true para ativar a exibição de avisos durante o desenvolvimento.
 * é altamente recomendável que os desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');
	
/** Configura as variáveis do WordPress e arquivos inclusos. */
require_once(ABSPATH . 'wp-settings.php');

/* Types*/
define('TYPES_USE_STYLING_EDITOR', true);