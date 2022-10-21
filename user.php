<?php

class User
{
    protected $id;
    protected $user;
    protected $password;
    protected $name;
    protected $surname;
    protected $email;

    public function __construct($user, $password, $name, $surname, $id, $email)
    {
        $this->id = $id;
        $this->password = $password;
        $this->$surname = $surname;
        $this->name = $name;
        $this->$user = $user;
        $this->$email = $email;
    }

    public function getID()
    {
        return $this->id;
    }
    public function SetId($id)
    {
        $this->id;
    }
    public function getUser()
    {
        return $this->user;
    }
    public function getName()
    {
        return $this->name;
    }
    public function getSurname()
    {
        return $this->surname;
    }
    public function getNameSurname()
    {
        return "$this->name $this->surname";
    }
    public function getEmail()
    {
        return "$this->email";
    }
    public function setEmail()
    {
        $this->email;
    }
}
