<?php
class conexion
{
    private static $connection;
    private static $statement;
    public static $id;
    public static $error;

    private static function connect()
    {
        $server = "localhost";
        $database = "bancodss";
        $username = "root";
        $password = "";
        $options = array(PDO::MYSQL_ATTR_INIT_COMMAND => "set names utf8");     
        try
        {
            @self::$connection = new PDO("mysql:host=".$server."; dbname=".$database, $username, $password, $options);
        }
        catch(PDOException $exception)
        {
            throw new Exception($exception->getCode());
        }
    }

    private static function desconnect()
    {
        self::$error = self::$statement->errorInfo();
        self::$connection = null;
    }

    public static function executeUpdate($query, $values)
    {
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute($values);
        self::desconnect();
        return $state;
    }
    public static function executeQuery($query){
        self::connect();
        self::$statement = self::$connection->prepare($query);
        $state = self::$statement->execute();
        self::desconnect();
        return $state->fetch();
    }
}
?>