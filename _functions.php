<?php

function dbConnection()
{

    //get Philippines Time Zone
    date_default_timezone_set('Asia/Manila');

    //Create Connection
    $db_connection = new PDO('mysql:dbname=iamcrud;host=localhost;charset=utf8mb4', 'root', '');

    $db_connection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    $db_connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    return $db_connection;
}

//get fruits
function selectFruits()
{
    $statement = dbConnection()->prepare("SELECT * FROM fruits ORDER BY fruit_id ASC");

    $statement->execute();
    return $statement;
}
