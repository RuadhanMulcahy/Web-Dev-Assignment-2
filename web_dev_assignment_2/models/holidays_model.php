<?php
    
    class Holidays_Model extends model {

        function __construct() {

            parent::__construct();
        }

        function total() {
            
            $category = "DESTINATION";

            $state = $this->db->prepare("SELECT count(*) FROM Holidays");
            $state->execute();

            $count = $state->fetchColumn();

            return $count;
        }

        function get_content($first_result, $results_per_page) {

            $category = "DESTINATION";

            $state = $this->db->prepare("SELECT * FROM Holidays LIMIT " . $first_result . ',' . $results_per_page);
            $state->execute();

            $results = $state->fetchAll(PDO::FETCH_ASSOC);

            #print_r($results);

            return $results;
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
        }
    }
?>