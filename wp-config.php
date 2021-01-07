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
 * @link https://wordpress.org/support/article/editing-wp-config-php/
 *
 * @package WordPress
 */

// ** Configurações do MySQL - Você pode pegar estas informações com o serviço de hospedagem ** //
/** O nome do banco de dados do WordPress */
define( 'DB_NAME', 'cursoemvideowp' );

/** Usuário do banco de dados MySQL */
define( 'DB_USER', 'root' );

/** Senha do banco de dados MySQL */
define( 'DB_PASSWORD', '' );

/** Nome do host do MySQL */
define( 'DB_HOST', 'localhost' );

/** Charset do banco de dados a ser usado na criação das tabelas. */
define( 'DB_CHARSET', 'utf8mb4' );

/** O tipo de Collate do banco de dados. Não altere isso se tiver dúvidas. */
define( 'DB_COLLATE', '' );

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
define( 'AUTH_KEY',         'TX5SsCo!63kSS8,zkc27D}cDF63BQW+W|dGvj`N+ jNi2DGpZb4oek=O%_Z~/%7r' );
define( 'SECURE_AUTH_KEY',  'JxRj#S^oL&~UbY:}4[s4h>yj8 c1HDWrgR/v&a5ysv0%}CVr,2a1Bk*}t+u>)|4l' );
define( 'LOGGED_IN_KEY',    'SmIXTc8McjONo`=o(~qAFVZ:&J8 )ktk:@Dc5~;$sD<^#SF}qr0J8r<fNsMG7&w#' );
define( 'NONCE_KEY',        '*dw|Oxl;aB&D7-|5aJ%)Y.kSD#50Ky)mp{RGO5p6@$;(5#i}HD8i!K0g/]?Z>T$v' );
define( 'AUTH_SALT',        'd}#Fg`RN0LtL-F@%IorDUB<exvAwrwy{-*>E,RD{&k9+*)RD%%UNz`{fs;#T78{E' );
define( 'SECURE_AUTH_SALT', 'UH-1a9Vhs{=|@qx)`%T5sbMf)q+b`}p(jEQ87`ekI|fUL)|(-vcN~YTB)Jm5#+0G' );
define( 'LOGGED_IN_SALT',   'X7s}ua;L8|TA-)d3Nd8#Pu57k!7ZL.WLeFe4NqZZv&@$BZ{[.1n^uPG<hL{r16be' );
define( 'NONCE_SALT',       '[ut78JQ/1e{eT^FJ5~Z64>hHe~dp}RH,kuG&)dmW404mmI++|VipO&=8+,3hyVeV' );

/**#@-*/

/**
 * Prefixo da tabela do banco de dados do WordPress.
 *
 * Você pode ter várias instalações em um único banco de dados se você der
 * um prefixo único para cada um. Somente números, letras e sublinhados!
 */
$table_prefix = 'cev_';

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
 * @link https://wordpress.org/support/article/debugging-in-wordpress/
 */
define( 'WP_DEBUG', false );

/* Isto é tudo, pode parar de editar! :) */

/** Caminho absoluto para o diretório WordPress. */
if ( ! defined( 'ABSPATH' ) ) {
	define( 'ABSPATH', __DIR__ . '/' );
}

/** Configura as variáveis e arquivos do WordPress. */
require_once ABSPATH . 'wp-settings.php';
