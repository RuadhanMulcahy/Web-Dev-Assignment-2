<?php

    class Holidays extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            $this->view->render('holidays/index');
        }

        public function run() {
            
            $this->pagination();
            $var = $_POST['destination'];
            echo($var);
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

            /*foreach($results as $row) {
                
                echo('<div class="container">');
                echo('<div class="row">');
                echo($row['DESTINATION'] . '<br>');
                echo($row['PRICE']. '<br>');
                echo($row['ACCOMODATION_TYPE'] . '<br>');
                echo('<img src="' . $row['IMAGES'] . '.jpg'. '" alt="image" width="500" height="333"> <br>');
                echo($row['DESCRIPTION'] . '<br><br>');
            }*/

            foreach($results as $row) {
                echo('
                    <div class="row justify-content-center">
                        <div class="card" style="width: 70rem;">
                            <div class="row"> 
                                <div class="col-9">
                                    <img class="card-img-top" src="' . $row["IMAGES"] . '.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Beautiful beach holiday in stunning Colombia.</h4>
                                        <p class="card-text">Some quick example text to build on the card title and make up the bulk of the cards content.</p>
                                    </div>
                                </div>
                                <div class="col text-center">
                                        <div class="card-body">
                                            <li class="list-group-item">Price</li>
                                            <li class="list-group-item">Accomodation Type</li><br>
                                            <button class="btn btn-primary" type="submit">Book Now</button>
                                        </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                ');
            };


            echo('<div class="center">');
                for($page=1; $page<=$number_of_pages; $page++) {

                    echo ('<a href="holidays?page=' . $page . '">' . $page .  '</a> ');
                }
            echo('</div>');
        }
    }
?>