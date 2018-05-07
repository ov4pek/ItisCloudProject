<?php
/**
 * Created by PhpStorm.
 * User: danil
 * Date: 28/04/18
 * Time: 19:11
 */

namespace ItisCloudProject\Models;


class Student
{
    private $id;
    private $firstname;
    private $lastname;
    private $email;
    private $group;

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
    public function getFirstname()
    {
        return $this->firstname;
    }

    /**
     * @return mixed
     */
    public function getLastname()
    {
        return $this->lastname;
    }

    /**
     * @return mixed
     */
    public function getEmail()
    {
        return $this->email;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * Student constructor.
     * @param $id
     * @param $firstname
     * @param $lastname
     * @param $email
     * @param $group
     */
    public function __construct($id, $firstname, $lastname, $email, $group)
    {
        $this->id = $id;
        $this->firstname = $firstname;
        $this->lastname = $lastname;
        $this->email = $email;
        $this->group = $group;
    }
}