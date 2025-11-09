<?php
    namespace Controllers;
    use Models\User as User;

    use Entity\eUser as eUser;

    Class UserController{
        private $userModel;

        public function __construct()
        {
            $this->userModel = new User();
        }

        public function index()
        {
            return $this->userModel->toList();  
        }

        public function Registry($Id)
        {
            if(isset($_POST) && isset($_POST['Registrar'])){
                $user = new eUser();

                foreach($_POST as $key => $value) {
                    $user->$key = $value;
                    //echo "$key : $value <br>";
                }

                //echo json_encode($user);
                $this->userModel->save($user);
                return $user;
            }
            return $this->userModel->getForId($Id);
        }
    }
?>