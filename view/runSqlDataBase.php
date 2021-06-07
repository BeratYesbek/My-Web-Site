<?php

function runDatabase(): object
{
    try {

        $db = new PDO("mysql:host=localhost;dbname=mydb; charset=utf8", "root", "");
        $db->query("SET CHARACTER SET utf8");

    } catch (PDOException $exception) {
        return $exception . getMessage();
        echo $exception . getMessage();
    }

    return $db;

}

