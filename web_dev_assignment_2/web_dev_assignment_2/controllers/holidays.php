<?php

    class Holidays extends Controller {

        function __construct() {

            parent::__construct();
        }

        public function index() {

            require 'models/holidays_model.php';
            $this->view->render('holidays/index');
            $model = new Holidays_Model();
            $model->run('hawaii');
        }
    }
?>