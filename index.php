<?php

use Illuminate\Contracts\Http\Kernel;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Función para servir archivos estáticos desde public/
function serveStaticFile($requestUri) {
    $publicPath = __DIR__ . '/public';
    $filePath = $publicPath . $requestUri;
    
    // Verificar si el archivo existe y está dentro de public/
    if (file_exists($filePath) && is_file($filePath) && strpos(realpath($filePath), realpath($publicPath)) === 0) {
        $mimeTypes = [
            'css' => 'text/css',
            'js' => 'application/javascript',
            'json' => 'application/json',
            'png' => 'image/png',
            'jpg' => 'image/jpeg',
            'jpeg' => 'image/jpeg',
            'gif' => 'image/gif',
            'ico' => 'image/x-icon',
            'svg' => 'image/svg+xml',
            'webp' => 'image/webp',
            'woff' => 'font/woff',
            'woff2' => 'font/woff2',
            'ttf' => 'font/truetype',
            'eot' => 'application/vnd.ms-fontobject',
            'pdf' => 'application/pdf',
            'txt' => 'text/plain',
            'xml' => 'application/xml',
        ];
        
        $extension = strtolower(pathinfo($filePath, PATHINFO_EXTENSION));
        
        if (isset($mimeTypes[$extension])) {
            // Establecer headers apropiados
            header('Content-Type: ' . $mimeTypes[$extension]);
            
            // Cache para archivos estáticos
            if (in_array($extension, ['css', 'js', 'png', 'jpg', 'jpeg', 'gif', 'ico', 'woff', 'woff2', 'ttf'])) {
                header('Cache-Control: public, max-age=31536000'); // 1 año
                header('Expires: ' . gmdate('D, d M Y H:i:s', time() + 31536000) . ' GMT');
            }
            
            // Enviar el archivo
            readfile($filePath);
            exit;
        }
    }
    
    return false;
}

// Limpiar y parsear la URI
$requestUri = parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
$requestUri = rtrim($requestUri, '/');

// Si es la raíz, dejar vacío para que Laravel maneje
if ($requestUri === '') {
    $requestUri = '/';
}

// Intentar servir archivo estático si es que parece serlo
if ($requestUri !== '/' && preg_match('/\.(css|js|json|png|jpg|jpeg|gif|ico|svg|webp|woff|woff2|ttf|eot|pdf|txt|xml)$/i', $requestUri)) {
    if (serveStaticFile($requestUri)) {
        exit; // El archivo fue servido
    }
}

/*
|--------------------------------------------------------------------------
| Inicializar Laravel
|--------------------------------------------------------------------------
*/

try {
    // Verificar mantenimiento
    if (file_exists($maintenance = __DIR__.'/storage/framework/maintenance.php')) {
        require $maintenance;
    }

    // Cargar autoloader
    if (!file_exists(__DIR__.'/vendor/autoload.php')) {
        http_response_code(500);
        die('Error: vendor/autoload.php no encontrado. Ejecuta: composer install');
    }
    
    require __DIR__.'/vendor/autoload.php';

    // Bootstrapping
    if (!file_exists(__DIR__.'/bootstrap/app.php')) {
        http_response_code(500);
        die('Error: bootstrap/app.php no encontrado.');
    }
    
    $app = require_once __DIR__.'/bootstrap/app.php';

    // Crear kernel
    $kernel = $app->make(Kernel::class);

    // Procesar request
    $response = $kernel->handle(
        $request = Request::capture()
    );

    // Enviar respuesta
    $response->send();

    // Terminar
    $kernel->terminate($request, $response);

} catch (Exception $e) {
    // En caso de error, mostrar información útil solo si APP_DEBUG=true
    if (isset($_ENV['APP_DEBUG']) && $_ENV['APP_DEBUG'] === 'true') {
        echo "<h1>Error 500 - Error interno del servidor</h1>";
        echo "<p><strong>Mensaje:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
        echo "<p><strong>Archivo:</strong> " . htmlspecialchars($e->getFile()) . "</p>";
        echo "<p><strong>Línea:</strong> " . $e->getLine() . "</p>";
        echo "<h3>Stack trace:</h3>";
        echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    } else {
        http_response_code(500);
        echo "<h1>Error 500 - Error interno del servidor</h1>";
        echo "<p>Por favor, contacta al administrador del sitio.</p>";
    }
    
    // Log del error
    error_log("Laravel Error: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine());
} catch (Error $e) {
    // Para errores fatales de PHP
    http_response_code(500);
    echo "<h1>Error 500 - Error fatal</h1>";
    echo "<p>Se produjo un error fatal en el servidor.</p>";
    
    error_log("PHP Fatal Error: " . $e->getMessage() . " in " . $e->getFile() . " on line " . $e->getLine());
}