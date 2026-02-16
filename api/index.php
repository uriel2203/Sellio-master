<?php

/**
 * Vercel Diagnostic Entry Point
 * This file is designed to reveal the ROOT cause of deployment failures.
 */

// 1. Enable Hard Error Reporting
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

try {
    // 2. Load Autoloader
    if (!file_exists(__DIR__ . '/../vendor/autoload.php')) {
        throw new \Exception("Vendor directory not found. Did you run 'composer install'?");
    }
    require __DIR__ . '/../vendor/autoload.php';

    // 3. Early Check for APP_KEY
    $appKey = getenv('APP_KEY') ?: ($_ENV['APP_KEY'] ?? null);
    if (empty($appKey)) {
        throw new \Exception("APP_KEY is missing. Please add it to Vercel Environment Variables.");
    }

    // 4. Load Application
    $app = require_once __DIR__ . '/../bootstrap/app.php';

    // 5. Explicitly Register Filesystem & View BEFORE handling the request
    // These are needed for error rendering if anything fails during kernel handle.
    // Order matters: view depends on files.
    if (!$app->bound('files')) {
        $app->register(\Illuminate\Filesystem\FilesystemServiceProvider::class);
    }
    if (!$app->bound('view')) {
        $app->register(\Illuminate\View\ViewServiceProvider::class);
    }

    // 6. Handle Request
    $kernel = $app->make(Illuminate\Contracts\Http\Kernel::class);
    $request = Illuminate\Http\Request::capture();
    $response = $kernel->handle($request);
    $response->send();
    $kernel->terminate($request, $response);

} catch (\Throwable $e) {
    // 7. Diagnostic Error Rendering
    http_response_code(500);
    echo "<div style='font-family: sans-serif; padding: 20px; background: #fff1f2; border: 2px solid #e11d48; color: #881337;'>";
    echo "<h1>CRITICAL: Vercel Runtime Failure</h1>";
    echo "<p style='font-size: 1.2rem;'><strong>Root Cause:</strong> " . htmlspecialchars($e->getMessage()) . "</p>";
    echo "<p><strong>Exception Class:</strong> " . get_class($e) . "</p>";
    echo "<p><strong>Location:</strong> " . htmlspecialchars($e->getFile()) . " (Line: " . $e->getLine() . ")</p>";
    
    echo "<h3>Execution Trace:</h3>";
    echo "<pre style='background: #fee2e2; padding: 10px; overflow: auto;'>" . htmlspecialchars($e->getTraceAsString()) . "</pre>";
    
    if (isset($app)) {
        echo "<h4>Internal State:</h4><ul>";
        echo "<li>Files Service Bound: " . ($app->bound('files') ? 'Yes' : 'No') . "</li>";
        echo "<li>View Service Bound: " . ($app->bound('view') ? 'Yes' : 'No') . "</li>";
        echo "<li>Storage Path: " . htmlspecialchars($app->storagePath()) . "</li>";
        echo "</ul>";
    }
    echo "</div>";

    error_log("VERCEL ERROR: " . $e->getMessage() . " in " . $e->getFile() . ":" . $e->getLine());
}
