<?php

require ("../Entities/CoffeeEntity.php");
class CoffeeModel
{
    function GetCoffeeTypes()
    {
        require 'Credentials.php';

        //Open connection and Select database.
        mysql_connect($host,$user,$passwd) or die(mysql_error());
        mysql_select_db($database);
        $result = mysql_query("SELECT DISTINCT type FROM coffee") or die(mysql_error());
        $types = array();

        //Get data from database.
        while($row = my($result))
        {
            array_push($types, $row[0]);
        }
    }
}

?>