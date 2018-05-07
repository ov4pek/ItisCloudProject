<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 19:52
 */

namespace ItisCloudProject\Models;

use ItisCloudProject;
use ItisCloudProject\Application;

class Course
{
    private $id;
    private $name;
    private $courseTeacherId;

    /**
     * Course constructor.
     * @param $id
     * @param $name
     * @param $courseTeacherId
     */
    public function __construct($id, $name, $courseTeacherId)
    {
        $this->id = $id;
        $this->name = $name;
        $this->courseTeacherId = $courseTeacherId;
    }

    /**
     * @return mixed
     */
    public function getId()
    {
        return $this->id;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @return mixed
     */
    public function getCourseTeacherId()
    {
        return $this->courseTeacherId;
    }

}