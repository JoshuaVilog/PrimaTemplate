<?php
session_start();
class DB {
    private static $conn;

    public static function connection1() {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "1_ms";

        if (!self::$conn) {
            self::$conn = new mysqli($hostname, $username, $password, $database);

            if (self::$conn->connect_error) {
                die("Connection failed: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }
    public static function connection2() {
        $hostname = "localhost";
        $username = "root";
        $password = "";
        $database = "OTHER_DATABASE";

        if (!self::$conn) {
            self::$conn = new mysqli($hostname, $username, $password, $database);

            if (self::$conn->connect_error) {
                die("Connection failed: " . self::$conn->connect_error);
            }
        }
        return self::$conn;
    }

}


?>