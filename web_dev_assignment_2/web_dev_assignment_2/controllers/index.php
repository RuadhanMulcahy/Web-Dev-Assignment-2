<?php  

    class Index extends Controller {

        function __construct() {
            
            parent::__construct();
            #echo 'We are inside index!<br />';
        }

        public function index() {

            $this->view->render('index/index');
            require 'models/index/index_model.php';
            $model = new Index_Model();
        }
    }
?>