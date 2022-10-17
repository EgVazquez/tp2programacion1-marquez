<?php

class User{
    protected $id;
    protected $user;
    protected $name;
    protected $surname; 

public function __construct($user, $name, $surname, $id){
    $this->id = $id;
    $this->$surname = $surname;
    $this->name = $name;
    $this->$user = $user;
    }

public function getID(){return $this->id;}
public function SetId($id){$this->id;}
public function getUser(){return $this->user;}
public function getName(){return $this->name;}
public function getSurname(){return $this->surname;}
public function getNameSurname(){return "$this->name $this->surname";}
}