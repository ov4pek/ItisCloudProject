<?php

namespace ItisCloudProject\Controllers;

use ItisCloudProject;
use ItisCloudProject\Application;

class MainController
{
    public static function doGet(Application $app) {
        return $app['twig']->render('main.html.twig');
    }
}