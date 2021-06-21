<?php
define("USER","root");
define("PASSWORD","");
define("SERVER","mysql:host=localhost;dbname=subscription");

class Connector{

    private static $conn = null;

    private static function Conection(){

        try {
            //code...
            self::$conn =  new PDO(SERVER, USER, PASSWORD);
        } catch (\Throwable $th) {
            //throw $th;
            echo "<center><h1>A CONEXÃO FALHOU!</h1></center>";
        }
        
    }

    public static function ReturnConnection(){
        return (self::$conn == null) ? self::Conection() : self::$conn;
    }
        
       
}