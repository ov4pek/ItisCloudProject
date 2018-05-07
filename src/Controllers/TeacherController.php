<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 12:52
 */

namespace ItisCloudProject\Controllers;

use ItisCloudProject;
use ItisCloudProject\Application;

class TeacherController
{
    public static function doGet(Application $app) {
        $user = 'Teachers';

        return $app['twig']->render('login.html.twig');
    }
}