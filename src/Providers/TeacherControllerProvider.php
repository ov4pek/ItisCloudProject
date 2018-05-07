<?php

namespace ItisCloudProject\Providers;

use ItisCloudProject\Controllers\TeacherController;
use Silex\Api\ControllerProviderInterface;
use Silex\Application;
use Silex\ControllerCollection;

class TeacherControllerProvider implements ControllerProviderInterface
{

    /**
     * Returns routes to connect to the given application.
     *
     * @param Application $app An Application instance
     *
     * @return ControllerCollection A ControllerCollection instance
     */
    public function connect(Application $app)
    {
        $controllers = $app['controllers_factory'];

        $controllers->get('/teachers', function () use ($app) {
            return TeacherController::doGet($app);
        });

        return $controllers;
    }
}