<?php

    class Information extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            $this->view->render('information/index');
        }
    }
?>