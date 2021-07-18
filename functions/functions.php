<?php

/**
 * Array Print
 */
function arr($arr)
{
    echo '<pre>';
    print_r($arr);
    echo '</pre>';
}

/**
 * Server-Connection Test
 */
function connectionServer(): bool
{
    $dbConf = require "app/Configs/configDb.php";
    if(!mysqli_connect($dbConf['dbHost'], $dbConf['dbUser'], $dbConf['dbUserPass'])) {
        $resultConn = false;
    } else {
        $resultConn = true;
    }
    return $resultConn;
}

/**
 * Db-Connection
 */
function connectionDb(): bool
{
    if(connectionServer() == false) {
        echo 'Ошибка подключения к серверу.';
    } else {
        $dbConf = require "app/Configs/configDb.php";
        if(!mysqli_connect($dbConf['dbHost'], $dbConf['dbUser'], $dbConf['dbUserPass'], $dbConf['dbName'])) {
            $resultDbConn = false;
        } else {
            $resultDbConn = true;
        }
        return $resultDbConn;
    }
}