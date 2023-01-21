<?php




include "SignUpCrud.php";



if(isset($_POST["login"])){
    // echo "gellooooo";

    $Email = $_POST["Email"];
    $password = $_POST["password"];
    


    $NewAdmin = new LogIn($Email,$password);
    $NewAdmin->Login();
   
    $NewAdmin->getAdmin();
    
    header("location:dashbord.php");
    exit(); 


    
}






?>