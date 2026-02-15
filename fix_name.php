<?php
require 'vendor/autoload.php';
$app = require_once 'bootstrap/app.php';
$app->make(Illuminate\Contracts\Console\Kernel::class)->bootstrap();

$p = \App\Models\Profile::first();
if($p) {
    $p->name = 'Uriel John G. <br> <span class="italic">Chavez.</span>';
    $p->save();
    echo "Profile name styling restored.\n";
}
