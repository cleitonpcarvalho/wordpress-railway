<?php

// Corrige HTTPS atrás de proxy reverso (exemplo Railway)
if (isset($_SERVER['HTTP_X_FORWARDED_PROTO']) && $_SERVER['HTTP_X_FORWARDED_PROTO'] === 'https') {
    $_SERVER['HTTPS'] = 'on';
}

// Define as URLs principais do site
define('WP_HOME', 'https://wordpress-railway-production-b244.up.railway.app');
define('WP_SITEURL', 'https://wordpress-railway-production-b244.up.railway.app');

// Configurações do banco de dados
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'railway');
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'root');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'hZDQFLLygqlLWkSHTumAWuwBxKUqshIB');
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'mysql.railway.internal');
define('DB_CHARSET', 'utf8');
define('DB_COLLATE', '');

// Chaves de autenticação e segurança
define('AUTH_KEY',         getenv('WORDPRESS_AUTH_KEY'));
define('SECURE_AUTH_KEY',  getenv('WORDPRESS_SECURE_AUTH_KEY'));
define('LOGGED_IN_KEY',    getenv('WORDPRESS_LOGGED_IN_KEY'));
define('NONCE_KEY',        getenv('WORDPRESS_NONCE_KEY'));
define('AUTH_SALT',        getenv('WORDPRESS_AUTH_SALT'));
define('SECURE_AUTH_SALT', getenv('WORDPRESS_SECURE_AUTH_SALT'));
define('LOGGED_IN_SALT',   getenv('WORDPRESS_LOGGED_IN_SALT'));
define('NONCE_SALT',       getenv('WORDPRESS_NONCE_SALT'));

// Prefixo das tabelas
$table_prefix = 'wp_';

// Debug
define('WP_DEBUG', false);

// Caminho absoluto
if (!defined('ABSPATH')) {
    define('ABSPATH', __DIR__ . '/');
}

// Carrega o WordPress
require_once ABSPATH . 'wp-settings.php';
