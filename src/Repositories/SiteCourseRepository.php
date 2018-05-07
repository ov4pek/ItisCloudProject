<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 20:17
 */

namespace ItisCloudProject\Repositories;

use ItisCloudProject;
use ItisCloudProject\Application;
use ItisCloudProject\Models\Course;

class SiteCourseRepository implements CourseRepository
{

    public static function getTeacherCourses(Application $app)
    {
        $sql = "SELECT p.id, photo, description FROM posts p;";

        $st = $app['db']->query($sql);

        $posts = [];

        while ($row = $st->fetch()) {
            $post = new Post(
                $row['id'],
                $row['photo'],
                $row['description']
            );
            $posts[] = $post;
        }

        return $posts;
    }
}