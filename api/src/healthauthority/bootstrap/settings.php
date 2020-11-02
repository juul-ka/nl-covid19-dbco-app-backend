<?php
declare(strict_types=1);

use Monolog\Logger;

$debug = filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? false;

return [
    'displayErrorDetails' => $debug,
    'logErrors' => true,
    'logErrorDetails' => true,
    'logger.name' => 'api',
    'logger.path' => 'php://stdout',
    'logger.level' => $debug ? Logger::DEBUG : Logger::ERROR,
    'db' => [
        'type' => DI\env('DB_TYPE'),
        'host' => DI\env('DB_HOST'),
        'username' => DI\env('DB_USERNAME'),
        'database' => DI\env('DB_DATABASE'),
        'password' => DI\env('DB_PASSWORD'),
        'tns' => DI\env('DB_TNS', null)
    ],
    'signingKey.length' => 32,
    'useStubs' => DI\env('USE_STUBS', false)
];
