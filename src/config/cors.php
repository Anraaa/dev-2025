<?php

return [
    'paths' => ['api/*', 'sanctum/csrf-cookie', 'docs', 'api-docs'],
    'allowed_methods' => ['GET', 'POST', 'PUT', 'PATCH', 'DELETE', 'OPTIONS'],
    'allowed_origins' => ['*'], // Untuk production ganti dengan domain spesifik
    'allowed_origins_patterns' => [],
    'allowed_headers' => ['*'],
    'exposed_headers' => [],
    'max_age' => 86400, // Cache preflight 24 jam
    'supports_credentials' => false,
];