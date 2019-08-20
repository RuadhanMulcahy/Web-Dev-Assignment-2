<?php
    class Results extends Controller {

        function __construct() {

            parent::__construct();
        }

        function index() {
            
            $this->view->render('results/index');
            $this->data_prepare();
        }

        function data_prepare() {
            
            $query = array();

            $destination = $_POST['destination'];
            $price_range = $_POST['price_range'];
            $accomodation_type = $_POST['accomodation_type'];

            $query = $this->check($query, $destination, $price_range, $accomodation_type);

            $this->pagination($query);
        }

        public function pagination($query) {

            require 'models/Results_Model.php';
            $model = new Results_Model();

            $results_per_page = 2;

            $total = $model->total($query);

            $number_of_pages = ceil($total/$results_per_page);

            if (!isset($_GET['page'])) {

                $page = 1;
            } else {

                $page = $_GET['page'];
            }
            
            $this_page_first_result = ($page-1)*$results_per_page;

            $results = $model->get_content($query, $this_page_first_result, $results_per_page);

            foreach($results as $row) {
                echo('
                    <div class="row justify-content-center">
                        <div class="card" style="width: 70rem;">
                            <div class="row"> 
                                <div class="col-9">
                                    <img class="card-img-top" src="' . $row["IMAGES"] . '.jpg" alt="Card image cap">
                                    <div class="card-body">
                                        <h4 class="card-title">Beautiful beach holiday in stunning Colombia.</h4>
                                        <p class="card-text">' . $row["DESCRIPTION"] . '</p>
                                    </div>
                                </div>
                                <div class="col text-center">
                                        <div class="card-body">
                                            <li class="list-group-item">' . $row['PRICE']. '</li>
                                            <li class="list-group-item">' . $row['ACCOMODATION_TYPE'] . '</li>
                                            <li class="list-group-item">' . $row['DESTINATION'] . '</li><br>
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

                    echo ('<a href="results?page=' . $page . '">' . $page .  '</a> ');
                }
            echo('</div>');
        }

        function check($query, $destination, $price_range, $accomodation_type) {

            $column = "";
            $name = "";

            if(!$destination == "") {

                $column = 'destination';
                $name = $destination;
                array_push($query, $column, $name);

                $column = "";
                $name = "";
                
            } 
            
            if(!$price_range == "") {
                
                $column = 'price';
                $name = $price_range;
                array_push($query, $column, $name);

                $column = "";
                $name = "";
            }

            if(!$accomodation_type == "") {
                
                $column = 'accomodation_type';  
                $name = $accomodation_type;
                array_push($query, $column, $name);

                $column = "";
                $name = "";

            } 

            if($destination == "" && $price_range == "" && $accomodation_type == "") {

                header("Location: holidays");
            } else {

                return $query;
            }
        }
    }
?>