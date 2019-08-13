<?php

    class Login_Model extends Model {
        
        function __construct() {

            parent::__construct();
        }

        public function run() {

            $login = $_POST['login'];
            $password = $_POST['password'];

            #echo($login.'<br>');
            #echo($password.'<br>');

            $state = $this->db->prepare("SELECT ID FROM accounts WHERE EMAIl = :email  AND PWD = md5(:pwd)");

            $state->execute(array(':email' => $login, ':pwd' => $password));

            $count = $state->rowCount();

            if($count == 1) {
                Session::init();
                Session::set('loggedIn', true);
                header('location: ../dashboard');
            } else {
                
                header('location: ../login');
            }
        }
    }
?>