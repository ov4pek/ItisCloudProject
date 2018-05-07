<?php

namespace ItisCloudProject;

use ItisCloudProject\Providers\MainControllerProvider;
use ItisCloudProject\Providers\TeacherControllerProvider;
use Silex\Application as BaseApplication;
use Silex\Provider\DoctrineServiceProvider;
use Silex\Provider\TwigServiceProvider;

class Application extends BaseApplication
{
    public function __construct(){
        parent::__construct();
        $this['debug'] = true;
        $this->registerProviders();
        $this->mountControllers();
    }

    function mountControllers() {
        $this->mount('/', new MainControllerProvider());
        $this->mount('/teachers', new TeacherControllerProvider());
    }

    function registerProviders() {
        $this->register(new TwigServiceProvider(), [
           "twig.path" => __DIR__.'/Views'
        ]);

        $this->register(new DoctrineServiceProvider(), array(
            'db.options' => array(
                'driver' => 'pdo_pgsql',
                'dbname' => 'itiscloudproject',
                'user' => 'postgres',
                'password' => '12345678',
                'charset' => 'utf8',
            )
        ));
    }
}