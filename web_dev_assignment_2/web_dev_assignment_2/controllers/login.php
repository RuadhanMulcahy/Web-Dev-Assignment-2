<?php

    class Login extends Controller {

        function __construct() {

            parent::__construct();
        }

        function index() {

            $this->view->render('login/index');
        }

        function run() {
            
            require 'models/login_model.php';
            $model = new Login_Model();
            $model->run();
        }
    }
?>