<?php
/**
 * As configurações básicas do WordPress
 *
 * O script de criação wp-config.php usa esse arquivo durante a instalação.
 * Você não precisa usar o site, você pode copiar este arquivo
 * para "wp-config.php" e preencher os valores.
 *
 * Este arquivo contém as seguintes configurações:
 *
 * * Configurações do MySQL
 * * Chaves secretas
 * * Prefixo do banco de dados
 * * ABSPATH
 *
 * @link https://codex.wordpress.org/pt-br:Editando_wp-config.php
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define('DB_NAME', 'ideabd');

/** Usuário do banco de dados MySQL */
define('DB_USER', 'root');

/** Senha do banco de dados MySQL */
define('DB_PASSWORD', '');

/** Nome do host do MySQL */
define('DB_HOST', 'localhost');

/** Charset do banco de dados a ser usado na criação das tabelas. */
define('DB_CHARSET', 'utf8mb4');

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define('DB_COLLATE', '');

/**#@+
 * Chaves únicas de autenticação e salts.
 *
 * Altere cada chave para um frase única!
 * Você pode gerá-las
 * usando o {@link https://api.wordpress.org/secret-key/1.1/salt/ WordPress.org
 * secret-key service}
 * Você pode alterá-las a qualquer momento para invalidar quaisquer
 * cookies existentes. Isto irá forçar todos os
 * usuários a fazerem login novamente.
 *
 * @since 2.6.0
 */
define('AUTH_KEY',         'F^,Ka.iDN3|LH0nKeXPXTJ.5T 37r~lUOn{YV1NlRy#r+>H0tj<EhJgfkE0{p(|h');
define('SECURE_AUTH_KEY',  ';#oY^DvE?358*xypdpv6*XBz9(o<T_Ym{a&;,asF{j{Yer>,sxSmAd0M0K,ax&:c');
define('LOGGED_IN_KEY',    'd$#J,2(|d^E TR((NhViB>qzo`yU0<Irw0nFfR)Gzb+QS_eK[(kWI7.};{sO%w--');
define('NONCE_KEY',        'sd}f39Yc2{8p[)o}!n$TkhLJgtz_1_s95L{<*fzK16+noGNA*,=2;QNA`]@plr4N');
define('AUTH_SALT',        '+]Gl<b={zLcri<Cz0AD@O06p&NCJDMjD*_<$*XVFs>g9z!lGFbbwZ>xaR6>dSlir');
define('SECURE_AUTH_SALT', 'Z>P@eE{hJZH)kPn`vrU~E;<oe9f%EYMwFRywEz?7f5T,H7~nuVA<I1H*}</8c1Ax');
define('LOGGED_IN_SALT',   '$nT73e(d><_%A=|;v;jmG$Mj%oXh*:p2^XeH1EKS?< Zx*e#=- AsC GlvWAK(2~');
define('NONCE_SALT',       '?:f>-_TX#6b!~>=$:?LC:PW8QI-*2a_J@hBCyF?PDqE~M)m<LT|><U>=nXL&NdT$');

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix  = 'wp_';

/**
 * Para desenvolvedores: Modo de debug do WordPress.
 *
 * Altere isto para true para ativar a exibição de avisos
 * durante o desenvolvimento. É altamente recomendável que os
 * desenvolvedores de plugins e temas usem o WP_DEBUG
 * em seus ambientes de desenvolvimento.
 *
 * Para informações sobre outras constantes que podem ser utilizadas
 * para depuração, visite o Codex.
 *
 * @link https://codex.wordpress.org/pt-br:Depura%C3%A7%C3%A3o_no_WordPress
 */
define('WP_DEBUG', false);

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( !defined('ABSPATH') )
	define('ABSPATH', dirname(__FILE__) . '/');

/** Configura as variáveis e arquivos do WordPress. */
require_once(ABSPATH . 'wp-settings.php');
