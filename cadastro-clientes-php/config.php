<?php

//nome do banco
define('DB_NAME', 'nome_do_banco');

//usuario do banco de dados MySql
define('DB_USER', 'usuario');

//senha do banco de dados MySql
define('DB_PASSWORD','senha');

//nome do host do MySql
define('DB_HOST', 'host');

//caminho absoluto para a pasta do sistema
if (!defined('ABSPATH')) 
    define('ABSPATH', dirname(__FILE__) . '/');

//Caminho no server para o sistema
if (!defined('BASEURL')) 
	define('BASEURL', '/cadastro-clientes-php/');

//caminho do arquivo de banco de dados 
if (!defined('DBAPI')) 
	define('DBAPI', ABSPATH . 'inc/database.php');

//caminhos dos templates de header e footer
define('HEADER_TEMPLATE', ABSPATH . 'inc/header.php');		
define('FOOTER_TEMPLATE', ABSPATH . 'inc/footer.php');