<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

// Get the files from storage
$storagePath = storage_path('app/public/certificates');
$files = array_diff(scandir($storagePath), array('.', '..'));
sort($files); // Sort files alphabetically

// Get the certificates
$certs = \App\Models\Certificate::orderBy('id', 'asc')->get();

$i = 0;
foreach($certs as $c) {
    if ($i < count($files)) {
        $c->image = '/storage/certificates/' . $files[$i];
        $c->save();
        echo "Restored Image for ID: {$c->id} | File: {$files[$i]}\n";
    }
    $i++;
}

echo "Restoration complete.\n";
