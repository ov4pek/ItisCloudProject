<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 20:06
 */

namespace ItisCloudProject\Repositories;

use ItisCloudProject;
use ItisCloudProject\Application;

interface StudentRepository
{
    //All students for exact course
    public static function getAll(Application $app);

    //student`s cloud for course
    public static function getMyCloud(Application $app);
}