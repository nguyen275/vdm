<?php

require 'vendor/autoload.php';
 
use PostgreSQLTutorial\Connection as Connection;
use PostgreSQLTutorial\PostgreSQLCreateTable as PostgreSQLCreateTable;
 
try {
    $pdo = Connection::get()->connect();
    $tableCreator = new PostgreSQLCreateTable($pdo);
    
    $tables = $tableCreator->createTables()
        ->getTables();
    foreach ($tables as $table){
        echo $table . '<br>';
    }
} catch (\PDOException $e) {
    echo $e->getMessage();
}
