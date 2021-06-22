<?php

namespace PierreFramework;

session_start();

class User
{
    // Attributs


    // Constructeur


    // Getters + Setters
    public function setAttribute($attr, $value): void
    {
        $_SESSION[$attr] = $value;
    }

    public function getAttribute($attr)
    {
        return $_SESSION[$attr];
    }

    public function setAuthenticated(bool $authenticated = true): void
    {
        $_SESSION['authenticated'] = $authenticated;
    }

    public function setFlash(string $message): void
    {
        $_SESSION['message'] = $message;
    }

    public function getFlash(): string
    {
        return $_SESSION['message'];
    }

    // Autres méthodes
    public function isAuthenticated(): bool
    {
        return $_SESSION['authenticated'];
    }

    public function hasFlash(): bool
    {
        return (!empty($this->getFlash())) ? true : false;
    }
}
