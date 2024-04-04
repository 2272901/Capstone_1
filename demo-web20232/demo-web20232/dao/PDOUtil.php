<?php

class PDOUtil
{
    public  static  function  createDBConnection()
    {
        $conn = new PDO("my:sql:host=localhost;dbname=pwl202332","root",
        "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conn->setAttribute(PDO::ATTR_AUTOCOMMIT, false);
        return $conn;
    }

}