<?php


class Customer
{
    private $name;
    private $birthday;
    private $address;
    private $img;

    public function __construct($name, $birthday, $address, $img="")
    {
        $this->name = $name;
        $this->birthday = $birthday;
        $this->address = $address;
        $this->img = $img;
    }

    public function getName()
    {
        return $this->name;
    }

    public function setName($name)
    {
        $this->name = $name;
    }


    public function getBirthday()
    {
        return $this->birthday;
    }


    public function setBirthday($birthday)
    {
        $this->birthday = $birthday;
    }


    public function getAddress()
    {
        return $this->address;
    }


    public function setAddress($address)
    {
        $this->address = $address;
    }


    public function getImg()
    {
        return $this->img;
    }


    public function setImg($img)
    {
        $this->img = $img;
    }



}