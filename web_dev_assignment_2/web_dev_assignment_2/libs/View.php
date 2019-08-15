<?php
    Class View {

        function __construct() {

            #echo 'this is the view.';
        }

        public function render($name) {
            require 'views/header/header.php';
            require 'views/' . $name . '.php';
            #require 'views/footer/footer.php';
        }
    }
?>