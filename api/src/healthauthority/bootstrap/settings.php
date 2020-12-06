<?php
declare(strict_types=1);

use Monolog\Logger;
use Psr\Container\ContainerInterface;

$debug = filter_var(getenv('DEBUG'), FILTER_VALIDATE_BOOLEAN, FILTER_NULL_ON_FAILURE) ?? false;

return [
    'errorHandler.displayErrorDetails' => $debug,
    'errorHandler.logErrors' => true,
    'errorHandler.logErrorDetails' => $debug,

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

    'redis.connection' => [
        'host' => DI\env('REDIS_HOST'),
        'port' => DI\env('REDIS_PORT')
    ],
    'redis.parameters' =>
        DI\factory(function (ContainerInterface $c) {
            $service = getenv('REDIS_SENTINEL_SERVICE');
            if (empty($service)) {
                return $c->get('redis.connection');
            } else {
                return [$c->get('redis.connection')];
            }
        }),
    'redis.options' =>
        DI\factory(function () {
            $service = getenv('REDIS_SENTINEL_SERVICE');

            $options = [];
            if (!empty($service)) {
                $options['replication'] = 'sentinel';
                $options['service'] = $service;
            }

            return $options;
        }),

    'privateAPI.client' => [
        'base_uri' => DI\env('PRIVATE_API_BASE_URI')
    ],
    'privateAPI.jwtSecret' => DI\env('PRIVATE_API_JWT_SECRET'),

    'signingKey.length' => 32,
    'encryption.generalKeyPair' => DI\env('ENCRYPTION_GENERAL_KEY_PAIR')
];
