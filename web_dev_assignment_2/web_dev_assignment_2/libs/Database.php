<?php

    class Database extends PDO{

        public function __construct() {
            
            parent::__construct('mysql:host=localhost;dbname=users', 'root', '');
        }
    }
?>