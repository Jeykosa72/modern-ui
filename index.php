<?php
// Load Blade template engine secara manual
require __DIR__ . '/vendor/autoload.php';

use Jenssegers\Blade\Blade;

// Path ke views dan cache
$views = __DIR__ . '/resources/views';
$cache = __DIR__ . '/storage/cache';

// Inisialisasi Blade
$blade = new Blade($views, $cache);

// Render komponen button
echo $blade->make('components.button', ['slot' => 'Click Me!'])->render();
