<?php

class User implements IEntity
{

    private string $firstName;
    private string $lastName;
    private string $email;
    private string $password;

    public function __construct(string $firstName, string $lastName, string $email, string $password)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->email = $email;
        $this->password = $password;
    }

    function getFirstName() : string
    {
        return $this->firstName;
    }

    function getLastName() : string
    {
        return $this->lastName;
    }

    function getEmail() : string
    {
        return $this->email;
    }

    function getPassword() : string
    {
        return $this->password;
    }

}