<?php

use App\AbstractSocialNetwork;

class Linkedin extends AbstractSocialNetwork
{
    public function logIn(string $userName, string $password): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $this->username . "\n";
        echo "Password: " . str_repeat("*", strlen($this->password)) . "\n";

        echo "\n\nLinkedin: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        //Concrete realisation for send data.
        echo "Linkedin: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Linkedin: '" . $this->username . "' has been logged out.\n";
    }
}
