<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 19:56
 */

namespace ItisCloudProject\Repositories;

use ItisCloudProject;
use ItisCloudProject\Application;

interface CourseRepository
{
    //all courses of teacher
    public static function getTeacherCourses(Application $app);

}