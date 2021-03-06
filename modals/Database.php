<?php


class Database
{
    static function getConnection()
    {
        $servername = "localhost";
        $username = "root";
        $password = "root";
        try
        {
            $conn = new PDO("mysql:host=$servername;dbname=trashProject", $username, $password);

            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $conn->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);

        } catch(PDOException $e) {
            echo "Connection failed: " . var_dump($e->getMessage());
        }

        return $conn;
    }
}
