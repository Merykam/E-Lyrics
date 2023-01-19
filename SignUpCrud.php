<?php



class Connection{

    // Create connection
    public function conn(){
          try {
              $conn = new PDO("mysql:host=localhost;dbname=e-lyrics",'root',"");
              return $conn;
           
    
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            }
    }
    
    
    }
    $checkConn = new connection();
    $checkConn -> conn();




    class Register extends Connection{

        private $name;
        private $Email;
        private $password;
        private $Rpassword;

        public function __construct($name,$Email,$password,$Rpassword)
        {

            $this -> name = $name;
            $this -> Email = $Email;
            $this -> password = $password;
            $this -> Rpassword  = $Rpassword;

            
        }

        private function EmptyInputs(){
            $Res;
            if(empty($this -> name) || empty($this -> Rpassword)  ){

                $Res = false;
            }else{
                $Res = true;
            }
            return $Res;




        }
        private function InvalidUsername(){

            $Res;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }

        private function InvalidEmail(){

            $Res;
            if(!filter_var($this->Email, FILTER_VALIDATE_EMAIL)){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }

        private function CheckPassword(){

            $Res;
            if( $this -> password !== $this -> Rpassword){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }



       

    }






?>



