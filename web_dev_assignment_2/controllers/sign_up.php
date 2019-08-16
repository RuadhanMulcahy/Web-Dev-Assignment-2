<?php
    class Sign_Up extends Controller {

        function __construct() {

            parent::__construct();
        }

        function index() {

            $this->view->render('sign_up/index');
        }

        function run() {
            
            require 'models/sign_up_model.php';
            $model = new Sign_Up_Model();
            $obj = $model->run();
            return $obj;
        }
    }
?>