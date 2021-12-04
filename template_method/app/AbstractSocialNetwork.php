<?php

namespace App;

abstract class AbstractSocialNetwork
{
    protected string $username;

    protected string $password;

    public function __construct(string $username, string $password)
    {
        $this->username = $username;
        $this->password = $password;
    }
    
    public function post(string $message): bool
    {
        // Authenticate before posting.
        if ($this->logIn($this->username, $this->password)) {
            $result = $this->sendData($message);
            $this->logOut();

            return $result;
        }

        return false;
    }
    
    abstract public function logIn(string $userName, string $password): bool;

    abstract public function sendData(string $message): bool;

    abstract public function logOut(): void;
}
