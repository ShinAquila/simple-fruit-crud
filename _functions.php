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

function createFruit($fruitName, $fruitQty){
    $statement = dbConnection()->prepare("INSERT INTO 
                                            fruits
                                            (
                                                fruit_name,
                                                fruit_qty,
                                                fruit_created,
                                                fruit_updated
                                            )
                                            VALUES
                                            (
                                                :fruit_name,
                                                :fruit_qty,
                                                NOW(),
                                                NOW()
                                            )");

    //instead putting values directly to a query we use PDO variable
    $statement->execute([
        'fruit_name' => $fruitName,
        'fruit_qty' => $fruitQty
    ]);

    //confirm if the query is executed properly
    if ($statement) {
        return true;
    } else {
        return false;
    }
}

function updateFruit($fruitName, $fruitQty, $fruitId){
    // echo $fruitId;
    $statement = dbConnection()->prepare("UPDATE fruits
                                            SET 
                                                fruit_name = :fruit_name,
                                                fruit_qty = :fruit_qty,
                                                fruit_updated = NOW()
                                            WHERE 
                                                fruit_id = :fruit_id");

    //instead putting values directly to a query we use PDO variable
    $statement->execute([
        'fruit_name' => $fruitName,
        'fruit_qty' => $fruitQty,
        'fruit_id' => $fruitId
    ]);

    //confirm if the query is executed properly
    if ($statement) {
        return true;
    } else {
        return false;
    }
}

function deleteFruit($fruitId){
    $statement = dbConnection()->prepare("DELETE 
                                            FROM 
                                                fruits
                                            WHERE 
                                                fruit_id = :fruit_id");

    //instead putting values directly to a query we use PDO variable
    $statement->execute([
        'fruit_id' => $fruitId
    ]);

    //confirm if the query is executed properly
    if ($statement) {
        return true;
    } else {
        return false;
    }
}