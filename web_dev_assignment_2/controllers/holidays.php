<?php

    class Holidays extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            $this->view->render('holidays/index');
        }
    }
?>