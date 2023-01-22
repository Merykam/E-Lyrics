<?php
session_start();



class Connection{

    // Create connection
    public function conn(){
          try {
              $conn = new PDO("mysql:host=localhost;dbname=e-lyrics",'root',"");
              return $conn;
           
    
            } catch(PDOException $e) {
              echo "Connection failed: " . $e->getMessage();
            };
    }
    
    
    }
    $checkConn = new connection();
    $checkConn -> conn();




    class Register extends Connection{

        private $name;
        private $Email;
        private $password;
        private $Rpassword;

        public function signupAdmin(){
            if($this->EmptyInputs()==false){
                header("location:Sign-up.php?error=empyinput");
                exit();
            }
            if($this->InvalidUsername()==false){
                header("location:Sign-up.php?error=UserName");
                exit();
            }
            if($this->InvalidEmail()==false){
                header("location:Sign-up.php?error=Not a correct email");
                exit();
            }
            if($this->CheckPassword()==false){
                header("location:Sign-up.php?error=passwordmatch");
                exit();
            }
            if($this->checkUser($this->name,$this->Email)==false){
                header("location:Sign-up.php?error=Admin alrady exist");
                exit();
            }
        }



        public function __construct($name,$Email,$password,$Rpassword)
        {

            $this -> name = $name;
            $this -> Email = $Email;
            $this -> password = $password;
            $this -> Rpassword  = $Rpassword;

            
        }

        public function EmptyInputs(){
            $Res=1;
            if(empty($this -> name) || empty($this -> Rpassword)  ){

                $Res = false;
            }else{
                $Res = true;
            }
            return $Res;




        }
        public function InvalidUsername(){

            $Res=1;
            if(!preg_match("/^[a-zA-Z0-9]*$/",$this->name)){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }

        public function InvalidEmail(){

            $Res=1;
            if(!filter_var($this->Email, FILTER_VALIDATE_EMAIL)){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }

        public function CheckPassword(){

            $Res=1;
            if( $this -> password !== $this -> Rpassword){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;
        }

        public function checkUser($Name,$Email){
            $req = $this->conn()->prepare("SELECT `name`, `Email` FROM `admines` WHERE name=? or Email=?; ");
          
            if(!$req->execute(array($Name,$Email))){
                $req = null;
                header( "location :Sign-up.php");
                exit();
            }
            $Res=1;
            if($req->rowCount()>0){
                $Res=false;
            }else{
                $Res=true;
            }
            return $Res;

        }
        
        public function inserData(){
            $req = $this->conn()->prepare("INSERT INTO `admines` (`name`, `Email`, `password`) values (?,?,?);");
            $HashPassword = password_hash($this -> password , PASSWORD_DEFAULT);
            $req->execute([$this -> name ,$this -> Email ,$HashPassword]);
              

            

        }


       


        }




        class LogIn extends Connection{
            private $password;
            private $Email;
         
            public function Login(){
                if($this->EmptyInputs()==false){
                    
                    header("location:index.php?error=empyinput");
                    exit();
                }
            }

            public function __construct($Email,$password)
            {
    
             
                $this -> Email = $Email;
                $this -> password = $password;
              
    
                
            }
            public function EmptyInputs(){
                $Res=1;
                if(empty($this -> Email) || empty($this -> password)  ){
    
                    $Res = false;
                }else{
                    $Res = true;
                }
                return $Res;
    
    
    
    
            }
            public function getAdmin(){
                $req = $this->conn()->prepare("SELECT * FROM `admines` WHERE  Email=?;");
                $req->execute([$this -> Email]);
          
              
                if($req->rowCount() == 0){
                    $req =0;
                    header( "location: index.php?error=NoEmailFound");
                    exit();
                }
                $passhashed = $req->fetchAll();
            //  
            //  
                $checkedpass =password_verify($this->password,$passhashed[0]["password"]);



    //                   
    //    $_SESSION['adminName']=$Admin[0]['name'];






                // var_dump($checkedpass);
                // die();

               if($checkedpass == false){

            // $req=null;
                header("location: index.php?error=WrongPassword");
                exit();

               }
            elseif($checkedpass==true){
               
                $_SESSION["name"] = $passhashed[0]['name'];
               
                header("location: dashbord.php");
                exit();



       

            //    $Admin = $req->fetchAll();
            //    $_SESSION['adminName']=$Admin[0]['name'];

               
            }

        }
    }


    



       

    






?>



