<?php
namespace Services\Security\Model;

class User
{
    private $id;

    private $username;

    private $role;

    public function __construct($id, $username, $role)
    {
        $this->id = $id;
        $this->username = $id;
        $this->role = $id;
    }

    public function getId()
    {
        return $this->id;
    }

    public function getUsername()
    {
        return $this->username;
    }

    public function getRole()
    {
        return $this->role;
    }
}