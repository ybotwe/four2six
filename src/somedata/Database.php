<?php

namespace App\SomeData;

class Database {
    public function __construct()
    {
        echo "this is a database" . "\n";
    }

    public function addTable($table)
    {
        echo $table . " has been added to the database" . "\n";
    }

}



?>