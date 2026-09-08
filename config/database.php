<?php
declare (strict_types=1);

require_once dirname(__DIR__) . '/vendor/autoload.php';

use Illuminate\Database\Capsule\Manager as Capsule;

return static function (array $settings) {
    $capsule = new Capsule();

    $capsule->addConnection([
        'driver'   => $settings['driver'],
        'host'     => $settings['host'],
        'port'     => $settings['port'],
        'database' => $settings['database'],
        'username' => $settings['username'],
        'password' => $settings['password'],
        'charset'  => 'utf8mb4',
        'collation' => 'utf8mb4_unicode_ci',
        'prefix' => '',
    ]);

    $capsule->setAsGlobal();
    $capsule->bootEloquent();

    return $capsule;
};