<?php
    
    class Results_Model extends model {

        function __construct() {

            parent::__construct();
        }

        function total($query) {
            
            $category = "DESTINATION";

            $state = $this->db->prepare("SELECT count(*) FROM Holidays");
            $state->execute();

            if(count($query) == 2) {

                $state = $this->db->prepare("SELECT count(*) FROM Holidays WHERE $query[0] = :" . $query[0]);
                $state->execute(array(':' . $query[0] => $query[1]));
            
            } else if(count($query) == 4) {

                $state = $this->db->prepare("SELECT count(*) FROM Holidays WHERE $query[0] = :" . $query[0] . ' AND ' . "$query[2] = :" . $query[2]);
                $state->execute(array(':' . $query[0] => $query[1], ':' . $query[2] => $query[3]));

            } else if(count($query) == 6) {

                $state = $this->db->prepare("SELECT count(*) FROM Holidays WHERE $query[0] = :" . $query[0] . ' AND ' . "$query[2] = :" . $query[2] . ' AND ' . "$query[4] = :" . $query[4]);
                $state->execute(array(':' . $query[0] => $query[1], ':' . $query[2] => $query[3], ':' . $query[4] => $query[5]));
            }

            $count = $state->fetchColumn();

            return $count;
        }

        function get_content($query, $first_result, $results_per_page) {

            $category = "DESTINATION";

            if(count($query) == 2) {

                $state = $this->db->prepare("SELECT * FROM Holidays WHERE $query[0] = :" . $query[0] . ' LIMIT ' . $first_result . ',' . $results_per_page);
                $state->execute(array(':' . $query[0] => $query[1]));
            
            } else if(count($query) == 4) {

                $state = $this->db->prepare("SELECT * FROM Holidays WHERE $query[0] = :" . $query[0] . ' AND ' . "$query[2] = :" . $query[2] . ' LIMIT ' . $first_result . ',' . $results_per_page);
                $state->execute(array(':' . $query[0] => $query[1], ':' . $query[2] => $query[3]));

            } else if(count($query) == 6) {

                $state = $this->db->prepare("SELECT * FROM Holidays WHERE $query[0] = :" . $query[0] . ' AND ' . "$query[2] = :" . $query[2] . ' AND ' . "$query[4] = :" . $query[4] . ' LIMIT ' . $first_result . ',' . $results_per_page);
                $state->execute(array(':' . $query[0] => $query[1], ':' . $query[2] => $query[3], ':' . $query[4] => $query[5]));
            }

            $results = $state->fetchAll(PDO::FETCH_ASSOC);

            return $results;
        }
    }
?>