<?php

namespace App\Database;

use PDO;
use PDOException;

/**
 * Class Connection
 * @package App\Database
 */
class Connection
{
    static string $host = "localhost";
    static string $username = "root";
    static string $password = "";
    static string $dbname = "web_php_mvc";

    /**
     * @return PDO
     */
    public static function getDb(): PDO
    {
        try {
            return new PDO(
                "mysql:host=" . self::$host . ";dbname=" . self::$dbname . ";charset=utf8",
                self::$username,
                self::$password
            );
        } catch (PDOException $e) {
            echo "<h2>" . $e->getMessage() . " - " . $e->getCode() . "</h2>";
            die;
        }
    }
}