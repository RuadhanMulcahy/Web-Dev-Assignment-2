<?php

    class Holidays extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            $this->view->render('holidays/index');
            $this->pagination();
        }

        public function pagination() {

            require 'models/holidays_model.php';
            $model = new Holidays_Model();

            $results_per_page = 2;

            $total = $model->total();

            $number_of_pages = ceil($total/$results_per_page);

            if (!isset($_GET['page'])) {

                $page = 1;
            } else {

                $page = $_GET['page'];
            }
            
            $this_page_first_result = ($page-1)*$results_per_page;


            $results = $model->get_content($this_page_first_result, $results_per_page);

            foreach($results as $row) {
                
                echo('<div class="container">');
                echo('<div class="row">');
                echo($row['DESTINATION'] . '<br>');
                echo($row['PRICE']. '<br>');
                echo($row['ACCOMODATION_TYPE'] . '<br>');
                echo('<img src="' . $row['IMAGES'] . '.jpg'. '" alt="image" width="500" height="333"> <br>');
                echo($row['DESCRIPTION'] . '<br><br>');
            }

            for($page=1; $page<=$number_of_pages; $page++) {

                echo ('<a href="holidays?page=' . $page . '">' . $page .  '</a> ');
            }
        }
    }
?>