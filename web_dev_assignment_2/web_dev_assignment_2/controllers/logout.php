<?php

    class Logout extends Controller {

        function __construct() {

            parent::__construct();
        }

        function index() {

            $this->logout();
            $this->view->render('login/index');
        }

        function logout() {
            
            Session::destroy();
        }
    }
?>