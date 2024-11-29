<?php
session_start();
if (!isset($_SESSION["users"])) {
    $_SESSION["users"] = array(
        ['id' => 0, 'nom' => 'Dupont', 'email' => 'dupont@example.com'],
        ['id' => 1, 'nom' => 'Durand', 'email' => 'durand@example.com'],
        ['id' => 2, 'nom' => 'Martin', 'email' => 'martin@example.com']
    );
}


class Config
{
    protected const BASE_URL = "http://localhost/LOKI/PHPOO/10-MVC";

    public static function getBaseUrl()
    {
        return self::BASE_URL;
    }
};
