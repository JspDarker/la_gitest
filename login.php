<?php

class Login
{
    protected $username;


    public function getUsername()
    {
        return $this->username;
    }

    public function setUsername($name)
    {
        $this->username = $name;
    }

    public function doSome()
    {
        return 10;
    }
}
