<?php

// Enable error reporting for debugging
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Register the Composer autoloader
require __DIR__ . '/../vendor/autoload.php';

try {
    // We bypass handleRequest and manually handle the lifecycle to catch the REAL error
    
    // 1. Load the application
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 2. Handle the request
    // We don't use $app->handleRequest() because it catches exceptions internally
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    
    $response->send();
    
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    http_response_code(500);
    echo "<h1>Vercel - Original Error Caught</h1>";
    echo "<p><strong>Message:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>Class:</strong> " . get_class($e) . "</p>";
    echo "<p><strong>File:</strong> " . htmlspecialchars($e->getFile()) . " (Line: " . $e->getLine() . ")</p>";
    echo "<h3>Stack Trace:</h3>";
    echo "<pre>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    
    error_log("Deployment Error: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
}
