<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$certs = \App\Models\Certificate::all();
foreach($certs as $c) {
    echo "ID: {$c->id} | Title: {$c->title} | Image: {$c->image}\n";
}
