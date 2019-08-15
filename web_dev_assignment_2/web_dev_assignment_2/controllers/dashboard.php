<?php

    class Dashboard extends Controller {

        function __construct() {

            parent::__construct();
            Session::init();
            $status = Session::get('loggedIn');

            if($status == false) {

                Session::destroy();
                header('location: ../web_dev_assignment_2/login');
                exit;
            }
        }

        public function index() {

            $this->view->render('dashboard/index');
        }
    }
?>