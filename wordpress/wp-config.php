
<?php


define('WP_MEMORY_LIMIT', '1024M');
define('FORCE_SSL_ADMIN', false);

/* Get Minikube IP dynamically */

/* Get NodePort dynamically */
define('WP_HOME', 'http://localhost:8080');
define('WP_SITEURL', 'http://localhost:8080');

/* Database */
define('DB_NAME', getenv('WORDPRESS_DB_NAME') ?: 'wordpress_db');
define('DB_USER', getenv('WORDPRESS_DB_USER') ?: 'wordpress');
define('DB_PASSWORD', getenv('WORDPRESS_DB_PASSWORD') ?: 'wordpress-password');
define('DB_HOST', getenv('WORDPRESS_DB_HOST') ?: 'mysql');

/* Security Keys */
define('AUTH_KEY', 'unique-key');
define('SECURE_AUTH_KEY', 'unique-key');
define('LOGGED_IN_KEY', 'unique-key');
define('NONCE_KEY', 'unique-key');
define('AUTH_SALT', 'unique-key');
define('SECURE_AUTH_SALT', 'unique-key');
define('LOGGED_IN_SALT', 'unique-key');
define('NONCE_SALT', 'unique-key');

/* Table prefix */
$table_prefix = 'wp_';

/* Debugging */
define('WP_DEBUG', false);

/* Absolute path to the WordPress directory */
if (!defined('ABSPATH')) {
    define('ABSPATH', dirname(__FILE__) . '/');
}

/* Load WordPress settings */
require_once ABSPATH . 'wp-settings.php';

