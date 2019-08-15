<?php
    
    class Holidays_Model extends model {

        function __construct() {

            parent::__construct();
        }

        function run($param) {
            
            $category = "DESTINATION";

            $state = $this->db->prepare("SELECT * FROM Holidays WHERE $category = :destination");

            $state->execute(array(':destination' => $param));

            $result = $state->fetch();

            echo('<div class="container">');
            echo('<div class="row">');

            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

            echo('<div class="container">');
            echo('<div class="row">');
            
            for($i = 0; $i < count($result); $i++) {
                
                    echo(@$result[$i]);
                    echo('<br>');
            }

        }
    }
?>