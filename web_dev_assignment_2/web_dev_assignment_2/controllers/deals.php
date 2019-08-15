<?php

    class Deals extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            $this->view->render('deals/index');
        }
    }
?>