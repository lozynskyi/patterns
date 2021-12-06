<?php

namespace App\Social;

use App\AbstractSocialNetwork;

class Instagram extends AbstractSocialNetwork
{
    public function logIn(): bool
    {
        echo "\nChecking user's credentials...\n";
        echo "Name: " . $this->username . "\n";
        echo "Password: " . str_repeat("*", strlen($this->password)) . "\n";

        echo "\n\nInstagram: '" . $this->username . "' has logged in successfully.\n";

        return true;
    }

    public function sendData(string $message): bool
    {
        //Concrete realisation for send data.
        echo "Instagram: '" . $this->username . "' has posted '" . $message . "'.\n";

        return true;
    }

    public function logOut(): void
    {
        echo "Instagram: '" . $this->username . "' has been logged out.\n";
    }
}
