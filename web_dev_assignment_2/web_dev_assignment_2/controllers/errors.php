<?php

    class errors extends Controller {

        function __construct() {
            
            parent::__construct();
            #echo 'There was an error!';   
        }

        public function index() {

            $this->view->render('error/index');
        }
    }
?>