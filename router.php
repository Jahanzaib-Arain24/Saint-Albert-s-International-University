<?php
/**
 * router.php
 * Handles extensionless URLs (e.g. /about instead of /about.php) 
 * for PHP's built-in local development web server.
 */

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

// 1. If it's a real file (like images, css, js), serve it directly
if (file_exists($file) && !is_dir($file)) {
    return false;
}

// 2. If it's the root path, serve index.php
if ($path === '/') {
    if (file_exists(__DIR__ . '/index.php')) {
        include __DIR__ . '/index.php';
        return true;
    }
}

// 3. Check if path + '.php' exists (e.g., /about -> /about.php)
$php_file = $file . '.php';
if (file_exists($php_file)) {
    // Set script filename for server context
    $_SERVER['SCRIPT_FILENAME'] = $php_file;
    include $php_file;
    return true;
}

// 4. Otherwise, let server return a 404
return false;
