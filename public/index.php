<?php

// get all package deps
require_once __DIR__ . '/../vendor/autoload.php';

// instantiate errors, container, db 
require_once __DIR__ . '/../bootstrap/app.php';

// get routes
require_once __DIR__ . '/../routes/api.php';
require_once __DIR__ . '/../routes/web.php';
require_once __DIR__ . '/../routes/classy.php';

$app->run();