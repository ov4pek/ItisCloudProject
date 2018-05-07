<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 20:13
 */

namespace ItisCloudProject\Repositories;

use ItisCloudProject;
use ItisCloudProject\Application;

interface GroupRepository
{

    //time of course for group
    public static function getCourseTime(Application $app);

}