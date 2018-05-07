<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 19:18
 */

namespace ItisCloudProject\Repositories;


use ItisCloudProject\Application;
use ItisCloudProject\Models\Teacher;

class SiteTeacherRepository implements TeacherRepository
{

    public static function getAll(Application $app)
    {
//        $sql = "SELECT p.id, photo, description FROM posts p;";
//
//        $stmt = $app['db']->query($sql);
//
//        $teachers = [];
//
//        while ($row = $stmt->fetch()) {
//            $teacher = new Teacher(
//                $row['id'],
//                $row['photo'],
//                $row['description']
//            );
//
//            $teachers[] = $teacher;
//        }
//
//        return $teachers;
    }
}