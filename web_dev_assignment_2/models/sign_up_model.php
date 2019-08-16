<?php

    class Sign_Up_Model extends Model {
        
        function __construct() {

            parent::__construct();
        }

        public function run() {

            $login = $_POST['login'];
            $password = $_POST['password'];
            $password_confirm = $_POST['password_confirm'];

            #echo($login.'<br>');
            #echo($password.'<br>');

            $state = $this->db->prepare("SELECT ID FROM accounts WHERE EMAIl = :email");
            $state->execute(array(':email' => $login));

            $count = $state->rowCount();

            if($count == 0) {

                if(strlen($password) > 8 && strlen($password) < 32) {

                    if($password_confirm == $password) {
                        
                        $state2 = $this->db->prepare("INSERT INTO accounts (email, pwd) VALUES (:email, md5(:pwd))");
                        $state2->execute(array(':email' => $login, ':pwd' => $password));
                        header("Location: ../login");
                    } else {
                        
                        #passwords do not match
                        Session::init();
                        Session::set('check', 'pass_same');
                        header("Location: ../sign_up");
                    }
                } else {
                    
                    #password too short
                    Session::init();
                    Session::set('check', 'pass_requirement');
                    header("Location: ../sign_up");
                }
            } else {
                 
                #This email is already in use.
                echo("working");
                Session::init();
                Session::set('check', 'email');
                header("Location: ../sign_up");
            }
        }
    }
?>