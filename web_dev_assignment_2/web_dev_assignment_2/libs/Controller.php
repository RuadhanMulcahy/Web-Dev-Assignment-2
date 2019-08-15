<?php

    Class Controller {

        function __construct() {
            
            Session::init();
            #echo "Main controlller.<br/>";
            $this->view = new View();
        }
    }
?>