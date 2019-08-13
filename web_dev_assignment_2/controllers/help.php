<?php

    class Help extends Controller {

        function __construct() {
            parent::__construct();
            #echo 'We are inside help!<br>';
        }

        public function index() {

            $this->view->render('help/index');
        }

        public function other($arg = false) {

            #echo 'We are inside other!<br>';
            #echo 'Optional:' . $arg . '<br>';
        }
    }
?>